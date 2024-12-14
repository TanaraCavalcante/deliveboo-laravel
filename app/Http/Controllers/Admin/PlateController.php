<?php

namespace App\Http\Controllers\Admin;

use Error;
use App\Models\Plate;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePlateRequest;
use App\Http\Requests\UpdatePlateRequest;
use App\Models\Type;

use function PHPSTORM_META\type;

class PlateController extends Controller
{
    public function index(){
        $user = Auth::user();
        // Recupera il ristorante associato all'utente
        $restaurant = $user->restaurant;
        if (!$restaurant) {
            abort(403, 'Non hai un ristorante associato.');
        }
        $plates = Plate::where('restaurant_id', $restaurant->id)->paginate(10);

        return view('admin.plates.index', compact('plates','restaurant'));
    }
    public function create(){
        $plate = new Plate();
        $user = Auth::user();
        $restaurant = $user->restaurant->id;
        return view('admin.plates.create', compact('plate','restaurant','user'));
    }
    public function store(StorePlateRequest $request){
        $restaurant = Auth::user()->restaurant;
        if (!$restaurant) {
            abort(403, 'Non hai un ristorante associato.');
        }
        $data = $request->validated();

        $data['price'] = number_format($data['price'], '2' ,'.', '');

        //! implemento l'imagine
        if($request->hasFile("image")){
            $filePath = Storage::disk("public")->put("img/plates" , $request->image);
            $data["image"] = $filePath;
        }

        $data['restaurant_id'] = $restaurant->id; //TODO -Aggiungi l'ID del ristorante al piatto

        Plate::create($data);
        return redirect()->route('admin.plates.index');
    }
    public function show(Plate $plate){
        // Verifica se o prato pertence ao restaurante do usuário autenticado
        if ($plate->restaurant_id !== Auth::user()->restaurant->id) {
            abort(403, 'Non hai il permesso di visualizzare questo piatto.');
        }

        return view('admin.plates.show', compact('plate'));
    }
    public function edit( Plate $plate){
        if ($plate->restaurant_id !== Auth::user()->restaurant->id) {
            abort(403, 'Non hai il permesso di modificare questo piatto.');
        }
        $user = Auth::user();
        $restaurant = $user->restaurant->id;
        return view('admin.plates.edit', compact('plate','restaurant','user'));
    }
    public function update(UpdatePlateRequest $request, Plate $plate){
        // Verifica se o prato pertence ao restaurante do usuário autenticado
        if ($plate->restaurant_id !== Auth::user()->restaurant->id) {
            abort(403, 'Non hai il permesso di aggiornare questo piatto.');
        }

        $data = $request->validated();

        //! inserimento dell'imagine
        if($request->hasFile("image")){
            if($plate->image){
                Storage::delete($plate->image);
            }
            $filePath = Storage::disk("public")->put("img/plates" , $request->image);
            $data["image"] = $filePath;
        }

        $plate->update($data);
        return redirect()->route('admin.plates.index', $plate);
    }

    public function destroy(Request $request, Plate $plate)
    {
        $userRestaurant = Auth::user()->restaurant;

        if ($plate->restaurant_id !== $userRestaurant->id) {
            abort(403, 'Non autorizzato');
        }

        $plate->delete();

        return redirect()->route('admin.plates.index')
                         ->with('message', 'Piatto eliminato con successo!');
    }

}