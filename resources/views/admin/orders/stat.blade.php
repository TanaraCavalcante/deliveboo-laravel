@extends('layouts.app')

@section('content')
{{-- @dd($orders) --}}
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Statistiche Ordini</h1>
        </div>
        <div class="col-12">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

@endsection

@section('additional-scripts')
<script>
    //passo gli ordini del ristorante da php a js
    let orders = @json($orders);
    // console.log(orders);

    // creo due array vuoti per le date e per i totali
    let ordersDate = [];
    let ordersTotal = [];

    // per ogni ordine...
    orders.forEach(order => {
        //...recupero le date e le inserisco nell'array
        const date = new Date(order.created_at);
        ordersDate.push(date);
        //...recupero i totali e li inserisco nell'array
        ordersTotal.push(order.total);
    });
    console.log(ordersDate, ordersTotal);
</script>

@vite('resources/js/orders/stats.js');
@endsection

