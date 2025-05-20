<?php

namespace App\Models;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blok extends Model
{
    use HasFactory, HasUuids;

    /**
     * Get all of the unit for the Blok
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unit(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}
