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
        Schema::create('served_dishes', function (Blueprint $table) {
            $table->id();
            $table->date('ServingDate');
            $table->unsignedBigInteger('dish_id');
            $table->foreign('dish_id')
            ->references('dish_id')
            ->on('dishes');         
            $table->unsignedBigInteger('school_id');   
            $table->foreign('school_id')
            ->references('school_id')
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
