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
        Schema::create('privilagedUsers', function (Blueprint $table) {
            $table->id();
            $table->string('Username', 255);
            $table->string('Password', 255);
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
        Schema::dropIfExists('privilaged_users');
    }
};
