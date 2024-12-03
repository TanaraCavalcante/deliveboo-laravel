<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPlate extends Model
{
    use HasFactory;

     //! Relation "many to one" with Order
     public function orders()
     {
         return $this->hasMany(Order::class);
     }

     //! Relation "many to one" with Plate
     public function plates()
     {
         return $this->hasMany(Plate::class);
     }
}