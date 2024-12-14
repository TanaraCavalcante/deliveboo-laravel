<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <!-- Styles -->
        <style>
            body {
                background-color: #fc7a1e
            }
            a {
                text-decoration: none;
                color: white;
              
            }

            img {
                height: 15rem;
            }
            .center {
                height: 100vh;
            }
        </style>
    </head>

    <body class="antialiased">
        <div>
            @if (Route::has('login'))
            <div class="d-flex justify-content-center align-items-center center flex-column">
                <img src="{{asset('gufetto.png')}}" alt="logo">
                    @auth
                        <a href="{{ url('/home') }}" class="fs-1 fw-bold">Home</a>
                    @else
                    <button type="button" class="btn btn-primary mb-3 mt-3 fs-5"><a href="{{ route('login') }}">Accedi</a></button>

                        @if (Route::has('register'))
                           <button type="button" class="btn btn-primary   fs-5"> <a href="{{ route('register') }}">Registrati</a></button>
                        @endif
                    @endauth
                </div>
            @endif
                </div>
            </div>
        </div>
    </body>
</html>
