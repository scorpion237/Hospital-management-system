<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialitie extends Model
{
    use HasFactory;

    /**
     * Get all of the employers for the Specialitie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employers()
    {
        return $this->hasMany(Employer::class);
    }
}
