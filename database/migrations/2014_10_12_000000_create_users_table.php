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
            $table->enum('role', ['client', 'worker', 'admin'])->default('client');
            $table->enum('service', ['Cleaning', 'Electrical', 'Plumbing', 'Pest Control', 'Auto Care'])->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // default admin user
        DB::table('users')->insert([
            'name' => 'AnyFix Admin',
            'email' => 'anyfix@admin.com',
            'role' => 'Admin',
            'password' => bcrypt('anyfix123'),
            'image' => 'image/user.jpg',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
