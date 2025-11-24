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

    <!-- Cropper.js CSS & JS (Untuk fitur crop foto) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4">
                <h2 class="text-2xl font-bold mb-6 text-indigo-400">LONTARA 2025</h2>
            </div>
            
            <nav class="flex-grow px-2 py-4 space-y-2">
                <!-- Link Kembali ke Situs Publik -->
                <a href="{{ route('home') }}" target="_blank" class="flex items-center p-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-6 border-b border-gray-700 pb-4">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Situs
                </a>

                <!-- GRUP 1: Manajemen Inti Lomba -->
                <span class="px-4 text-xs font-semibold uppercase text-gray-500 tracking-wider">Manajemen Lomba</span>
                
                <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-900 text-white border-l-4 border-indigo-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.participants.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.participants.*') ? 'bg-gray-900 text-white border-l-4 border-indigo-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Manajemen Tim & Karya
                </a>

                <a href="{{ route('admin.payments.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.payments.index') ? 'bg-gray-900 text-white border-l-4 border-indigo-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Verifikasi Pembayaran
                </a>

                <a href="{{ route('admin.payments.history') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.payments.history') ? 'bg-gray-900 text-white border-l-4 border-indigo-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Riwayat Pembayaran
                </a>

                <!-- GRUP 2: Konten & Pengaturan -->
                <span class="px-4 pt-6 block text-xs font-semibold uppercase text-gray-500 tracking-wider">Konten & Komunikasi</span>

                <a href="{{ route('admin.juris.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.speakers.*') ? 'bg-gray-900 text-white border-l-4 border-indigo-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Manajemen Juri
                </a>

                <a href="{{ route('admin.committees.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.committees.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Manajemen Panitia
                </a>

                <!-- Leaderboard Nilai -->
                <a href="{{ route('admin.recap.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.recap.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Rekapitulasi Nilai
                </a>

                                <!-- Foto Juri/Narasumber di Home -->
                <a href="{{ route('admin.speakers.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.speakers.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Foto Dewan Juri (Home)
                </a>

                <a href="{{ route('admin.content.dates.edit') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.content.dates.*') ? 'bg-gray-900 text-white border-l-4 border-indigo-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Edit Tanggal Penting
                </a>

                <a href="{{ route('admin.communication.create') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.communication.*') ? 'bg-gray-900 text-white border-l-4 border-indigo-500' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Kirim Pengumuman
                </a>
            </nav>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white shadow-sm border-b border-gray-200 p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-800">{{ $header ?? 'Dashboard' }}</h1>
                
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-600">Hi, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-600 hover:text-red-800 font-medium focus:outline-none">
                            Logout
                        </button>
                    </form>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>