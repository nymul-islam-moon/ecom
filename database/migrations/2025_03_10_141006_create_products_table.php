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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Basic Product Details
            $table->string('sku', 100)->unique();
            $table->string('slug', 100)->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();

            // Pricing
            $table->decimal('price', 10, 2);
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->boolean('tax_included')->default(true);
            $table->decimal('tax_percentage', 5, 2)->nullable();

            // Stock and Inventory
            $table->integer('stock_quantity')->default(0);
            $table->integer('low_stock_threshold')->nullable();
            $table->timestamp('restock_date')->nullable();

            // Product Type
            $table->enum('product_type', ['physical', 'digital', 'subscription', 'service', 'girt_card'])->default('physical');

            // Physical & Digital Product Details
            $table->decimal('weight', 10, 2)->nullable();
            $table->string('dimensions')->nullable();
            $table->decimal('width', 8, 2)->nullable();
            $table->decimal('height', 8, 2)->nullable();
            $table->decimal('depth', 8, 2)->nullable();

            // Digital Products
            $table->string('download_url')->nullable();
            $table->string('license_key')->nullable();

            // Subscription Products
            $table->string('subscription_interval', 50)->nullable();

            // Product Identifiers
            $table->string('mpn')->nullable();
            $table->string('gtin8')->nullable();
            $table->string('gtin13')->nullable();
            $table->string('gtin14')->nullable();

            // Backorder Option
            $table->enum('allow_backorders', ['no', 'notify', 'yes'])->default('no');

            // Return & Policies
            $table->text('return_policy')->nullable();
            $table->integer('return_days')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();

            // Product Lifecycle & Publish Scheduling
            $table->enum('status', ['active', 'inactive', 'discontinued', 'out_of_stock'])->default('active');
            $table->timestamp('publish_date')->nullable();
            $table->boolean('is_published')->default(false);
            $table->boolean('is_featured')->default(false);

            // Relationships
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->nullable()->constrained('sub_categories')->onDelete('cascade');
            $table->foreignId('child_category_id')->nullable()->constrained('child_categories')->onDelete('cascade');
            $table->foreignId('shop_id')->nullable()->constrained('shops')->onDelete('cascade');
            $table->foreignId('vendor_id')->nullable()->constrained('vendors')->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
