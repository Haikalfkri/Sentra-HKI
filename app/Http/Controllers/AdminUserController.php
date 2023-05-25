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

    public function create()
    {
        return view('admin.user');
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
            $users = new User();
            $users->username = $validatedData['username'];
            $users->password = Hash::make($validatedData['password']);
            $users->role = $validatedData['role'];
            $users->save();

            // Simpan data profil pengguna
            $userProfile = new UserProfile();
            $userProfile->id_users = $users->id;
            $userProfile->nama = $validatedData['nama'];
            $users->userProfile()->save($userProfile);

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

            session()->flash('notifikasi', 'Data gagal disimpan!');
            session()->flash('type', 'error');

            dd($e->getMessage()); // Cetak pesan kesalahan untuk debugging
        }

        return redirect('/admin/user');
    }


    public function destroy($id)
    {
        // Cari pengguna berdasarkan id_users
        $user = User::where('id_users', '=', $id)->first();

        // Periksa apakah pengguna ditemukan
        if (!$user) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
        }

        // Hapus pengguna jika ditemukan
        if ($user->delete()) {
            return redirect()->back()->with('success', 'Pengguna berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Gagal menghapus pengguna.');
    }

}
