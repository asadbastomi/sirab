<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Biodata;
use App\Models\Penjamin;
use App\Models\AnggotaKeluarga;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'phoneNumber',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the biodata associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function biodata(): HasOne
    {
        return $this->hasOne(Biodata::class);
    }

    /**
     * Get all of the anggota_keluarga for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function anggota_keluarga(): HasMany
    {
        return $this->hasMany(AnggotaKeluarga::class);
    }

    /**
     * Get the penjamin associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function penjamin(): HasOne
    {
        return $this->hasOne(Penjamin::class);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
