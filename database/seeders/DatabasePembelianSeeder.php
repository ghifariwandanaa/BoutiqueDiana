<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabasePembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('database_pembelian')->insert([
            ['kode_transaksi' => 'T001', 'tanggal_transaksi' => '2023-12-23', 'kode_vendor' => 'V001'],
            ['kode_transaksi' => 'T002', 'tanggal_transaksi' => '2023-12-24', 'kode_vendor' => 'V002'],
        ]);

        DB::table('database_pembelian_detail')->insert([
            [
                'kode_transaksi' => 'T001',
                'kode_barang' => 'DJW-03',
                'jumlah' => 10,
            ],
            [
                'kode_transaksi' => 'T002',
                'kode_barang' => 'GW-01',
                'jumlah' => 5,
            ],
        ]);
    }
}
