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

    public function orders(){
        return $this->belongsToMany(Order::class, 'order_plate')
        ->withPivot('quantity');
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

}
