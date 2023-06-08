<?php

namespace App\Http\Controllers;

use App\Models\RekapPengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;\
use Carbon\Carbon;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function showMainLayout()
    {
        // Retrieve the monthly data
        $monthlyData = [];

        // Iterate through each month
        for ($month = 1; $month <= 12; $month++) {
            // Get the first day of the month
            $startDate = Carbon::create(date('Y'), $month, 1)->startOfMonth();
            // Get the last day of the month
            $endDate = Carbon::create(date('Y'), $month, 1)->endOfMonth();

            // Count the total pengajuan for the month
            $totalPengajuan = RekapPengajuan::whereBetween('created_at', [$startDate, $endDate])->count();

            // Add the total pengajuan to the monthly data array
            $monthlyData[] = $totalPengajuan;
        }

        // Pass the monthly data to the view
        return view('user.layouts.main')->with('monthlyData', $monthlyData);
    }

}
