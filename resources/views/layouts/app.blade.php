<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;500&family=Noto+Sans+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('link')

    @stack('custom-style')
    <style>
        .navbar-brand {
            font-family: 'Assistant', sans-serif;
            color: #083AA9;
            font-size: 22px;
        }

        .nav-color a {
            color: #083AA9;
            text-decoration: none;
            font-family: 'Assistant', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
        }

        .nav-color a:hover {
            border-bottom: 3px solid #083AA9;
        }

        .nav-color a.active {
            border-bottom: 3px solid #083AA9;
        }

        .btn-login {
            width: 100.71px;
            height: 35.71px;
            background: #083AA9;
            border-radius: 20px;

            font-family: 'Assistant', sans-serif;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-login:hover {
            background: #021B52;
        }

    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav nav-color ms-auto fw-normal">
                        <li class="nav-item"><a class="active" href="" href="#">Home</a></li>
                        <li class="nav-item ms-3" href="#"><a href="" href="#">Produk</a></li>
                        <li class="nav-item ms-3" href="#"><a href="" href="#">Portofolio</a></li>
                        <li class="nav-item ms-3" href="#"><a href="" href="#">Pesanan</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link btn-login text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif


                        <!-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif -->
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    @stack('custom-script')

    @stack('link-script')
</body>

</html>
