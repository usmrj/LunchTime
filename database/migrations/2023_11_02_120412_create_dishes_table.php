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
            $table->id('DishId');
            $table->string('Name', 255);
            $table->string('Ingr1', 255);
            $table->string('Ingr2', 255);
            $table->string('Ingr3', 255);
            $table->string('Ingr4', 255);
            $table->string('Ingr5', 255);
            $table->tinyInteger('isSecond');
            $table->tinyInteger('isAlternative');
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
