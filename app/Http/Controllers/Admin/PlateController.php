<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlateRequest;
use App\Http\Requests\UpdatePlateRequest;
use App\Models\Plate;
use App\Models\Restaurant;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlateController extends Controller
{
    public function index(){
        // verififca che il piatto appartenga all'utente
        $restaurant = Auth::user();
        $plates = Plate::where('restaurant_id', $restaurant->id)->get();
        // $plates['restaurant_id'] = $user;
        return view('admin.plates.index', compact('plates','restaurant'));
    }
    public function create(){
        $plate = new Plate();
        $user = Auth::user();
        $restaurant = $user->restaurant->id;
        return view('admin.plates.create', compact('plate','restaurant','user'));
    }
    public function store(StorePlateRequest $request){
        $restaurant = Auth::user();

        $data = $request->validated();
        $data['restaurant_id'] = $restaurant;

        $plate = Plate::create($data);
        return redirect()->route('admin.plates.index');
    }
    public function show(Plate $plate){
        return view('admin.plates.show', compact('plate'));
    }
    public function edit( Plate $plate){
        return view('admin.plates.edit', compact('plate'));
    }
    public function update( UpdatePlateRequest $request, Plate $plate){
        $userRestaurant = Auth::user()->restaurant;

        if($plate->restaurant_id !== $userRestaurant->id){
            abort(403);
        }
        // recupera dati
        $data = $request->validated();
        // aggiorna i dati
        $plate->update($data);
        return redirect()->route('admin.plates.index');
    }
    public function destroy(Plate $plate){
        $userRestaurant = Auth::user()->restaurant;

        if($plate->restaurant_id !== $userRestaurant->id){
            abort(403);
        }

        $plate->delete();
        return redirect()->route('admin.plates.index');
    }
}
