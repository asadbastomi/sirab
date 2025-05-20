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
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('rusun_id')->nullable();
            $table->foreign('rusun_id')->references('id')->on('rusuns')->onDelete('restrict');
            $table->uuid('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('restrict');
            $table->string('nama');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
