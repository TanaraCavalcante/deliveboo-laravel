@extends('layouts.app')

@section('content')
    <script type="text/javascript">
        const jsTypes = <?php echo json_encode($types); ?>;
    </script>

    <div class="container">
        <div class="row justify-content-center">'

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
                                        value="{{ old('name') }}" required autocomplete="off">

                                    <!-- Sezione Errori Specifica -->
                                    <div id="error-name" class="card text-white bg-danger my-1 d-none">
                                        <div class="card-body p-2">
                                            <ol id="input-name" class="m-0">
                                                <!--Ci saranno gli errori-->
                                            </ol>
                                        </div>
                                    </div>

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
                                        value="{{ old('email') }}" required autocomplete="off">

                                    <!-- Sezione Errori Specifica -->
                                    <div id="error-email" class="card text-white bg-danger my-1 d-none">
                                        <div class="card-body p-2">
                                            <ol id="input-email" class="m-0">
                                                <!--Ci saranno gli errori-->
                                            </ol>
                                        </div>
                                    </div>

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

                                    <!-- Sezione Errori Specifica -->
                                    <div id="error-password" class="card text-white bg-danger my-1 d-none">
                                        <div class="card-body p-2">
                                            <ol id="input-password" class="m-0">
                                                <!--Ci saranno gli errori-->
                                            </ol>
                                        </div>
                                    </div>

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

                                    <!-- Sezione Errori Specifica -->
                                    <div id="error-confirm" class="card text-white bg-danger my-1 d-none">
                                        <div class="card-body p-2">
                                            <ol id="input-confirm" class="m-0">
                                                <!--Ci saranno gli errori-->
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="indirizzo-attività" class="col-md-4 col-form-label text-md-end">Indirizzo
                                    attività *</label>

                                <div class="col-md-6">
                                    <input id="indirizzo-attività" type="text" class="form-control" name="address"
                                        required value="{{ old('address') }}" autocomplete="off">

                                    <!-- Sezione Errori Specifica -->
                                    <div id="error-address" class="card text-white bg-danger my-1 d-none">
                                        <div class="card-body p-2">
                                            <ol id="input-address" class="m-0">
                                                <!--Ci saranno gli errori-->
                                            </ol>
                                        </div>
                                    </div>

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
                                        value="{{ old('piva') }}" autocomplete="off">

                                    <!-- Sezione Errori Specifica -->
                                    <div id="error-piva" class="card text-white bg-danger my-1 d-none">
                                        <div class="card-body p-2">
                                            <ol id="input-piva" class="m-0">
                                                <!--Ci saranno gli errori-->
                                            </ol>
                                        </div>
                                    </div>

                                    @error('piva')
                                        <div class="alert alert-danger mt-3">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- !Checkbox per il tipo --}}
                            <div class="row mb-3">
                                <div for="tipo" class="col-md-4 col-form-label text-md-end">Tipo di Ristorante *</div>
                                <div class="col-md-3">
                                    @foreach ($types as $type)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="type_{{ $type->id }}"
                                                name="type[]" value="{{ $type->id }}">
                                            <label class="form-check-label" for="type_{{ $type->id }}">
                                                {{ $type->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                </div>
                                <div class="row justify-content-center mb-3">
                                        <div id="error-type" class="col-md-5 card text-white bg-danger my-1 d-none">
                                            <div class="card-body p-2">
                                                <ol id="input-type" class="m-0">
                                                    <!--Ci saranno gli errori-->
                                                </ol>
                                            </div>
                                        </div>
                                </div>
                                <!-- Sezione Errori Specifica -->
                        </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" id="submit-btn" class="btn btn-primary">
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

@section('additional-scripts')
    @vite('resources/js/registration/validation.js')
@endsection
