<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $types = Type::all();
        // Per ogni tipo, aggiorna il percorso del logo con l'URL completo
        foreach ($types as $type) {
            $type->logo = asset('types-logo/' . $type->logo); 
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
