<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>Second hand, Second life</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .cabecalho{
            background-color: #56bec3!important;
        }
        .text-cabe{
            color: white!important;
        }

        .img_logo{
            width: 80px;
            height: 80px;
        }

        .pages{
            display: block;
            color: white!important;
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            float: left;
            text-align: center;
            margin-left: 20px;
        }

        #navbarDropdown{
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            color: white!important;
        }
        .dropdown-menu{
            width: 150px;
            text-align: right;
            background-color: rgba(250,250,250);
            border: none;
        }

        .dropdown-item{
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            border-bottom: 1px solid #56bec3;
            color: rgb(150,150,150)!important;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm cabecalho">
            <div class="container">
                <a class="navbar-brand text-cabe" href="{{ url('/') }}">
                    {{--{ config('app.name', 'Laravel') }}--}}
                    <img class="img_logo" src="/images/logo_api_v2.png">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link pages" href="{{ url('/home') }}">Home</a>
                            <a class="nav-link pages" href="{{url('/list')}}">Ver Roupas</a>
                            <a class="nav-link pages" href="{{url('/insert-roupa')}}">Inserir Nova Roupa</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->role_id < 4)
                                        <a class="dropdown-item" href="{{ route('admin') }}">Backoffice</a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('perfil') }}">Perfil</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
</html>
