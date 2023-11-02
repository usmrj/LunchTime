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
        Schema::create('dish_allergens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dish_id');
            $table->foreign('dish_id')
            ->references('id')
            ->on('dishes');
            $table->unsignedBigInteger('allergen_id');
            $table->foreign('allergen_id')
            ->references('id')
            ->on('allergens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_allergens');
    }
};
