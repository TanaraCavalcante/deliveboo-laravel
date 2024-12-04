@extends('layouts.app')

@section('content')

<div class="row-col text-center mb-3">
    <h1>Crea il tuo ristorante</h1>
</div>

<!-- Inizio informazioni ristorante -->


<form action="{{route('restaurant.store')}}" method="POST">
    @csrf


    {{-- @dump($user) --}}

    <div class="row mb-3 d-none">
        <label for="user_id" class="col-md-4 col-form-label text-md-end">Utente</label>

        <div class="col-md-6">
            <input id="user_id" type="text" class="form-control" name="user_id" required value="{{$user->id}}" readonly>
        </div>
    </div>


    <div class="row mb-3">
        <label for="nome-attività" class="col-md-4 col-form-label text-md-end">Nome Attività *</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" required>
            @error("name")
            <div class="alert alert-danger mt-3">
                {{$message}}
            </div>
            @enderror
        </div>
    </div>



    <div class="row mb-3">
        <label for="indirizzo-attività" class="col-md-4 col-form-label text-md-end">Indirizzo attività *</label>

        <div class="col-md-6">
            <input id="indirizzo-attività" type="text" class="form-control" name="address" required>
            @error("address")
            <div class="alert alert-danger m-3">
                {{$message}}
            </div>
            @enderror
        </div>
    </div>


    <div class="row mb-3">
        <label for="piva" class="col-md-4 col-form-label text-md-end">Partita IVA *</label>

        <div class="col-md-6">
            <input id="piva" type="text" class="form-control" name="piva" required>
            @error("piva")
            <div class="alert alert-danger mt-3">
                {{$message}}
            </div>
            @enderror
        </div>
    </div>


    <div class="row text-center">
        <div class="col">
            <button type="submit" class="btn btn-primary">
                Crea
            </button>
        </div>
    </div>
</form>

@endsection
