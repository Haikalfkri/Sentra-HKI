<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $userProfile = Auth::user()->userProfile;
        return view('user.profile', compact('userProfile'));
    }

    public function update(Request $request)
    {
        $userProfile = Auth::user()->userProfile;

        $userProfile->nama = $request->nama;
        $userProfile->alamat = $request->alamat;
        $userProfile->email = $request->email;
        $userProfile->role = $request->role;
        $userProfile->no_hp = $request->no_hp;

        $userProfile->save();

        return redirect()->route('user.profile')->with('success', 'Profil berhasil disimpan.');
    }
}
