<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjamin extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'nama',
        'nik',
        'tempatLahir',
        'tanggalLahir',
        'alamatTinggal',
        'statusTinggal',
        'pekerjaan',
        'alamatKerja',
        'nomorTelepon',
        'statusHubungan',
    ];

    /**
     * Get the user that owns the Penjamin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
