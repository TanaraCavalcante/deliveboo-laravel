<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plate;
use Illuminate\Http\Request;

class PlateController extends Controller
{
    public function index(){
        $plates = Plate::all();
        return response()->json(
            [
                "success" => true,
                "results" => $plates,
            ]
        );
    }
    public function show(){

    }
}
