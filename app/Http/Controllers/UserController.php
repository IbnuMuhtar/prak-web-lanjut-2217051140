<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\Kelas;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct() 
    { 
        $this->userModel = new UserModel(); 
        $this->kelasModel = new Kelas(); 
    }

    // Method untuk menampilkan halaman create user
    public function create() 
    { 
        $kelas = $this->kelasModel->all(); // Mendapatkan semua data kelas
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data); 
    }

    // Method untuk menyimpan data pengguna
    public function store(Request $request) 
    { 
        // Validasi input dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'npm' => 'required|digits:10',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        // Simpan data pengguna ke database
        $this->userModel->create($validatedData); 

        // Redirect ke halaman /users setelah menyimpan data
        return redirect()->to('/users'); 
    }

    // Method untuk menampilkan daftar pengguna
    public function index() 
    { 
        $users = $this->userModel->getUser(); // Mengambil semua data pengguna dengan join ke kelas
        return view('list_user', ['users' => $users]); 
    }

    // Method untuk mengedit pengguna
    public function edit($id) 
    {
        // Logic untuk mengedit pengguna (jika diperlukan)
    }

    // Method untuk mengupdate pengguna
    public function update(Request $request, $id) 
    {
        // Logic untuk memperbarui data pengguna (jika diperlukan)
    }

    // Method untuk menghapus pengguna
    public function destroy($id) 
    {
        // Logic untuk menghapus pengguna (jika diperlukan)
    }
}
