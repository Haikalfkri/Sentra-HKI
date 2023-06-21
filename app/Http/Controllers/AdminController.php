<?php

namespace App\Http\Controllers;

use App\Models\RekapPengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index()
    {
        // Mendapatkan seluruh data pengajuan dengan status "Lengkap"
        $lengkapPengajuan = RekapPengajuan::where('status', 'Lengkap')->get();
        $lengkapCount = $lengkapPengajuan->count();
        
        // Mendapatkan seluruh data pengajuan dengan status "Belum Lengkap"
        $belumLengkapPengajuan = RekapPengajuan::where('status', 'Belum Lengkap')->get();
        $belumLengkapCount = $belumLengkapPengajuan->count();

        // Mendapatkan seluruh data pengajuan dengan status "Diproses"
        $diprosesPengajuan = RekapPengajuan::where('status', 'Diproses')->get();
        $diprosesCount = $diprosesPengajuan->count();

        // Total ajuan adalah jumlah seluruh data pengajuan
        $totalCount = RekapPengajuan::count();

        // Mengirimkan data ke tampilan admin.index
        return view('admin.dashboard', compact('lengkapCount', 'belumLengkapCount', 'diprosesCount', 'totalCount'));
    }

}

