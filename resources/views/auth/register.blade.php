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

                            {{--!Select per il tipo --}}
                            <div class="row mb-3">
                                <label for="tipo" class="col-md-4 col-form-label text-md-end">Tipo de Restaurante *</label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="italiano" name="tipo[]">
                                        <label class="form-check-label" for="italiano">
                                            Italiano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Cinese" id="cinese" name="tipo[]">
                                        <label class="form-check-label" for="cinese">
                                            Cinese
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Messicano" id="messicano" name="tipo[]">
                                        <label class="form-check-label" for="messicano">
                                            Messicano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Indiano" id="indiano" name="tipo[]">
                                        <label class="form-check-label" for="indiano">
                                            Indiano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Giapponese" id="giapponese" name="tipo[]">
                                        <label class="form-check-label" for="giapponese">
                                            Giapponese
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Vegetariano" id="vegetariano" name="tipo[]">
                                        <label class="form-check-label" for="vegetariano">
                                            Vegetariano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Vegano" id="vegano" name="tipo[]">
                                        <label class="form-check-label" for="vegano">
                                            Vegano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Fast Food" id="fast_food" name="tipo[]">
                                        <label class="form-check-label" for="fast_food">
                                            Fast Food
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Mediterraneo" id="mediterraneo" name="tipo[]">
                                        <label class="form-check-label" for="mediterraneo">
                                            Mediterrâneo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Francese" id="francese" name="tipo[]">
                                        <label class="form-check-label" for="francese">
                                            Francês
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Americano" id="americano" name="tipo[]">
                                        <label class="form-check-label" for="americano">
                                            Americano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Thailandese" id="thailandese" name="tipo[]">
                                        <label class="form-check-label" for="thailandese">
                                            Tailandês
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Spagnolo" id="spagnolo" name="tipo[]">
                                        <label class="form-check-label" for="spagnolo">
                                            Espanhol
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Tedesco" id="tedesco" name="tipo[]">
                                        <label class="form-check-label" for="tedesco">
                                            Alemão
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Fusion" id="fusion" name="tipo[]">
                                        <label class="form-check-label" for="fusion">
                                            Fusion
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Mediorientale" id="mediorientale" name="tipo[]">
                                        <label class="form-check-label" for="mediorientale">
                                            Médio Oriente
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Africano" id="africano" name="tipo[]">
                                        <label class="form-check-label" for="africano">
                                            Africano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Coreano" id="coreano" name="tipo[]">
                                        <label class="form-check-label" for="coreano">
                                            Coreano
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Greco" id="greco" name="tipo[]">
                                        <label class="form-check-label" for="greco">
                                            Grego
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Brasiliano" id="brasiliano" name="tipo[]">
                                        <label class="form-check-label" for="brasiliano">
                                            Brasileiro
                                        </label>
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
