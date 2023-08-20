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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('worker_id')->nullable();
            $table->string('title');
            $table->string('service');
            $table->string('location');
            $table->string('phone');
            $table->text('description');
            $table->enum('status', ['available', 'ongoing', 'completed'])->default('available');
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('client_id')
                ->references('id')
                ->on('users') // Reference the users table
                ->where('role', 'client') // Only users with role 'client'
                ->onDelete('cascade');

            // Define foreign key relationship
            $table->foreign('worker_id')
                ->references('id')
                ->on('users') // Reference the users table
                ->where('role', 'worker') // Only users with role 'client'
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};