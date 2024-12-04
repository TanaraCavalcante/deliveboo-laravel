<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRestaurantRequest;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    //
    public function create () {
        $restaurant = new Restaurant();
        $users = User::all();
        return view('admin.restaurants.create', compact('restaurant', 'users'));
    }


    public function store(Request $request){

        $formData = $request->all();
        $newRestaurant = Restaurant::create($formData);
        return redirect()->route('/home');
    }
}
