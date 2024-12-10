<?php

namespace App\Models;

use Abbasudo\Purity\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'name',
        'description',
        'logo',
    ];

   public function restaurants() {
       return $this->belongsToMany(Restaurant::class);
   }
}
