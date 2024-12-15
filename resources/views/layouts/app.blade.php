<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DeliveBoo</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .bg-orange {
            background-color: #fc7a1e;

            
        }
        .btn-orangered{
            background-color: #f24c00;
            border-radius: 15px;
      
            
        }
        .logo{
            height: 70px;
        }
        .navbar-toggler {
    background-color:white; 
    border-color: #f24c00;}
    
   
    </style>
</head>
</head>

<body>
    <div id="app">
        <nav class="navbar  navbar-expand-md navbar-light  shadow bg-orange">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo pe-3" src="{{asset('Logo.jpeg')}}" alt="logo">
                </a>
                <a class="navbar-brand text-white fw-bold me-5" href="{{ url('/') }}">
                    DeliveBoo
                </a>
                <button class="navbar-toggler" type="button " data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto justify-content-center">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-white"
                                    href="{{ route('admin.plates.index') }}">{{ __('I miei piatti') }}</a>
                            </li>
                            <li class="nav-item ms-3 ">
                                <a class="nav-link fw-bold text-white"
                                    href="{{ route('admin.orders.index') }}">{{ __('I miei ordini') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-white"
                                    href="{{ route('admin.orders.stat') }}">{{ __('Le mie statistiche') }}</a>
                            </li>
                        @endauth
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <button type="button" class="btn btn-sm btn-orangered shadow text-white m-2 me-1"  <a class="nav-link text-center" href="{{ route('login') }}">{{ __('Accedi') }}</a></button>
                                </a> </button>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <button type="button" class="btn btn-sm btn-orangered shadow text-white m-2 me-1"   <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                </li> </button>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bold text-white" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>

@yield('additional-scripts')
</html>
