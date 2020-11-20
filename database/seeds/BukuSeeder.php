<?php

use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bukus')->insert([
            'judul' => 'Akhlak Siswa Terhadap Guru',
            'pengarang' => 'Murtini,S.pd',
            'penerbit' => 'PT.Sindur',
            'tahun_terbit' => '2015',
        ]);        
    }
}
