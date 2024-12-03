<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    use HasFactory;
    protected $fillable = [
        'restaurant_id',
        'name',
        'description',
        'ingredients',
        'price',
        'visibility',
        'image'
    ];

     //! Relation "one to Many" with OrderPlate
     public function orderPlate()
     {
         return $this->belongsTo(OrderPlate::class);
     }

    //! Relation "many to one" with Restaurant
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
}