@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="m-3">Hai un totale di
                    {{ count($orders) }}
                    {{ count($orders) === 1 ? 'ordine' : 'ordini' }}
                </h1>
            </div>
            <div class="col-12">
                <div class="table-responsive">

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Numero ordine</th>
                                <th scope="col">Data</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-Mail</th>
                                <th scope="col">Totale</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <th>{{ $order->id }}</th>
                                    <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                                    <td>{{ $order->first_name }} {{ $order->last_name }}</td>
                                    <td>{{ $order->email }} </td>
                                    <td>{{ $order->total }}€</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.orders.show', $order) }}"
                                                class="btn btn-outline-success">Mostra</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="{{ route('admin.orders.stat')}}" class="btn btn-info">Vedi Statistiche Ordini</a>
                        </div>
                        <!-- Navigazione della pagina -->
                        <div>
                            {{ $orders->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
