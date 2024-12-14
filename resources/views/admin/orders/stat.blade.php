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
                month: new Date((element.created_at)).getMonth(),
                total: element.total
            }
            rawDatas.push(singleData);
            console.log('month', singleData.month)
        });

        let monthlyTotal = 0;
        const sum = rawDatas.map(data => parseFloat(data.total))
        for (let i = 0; i < sum.length; i++) {
            const element = sum[i];
            monthlyTotal += element;
        }

        console.log('rawDAtas:', rawDatas)
        console.log('monthly :', monthlyTotal);
    </script>

    @vite('resources/js/orders/stats.js');
@endsection
