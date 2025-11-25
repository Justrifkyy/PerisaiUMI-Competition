<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LONTARA 2025') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="icon" href="{{ asset('storage/img/logoLontara.png') }}" type="image/png">
        <link rel="shortcut icon" href="{{ asset('storage/img/logoLontara.png') }}" type="image/png">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 bg-gray-100">
        
        <div class="flex flex-col min-h-screen">
            
            @include('layouts.navigation')

            <main class="flex-grow">
                {{ $slot }}
            </main>

            <footer class="relative bg-black pt-5 pb-10 overflow-hidden border-t border-gray-800">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 via-transparent to-yellow-500/5 pointer-events-none"></div>

                <div class="absolute inset-0 opacity-10 pointer-events-none"
                    style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px);
                    background-size: 50px 50px;">
                </div>

                <div class="relative max-w-7xl mx-auto px-1">

                    <div class="text-center space-y-6">
                        <img src="{{ asset('storage/img/logoLontara.png') }}"
                            class="mx-auto w-20 opacity-90 hover:opacity-100 transition-all duration-300" alt="LONTARA Logo">

                        <h2 class="text-3xl lg:text-5xl font-black bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-yellow-600">
                            LONTARA 2025 KOMPETISI
                        </h2>

                        <p class="text-gray-300 text-base lg:text-lg max-w-2xl mx-auto">
                            Merayakan inovasi, kreativitas, dan kolaborasi tanpa batas.
                        </p>
                    </div>

                    <div class="mt-12 mb-10 h-px bg-yellow-500/20 w-full"></div>

                    <div class="flex flex-col lg:flex-row items-center justify-between gap-6">

                        <p class="text-gray-500 text-sm">
                            &copy; {{ date('Y') }} LONTARA 2025. All Rights Reserved.
                        </p>

                        <div class="flex items-center gap-6 text-sm font-semibold text-gray-300">
                            <a href="{{ route('about') }}" class="hover:text-yellow-400 transition-all">About</a>
                            <a href="#" class="hover:text-yellow-400 transition-all">Juri</a>
                            <a href="mailto:panitia@lontara2025.com" class="hover:text-yellow-400 transition-all">Contact</a>
                        </div>

                        <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                            </span>
                            <span class="text-yellow-400 font-bold text-sm tracking-wider uppercase">Active</span>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
        
        @stack('scripts')
    </body>
</html>