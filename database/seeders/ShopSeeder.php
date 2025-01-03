<?php

namespace Database\Seeders;

use App\Models\Shop;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Initialize Faker for generating random data
        $faker = Faker::create();

        // Create a shop record
        Shop::create([
            'name' => $faker->company,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->unique()->phoneNumber,
            'contact_email' => 'shop.example@gmail.com',
            'contact_phone' => '01786287789',
            'website_url' => $faker->url,
            'shop_logo' => $faker->imageUrl(300, 300, 'business', true, 'shop'),
            'profile_photo' => $faker->imageUrl(300, 300, 'people', true, 'profile'),
            'nid' => $faker->uuid,
            'description' => $faker->paragraph,
            'address' => $faker->address,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
        ]);
    }
}
