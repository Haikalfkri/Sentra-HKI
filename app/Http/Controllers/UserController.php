<?php

namespace App\Http\Controllers;

use App\Models\RekapPengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Query\Builder;


class UserController extends Controller
{

    public function index()
    {
        $userId = auth()->user()->id_users; // Mendapatkan ID pengguna yang terautentikasi

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
        return view('user.dashboard', compact('lengkapCount', 'belumLengkapCount', 'diprosesCount', 'totalCount'));
    }

public function showMainLayout()
{
    $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    $statusCounts = [];

    foreach ($months as $month) {
        $lengkapCount = RekapPengajuan::where('status', 'Lengkap')->whereMonth('created_at', Carbon::parse($month)->month)->count();
        $belumLengkapCount = RekapPengajuan::where('status', 'Belum Lengkap')->whereMonth('created_at', Carbon::parse($month)->month)->count();
        $diprosesCount = RekapPengajuan::where('status', 'Diproses')->whereMonth('created_at', Carbon::parse($month)->month)->count();

        $statusCounts[] = [
            'month' => $month,
            'lengkap' => $lengkapCount,
            'belumLengkap' => $belumLengkapCount,
            'diproses' => $diprosesCount,
        ];
    }

    $chartData = [
        [
            'name' => 'Lengkap',
            'data' => array_column($statusCounts, 'lengkap')
        ],
        [
            'name' => 'Belum Lengkap',
            'data' => array_column($statusCounts, 'belumLengkap')
        ],
        [
            'name' => 'Diproses',
            'data' => array_column($statusCounts, 'diproses')
        ]
    ];

    return view('user.layouts.main', ['chartData' => $chartData]);
}



}
