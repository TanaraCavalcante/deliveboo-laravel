@extends('layouts.app')

@section('content')
{{-- @dd($plates) --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center text-center">
                <!--Inizio card singolo ordine-->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Numero Ordine: <strong>{{ $order->id }}</strong></h5>
                        <p class="card-text">Ordinato da: <strong>{{ $order->first_name }} {{ $order->last_name}}</strong></p>
                        <p class="card-text">Contatto: <strong>{{ $order->phone_number}}</strong></p>
                        <p class="card-text">Ordinato il: <strong>{{ $order->created_at->format('d M Y H:i') }}</strong></p>
                        <p class="card-text">Da consegnare all'indirizzo: <strong>{{ $order->address }}</strong></p>
                    </div>
                    <!--Lista dei piatti-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nome Piatto</th>
                                        <th scope="col">Quantità</th>
                                        <th scope="col">Prezzo del piatto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plates as $plate)
                                    <tr>
                                        <td>{{$plate->name}}</td>
                                        <td>{{$plate->pivot->quantity}}</td>
                                        <td>{{$plate->price}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th scope="row">Totale</th>
                                        <td colspan="2">€ {{$order->total}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center m-3">
                <a href="{{route('admin.orders.index')}}" class="btn btn-outline-primary">Torna alla lista completa degli ordini</a>
            </div>
        </div>
    </div>
@endsection
