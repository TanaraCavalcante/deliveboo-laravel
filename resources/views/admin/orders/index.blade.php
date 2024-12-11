@extends('layouts.app')

@section('content')
@dd($orders)
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>I tuoi ordini sono:</h1>
            </div>
            <div class="col-12">
                <div class="table-responsive">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Numero ordine</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Congome</th>
                                <th scope="col">Data</th>
                                <th scope="col">Totale</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($orders as $order)
                                <tr>
                                    <th>{{ $order->id }}</th>
                                    <td>{{ $order->first_name }}</td>
                                    <td>{{ $order->last_name }}</td>
                                    <td>{{ $order->created_at->toDayDateTimeString() }}</td>
                                    <td>{{ $order->total }}€</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.orders.show', $order) }}"
                                                class="btn btn-outline-success">Mostra</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
