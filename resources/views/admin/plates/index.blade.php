@extends('layouts.app')
@section('page-title', 'Lista dei piatti')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="m-3">Lista dei piatti:</h1>
            </div>
            <div class="col-12 text-center">
                @if (count($plates) === 0)
                    <div class="alert alert-success tex-center">
                        <h3>Benvenuto nel tuo pannello di controllo</h3>
                        <p>Inserisci i tuoi piatti cliccando il bottone qui in basso</p>
                        <a href="{{ route('admin.plates.create') }}" class="btn btn-sm btn-outline-primary me-1 m-1">Crea un
                            nuovo
                            piatto!</a>
                    </div>
                @else
                    <div class="mb-3">
                        <a href="{{ route('admin.plates.create') }}" class="btn btn-sm btn-outline-primary me-1 m-1">Crea un
                            nuovo
                            piatto!</a>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table  table-hover table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Piatto</th>
                                    <th scope="col">Prezzo</th>
                                    <th scope="col">Disponibilità</th>
                                    <th scope="col">Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plates as $index => $plate)
                                    <tr>
                                        <td>{{ $plate->id }}</td>
                                        <td>{{ $plate->name }}</td>
                                        <td>{{ $plate->price }} </td>
                                        <td>
                                            @if ( $plate->visibility)
                                                Disponibile
                                            @else
                                                Non Disponibile
                                            @endif
                                        </td>
                                       {{-- *Inizia qui --}}
                                        <td>
                                            <a href="{{ route('admin.plates.show', $plate) }}" class="btn btn-sm btn-outline-success m-2 me-1">Mostra</a>
                                            <a href="{{ route('admin.plates.edit', $plate) }}" class="btn btn-sm btn-outline-warning m-2 me-1">Modifica</a>
                                            <button type="button" class="btn btn-sm btn-outline-danger delete" data-id="{{ $plate->id }}" data-name="{{ $plate->name }}" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                                Cancella
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Non ci sono piatti disponibili al momento...</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>

    {{-- !Modale di conferma di cancellazione --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Conferma di cancellazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
                </div>
                <div class="modal-body">
                    <p>Sei sicuro di voler eliminare il piatto <strong id="plateName"></strong>?</p>
                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="plateId">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Annulla</button>
                    <button type="submit" class="btn btn-danger" form="deleteForm">Elimina</button>
                </div>
            </div>
        </div>
    </div>

    {{-- !Fine modale di conferma di cancellazione --}}

    {{-- *finisce qui --}}
@endsection


@section('additional-scripts')
    @vite('resources/js/posts/delete-confirmation.js');
@endsection
