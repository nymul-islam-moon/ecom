<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert admin user
        DB::table('admins')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminpassword'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert vendor user
        DB::table('admins')->insert([
            'name' => 'Vendor User',
            'email' => 'vendor@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('vendorpassword'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
