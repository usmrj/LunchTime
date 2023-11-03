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
        Schema::create('student_rewards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
            ->references('id')
            ->on('students');
            $table->unsignedBigInteger('reward_id');
            $table->foreign('reward_id')
            ->references('id')
            ->on('rewards');
            $table->date('DateOfReceive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_rewards');
    }
};
