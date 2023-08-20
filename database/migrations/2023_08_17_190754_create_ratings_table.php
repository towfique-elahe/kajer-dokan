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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('worker_id');
            $table->unsignedBigInteger('job_id');
            $table->enum('rating', [1, 2, 3, 4, 5]);
            $table->timestamps();

            // Define foreign key relationships
            $table->foreign('client_id')
                ->references('id')
                ->on('users')
                ->where('role', 'client')
                ->onDelete('cascade');

            $table->foreign('worker_id')
                ->references('id')
                ->on('users')
                ->where('role', 'worker')
                ->onDelete('cascade');

            $table->foreign('job_id')
                ->references('id')
                ->on('jobs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};