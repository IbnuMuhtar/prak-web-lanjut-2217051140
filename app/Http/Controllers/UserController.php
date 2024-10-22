<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        // Mengambil data user dan mengurutkan berdasarkan nama
        $users = $this->userModel->orderBy('nama', 'asc')->get();
        
        $data = [
            'title' => 'List User',
            'users' => $users,
        ];

        return view('list_user', $data);
    }

    public function profile($nama = '', $kelas = '', $npm = '', $foto ='')
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
            'foto' => $foto,
        ];

        return view('profile', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nama' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
        'npm' => 'required|digits:10',
        'kelas_id' => 'required|exists:kelas,id',
        'semester' => 'required|integer|min:1|max:8',
        'jurusan' => 'required|string|max:255',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
    ], [
        'nama.regex' => 'Nama hanya boleh mengandung huruf.',
        'npm.digits' => 'NPM harus 10 digit angka.',
        'kelas_id.required' => 'Kelas harus dipilih.',
        'semester.required' => 'Semester harus diisi.',
        'jurusan.required' => 'Jurusan harus diisi.',
    ]);

    // Meng-handle upload foto
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $randomName = uniqid() . '.' . $foto->getClientOriginalExtension();
        $path = $foto->storeAs('public/uploads/img', $randomName);
        $validatedData['foto'] = str_replace('public/', 'storage/', $path);
    } else {
        $validatedData['foto'] = 'assets/img/default.png';
    }

    // Menyimpan data pengguna ke database
    $user = $this->userModel->create($validatedData);
    $user->load('kelas');

    return redirect()->to('/user')->with('success', 'User berhasil ditambahkan');
}

    public function show($id){
        $user = $this->userModel->getUser($id);
    
        $data = [
            'title' => 'Profile - ' . $user->nama,
            'user'  => $user,
        ];
    
        return view('profile', $data);
    }    

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';
        
        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'nama' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
        'npm' => 'required|digits:10',
        'kelas_id' => 'required|exists:kelas,id',
        'semester' => 'required|integer|min:1|max:8',
        'jurusan' => 'required|string|max:255',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
    ], [
        'nama.regex' => 'Nama hanya boleh mengandung huruf.',
        'npm.digits' => 'NPM harus 10 digit angka.',
        'kelas_id.required' => 'Kelas harus dipilih.',
        'semester.required' => 'Semester harus diisi.',
        'jurusan.required' => 'Jurusan harus diisi.',
    ]);

    $user = UserModel::findOrFail($id);

    // Meng-handle upload foto
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        if ($user->foto && $user->foto !== 'assets/img/default.png') {
            $oldPhotoPath = public_path($user->foto);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
        }

        $randomName = uniqid() . '.' . $foto->getClientOriginalExtension();
        $path = $foto->storeAs('public/uploads/img', $randomName);
        $validatedData['foto'] = str_replace('public/', 'storage/', $path);
    } else {
        $validatedData['foto'] = $user->foto ?: 'assets/img/default.png';
    }

    // Update data user
    $user->update($validatedData);
    $user->load('kelas');

    return redirect()->to('/user')->with('success', 'User berhasil diperbarui');
}


    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'User has been deleted successfully');
    }
}