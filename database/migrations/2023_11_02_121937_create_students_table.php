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
            $table->id('StudentId');
            $table->string('FirstName', 255);
            $table->string('LastName', 255);
            $table->string('password', 255);
            $table->unsignedBigInteger('ClassId');
            $table->foreign('ClassId')
            ->references('ClassId')
            ->on('classes');
            $table->integer('DiaryNumber');
            $table->unsignedBigInteger('SchoolId');
            $table->foreign('SchoolId')
            ->references('SchoolId')
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
