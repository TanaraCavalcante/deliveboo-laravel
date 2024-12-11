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
                    </div>
                    <!--Lista dei piatti-->
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nome Piatto</th>
                                    <th scope="col">Quantità</th>
                                    <th scope="col">Prezzo del piatto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Piatto 1</td>
                                    <td>Quantità piatto 1</td>
                                    <td>Prezzo Piatto 1</td>
                                </tr>
                                <tr>
                                    <th scope="row">Totale</th>
                                    <td colspan="2">{{$order->total}}€</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center m-3">
                <a href="{{route('admin.orders.index')}}" class="btn btn-outline-primary">Torna alla lista completa degli ordini</a>
            </div>
        </div>
    </div>
@endsection
