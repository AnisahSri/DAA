<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone_number' => '081234567890',
            'address' => 'Jl. Kebon Jeruk No. 5, Jakarta',
        ]);

        Customer::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'phone_number' => '081234567891',
            'address' => 'Jl. Sudirman No. 10, Jakarta',
        ]);

        // Data otomatis menggunakan factory
        Customer::factory(10)->create();
    }
}
