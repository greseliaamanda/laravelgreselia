<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function buku(){ //menampilkan tabel buku
            $data_buku = \App\Buku::all();
            return view ('buku.buku', ['data_buku'=> $data_buku]); 
        }

    public function create(Request $request){//menambah buku baru
        //validate form
        $this->validate($request,[
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
        ]);

        //tambah buku
        \App\Buku::create($request->all());
        return redirect('/buku')->with('succses', 'Data berhasil diinput!');
    }

    public function edit($id){ //mengedit buku 
        $buku= \App\Buku::find($id);
        return view('buku/edit', ['buku'=> $buku]);

    }

    public function update(Request $request, $id){//proses update buku
        $buku= \App\Buku::find($id);
        $buku->update($request->all());
        return redirect('/buku')->with('sukses', 'Data berhasil diupdate!');
    }

    public function delete($id){//menghapus buku
        $buku= \App\Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with('sukses', 'Data berhasil didelete!');
    }
}