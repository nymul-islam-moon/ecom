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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('shop_email')->unique();
            $table->string('shop_phone', 15)->nullable();
            $table->string('name')->nullable()->comment('owner name');
            $table->string('phone')->unique()->comment('owner phone');
            $table->string('nid')->nullable()->comment('owner NID');
            $table->string('photo')->nullable()->comment('owner photo');;
            $table->string('email')->nullable()->comment('owner email');
            $table->string('tin')->nullable()->comment('Tax Identification Number');
            $table->string('dbid')->nullable()->comment('Digital Business Identification');
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('shop_logo')->nullable();
            $table->string('website_url')->nullable();
            $table->text('description')->nullable();
            $table->text('business_address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
