<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanHKI;
use App\Models\Berkas;
use App\Models\RekapPengajuan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PengajuanHKIController extends Controller
{

    public function create()
    {
        // Mengambil nilai enum "Hak Cipta" dari tabel PengajuanHKI
        $jenisHki = PengajuanHKI::$enums['jenis_hki'];

        // Membuat objek kosong untuk $pengajuanHKI
        $pengajuanHKI = new PengajuanHKI();

        // Mengirimkan nilai enum dan objek $pengajuanHKI ke tampilan sebagai variabel jenisHki dan pengajuanHKI
        return view('user.form', compact('jenisHki', 'pengajuanHKI'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // aturan validasi
            'file_1.*' => 'required|file|max:2048|mimes:pdf',
            'file_2.*' => 'required|file|max:2048|mimes:pdf',
            'file_3.*' => 'required|file|max:2048|mimes:pdf',
            'file_4.*' => 'required|file|max:2048|mimes:pdf',
            'file_5.*' => 'required|file|max:2048|mimes:pdf',
            'file_6.*' => 'required|file|max:2048|mimes:pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userProfile = Auth::user()->userProfile;
        $user = Auth::user();

        // Periksa apakah catatan PengajuanHKI yang serupa sudah ada untuk pengguna tersebut
        $pengajuanHKI = PengajuanHKI::where('id_users', $user->id_users)
            ->where('jenis_hki', $request->jenis_hki)
            ->where('jenis_ciptaan', $request->jenis_ciptaan)
            ->where('subjenis_ciptaan', $request->subjenis_ciptaan)
            ->where('tgl_pengajuan', $request->tgl_pengajuan)
            ->where('judul_hki', $request->judul_hki)
            ->where('deskripsi', $request->deskripsi)
            ->first();

        if ($pengajuanHKI) {
            // Perbarui catatan yang sudah ada
            $pengajuanHKI->update([
                // Perbarui atribut-atribut jika diperlukan
            ]);
        } else {
            // Buat catatan PengajuanHKI yang baru
            $pengajuanHKI = new PengajuanHKI;
            $pengajuanHKI->iduser_profile = $userProfile->iduser_profile;
            $pengajuanHKI->id_users = $user->id_users;
            $pengajuanHKI->jenis_hki = $request->jenis_hki;
            $pengajuanHKI->jenis_ciptaan = $request->jenis_ciptaan;
            $pengajuanHKI->subjenis_ciptaan = $request->subjenis_ciptaan;
            $pengajuanHKI->tgl_pengajuan = $request->tgl_pengajuan;
            $pengajuanHKI->judul_hki = $request->judul_hki;
            $pengajuanHKI->deskripsi = $request->deskripsi;
            $pengajuanHKI->save();
        }

        $request->session()->put('pengajuanHKI', $pengajuanHKI);

        $files = [];

        if ($request->hasFile('file_1')) {
            $files = $request->file('file_1');
        } elseif ($request->hasFile('file_2')) {
            $files = $request->file('file_2');
        } elseif ($request->hasFile('file_3')) {
            $files = $request->file('file_3');
        } elseif ($request->hasFile('file_4')) {
            $files = $request->file('file_4');
        } elseif ($request->hasFile('file_5')) {
            $files = $request->file('file_5');
        } elseif ($request->hasFile('file_6')) {
            $files = $request->file('file_6');
        }

        if (!empty($files)) {
            $file = $files[0];
            $pengajuanId = $pengajuanHKI->id_pengajuanhki;
            $idBerkas = Berkas::max('id_berkas') + 1;

            $berkas = new Berkas();
            $berkas->id_pengajuanhki = $pengajuanId;
            $berkas->id_berkas = $idBerkas; // Set ID berkas

            $file1 = $request->file('file_1')[0];
            $file2 = $request->file('file_2')[0];
            $file3 = $request->file('file_3')[0];
            $file4 = $request->file('file_4')[0];
            $file5 = $request->file('file_5')[0];
            $file6 = $request->file('file_6')[0];

            $berkas->formulir_pendaftaran = $file1->getClientOriginalName();
            $berkas->surat_pernyataan = $file4->getClientOriginalName();
            $berkas->surat_pengalihan = $file2->getClientOriginalName();
            $berkas->ktp = $file3->getClientOriginalName();
            $berkas->npwp = $file5->getClientOriginalName();
            $berkas->contoh_ciptaan = $file6->getClientOriginalName();

            $berkas->save();

            $file1->storeAs('public/berkas', $file1->getClientOriginalName());
            $file2->storeAs('public/berkas', $file2->getClientOriginalName());
            $file3->storeAs('public/berkas', $file3->getClientOriginalName());
            $file4->storeAs('public/berkas', $file4->getClientOriginalName());
            $file5->storeAs('public/berkas', $file5->getClientOriginalName());
            $file6->storeAs('public/berkas', $file6->getClientOriginalName());

            // Mengubah status menjadi "Diproses"
            $rekapPengajuan = new RekapPengajuan;
            $rekapPengajuan->id_pengajuanhki = $pengajuanHKI->id_pengajuanhki;
            $rekapPengajuan->id_users = $user->id_users;
            $rekapPengajuan->id_berkas = $berkas->id_berkas;
            $rekapPengajuan->status = 'Diproses';
            $rekapPengajuan->save();

        }

        return redirect()->route('user.status')->with('success', 'Pengajuan HKI berhasil disimpan.');
    }

    public function show()
    {
        $pengajuanHKI = PengajuanHKI::where('id_users', auth()->user()->id)->get();
        return view('user.form')->with('pengajuanHKI', $pengajuanHKI);
        
    }

    public function index()
    {
        $user = Auth::user();
        $pengajuanHKI = PengajuanHKI::where('id_users', $user->id_users)->with('berkas')->get();

        return view('user.status', compact('pengajuanHKI'));
    }

    public function tinjauan($id_berkas)
    {
        // Mendapatkan data berkas berdasarkan id_berkas
        $berkas = Berkas::find($id_berkas);

        if ($berkas) {
            // Mendapatkan status pengajuan dari relasi
            $rekapPengajuan = $berkas->rekapPengajuan;

            // Lakukan operasi yang diperlukan untuk tampilan tinjauan pengajuan
            return view('user.tinjauan', compact('berkas', 'rekapPengajuan'));
        } else {
            // Jika berkas tidak ditemukan, tampilkan pesan kesalahan atau alihkan ke halaman yang sesuai
            return redirect()->back()->with('error', 'Berkas tidak ditemukan.');
        }
    }
    

    public function redirectToStatus()
    {
        return redirect()->route('user.status');
    }

    public function redirectToTinjauan($id_berkas)
    {
        return redirect()->route('user.tinjauan', ['id_berkas' => $id_berkas]);
    }


    public function edit($id_berkas, $berkasField)
    {
        $berkas = Berkas::find($id_berkas);

        if ($berkas) {
            return view('user.edit', compact('berkas', 'berkasField'));
        } else {
            return redirect()->back()->with('error', 'Berkas tidak ditemukan.');
        }
    }

 public function update(Request $request, $id_berkas, $berkasField)
{
    $berkas = Berkas::find($id_berkas);

    if ($berkas) {
        $file = $request->file($berkasField);

        if ($file) {
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/berkas', $filename);

            $berkas->$berkasField = $filename;
            $berkas->save();

            // Jika pengajuan memiliki status "Belum Lengkap"
            $rekapPengajuan = $berkas->rekapPengajuan;
            if ($rekapPengajuan && $rekapPengajuan->status === 'Belum Lengkap') {
                // Setel status pengajuan kembali menjadi "Diproses"
                $rekapPengajuan->status = 'Diproses';
                $rekapPengajuan->save();
            }

            return redirect()->route('user.tinjauan', ['id_berkas' => $berkas->id_berkas])->with('success', 'Berkas berhasil diubah.');
        } else {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }
    } else {
        return redirect()->back()->with('error', 'Berkas tidak ditemukan.');
    }
}


    public function hapus($id_pengajuanhki)
    {
        $pengajuanHKI = PengajuanHKI::where('id_pengajuanhki', '=', $id_pengajuanhki)->get();

        if ($pengajuanHKI->isEmpty()) {
            return redirect()->back()->with('error', 'Pengajuan HKI tidak ditemukan.');
        }

        foreach ($pengajuanHKI as $pengajuan) {
            // Hapus berkas terkait jika ada
            if ($pengajuan->berkas) {
                // Hapus file berkas dari penyimpanan
                Storage::delete('public/berkas/' . $pengajuan->berkas->formulir_pendaftaran);
                Storage::delete('public/berkas/' . $pengajuan->berkas->surat_pernyataan);
                Storage::delete('public/berkas/' . $pengajuan->berkas->surat_pengalihan);
                Storage::delete('public/berkas/' . $pengajuan->berkas->ktp);
                Storage::delete('public/berkas/' . $pengajuan->berkas->npwp);
                Storage::delete('public/berkas/' . $pengajuan->berkas->contoh_ciptaan);

                // Hapus record berkas dari database
                $pengajuan->berkas->delete();
            }

            // Hapus pengajuan HKI
            $pengajuan->delete();
        }

        return redirect()->back()->with('success', 'Pengajuan HKI berhasil dihapus.');
    }

}
