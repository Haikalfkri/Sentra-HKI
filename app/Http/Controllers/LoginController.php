<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->intended('admin/dashboard')->with('');
            } else {
                return redirect()->intended('user/dashboard')->with('');
            }
        } else {
            // Autentikasi gagal
            return redirect()->back()->withInput()->withErrors([
                'login_failed' => 'Username atau password salah.',
            ]);
        }
    }

}
