<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Lakukan operasi atau pemrosesan yang diperlukan untuk halaman landing
        // Misalnya, mengambil data dari database atau melakukan logika bisnis

        // Mengembalikan tampilan (view) halaman landing
        return view('home.home');
    }
}
