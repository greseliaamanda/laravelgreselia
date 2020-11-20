<?php

use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->create([
            'nama_depan' => 'Greselia Amanda',
            'email' => 'greselia@gmail.com',
            'no_telp' => '085816527209',
            'alamat'=>'Kediri',
            'tanggal_lahir'=>'2001-05-16',
            'jenis_kelamin'=>'P',
            'pekerjaan'=>'mahasiswa'
        ]);        
    }
}
