@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrati') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome Attività') }}
                                    *</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Indirizzo Email') }}
                                    *</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}
                                    *</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Conferma Password') }} *</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="indirizzo-attività" class="col-md-4 col-form-label text-md-end">Indirizzo
                                    attività *</label>

                                <div class="col-md-6">
                                    <input id="indirizzo-attività" type="text" class="form-control" name="address"
                                        required value="{{ old('address') }}">
                                    @error('address')
                                        <div class="alert alert-danger m-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="piva" class="col-md-4 col-form-label text-md-end">Partita IVA *</label>

                                <div class="col-md-6">
                                    <input id="piva" type="text" class="form-control" name="piva" required
                                        value="{{ old('piva') }}">
                                    @error('piva')
                                        <div class="alert alert-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{--!Checkbox per il tipo --}}
                            <div class="row mb-3">
                                <div for="tipo" class="col-md-4 col-form-label text-md-end">Tipo de Restaurante *</div>
                                     <div class="col-md-3">
                                         @foreach ($types as $type)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="tipo_{{ $type->id }}" name="tipo[]" value="{{ $type->id }}">
                                            <label class="form-check-label" for="tipo_{{ $type->id }}">
                                                {{ $type->name }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrati') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
