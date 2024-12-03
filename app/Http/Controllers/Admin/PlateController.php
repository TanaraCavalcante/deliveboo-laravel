<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlateRequest;
use App\Models\Plate;
use Illuminate\Http\Request;

class PlateController extends Controller
{
    public function index(){
        $plate = Plate::paginate(10);
        return view('admin.plates.index', compact('plates'));

    }
    public function create(){
        $plate = new Plate();
        // manca inserire la parte delle relazioni
        return view('admin.plates.create', compact('plate'));
    }
    public function store(StorePlateRequest $request){
        $data = $request->validated();
        $plate = Plate::create($data);
        return redirect()->route('admin.plates.index');

    }
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
