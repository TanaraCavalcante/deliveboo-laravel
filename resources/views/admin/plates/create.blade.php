@extends("layouts.app")

@section("page-title", "Crea un nuovo piatto")

@section("content")

<div class="container">
      <div class="row justify-content-center">
      

        <form class="col-12 col-md-8 col-lg-6 card p-4" method="POST" action="{{route("admin.plates.store")}}">
            @csrf
                <h1>Aggiungi un nuovo piatto:</h1>
    

                <div class="mb-3">
                    <label for="plate-title" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="plate-title" name="name" value="{{old('name')}}">
                    @error("name")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-decription" class="form-label">Descrizione:</label>
                    <input type="text" class="form-control" id="plate-decription" name="decription" value="{{old('decription')}}">
                    @error("decription")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-ingredients" class="form-label">Ingredienti:</label>
                    <input type="text" class="form-control" id="plate-ingredients" name="ingredients" value="{{old('ingredients')}}">
                    @error("ingredients")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-price" class="form-label">Prezzo:</label>
                    <input type="text" class="form-control" id="plate-price" name="price" value="{{old('price')}}">
                    @error("price")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-visibility" class="form-label">Disponibilità:</label>
                    <input type="text" class="form-control" id="plate-visibility" name="visibility" value="{{old('visibility')}}">
                    @error("visibility")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>
                
                <div class="mb-3">
                    <label for="plate-image" class="form-label">Inserisci URL immagine:</label>
                    <input type="text" class="form-control" id="plate-image" name="image" value="{{old('image')}}">
                    @error("image")
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
                </div>

    
               
           <div class=" d-flex justify-content-center align-items-center gap-2">
            <button type="submit" class="mb-3 btn btn-outline-primary ">Crea il tuo nuovo Piatto</button>
            <button type="reset" class="mb-3 btn btn-outline-danger">Pulisci i campi</button>
            <div class="mb-3">
                <a href="{{route("admin.plates.index")}}" class="btn btn-outline-success">Torna alla lista dei piatti</a>
        
            </div>

           </div>
        </form>
          

    </div>
    
</div>

@endsection