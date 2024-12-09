<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::with(['plates','types'])->get();
        return response()->json(
            [
                "success" => true,
                "results" => $restaurants,
            ]
        );
    }
    public function show(Restaurant $restaurant){
        $restaurant->load(['plates', 'types']);
        return response()->json(
            [
                "success"=> true,
                "results"=> $restaurant,
            ]
        );

    }
}