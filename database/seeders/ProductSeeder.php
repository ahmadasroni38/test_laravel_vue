<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('product')->insert([
                'nama' => 'Product ' . $i,
                'deskripsi' => 'Description for Product ' . $i,
                'harga' => rand(1000, 50000), // Generate a random price between 1000 and 50000
            ]);
        }
    }
}
