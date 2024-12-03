<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    //! Relation "one to Many" with Plate
    public function plate() //um tipo pode servir para varios projetos
    {
        return $this->belongsTo(Plate::class);
    }
}