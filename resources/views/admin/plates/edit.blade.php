@extends('layouts.app')

@section('page-title', 'Modifica' . $plate->name)

@section('content')

    <div class="container">
        <div class="row justify-content-center">


            <form class="col-12 col-md-8 col-lg-6  card p-4" method="POST" enctype="multipart/form-data" action="{{ route('admin.plates.update', $plate) }}">
                @method('PUT')
                @csrf
                <h1>Modifica {{ $plate->name }}</h1>

                <div class="row mb-3 d-none ">
                    <label for="restaurant_id" class="col-md-4 col-form-label text-md-end">Utente</label>
                    <div class="col-md-6">
                        <input id="restaurant_id" type="text" class="form-control" name="restaurant_id" required
                            value="{{ $restaurant }}" readonly>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="plate-title" class="form-label">Nome: *</label>
                    <input type="text" class="form-control" id="plate-title" name="name" value="{{ old('name', $plate->name) }}">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-description" class="form-label">Descrizione: *</label>
                    <textarea type="text" class="form-control" id="plate-description" name="description" style="height: 100px">{{ old('description', $plate->description) }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-ingredients" class="form-label">Ingredienti: *</label>
                    <textarea type="text" class="form-control" id="plate-ingredients" name="ingredients" style="height: 100px">{{ old('ingredients', $plate->ingredients) }}</textarea>
                    @error('ingredients')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-price" class="form-label">Prezzo: *</label>
                    <input type="text" class="form-control" id="plate-price" name="price" value="{{ old('price', $plate->price) }}">
                    @error('price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-visibility" class="form-label">Disponibilità: *</label>
                    <input type="text" class="form-control" id="plate-visibility" name="visibility"
                        value="{{ old('visibility', $plate->visibility) }}">
                    @error('visibility')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="plate-image" class="form-label">Inserisci URL immagine:</label>
                    <input type="file" class="form-control" id="plate-image" name="image" value="{{ old('image', $plate->image) }}">
                    {{-- <input type="text" class="form-control" id="plate-image" name="image" value="{{ old('image', $plate->image) }}"> --}}
                    @error('image')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class=" d-flex justify-content-center align-items-center gap-2">
                    <button type="submit" class="mb-3 btn btn-primary ">Modifica il piatto</button>
                    <button type="reset" class="mb-3 btn btn-danger">Pulisci i campi</button>
                    <div class="mb-3">
                        <a href="{{ route('admin.plates.index') }}" class="btn btn-outline-success">Torna alla lista dei
                            piatti</a>

                    </div>

                </div>
            </form>


        </div>

    </div>

@endsection
