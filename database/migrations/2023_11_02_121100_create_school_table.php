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
        Schema::create('school', function (Blueprint $table) {
            $table->id('SchoolId');
            $table->string('Name', 255);
            $table->date('LunchBreakStart1');            
            $table->date('LunchBreakEnd1');
            $table->date('LunchBreakStart2');            
            $table->date('LunchBreakEnd2');
            $table->tinyInteger('HasDishesForSick');            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school');
    }
};
