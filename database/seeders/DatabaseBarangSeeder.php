<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseBarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_barang')->insert([
            ['kode_barang' => 'DJW-01', 'kategori' => 'DJW', 'nama_barang' => 'Straight low jeans', 'harga_beli' => 100000, 'unit' => 20, 'harga_jual' => 200000],
            ['kode_barang' => 'DJW-02', 'kategori' => 'DJW', 'nama_barang' => 'Wide high jeans', 'harga_beli' => 100000, 'unit' => 17, 'harga_jual' => 200000],
            ['kode_barang' => 'DJW-03', 'kategori' => 'DJW', 'nama_barang' => 'Jeans high baggy 90an', 'harga_beli' => 100000, 'unit' => 60, 'harga_jual' => 200000],
            ['kode_barang' => 'DJW-04', 'kategori' => 'DJW', 'nama_barang' => 'Skinny high jeans', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'DJW-05', 'kategori' => 'DJW', 'nama_barang' => 'Straight high jeans', 'harga_beli' => 100000, 'unit' => 20, 'harga_jual' => 200000],
            ['kode_barang' => 'GW-01', 'kategori' => 'GW', 'nama_barang' => 'Silk wrap dress', 'harga_beli' => 150000, 'unit' => 36, 'harga_jual' => 250000],
            ['kode_barang' => 'GW-02', 'kategori' => 'GW', 'nama_barang' => 'Stand up collat dress', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'GW-03', 'kategori' => 'GW', 'nama_barang' => 'Breasted blazer dress', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'GW-04', 'kategori' => 'GW', 'nama_barang' => 'Sleeveless dress', 'harga_beli' => 150000, 'unit' => 42, 'harga_jual' => 250000],
            ['kode_barang' => 'GW-05', 'kategori' => 'GW', 'nama_barang' => 'MAMA nursing dress', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'HOO-01', 'kategori' => 'HOO', 'nama_barang' => 'Hoodie risleting oversized', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'HOO-02', 'kategori' => 'HOO', 'nama_barang' => 'Sweatshirt', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'HOO-03', 'kategori' => 'HOO', 'nama_barang' => 'Oversized zip through hoodie', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'HOO-04', 'kategori' => 'HOO', 'nama_barang' => 'Printed sweatshirt', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'HOO-05', 'kategori' => 'HOO', 'nama_barang' => 'Oversized sweatshirt', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'JP-01', 'kategori' => 'JP', 'nama_barang' => 'Slim jeans', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'JP-02', 'kategori' => 'JP', 'nama_barang' => 'Freefit slim jeans', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'JP-03', 'kategori' => 'JP', 'nama_barang' => 'Straight relaxed jeans', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'JP-04', 'kategori' => 'JP', 'nama_barang' => 'Loose jeans', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'JP-05', 'kategori' => 'JP', 'nama_barang' => 'Loose bootcut jeans', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'KP-01', 'kategori' => 'KP', 'nama_barang' => 'Patterned resort shirt', 'harga_beli' => 120000, 'unit' => 50, 'harga_jual' => 180000],
            ['kode_barang' => 'KP-02', 'kategori' => 'KP', 'nama_barang' => 'Relaxed fit embroidered', 'harga_beli' => 120000, 'unit' => 50, 'harga_jual' => 180000],
            ['kode_barang' => 'KP-03', 'kategori' => 'KP', 'nama_barang' => 'Relaxed fit short enmbroidered', 'harga_beli' => 120000, 'unit' => 50, 'harga_jual' => 180000],
            ['kode_barang' => 'KP-04', 'kategori' => 'KP', 'nama_barang' => 'Cotton shirt reguler', 'harga_beli' => 120000, 'unit' => 50, 'harga_jual' => 180000],
            ['kode_barang' => 'KP-05', 'kategori' => 'KP', 'nama_barang' => 'Reguler fit shirt', 'harga_beli' => 120000, 'unit' => 50, 'harga_jual' => 180000],
            ['kode_barang' => 'NBN-01', 'kategori' => 'NBN', 'nama_barang' => 'Oversized printed sweatshirt', 'harga_beli' => 70000, 'unit' => 50, 'harga_jual' => 150000],
            ['kode_barang' => 'NBN-02', 'kategori' => 'NBN', 'nama_barang' => 'Two pack cotton bodysuit', 'harga_beli' => 70000, 'unit' => 50, 'harga_jual' => 150000],
            ['kode_barang' => 'NBN-03', 'kategori' => 'NBN', 'nama_barang' => 'Two pack leggings', 'harga_beli' => 70000, 'unit' => 50, 'harga_jual' => 150000],
            ['kode_barang' => 'NBN-04', 'kategori' => 'NBN', 'nama_barang' => 'Pack cotton pyjamas', 'harga_beli' => 70000, 'unit' => 50, 'harga_jual' => 150000],
            ['kode_barang' => 'NBN-05', 'kategori' => 'NBN', 'nama_barang' => 'Pack ribbed tops', 'harga_beli' => 70000, 'unit' => 50, 'harga_jual' => 150000],
            ['kode_barang' => 'PQP-01', 'kategori' => 'PQP', 'nama_barang' => 'Slim fit premium cotton shirt', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PQP-02', 'kategori' => 'PQP', 'nama_barang' => 'Reguler fit linen premium', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PQP-03', 'kategori' => 'PQP', 'nama_barang' => 'Jaket linen slim premium', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PQP-04', 'kategori' => 'PQP', 'nama_barang' => 'Slim fit prima cotton shirt', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PQP-05', 'kategori' => 'PQP', 'nama_barang' => 'Loose fit linen trouser premium', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PW-01', 'kategori' => 'PW', 'nama_barang' => 'Silk wrap dress', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'PW-02', 'kategori' => 'PW', 'nama_barang' => 'Linen shirt', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'PW-03', 'kategori' => 'PW', 'nama_barang' => 'Double breasted wool', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'PW-04', 'kategori' => 'PW', 'nama_barang' => 'Silk blend trouser', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'PW-05', 'kategori' => 'PW', 'nama_barang' => 'Linen suit waistcost', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SP-01', 'kategori' => 'SP', 'nama_barang' => 'Reguler fit sport windbreaker', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'SP-02', 'kategori' => 'SP', 'nama_barang' => 'Dry move track jacket', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'SP-03', 'kategori' => 'SP', 'nama_barang' => 'Light weight running jacket', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'SP-04', 'kategori' => 'SP', 'nama_barang' => 'Fast drying running jacket', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'SP-05', 'kategori' => 'SP', 'nama_barang' => 'Regular termolite running', 'harga_beli' => 100000, 'unit' => 50, 'harga_jual' => 200000],
            ['kode_barang' => 'SW-01', 'kategori' => 'SW', 'nama_barang' => 'Super soft sport tights', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SW-02', 'kategori' => 'SW', 'nama_barang' => 'Monogram running trouser', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SW-03', 'kategori' => 'SW', 'nama_barang' => 'Seamless sport tight', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SW-04', 'kategori' => 'SW', 'nama_barang' => 'Dry move zip hem', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SW-05', 'kategori' => 'SW', 'nama_barang' => 'Dry move double layered', 'harga_beli' => 150000, 'unit' => 50, 'harga_jual' => 250000],
        ]);
    }
}
