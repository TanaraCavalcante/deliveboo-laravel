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
                background-color: #4fae5a
            }
            a {
                text-decoration: none;
                color: black;
                text-decoration: underline;
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
                <img src="{{asset('Food-Delivery-Service-PNG-High-Quality-Image.png')}}" alt="logo">
                    @auth
                        <a href="{{ url('/home') }}" class="fs-1 fw-bold">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="me-2 fs-1 fw-bold">Accedi</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="fs-1 fw-bold">Registrati</a>
                        @endif
                    @endauth
                </div>
            @endif
                </div>
            </div>
        </div>
    </body>
</html>
