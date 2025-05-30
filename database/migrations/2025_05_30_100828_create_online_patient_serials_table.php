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
        Schema::create('online_patient_serials', function (Blueprint $table) {
            $table->id();
            $table->string('paditent_id')->unique('paditent_id');
            $table->integer('sl_no')->unique('sl_no')->nullable();
            $table->string('name');
            $table->text('address');
            $table->string('mobile')->nullable();
            $table->string('age')->nullable();
            $table->string('sex');
            $table->string('weight')->nullable();
            $table->string('problems')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_patient_serials');
    }
};
