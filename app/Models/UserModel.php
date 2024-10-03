<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user'; // Nama tabel di database

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = ['nama', 'npm', 'kelas_id']; // Tambahkan kolom di sini

    // Gunakan guarded jika Anda ingin menghindari pengisian massal pada kolom tertentu
    // protected $guarded = ['id']; // Opsional, jika tidak ingin menggunakan fillable

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function getUser() {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}
