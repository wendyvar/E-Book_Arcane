@extends('layouts.app')
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

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Adding a custom class for the background image */
        .custom-bg-image {
            background-image: url('https://assets-global.website-files.com/658fe5479f51f4557faedb3e/659842b3dde25283ab73b8ca_63fc35cc10f5d67e9d49e960_16%2520LP2%2520Press%2520Release%2520-%2520Blog.jpeg'); /* Example placeholder image */
        }
    </style>

</head>

<body class="font-sans antialiased">
@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<section>
<div class="relative min-h-screen bg-cover bg-center bg-no-repeat overflow-hidden custom-bg-image absolute inset-0 bg-black bg-opacity-50">
    <div class="relative min-h-screen bg-cover bg-center bg-no-repeat overflow-hidden custom-bg-image">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <!-- Content goes here -->
        <div class="relative z-10 p-8 text-white">
            <!-- Registration Text -->
            <div class="max-w-md mx-auto mt-10 text-center">
                <p class="text-lg text-white-700">Login om jou e-books te lezen.</p>
            </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto mt-10 px-8 py-6 bg-white shadow-md rounded-lg">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-gray-700">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-gray-700">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Buttons and Links -->
        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring focus:ring-indigo-700 focus:ring-opacity-50">
                {{ __('Log in') }}
            </button>
        </div>
    </form>

</div>
    </div>
</div>
</section>
</body>
@endsection
</body>
</html>

