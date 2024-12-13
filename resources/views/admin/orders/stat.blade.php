@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Statistiche Ordini</h1>
        </div>
        <div class="col-12">
            <div id="myChart"></div>
        </div>
    </div>
</div>

@endsection

@section('additional-scripts')
    @vite('resources/js/orders/stats.js');
@endsection
