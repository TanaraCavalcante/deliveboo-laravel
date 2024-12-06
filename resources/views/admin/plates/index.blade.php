@extends('layouts.app')
@section('page-title', 'Lista dei piatti')

@section('content')
    <h1 class="m-3">Lista dei piatti:</h1>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
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
                                <th scope="col" class="d-none d-lg-table-cell">Descrizione</th>
                                <th scope="col">Prezzo</th>
                                <th scope="col" class="d-none d-sm-table-cell">Ingredienti</th>
                                <th scope="col">Disponibilità</th>
                                <th scope="col" class="d-none d-lg-table-cell">Url immagine</th>
                                <th scope="col">Azioni</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($plates as $index => $plate)
                                <tr>
                                    <td>{{ $plate->id }}</td>
                                    <td>{{ $plate->name }}</td>
                                    <td class="d-none d-lg-table-cell">{{ $plate->description }}</td>
                                    <td>{{ $plate->price }} </td>
                                    <td class="d-none d-sm-table-cell">{{ $plate->ingredients }}</td>
                                    <td>{{ $plate->visibility }}</td>
                                    <td class="d-none d-lg-table-cell">{{ $plate->image }}</td>


                                    <td>
                                        <a href="{{ route('admin.plates.show', $plate) }}"
                                            class="btn btn-sm btn-outline-success m-2 me-1">Mostra</a>
                                        <a href="{{ route('admin.plates.edit', $plate) }}"
                                            class="btn btn-sm btn-outline-warning m-2 me-1">Modifica</a>

                                        {{-- !Modal_delete_confirmation --}}
                                        <div class="modal" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Modal body text goes here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <form action="{{ route('admin.plates.delete', $plate, 'id') }}" method="POST"
                                            class="plate-destroyer" custom-data-name="{{ $plate->name }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-sm btn-outline-danger delete-plate-btn m-2">Cancella</button>
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

@section('additional-scripts')
    @vite('resources/js/plates/delete-confirmation.js');
    <script></script>
@endsection
