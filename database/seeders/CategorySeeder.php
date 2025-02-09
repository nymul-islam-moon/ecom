<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Disable foreign key checks to prevent issues
        Schema::disableForeignKeyConstraints();
        Category::truncate(); // Clear the table before seeding
        Schema::enableForeignKeyConstraints();

        // Seed the database with fake categories
        Category::factory(10)->create();
    }
}
