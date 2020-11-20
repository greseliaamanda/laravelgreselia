<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function anggota(){ //menampilkan tabel anggota
            $data_anggota = \App\Anggota::all();
            return view ('anggota.anggota', ['data_anggota'=> $data_anggota]); 
        }

    public function create(Request $request){ //membuat daftar anggota baru
        //validate form
        $this->validate($request,[
            'nama_depan' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
        ]);

        //tambah anggota
        \App\Anggota::create($request->all());
        return redirect('/anggota')->with('sukses', 'Data berhasil diinput!');
    }

    public function edit($id){ //mengedit data anggota
        $anggota= \App\Anggota::find($id);
        return view('anggota/edit', ['anggota'=> $anggota]);

    }

    public function update(Request $request, $id){ //mengupdate data anggota
        $anggota= \App\Anggota::find($id);
        $anggota->update($request->all());
        return redirect('/anggota')->with('sukses', 'Data berhasil diupdate!');
    }

    public function delete($id){ //menghapus daftar anggota
        $anggota= \App\Anggota::find($id);
        $anggota->delete();
        return redirect('/anggota')->with('sukses', 'Data berhasil didelete!');
    }

}
