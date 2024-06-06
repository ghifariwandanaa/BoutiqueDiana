<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseVendorSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_vendor')->insert([
            ['kode_vendor' => 'V001', 'nama_vendor' => 'PT Shinta Woosung', 'alamat' => 'Jl. Raya Cikande', 'no_telp' => '(021) 6583122'],
            ['kode_vendor' => 'V002', 'nama_vendor' => 'PT Dewasutratex', 'alamat' => 'Jl. Cibaligo', 'no_telp' => '(0271) 821401'],
            ['kode_vendor' => 'V003', 'nama_vendor' => 'PT Kahatex', 'alamat' => 'Jl. Rancaekek', 'no_telp' => '(021) 54365002'],
            ['kode_vendor' => 'V004', 'nama_vendor' => 'PT Panasia Jaya', 'alamat' => 'Jl. Moh Toha', 'no_telp' => '(021) 5961785'],
            ['kode_vendor' => 'V005', 'nama_vendor' => 'PT Seyoung Industry', 'alamat' => 'Kp. Cibeunying', 'no_telp' => '(021) 6684565'],
        ]);
    }
}
