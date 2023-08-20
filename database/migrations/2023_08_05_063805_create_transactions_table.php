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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('worker_id');
            $table->unsignedBigInteger('job_id');
            $table->decimal('amount', 10, 2);
            $table->string('service');
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

            // Define foreign key relationship
            $table->foreign('job_id')
                ->references('id')
                ->on('jobs') // Reference the users table
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};