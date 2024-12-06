@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-8 col-lg-6 p-4">
                <div class="card-body">
                    <img src="{{asset("/storage/" . $plate->image)}}" class="card-img-top" alt="{{ $plate->name }}">
                    <h1 class="card-title text-center fw-bold">
                        Piatto: {{ $plate->name }}
                    </h1>
                    <p class="card-text">
                        Descrizione piatto: {{ $plate->description }}
                    </p>
                    <p class="card-text">
                        Ingredienti: {{ $plate->ingredients }}
                    </p>
                    <p class="card-text">
                        Disponibilità del piatto: {{ $plate->visibility }}
                    </p>
                    <h6 class="card-text fw-bold">
                        Prezzo: <strong>€ {{ $plate->price }}
                    </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
