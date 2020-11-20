<?php

use Illuminate\Database\Seeder;

class PinjamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pinjams')->insert([
            'anggota_id' => '4',
            'buku_id' => '1',
            'tanggal_pinjam' => '2020-10-31',
            'tanggal_kembali' => '2020-11-2'
        ]); 
    }
}
