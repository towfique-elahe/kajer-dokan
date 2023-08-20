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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('worker_id');
            $table->string('worker_name');
            $table->string('worker_email');
            $table->text('worker_application_message');
            $table->unsignedBigInteger('job_id');
            $table->string('job_title');
            $table->string('job_service');
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
        Schema::dropIfExists('applications');
    }
};