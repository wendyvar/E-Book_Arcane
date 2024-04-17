<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'E-Book Arcane') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- custom css file link  -->


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gradient-to-r from-blue-500 to-blue-800">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
            <script src="https://cdn.tailwindcss.com"></script>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>

   <footer class="bg-gray-900 text-gray-300 py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <!-- Left side content -->
                <p>&copy; 2024 E-Book Arcane.</p>

                <!-- Right side content -->
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-gray-400">E-Books</a></li>
                    <li><a href="#" class="hover:text-gray-400">Jouw account</a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
