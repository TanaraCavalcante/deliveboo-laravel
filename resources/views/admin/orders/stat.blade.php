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

    let rawDatas = [];
    orders.forEach(element => {
        let singleData = {
            year: new Date((element.created_at)).getFullYear(),
            total: element.total
        }
        rawDatas.push(singleData);
    });
    console.log(rawDatas);

    let years = [];

    rawDatas.forEach(data => {

    });



</script>

@vite('resources/js/orders/stats.js');
@endsection

