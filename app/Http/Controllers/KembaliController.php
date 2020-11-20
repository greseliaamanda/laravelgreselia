<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KembaliController extends Controller
{
    public function kembali(){ //meenampilkan data pinjam
        $data_pinjam = \App\Pinjam::all();
        return view ('kembali.kembali', ['data_pinjam'=> $data_pinjam]);
    }

    public function create(Request $request){//membuat data kembali
        \App\Kembali::create($request->all());
        return redirect('/kembali')->with('succses', 'Data berhasil diinput!');
    }

    
    public function pengembalian($id){//proses pengembalian
        $pinjam= \App\Pinjam::find($id);
        $pinjam->delete();
        return redirect('/kembali')->with('succses', 'Berhasil dikembalikan!');
    }

    public function data(){//menampilkan data pengembalian
        $data_kembali = \App\Kembali::all();
        return view ('kembali.history', ['data_kembali'=> $data_kembali]);
    }
}
