@extends("layouts.app")
@section("page-title", "Lista dei piatti")

@section("content")
<h1>Lista dei piatti:</h1>
<div class="container">

<div class="row">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="mb-3">
            <a href="{{route("admin.plates.create")}}" class="btn btn-sm btn-primary me-1 m-1">Crea un nuovo piatto!</a>

        </div>
    <div class="table-responsive">
<table class="table table-hover table-striped "> 
    
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Piatto</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Ingredienti</th>
        <th scope="col">Disponibilità</th>
        <th scope="col">Immagine</th>
        <th scope="col">Azioni</th>
        
      </tr>
    </thead>
    <tbody>
       @forelse ($plates as $index => $plate)
            
       
      <tr>
        <td>{{$plate->id}}</td>
        <td>{{$plate->name}}</td>
        <td>{{$plate->description}}</td>
        <td>{{$plate->price}}</td>
        <td>{{$plate->ingredients}}</td>
        <td>{{$plate->visibility}}</td>
        <td>{{$plate->image}}</td>
        
    
        <td>
            <a href="{{route("admin.plates.show", $plate)}}" class="btn btn-sm btn-primary m-2 me-1 m-1">Mostra</a>
              <a href="{{route("admin.plates.edit", $plate)}}" class="btn btn-sm btn-success m-2 me-1">Modifica</a>
            <form action="{{route("admin.plates.delete", $plate)}}" method="POST" class="plate-destroyer" custom-data-name="{{$plate->name}}">
              @csrf
              @method("DELETE")

            <button type="submit" class="btn btn-sm btn-warning m-2">Cancella</button>
            </form> 
          </td>
      </tr>
    
      @empty
      <tr>
        <td colspan="11">Non ci sono piatti disponibili al momento...
        </td>
      </tr>
            
      @endforelse
    </tbody>
  </table> 
</div>
</div>
</div>
            </div> 
              @endsection
                  @section("additional-scripts")
                      @vite("resources/js/posts/delete-confirmation.js");
                  @endsection