<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon LONTARA -->
    <link rel="icon" href="{{ asset('storage/img/logoLontara.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('storage/img/logoLontara.png') }}" type="image/png">

    <title>{{ config('app.name', 'LONTARA 2025') }} - Admin Panel</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Cropper.js CSS & JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
</head>
<body class="font-sans antialiased bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-72 bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white flex flex-col shadow-2xl">
            <!-- Logo & Brand -->
            <div class="p-6 border-b border-slate-700/50">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-xl font-bold">L</span>
                    </div>
                    <div>
                        <h2 class="text-xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                            LONTARA 2025
                        </h2>
                        <p class="text-xs text-slate-400">Admin Panel</p>
                    </div>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="flex-grow overflow-y-auto px-4 py-6 space-y-1 scrollbar-thin scrollbar-thumb-slate-700 scrollbar-track-transparent">
                <!-- Back to Public Site -->
                <a href="{{ route('home') }}" target="_blank" 
                   class="flex items-center p-3 text-sm font-medium rounded-lg text-slate-300 hover:bg-slate-700/50 hover:text-white transition-all duration-200 group mb-6 border border-slate-700/50">
                    <svg class="w-5 h-5 mr-3 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Situs
                </a>

                <!-- Section: Manajemen Lomba -->
                <div class="mb-6">
                    <h3 class="px-3 mb-3 text-xs font-bold uppercase text-slate-500 tracking-wider">
                        Manajemen Lomba
                    </h3>
                    
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        Dashboard
                        @if(request()->routeIs('admin.dashboard'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>

                    <a href="{{ route('admin.participants.index') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.participants.*') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        Manajemen Tim & Karya
                        @if(request()->routeIs('admin.participants.*'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>

                    <a href="{{ route('admin.payments.index') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.payments.index') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Verifikasi Pembayaran
                        @if(request()->routeIs('admin.payments.index'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>

                    <a href="{{ route('admin.payments.history') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.payments.history') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Riwayat Pembayaran
                        @if(request()->routeIs('admin.payments.history'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>
                </div>

                <!-- Section: Konten & Komunikasi -->
                <div class="mb-6">
                    <h3 class="px-3 mb-3 text-xs font-bold uppercase text-slate-500 tracking-wider">
                        Konten & Komunikasi
                    </h3>

                    <a href="{{ route('admin.juris.index') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.juris.*') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Manajemen Juri
                        @if(request()->routeIs('admin.juris.*'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>

                    <a href="{{ route('admin.committees.index') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.committees.*') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        Manajemen Panitia
                        @if(request()->routeIs('admin.committees.*'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>

                    <a href="{{ route('admin.recap.index') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.recap.*') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        Rekapitulasi Nilai
                        @if(request()->routeIs('admin.recap.*'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>

                    <a href="{{ route('admin.speakers.index') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.speakers.*') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Foto Dewan Juri
                        @if(request()->routeIs('admin.speakers.*'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>

                    <a href="{{ route('admin.content.dates.edit') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.content.dates.*') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Edit Tanggal Penting
                        @if(request()->routeIs('admin.content.dates.*'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>

                    <a href="{{ route('admin.communication.create') }}" 
                       class="flex items-center p-3 text-sm font-medium rounded-lg transition-all duration-200 group {{ request()->routeIs('admin.communication.*') ? 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/50' : 'text-slate-300 hover:bg-slate-700/50 hover:text-white' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Kirim Pengumuman
                        @if(request()->routeIs('admin.communication.*'))
                            <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full"></span>
                        @endif
                    </a>
                </div>
            </nav>

            <!-- Sidebar Footer -->
            <div class="p-4 border-t border-slate-700/50 bg-slate-900/50">
                <div class="flex items-center space-x-3 text-sm">
                    <div class="w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white font-semibold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-white font-medium truncate">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-400 truncate">Administrator</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white shadow-sm border-b border-gray-200 sticky top-0 z-10">
                <div class="px-6 py-4 flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">{{ $header ?? 'Dashboard' }}</h1>
                        <p class="text-sm text-gray-500 mt-1">{{ now()->format('l, d F Y') }}</p>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <div class="hidden md:flex items-center space-x-2 px-4 py-2 bg-gray-50 rounded-lg">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-sm text-gray-600 font-medium">Online</span>
                        </div>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" 
                                    class="flex items-center space-x-2 px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 rounded-lg transition-all duration-200 shadow-sm hover:shadow-md">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gradient-to-br from-gray-50 to-gray-100 p-6">
                <div class="max-w-7xl mx-auto">
                    {{ $slot }}
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 px-6 py-4">
                <div class="flex justify-between items-center text-sm text-gray-600">
                    <p>&copy; 2025 LONTARA. All rights reserved.</p>
                    <p>Built with ❤️ by LONTARA Team</p>
                </div>
            </footer>
        </div>
    </div>

    <style>
        /* Custom Scrollbar */
        .scrollbar-thin::-webkit-scrollbar {
            width: 6px;
        }
        
        .scrollbar-thin::-webkit-scrollbar-track {
            background: transparent;
        }
        
        .scrollbar-thin::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 3px;
        }
        
        .scrollbar-thin::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }
    </style>
</body>
</html>