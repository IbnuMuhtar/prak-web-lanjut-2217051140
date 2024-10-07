<?php

namespace App\Models;
use App\Models\Kelas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->beLongsTo(Kelas::class, 'kelas_id');
    }

    public function getUser($id = null)
    {
        if ($id != null) {
            return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                        ->select('user.*', 'kelas.nama_kelas')
                        ->where('user.id', $id) // Menambahkan kondisi untuk mendapatkan data berdasarkan id
                        ->first(); // Menggunakan first() jika hanya ingin mendapatkan satu record
        }
    }
}