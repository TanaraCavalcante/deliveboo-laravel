<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    //
    public function create () {
        $restaurant = new Restaurant();
        return view('admin.restaurants.create', compact('restaurant'));
    }

    public function store($data){
        $restaurant = Restaurant::create($data);
        return redirect()->route('/home');
    }
}