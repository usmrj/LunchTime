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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->integer('feedback_value');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')
            ->references('id')
            ->on('schools');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
            ->references('id')
            ->on('students');
            $table->unsignedBigInteger('dish_id');
            $table->foreign('dish_id')
            ->references('id')
            ->on('dishes');
            $table->timestamp('added_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
