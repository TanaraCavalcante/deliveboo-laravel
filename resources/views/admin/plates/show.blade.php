@extends('layouts.app')



@section("content")
<h1>{{$plate->name}}</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-12 col-md-8 col-lg-6 p-4 my-5">
            <div class="card-body">
                <h1 class="card-title  fw-bold"> {{ $plate->name }}</h1>
                <div class="card" style="width: 18rem;">
                <img src="{{asset("/storage/" . $plate->image)}}" alt="{{$plate->name}}" class="card-img-top">
                </div>
                <p class="card-title">{{ $plate->description }}</p>
                <p class="card-title ">Prezzo: <strong>€ {{ $plate->price }}</strong></p>
            </div>
        </div>
    </div>

</div>

@endsection
