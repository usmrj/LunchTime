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
        Schema::create('servedDishes', function (Blueprint $table) {
            $table->id();
            $table->date('ServingDate');
            $table->unsignedBigInteger('DishId');
            $table->foreign('DishId')
            ->references('DishId')
            ->on('dishes');         
            $table->unsignedBigInteger('SchoolId');   
            $table->foreign('SchoolId')
            ->references('SchoolId')
            ->on('school');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('served_dishes');
    }
};
