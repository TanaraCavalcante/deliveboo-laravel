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
                    {{-- Inserire foreach --}}
                  <tr>
                    <th>Id Ordine</th>
                    <td>Nome Ordinatore</td>
                    <td>Cognome</td>
                    <td>Data</td>
                    <td>Totale Ordine</td>
                    <td>
                        <div>
                            <button class="btn btn-outline-success"><a href="{{route('admin.orders.show', $orders)}}">Mostra</a></button>
                            {{-- <button class="btn btn-outline-danger">Elimina</button> --}}
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
