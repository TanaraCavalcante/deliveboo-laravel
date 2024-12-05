@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-8 col-lg-6  p-4">
                <div class="card-body">
                    {{-- dopo inserimento modifiche per aggiunta immagine utente --}}
                    {{-- <img src="{{ $plate->image}}" class="card-img-top" alt="{{ $plate->name }}"> --}}
                    <h1 class="card-title  fw-bold">
                        Piatto: {{ $plate->name }}
                    </h1>
                    <p class="card-text">
                        Descrizione: {{ $plate->description }}
                    </p>
                    <p class="card-text">
                        Ingredienti: {{ $plate->ingredients }}
                    </p>
                    <p class="card-text">
                        Descrizione: {{ $plate->visibility }}
                    </p>
                    <h6 class="card-text fw-bold">
                        Prezzo:{{ $plate->price }}
                    </h6>
                    @if (!empty($plate->image))
                        <div>
                            <a href="{{ $plate->image }}" target="_blank">{{ $plate->image }}</a>
                        </div>
                    @else
                        <div>
                            {{-- valutare insieme se inserire una img placeholder --}}
                            <p>Immagine non disponibile</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
