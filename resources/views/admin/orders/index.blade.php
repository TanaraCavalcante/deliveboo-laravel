@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>I tuoi ordini sono:</h1>
        </div>
        <div class="col-12">
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
                    @foreach ($orders as $order )
                    <tr>
                        <th>{{$order->id}}</th>
                        <td>{{$order->first_name}}</td>
                        <td>{{$order->last_name}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->total}}€</td>
                        <td>
                            <div>
                                <button class="btn btn-outline-success"><a href="{{route('admin.orders.show', $order)}}">Mostra</a></button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
