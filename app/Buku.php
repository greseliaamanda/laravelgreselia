<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [ //mendaftarkan nama kolom agar dapat dilakukan CRUD
        'judul', 'pengarang', 'penerbit', 'tahun_terbit', 'stok'
    ];
}
