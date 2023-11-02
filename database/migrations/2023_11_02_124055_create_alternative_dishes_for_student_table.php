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
        Schema::create('alternativeDishesForStudent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StudentId');
            $table->foreign('StudentId')
            ->references('StudentId')
            ->on('students');
            $table->unsignedBigInteger('DishId');
            $table->foreign('DishId')
            ->references('DishId')
            ->on('dishes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternative_dishes_for_student');
    }
};
