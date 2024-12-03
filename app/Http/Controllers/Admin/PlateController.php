<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    }
    public function store(){

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
