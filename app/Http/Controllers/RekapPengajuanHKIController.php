<?php

namespace App\Http\Controllers;

use App\Models\PengajuanHKI;
use App\Models\Berkas;
use App\Models\RekapPengajuan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Nelexa\Zip\ZipFile;
use Symfony\Component\HttpFoundation\File\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;


class RekapPengajuanHKIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pengajuanHKI = PengajuanHKI::all();

        return view('admin.applicant', ['pengajuanHKI' => $pengajuanHKI]);
    }


    public function tinjauan($id_berkas)
    {
        // Mendapatkan data berkas berdasarkan id_berkas
        $berkas = Berkas::find($id_berkas);

        if ($berkas) {
            // Mendapatkan data rekap pengajuan berdasarkan id_berkas
            $rekapPengajuan = RekapPengajuan::where('id_berkas', $id_berkas)->first();

            if ($rekapPengajuan) {
                // Mendapatkan data pengajuan HKI berdasarkan id_pengajuanhki pada rekap pengajuan
                $pengajuanHKI = $rekapPengajuan->pengajuanHki;
                // Mendapatkan data pengaju berdasarkan id_users pada pengajuan HKI
                $pengaju = $pengajuanHKI->user;

                return view('admin.formPengaju', compact('berkas', 'pengaju', 'pengajuanHKI'));
            } else {
                // Jika rekap pengajuan tidak ditemukan, tampilkan pesan kesalahan atau alihkan ke halaman yang sesuai
                return redirect()->back()->with('error', 'Rekap pengajuan tidak ditemukan.');
            }
        } else {
            // Jika berkas tidak ditemukan, tampilkan pesan kesalahan atau alihkan ke halaman yang sesuai
            return redirect()->back()->with('error', 'Berkas tidak ditemukan.');
        }
    }

    public function reject(Request $request, $id_pengajuanhki)
    {
        $rekapPengajuan = RekapPengajuan::where('id_pengajuanhki', $id_pengajuanhki)->first();

        if ($rekapPengajuan) {
            $rekapPengajuan->status = 'Belum Lengkap';
            $rekapPengajuan->keterangan = $request->input('keterangan');
            $rekapPengajuan->save();

            return redirect()->back()->with('success', 'Pengajuan ditolak.');
        } else {
            return redirect()->back()->with('error', 'Pengajuan tidak ditemukan.');
        }
    }

    public function accept(Request $request, $id_pengajuanhki)
    {
        $rekapPengajuan = RekapPengajuan::where('id_pengajuanhki', $id_pengajuanhki)->first();

        if ($rekapPengajuan) {
            $rekapPengajuan->status = 'Lengkap';
            $rekapPengajuan->keterangan = $request->input('keterangan');
            $rekapPengajuan->save();

            return redirect()->back()->with('success', 'Pengajuan diterima.');
        } else {
            return redirect()->back()->with('error', 'Pengajuan tidak ditemukan.');
        }
    }

    public function createZipFile($filePaths, $zipName)
    {
        $zip = new ZipArchive();
        $zipPath = public_path('berkas/'.$zipName); // Path lengkap file ZIP

        if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            foreach ($filePaths as $filePath) {
                if (file_exists($filePath)) {
                    $zip->addFile($filePath, basename($filePath));
                } else {
                    // Jika file tidak ditemukan, lanjutkan ke file berikutnya
                    continue;
                }
            }

            $zip->close();

            return $zipPath; // Mengembalikan path lengkap file ZIP yang telah dibuat
        } else {
            // Gagal membuka file ZIP
            return false;
        }
    }

    public function downloadAllBerkas()
    {
        $berkas = Berkas::select('formulir_pendaftaran', 'surat_pernyataan', 'surat_pengalihan', 'ktp', 'npwp', 'contoh_ciptaan')->first();
        
        $filePaths = [
            storage_path('app/public/berkas/' . $berkas->formulir_pendaftaran),
            storage_path('app/public/berkas/' . $berkas->surat_pernyataan),
            storage_path('app/public/berkas/' . $berkas->surat_pengalihan),
            storage_path('app/public/berkas/' . $berkas->ktp),
            storage_path('app/public/berkas/' . $berkas->npwp),
            storage_path('app/public/berkas/' . $berkas->contoh_ciptaan),
            // tambahkan path berkas lainnya
        ];

        $zipName = 'berkas.zip'; // nama file ZIP yang akan dihasilkan
        $zipPath = public_path('berkas/'.$zipName);

        if ($this->createZipFile($filePaths, $zipName)) {
            return response()->download($zipPath)->deleteFileAfterSend();
        } else {
            // Jika terjadi kesalahan saat membuat file ZIP
            return back()->withError('Terjadi kesalahan saat membuat file ZIP.');
        }
    }


}