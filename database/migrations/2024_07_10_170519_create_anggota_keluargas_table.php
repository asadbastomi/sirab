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
        Schema::create('anggota_keluargas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('nama');
            $table->integer('umur');
            $table->enum(
                'statusHubungan',
                [
                    'kepala_keluarga',
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
            $table->boolean('isDifable')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_keluargas');
    }
};
