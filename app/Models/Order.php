<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //! Relation "one to Many" with OrderPlate
    public function orderPlate()
    {
        return $this->belongsTo(OrderPlate::class);
    }

    
}
