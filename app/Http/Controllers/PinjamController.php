<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function pinjam(){ //menampilkan data buku
        $data_buku = \App\Buku::all();
        return view ('pinjam.pinjam', ['data_buku'=> $data_buku]);
    }

    public function create(Request $request){ //membuat data peminjaman
        \App\Pinjam::create($request->all());
        return redirect('/pinjam')->with('succses', 'Data berhasil diinput!');
    }

    public function data(){//menampilkan data peminjaman
        $data_pinjam = \App\Pinjam::all();
        return view ('pinjam.history', ['data_pinjam'=> $data_pinjam]);
    }
}
