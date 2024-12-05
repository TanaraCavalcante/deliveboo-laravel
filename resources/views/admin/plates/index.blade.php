@extends('layouts.app')
@section('page-title', 'Lista dei piatti')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="m-3">Lista dei piatti:</h1>
            </div>
            <div class="col-12">
                <div class="alert alert-success tex-center">
                    <h3>Benvenuto nel tuo pannello di controllo</h3>
                    <p>Inserisci i tuoi piatti cliccando il bottone qui in basso</p>
                    <a href="{{ route('admin.plates.create') }}" class="btn btn-sm btn-outline-primary me-1 m-1">Crea un nuovo
                        piatto!</a>
                </div>
                <div class="mb-3">
                    <a href="{{ route('admin.plates.create') }}" class="btn btn-sm btn-outline-primary me-1 m-1">Crea un nuovo
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
                                    <td>{{ $plate->visibility }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.plates.show', $plate) }}"
                                            class="btn btn-sm btn-outline-info m-2 me-1">Mostra</a>
                                        <a href="{{ route('admin.plates.edit', $plate) }}"
                                            class="btn btn-sm btn-outline-success m-2 me-1">Modifica</a>
                                        <form action="{{ route('admin.plates.delete', $plate) }}" method="POST"
                                            class="plate-destroyer" custom-data-name="{{ $plate->name }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-outline-warning m-2">Cancella</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional-scripts')
    @vite('resources/js/plates/delete-confirmation.js');
@endsection
