<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    use HasFactory;


    //! Relation "many to one" with Restaurant
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

     //! Relation "many to one" with Type
     public function types()
     {
         return $this->hasMany(Type::class);
     }
}