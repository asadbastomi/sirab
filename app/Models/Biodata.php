<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biodata extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'tempatLahir',
        'tanggalLahir',
        'kewarganegaraan',
        'agama',
        'alamatTinggal',
        'statusTinggal',
        'pekerjaan',
        'alamatKerja',
        'penghasilan',
        'pekerjaanPasangan',
        'penghasilanPasangan',
        'alamatKerjaPasangan',
        'nik',
    ];

    /**
     * Get the user that owns the Biodata
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
