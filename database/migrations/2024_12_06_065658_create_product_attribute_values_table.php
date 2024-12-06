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
        Schema::create('product_attribute_values', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('product_id'); // Foreign key for product
            // $table->unsignedBigInteger('attribute_value_id'); // Foreign key for attribute value
            // $table->primary(['product_id', 'attribute_value_id']); // Composite primary key

            // // Foreign key constraints
            // $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            // $table->foreign('attribute_value_id')->references('attribute_value_id')->on('attribute_values')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_attribute_values');
    }
};
