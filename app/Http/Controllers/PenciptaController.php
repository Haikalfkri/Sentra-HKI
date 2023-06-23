<?php

namespace App\Http\Controllers;

use App\Models\Pencipta;
use App\Models\PengajuanHKI;
use Illuminate\Http\Request;

class PenciptaController extends Controller
{
    public function index()
    {
        $penciptas = Pencipta::all();

        return view('user.pencipta', compact('penciptas'));
    }

    public function store(Request $request)
    {
        // Memvalidasi input form
        $request->validate([
            'email' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
        ]);

        // Mengambil id_pengajuanhki dari pengajuan HKI terakhir yang ada
        $pengajuanHKI = PengajuanHKI::latest()->first();
        $id_pengajuanhki = $pengajuanHKI->id_pengajuanhki;

        $pencipta = new Pencipta();
        $pencipta->email = $request->input('email');
        $pencipta->nik = $request->input('nik');
        $pencipta->nama = $request->input('nama');
        $pencipta->no_hp = $request->input('no_hp');
        $pencipta->id_pengajuanhki = $id_pengajuanhki;
        try {
            $pencipta->save();
        } catch (\Exception $e) {
            // Tangkap pesan kesalahan
            $errorMessage = $e->getMessage();
            // Cetak pesan kesalahan (bisa diganti dengan tindakan lain sesuai kebutuhan)
            echo "Terjadi kesalahan saat menyimpan data: " . $errorMessage;
            // Lakukan tindakan pemulihan kesalahan atau tangani sesuai kebutuhan
        }

        return redirect()->route('pencipta.index')->with('success', 'Pencipta berhasil ditambahkan.');
    }


}
