<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatBukuController extends Controller
{
    public function lihat(){
        $data_buku = \App\Buku::all();
        return view ('lihatBuku', ['data_buku'=> $data_buku]); 
    }
}
