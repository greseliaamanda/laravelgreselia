<?php

use Illuminate\Database\Seeder;

class KembaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kembalis')->insert([
            'anggota_id' => '4',
            'buku_id' => '1',
            'tanggal_pengembalian' => '2020-11-2',
            'status' => 'TW',
            'denda' => '0',
        ]);
    }
}
