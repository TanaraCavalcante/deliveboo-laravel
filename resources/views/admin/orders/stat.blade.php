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
    {{-- @vite('resources/js/orders/stats.js'); --}}
    <script>
        let orders = @json($orders);
        console.log(orders);
    </script>
@endsection

