<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::with('userProfile')->get();
        return view('admin.user', ['users' => $users]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'username' => 'required|unique:users',
            'nama' => 'required',
            'password' => 'required',
            'role' => 'required'
        ], [
            'username.required' => 'NIK harus diisi.',
            'username.unique' => 'NIK sudah digunakan.',
            'nama.required' => 'nama harus diisi.',
            'password.required' => 'Password harus diisi.',
            'role.required' => 'Role harus diisi.',
        ]);

        DB::beginTransaction();

        try {
            // Simpan data user
            $user = new User();
            $user->username = $validatedData['username'];
            $user->password = Hash::make($validatedData['password']);
            $user->role = $validatedData['role'];
            $user->save();

            // Simpan data profil pengguna
            $userProfile = new UserProfile();
            $userProfile->id_users = $user->id;
            $userProfile->nama = $validatedData['nama'];
            $user->userProfile()->save($userProfile);

            DB::commit();

            session()->flash('notifikasi', 'Data Berhasil disimpan!');
            session()->flash('type', 'success');
        } catch (\Exception $e) {
            DB::rollback();

            // Tangani pesan kesalahan jika username sudah digunakan
            if ($e->getCode() === '23000') {
                $errorMessage = 'NIK sudah digunakan.';
            } else {
                $errorMessage = 'Data gagal disimpan!';
            }

            session()->flash('notifikasi', $errorMessage);
            session()->flash('type', 'error');

            return redirect('/admin/user')->withErrors($e->getMessage());
        }

        return redirect('/admin/user')->with('success', 'Data berhasil disimpan!');
    }


    public function destroy($id)
    {
        // Cari pengguna berdasarkan id_users
        $user = User::findOrFail($id);

        // Hapus pengguna jika ditemukan
        if ($user->delete()) {
            return redirect()->back()->with('success', 'Pengguna berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Gagal menghapus pengguna.');
    }
}
