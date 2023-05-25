<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanHKI;
use App\Models\Berkas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


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
            ->where('tgl_pengajuan', $request->tgl_pengajuan)
            ->where('judul_hki', $request->judul_hki)
            ->where('deskripsi', $request->deskripsi)
            ->where('jenis_hki', $request->jenis_hki)
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
            $pengajuanHKI->tgl_pengajuan = $request->tgl_pengajuan;
            $pengajuanHKI->judul_hki = $request->judul_hki;
            $pengajuanHKI->deskripsi = $request->deskripsi;
            $pengajuanHKI->jenis_hki = $request->jenis_hki;
            $pengajuanHKI->save();
        }

        $request->session()->put('pengajuanHKI', $pengajuanHKI);

        $files1 = $request->file('file_1');
        $files2 = $request->file('file_2');
        $files3 = $request->file('file_3');
        $files4 = $request->file('file_4');
        $files5 = $request->file('file_5');
        $files6 = $request->file('file_6');

        $allFiles = [];

        if (!is_null($files1)) {
            foreach ($files1 as $file) {
                $allFiles[] = $file;
            }
        }
        if (!is_null($files2)) {
            foreach ($files2 as $file) {
                $allFiles[] = $file;
            }
        }
        if (!is_null($files3)) {
            foreach ($files3 as $file) {
                $allFiles[] = $file;
            }
        }
        if (!is_null($files4)) {
            foreach ($files4 as $file) {
                $allFiles[] = $file;
            }
        }
        if (!is_null($files5)) {
            foreach ($files5 as $file) {
                $allFiles[] = $file;
            }
        }
        if (!is_null($files6)) {
            foreach ($files6 as $file) {
                $allFiles[] = $file;
            }
        }

        $pengajuanId = $pengajuanHKI->id_pengajuanhki;
        $idBerkas = Berkas::max('id_berkas') + 1;

        foreach ($allFiles as $key => $file) {
            $berkas = new Berkas();
            $berkas->id_pengajuanhki = $pengajuanId;
            $berkas->nama_berkas = $file->getClientOriginalName();
            $berkas->file_path = $file->store('berkas');
            $berkas->id_berkas = $idBerkas; // Set ID berkas
            $berkas->save();

            $idBerkas++; // Tambahkan ID berkas untuk berkas berikutnya
        }

        return redirect()->route('user.status')->with('success', 'Pengajuan HKI berhasil disimpan.');
    }

    public function show()
    {
        $pengajuanHKI = Auth::user()->pengajuanHKI;
        return view('user.form')->with('pengajuanHKI', $pengajuanHKI);
    }

    public function index()
    {
        $pengajuanHKI = PengajuanHKI::where('id_users', auth()->user()->id)->get();
        return view('user.status', compact('pengajuanHKI'));
    }

}
