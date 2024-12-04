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
        //TODO qui non dovrei mettere e relazioni anche dei piatti? esempio: $plates = Plate::all(); e poi agiungere anche nel compact ("plates")?
        return view("", compact("restaurant"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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