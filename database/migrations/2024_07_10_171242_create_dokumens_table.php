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
        Schema::create('dokumens', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('kk')->nullable();
            $table->string('ktp')->nullable();
            $table->string('ktpPasangan')->nullable();
            $table->string('ktpPenjamin')->nullable();
            $table->string('skTempatTinggal')->nullable();
            $table->string('skPenghasilan')->nullable();
            $table->string('bukuNikah')->nullable();
            $table->string('fotoPemohon')->nullable();
            $table->string('fotoPasangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumens');
    }
};
