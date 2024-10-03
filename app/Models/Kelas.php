<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $guarded = ['id'];

    // Relasi ke model User
    public function users() {
        return $this->hasMany(User::class, 'kelas_id');
    }

    // Method untuk mengambil semua data kelas
    public function getKelas() {
        return $this->all();
    }
}
