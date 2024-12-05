@extends('layouts.app')

@section('page-title', 'Crea un nuovo piatto')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div id="error-card" class="card text-white bg-danger mb-3 d-none">
                <div class="card-body">
                    <ol id="input-errors">
                        <!--Ci saranno gli errori-->
                    </ol>
                </div>
              </div>

            <form class="col-12 col-md-8 col-lg-6 card p-4" method="POST" action="{{ route('admin.plates.store') }}">
                @csrf
                <h1>Aggiungi un nuovo piatto:</h1>
                {{-- @dump($restaurant) --}}

                <div class="row mb-3 d-none">
                    <label for="restaurant_id" class="col-md-4 col-form-label text-md-end">Utente</label>

                    <div class="col-md-6">
                        <input id="restaurant_id" type="text" class="form-control" name="restaurant_id" required value="{{$restaurant}}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="plate-title" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="plate-title" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-description" class="form-label">Descrizione:</label>
                    <input type="text" class="form-control" id="plate-description" name="description"
                        value="{{ old('description') }}">
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-ingredients" class="form-label">Ingredienti:</label>
                    <input type="text" class="form-control" id="plate-ingredients" name="ingredients"
                        value="{{ old('ingredients') }}">
                    @error('ingredients')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-price" class="form-label">Prezzo:</label>
                    <input type="text" class="form-control" id="plate-price" name="price" value="{{ old('price') }}">
                    @error('price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-visibility" class="form-label">Disponibilità:</label>
                    <input type="text" class="form-control" id="plate-visibility" name="visibility"
                        value="{{ old('visibility') }}">
                    @error('visibility')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-image" class="form-label">Inserisci URL immagine:</label>
                    <input type="text" class="form-control" id="plate-image" name="image" value="{{ old('image') }}">
                    @error('image')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



           <div class=" d-flex justify-content-center align-items-center">
            <button type="submit" id="sub-btn" class="mb-3 btn btn-primary ">Crea il tuo nuovo Piatto</button>
            <button type="reset" class="mb-3 btn btn-danger">Pulisci i campi</button>

                </div>
            </form>


    </div>

</div>

@endsection

@section('additional-scripts')
    @vite("resources/js/plates/validation-create.js");
@endsection
