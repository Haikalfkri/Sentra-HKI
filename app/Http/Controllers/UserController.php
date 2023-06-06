<?php

namespace App\Http\Controllers;

use App\Models\RekapPengajuan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil data pengajuan dengan status Diproses
        $diprosesCount = RekapPengajuan::where('status', 'Diproses')->count();

        // Mengambil data pengajuan dengan status Lengkap
        $lengkapCount = RekapPengajuan::where('status', 'Lengkap')->count();

        // Mengambil data pengajuan dengan status Belum Lengkap
        $belumLengkapCount = RekapPengajuan::where('status', 'Belum Lengkap')->count();

        // Mengambil total data pengajuan
        $totalCount = RekapPengajuan::count();

        dd($diprosesCount, $lengkapCount, $belumLengkapCount, $totalCount);

        return view('user.dashboard', compact('diprosesCount', 'lengkapCount', 'belumLengkapCount', 'totalCount'));
    }

}
