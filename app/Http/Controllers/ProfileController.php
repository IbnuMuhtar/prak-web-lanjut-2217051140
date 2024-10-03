<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        // Ambil data dari query string
        $nama = $request->query('nama', 'Nama tidak ditemukan');
        $npm = $request->query('npm', 'NPM tidak ditemukan');
        $kelas = $request->query('kelas', 'Kelas tidak ditemukan');

        // Data untuk diteruskan ke view
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
        ];

        // Tampilkan view dan kirimkan data
        return view('profile', $data);
    }
}
