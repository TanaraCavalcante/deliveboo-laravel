<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $types = Type::all();
        foreach ($types as $type) {
            $type->logo = asset('types-logo/' . basename($type->logo)); // usa apenas o nome da imagem
        }
        return response()->json(
            [
                "success" => true,
                "results" => $types,
            ]
        );
    }
    public function show(Type $type){
        $type = Type::findOrFail($type->id);
        return response()->json(
            [
                "success"=> true,
                "results"=> $type,
            ]
        );

    }
}