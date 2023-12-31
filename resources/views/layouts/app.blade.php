<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Cthuuh') }}</title>

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <!-- Big Shoulder display -->
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
            <!-- Fira sans -->
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            <!-- Heading -->
            {{-- @if (@isset($hero))
                {{ $hero }}
            @else
                <header class="bg-white shadow">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __($slot) }}
                    </h2>
                </header>
            @endif --}}
            
            <header>
                {{$hero}}
            </header>
            <!-- Content -->
            <main>
                {{ $content }}
            </main>

            <!-- Footer -->
            <footer>
                <x-footer/>
            </footer>
        </div>
    </body>
</html>
