@extends("layouts.app")



@section("content")

<div class="container">
    <div class="row justify-content-center">
     
    
        <div class="col-12 card m-3">
            
            <div class="card-body">

             

                <h1 class="card-title  fw-bold">Piatto: {{$plate->name}}</h1>

                <p class="card-title">Descrizione: {{$plate->description}}</p>

                <h6 class="card-title fw-bold">Prezzo: {{ $plate->price }} €</h6>
                
                <div>Link: <a href="{{ $plate->image }}" target="_blank">{{ $plate->image }}</a></div>

                

          

            </div>
          </div>
      
        </div>
        <div class="mb-3">
            <a href="{{route("admin.plates.index")}}" class="btn btn-sm btn-outline-primary me-1 m-1">Torna alla lista dei piatti</a>
    
        </div>
    </div>
    
</div>

@endsection