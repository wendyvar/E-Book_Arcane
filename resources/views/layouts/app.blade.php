<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
   

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom Styles -->
    <style>
        .dropdown-menu a:hover {
            background-color: black;
        }

        /* Custom media query styles */
        @media only screen and (max-width: 600px) { .responsive-text { font-size: 14px; }}
        @media only screen and (min-width: 768px) { .responsive-text { font-size: 16px; }}
        @media only screen and (min-width: 992px) { .responsive-text { font-size: 18px; }}
        @media only screen and (min-width: 1200px) { .responsive-text { font-size: 20px; }}
    </style>
</head>
<body>
<main class="py-4">
    @yield('content')

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-light gradient-custom" style="background-color: #e0455f; background-image: linear-gradient(147deg, #e0455f 0%, #44000b 74%);">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#" style="background-image: url('https://www.formula1.com/etc/designs/fom-website/images/f1_logo.svg'); background-size: contain; background-repeat: no-repeat; width: 100px; height: 20px;"></a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">{{ __('Welcome') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('') }}">{{ __('') }}</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @guest
                        <!-- Guest Links -->
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <!-- Authenticated User Dropdown -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="background-color: #380000; color: white;">
                                <!-- Dropdown Links -->
                                <a class="dropdown-item" style="color: white;" href="{{ route('profiles.index') }}">{{ __('Profiles') }}</a>
                                <a class="dropdown-item" style="color: white;" href="{{ route('races.index') }}">{{ __('Races') }}</a>
                                <a class="dropdown-item" style="color: white;" href="{{ route('race-results.index') }}">{{ __('Race Results') }}</a>
                                @if(Auth::user()->getIsAdmin())
                                    <a class="dropdown-item" style= "color: white;"  href="{{ route('admin.dashboard') }}">
                                        {{ __('Admin Dashboard') }}
                                        @endif
                                        <a class="dropdown-item" style="color: white;" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</main>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<footer style="position: fixed; bottom: 0; width: 100%; text-align: center; background-color: #4d4855; background-image: linear-gradient(147deg, #4d4855 0%, #000000 74%);">
    <div style="color: white; padding: 15px;">
        © 2024 Copyright:
        <a class="text-light" href="https://www.windesheim.nl/opleidingen/voltijd/ad/software-development/">4-Wendy, Emma, Kim, Joel</a>
    </div>
</footer>
</body>
</html>
