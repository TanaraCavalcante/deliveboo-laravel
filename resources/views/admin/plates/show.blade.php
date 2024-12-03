@extends("layouts.app")



@section("content")
<h1>{{$plate->name}}</h1>
<div class="container">
    <div class="row justify-content-center">
     
    
        <div class="card col-12  p-4">
            
            <div class="card-body">

             

                <h1 class="card-title  fw-bold">Piatto: {{$plate->name}}</h1>

                <p class="card-title">Descrizione: {{$plate->description}}</p>

                <p class="card-title">Ingredienti: {{$plate->ingredients}}</p>

                <h6 class="card-title fw-bold">Prezzo:{{ $plate->price }}</h6>

                <h6 class="card-title fw-bold">Disponibilità:{{ $plate->visibility }}</h6>
                
                <div>Link: <a href="{{ $plate->image }}" target="_blank">{{ $plate->image }}</a></div>

          

            </div>
          </div>
      
        </div>
    </div>
</div>

@endsection