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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id');
            $table->string('worker_name');
            $table->string('worker_email');
            $table->string('worker_phone');
            $table->string('worker_address');
            $table->string('worker_service');
            $table->string('nationality');
            $table->date('birth_date');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('designation_1')->nullable();
            $table->string('designation_2')->nullable();
            $table->string('workplace_1')->nullable();
            $table->string('workplace_2')->nullable();
            $table->string('time_frame_1')->nullable();
            $table->string('time_frame_2')->nullable();
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->string('exam_1')->nullable();
            $table->string('exam_2')->nullable();
            $table->string('institute_1')->nullable();
            $table->string('institute_2')->nullable();
            $table->string('session_1')->nullable();
            $table->string('session_2')->nullable();
            $table->text('details_1')->nullable();
            $table->text('details_2')->nullable();
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('worker_id')
            ->references('id')
            ->on('users') // Reference the users table
            ->where('role', 'client') // Only users with role 'client'
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
