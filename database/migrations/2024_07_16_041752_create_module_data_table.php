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
        Schema::create('module_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->json('data_en');
            $table->json('data_mm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_data');
    }
};
