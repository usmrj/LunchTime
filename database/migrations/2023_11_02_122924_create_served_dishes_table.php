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
            $table->date('serving_date');
            $table->unsignedBigInteger('dish_id');
            $table->foreign('dish_id')
            ->references('id')
            ->on('dishes');         
            $table->unsignedBigInteger('school_id');   
            $table->foreign('school_id')
            ->references('id')
            ->on('schools');
            
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
