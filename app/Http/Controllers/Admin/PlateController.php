<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlateRequest;
use App\Http\Requests\UpdatePlateRequest;
use App\Models\Plate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlateController extends Controller
{
    public function index(){
        // verififca che il piatto appartenga all'utente
        $userRestaurant = Auth::user()->restaurant;
        $plates = Plate::with('restaurant')->get();
        return view('admin.plates.index', compact('plates'));
    }
    public function create(){
        $plate = new Plate();
        return view('admin.plates.create', compact('plate'));
    }
    public function store(StorePlateRequest $request){
        // $userRestaurant = Auth::user()->restaurant;

        $data = $request->validated();
        // $data['restaurant_id'] = $userRestaurant->id;
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
