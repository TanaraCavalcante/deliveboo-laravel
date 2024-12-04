@extends('layouts.app')



@section("content")
<h1>{{$plate->name}}</h1>
<div class="container">
    <div class="row justify-content-center">


        <div class="card col-12 col-md-8 col-lg-6  p-4">

            <div class="card-body">



                    <h1 class="card-title  fw-bold">Piatto: {{ $plate->name }}</h1>

                    <p class="card-title">Descrizione: {{ $plate->description }}</p>

                <h6 class="card-title fw-bold">Prezzo:{{ $plate->price }}</h6>

                <div>Link: <a href="{{ $plate->image }}" target="_blank">{{ $plate->image }}</a></div>





            </div>
          </div>

        </div>
    </div>

</div>

@endsection
