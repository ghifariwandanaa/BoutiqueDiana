<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DatabaseBarangSeeder::class);
        $this->call(DatabaseVendorSeeder::class);
        $this->call(DatabaseCustomerSeeder::class);
        $this->call(DatabasePenjualanSeeder::class);
        $this->call(DatabasePembelianSeeder::class);
    }
}
