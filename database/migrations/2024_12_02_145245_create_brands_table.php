<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Required (Brands should have unique names)
            $table->text('description')->nullable(); // Nullable
            $table->string('logo')->nullable(); // Nullable (URL or file path to logo)
            $table->string('website_url')->nullable(); // Nullable (Brand's official website)
            $table->string('slug')->unique(); // 🔥 New: SEO-friendly unique identifier
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
