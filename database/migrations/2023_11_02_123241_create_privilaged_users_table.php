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
        Schema::create('privilaged_users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255);
            $table->string('password', 255);
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
        Schema::dropIfExists('privilaged_users');
    }
};
