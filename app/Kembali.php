<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    protected $fillable = [
        'anggota_id', 'buku_id', 'tanggal_pengembalian', 'status', 'denda'
    ];
}
