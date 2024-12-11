<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone_number',
        'total',
    ];

    public function plates()
    {
        return $this->belongsToMany(Plate::class, 'order_plate')
            ->withPivot('quantity');
    }
}
