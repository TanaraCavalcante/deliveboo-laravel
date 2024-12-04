<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurantes = Restaurant::all();
        return view("", compact("restaurants")); //! inserire la view di andrea
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurant = new Restaurant();
        return view("", compact("restaurant"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //manca la validation qui

        $formData = $request->all();
        $newRestaurant = Restaurant::create($formData);
        return redirect()->route("", ["id"=>$newRestaurant->id]); //!indirizzare alla show

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurant = Restaurant::all()->findOrFail($id);
        return view("", compact("restaurant"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}