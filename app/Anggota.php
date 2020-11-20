<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [ //untuk mendaftarkan nama kolom agar bisa melakukan CRUD
        'nama_depan', 'email', 'no_telp', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'pekerjaan'
    ];
}
