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
        Schema::create('chair_persions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->longText('description');
            $table->string('image');
            $table->string('fb')->nullable();
            $table->string('twit')->nullable();
            $table->string('yt')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chair_persions');
    }
};
