<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //! Relation "many to Many" with Plate
    public function plates()
   {
       return $this->belongsToMany(Plate::class);
   }
}