<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    // Tentukan tabel yang digunakan
    protected $table = 'kelas'; 

    // Method untuk mengambil semua kelas dari database
    public function getKelas()
    {
        return $this->all();
    }
}
