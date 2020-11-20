<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $fillable = [ //untuk mendaftarkan nama kolom agar dapat dilakukan CRUD
        'anggota_id', 'buku_id', 'tanggal_pinjam', 'tanggal_kembali'
    ];
}
