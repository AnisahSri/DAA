<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            [Nama' => 'Adidas', 'Harga' => 1000,'Kategori' => 'sepatu'],
            [Nama' => 'Nike', 'Harga' => 999,'Kategori' => 'sepatu'],
            [Nama' => 'Levis', 'Harga' => 500,'Kategori' => 'celana'],
            [Nama' => 'Uniqlo', 'Harga' => 100,'Kategori' => 'baju'],
        ]);
    
    }
}
