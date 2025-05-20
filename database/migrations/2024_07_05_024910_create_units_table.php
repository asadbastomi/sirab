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
        Schema::create('units', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('blok_id');
            $table->foreign('blok_id')->references('id')->on('bloks')->onDelete('restrict');
            $table->string('nomor')->unique();
            $table->enum('status', [
                'kosong',
                'terisi',
                'rusak'
            ])->default('kosong');
            $table->boolean('isDifable')->default(false);
            $table->string('tipe');
            $table->integer('lantai');
            $table->double('tarif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
