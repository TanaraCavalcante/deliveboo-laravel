<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Abbasudo\Purity\Traits\Filterable;

class Restaurant extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'piva',
        'image',
    ];


    protected $filterFields = [
        'types',
        'plates',
         // relation
      ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function plates(){
        return $this->hasMany(Plate::class);
    }

    public function types(){
       return $this->belongsToMany(Type::class);
   }
}
