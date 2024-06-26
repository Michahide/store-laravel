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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->longText('address_one')->nullable();
            $table->longText('address_two')->nullable();
            $table->string('provinces_id')->nullable();
            $table->string('regencies_id')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('roles')->default('USER'); 
            // USER (Buyer dan Seller), ADMIN (All Access) 

            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
