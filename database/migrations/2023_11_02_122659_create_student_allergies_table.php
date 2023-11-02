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
        Schema::create('studentAllergies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('StudentId');
            $table->foreign('StudentId')
            ->references('StudentId')
            ->on('students');
            $table->unsignedBigInteger('AllergenId');
            $table->foreign('AllergenId')
            ->references('AllergenId')
            ->on('allergens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_allergies');
    }
};
