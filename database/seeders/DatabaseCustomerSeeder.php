<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('database_customer')->insert([
            ['kode_customer' => 'C001', 'nama_customer' => 'Rama', 'alamat' => 'Jl. Soekarno Hatta', 'no_telp' => '0812873299'],
            ['kode_customer' => 'C002', 'nama_customer' => 'Aldy', 'alamat' => 'Jl. Anggrek', 'no_telp' => '0818738268'],
            ['kode_customer' => 'C003', 'nama_customer' => 'Hanif', 'alamat' => 'Jl. Ciroyom', 'no_telp' => '0823981762'],
            ['kode_customer' => 'C004', 'nama_customer' => 'Hilal', 'alamat' => 'Jl. Melati', 'no_telp' => '0892477927'],
            ['kode_customer' => 'C005', 'nama_customer' => 'Agung', 'alamat' => 'Jl. Cigugur', 'no_telp' => '0814563797'],
        ]);
    }
}
