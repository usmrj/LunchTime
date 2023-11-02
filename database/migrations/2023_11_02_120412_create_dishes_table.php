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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id('dish_id');
            $table->string('name', 255);
            $table->string('ingr1', 255);
            $table->string('ingr2', 255);
            $table->string('ingr3', 255);
            $table->string('ingr4', 255);
            $table->string('ingr5', 255);
            $table->tinyInteger('IsSecond');
            $table->tinyInteger('IsAlternative');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
