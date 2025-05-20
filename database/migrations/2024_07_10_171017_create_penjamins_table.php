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
        Schema::create('penjamins', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('nama');
            $table->string('nik');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->text('alamatTinggal');
            $table->string('statusTinggal');
            $table->string('pekerjaan');
            $table->string('alamatKerja');
            $table->string('nomorTelepon');
            $table->enum(
                'statusHubungan',
                [
                    'suami',
                    'isteri',
                    'anak',
                    'menantu',
                    'cucu',
                    'keponakan',
                    'orang_tua',
                    'mertua',
                ]
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjamins');
    }
};
