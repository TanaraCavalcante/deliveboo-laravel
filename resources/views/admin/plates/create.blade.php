@extends('layouts.app')

@section('page-title', 'Crea un nuovo piatto')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form class="col-12 col-md-8 col-lg-6 card p-4" method="POST" enctype="multipart/form-data" action="{{ route('admin.plates.store') }}" autocomplete="off">
                @csrf
                <div class="row mb-3 d-none">
                    <label for="restaurant_id" class="col-md-4 col-form-label text-md-end">Utente</label>

                    <div class="col-md-6">
                        <input id="restaurant_id" type="text" class="form-control" name="restaurant_id" required
                            value="{{ $restaurant }}" readonly>
                        <input id="restaurant_id" type="text" class="form-control" name="restaurant_id" required
                            value="{{ $restaurant }}" readonly>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="plate-title" class="form-label">Nome: *</label>
                    <input type="text" class="form-control" id="plate-title" name="name" value="{{ old('name') }}">

                    <div id="error-name" class="card text-white bg-danger my-2 d-none">
                        <div class="card-body">
                            <ol id="input-name">
                                <!--Ci saranno gli errori-->
                            </ol>
                        </div>
                    </div>
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 ">
                    <label for="plate-description" class="form-label">Descrizione: *</label>
                    <textarea class="form-control" id="plate-description" name="description" placeholder="Minimo 10 caratteri"
                        style="height: 100px">{{ old('description') }}</textarea>
                        <div id="error-description" class="card text-white bg-danger my-2 d-none">
                            <div class="card-body">
                                <ol id="input-description">
                                    <!--Ci saranno gli errori-->
                                </ol>
                            </div>
                        </div>
                        @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="plate-ingredients" class="form-label">Ingredienti: *</label>
                    <textarea type="text" class="form-control" id="plate-ingredients" name="ingredients" placeholder="Minimo 3 caratteri"
                        style="height: 100px">{{ old('ingredients') }}</textarea>
                        <div id="error-ingredients" class="card text-white bg-danger my-3 d-none">
                            <div class="card-body">
                                <ol id="input-ingredients">
                                    <!--Ci saranno gli errori-->
                                </ol>
                            </div>
                        </div>
                        @error('ingredients')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="plate-price" class="form-label">Prezzo: *</label>
                    <input type="text" class="form-control" id="plate-price" name="price" value="{{ old('price') }}">
                    <div id="error-price" class="card text-white bg-danger my-3 d-none">
                        <div class="card-body">
                            <ol id="input-price">
                                <!--Ci saranno gli errori-->
                            </ol>
                        </div>
                    </div>
                    @error('price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="plate-visibility" class="form-label">Visibile: *</label>
                    {{-- <input type="text" class="form-control" id="plate-visibility" name="visibility" value="{{ old('visibility') }}"> --}}

                    <input type="radio" class="btn-check" name="visibility" id="success-outlined" value="1"
                        autocomplete="off">
                    <label class="btn btn-outline-success" for="success-outlined">Si</label>

                    <input type="radio" class="btn-check" name="visibility" id="danger-outlined" value="0"
                        autocomplete="off">
                    <label class="btn btn-outline-danger" for="danger-outlined">No</label>


                    @error('visibility')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="plate-image" class="form-label">Inserisci l'immagine:</label>
                    <input type="file" accept="image/jpeg, image/png, image/bmp" class="form-control" id="plate-image" name="image" value="{{ old('image') }}">
                    <div id="error-image" class="card text-white bg-danger my-3 d-none">
                        <div class="card-body">
                            <ol id="input-image">
                                <!--Ci saranno gli errori-->
                            </ol>
                        </div>
                    </div>
                    @error('image')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class=" d-flex justify-content-center align-items-center gap-2">
                    <button type="submit" id="sub-btn" class="mb-3 btn btn-outline-primary ">Crea il tuo nuovo
                        Piatto</button>
                    <button type="reset" class="mb-3 btn btn-outline-danger">Pulisci i campi</button>
                    <div class="mb-3">
                        <a href="{{ route('admin.plates.index') }}" class="btn btn-outline-success">Torna alla lista dei
                            piatti</a>
                    </div>
            </form>

        </div>
    </div>

@endsection

@section('additional-scripts')
    @vite('resources/js/plates/validation-create.js');
@endsection
