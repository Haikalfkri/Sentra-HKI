<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();

        // Logika lain yang Anda inginkan setelah logout

        return redirect()->route('landing.index');
    }
}
