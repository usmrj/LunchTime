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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('password', 255);
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')
            ->references('class_id')
            ->on('classes');
            $table->integer('diary_number');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')
            ->references('school_id')
            ->on('school');
            $table->tinyInteger('HaveVoted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
