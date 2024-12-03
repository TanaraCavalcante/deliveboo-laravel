<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'price',
        'visibility',
        'image'
    ];

    //! Relation "many to one" with Restaurant
    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }
}