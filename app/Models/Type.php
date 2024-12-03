<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    //! Relation "one to Many" with RestaurantType
    public function restaurantType()
    {
        return $this->belongsTo(RestaurantType::class);
    }
}