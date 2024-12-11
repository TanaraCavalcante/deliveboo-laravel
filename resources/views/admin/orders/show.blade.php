@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center text-center">
                <!--Inizio card singolo ordine-->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Numero Ordine: <strong>{{ $order->id }}</strong></h5>
                        <p class="card-text">Ordinato da: <strong>{{ $order->first_name }} {{ $order->last_name }}</strong>
                        </p>
                        <p class="card-text">Ordinato il: <strong>{{ $order->created_at->toDayDateTimeString() }}</strong></p>
                        <p class="card-text">Da consegnare all'indirizzo: <strong>{{ $order->address }}</strong></p>
                        <p class="card-text">Totale dell'ordine: <strong>{{ $order->total }}€</strong></p>
                    </div>
                    <div class="card-body">
                    </div>
                    <!--Lista dei piatti-->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-primary">
                            <h5>Lista piatti ordinati:</h5>
                        </li>
                        <li class="list-group-item list-group-item-secondary">Piatto 1</li>
                        <li class="list-group-item list-group-item-secondary">Piatto 2</li>
                        <li class="list-group-item list-group-item-secondary">Piatto 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
