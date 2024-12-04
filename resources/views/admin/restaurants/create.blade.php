@extends('layouts.app')

@section('content')

<div class="row-col text-center mb-3">
    <h1>Crea il tuo ristorante</h1>
</div>

<!-- Inizio informazioni ristorante -->

<form action="{{route('restaurant.store')}}" method="POST">
    @csrf

    <div class="row mb-3">
        <label for="user_id" class="col-md-4 col-form-label text-md-end">Nome Utente</label>

        @dump($users)
        <div class="col-md-6">
            <input id="user_id" type="text" class="form-control" name="user_id" required>
        </div>
    </div>


    <div class="row mb-3">
        <label for="nome-attività" class="col-md-4 col-form-label text-md-end">Nome Attività *</label>

        <div class="col-md-6">
            <input id="nome-attività" type="text" class="form-control" name="nome-attività" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="indirizzo-attività" class="col-md-4 col-form-label text-md-end">Indirizzo attività *</label>

        <div class="col-md-6">
            <input id="indirizzo-attività" type="text" class="form-control" name="indirizzo-attività" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="partita-iva" class="col-md-4 col-form-label text-md-end">Partita IVA *</label>

        <div class="col-md-6">
            <input id="partita-iva" type="text" class="form-control" name="partita-iva" required>
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
