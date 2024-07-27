<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $guarded= [];

    /**
     * Get the function that owns the Employer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function function()
    {
        return $this->belongsTo(Fonction::class, 'fonction_id');
    }

    public function specialitie(){
        return $this->belongsTo(specialitie::class, 'specialitie_id');
    }
}
