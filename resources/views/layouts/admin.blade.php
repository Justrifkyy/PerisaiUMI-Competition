<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin Panel</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Cropper.js JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

</head>
<body class="font-sans antialiased bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col">
            <div class="p-4">
                <h2 class="text-2xl font-bold mb-6">LONTARA 2025</h2>
            </div>
            <nav class="flex-grow px-2 py-4 space-y-2">
                <!-- Link Kembali ke Situs Publik -->
                <a href="{{ route('home') }}" target="_blank" class="flex items-center p-2 text-sm font-medium rounded-md text-gray-300 hover:bg-gray-700 hover:text-white mb-4">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Situs
                </a>

                <!-- Grup Menu Utama -->
                <span class="px-4 text-xs font-semibold uppercase text-gray-400">Manajemen Konferensi</span>
                <a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Dashboard
                </a>
                <a href="{{ route('admin.participants.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.participants.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Manajemen Peserta
                </a>
                <a href="{{ route('admin.papers.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.papers.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Manajemen Paper
                </a>
                <a href="{{ route('admin.payments.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.payments.index') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Verifikasi Pembayaran
                </a>
                <a href="{{ route('admin.payments.history') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.payments.history') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Riwayat Pembayaran
                </a>

                <!-- Grup Menu Konten & Komunikasi -->
                <span class="px-4 pt-4 block text-xs font-semibold uppercase text-gray-400">Konten & Komunikasi</span>
                <a href="{{ route('admin.speakers.index') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.speakers.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Manajemen Speakers
                </a>
                 <a href="{{ route('admin.content.dates.edit') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.content.dates.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Edit Tanggal Penting
                </a>
                <a href="{{ route('admin.communication.create') }}" class="flex items-center p-2 text-sm font-medium rounded-md transition duration-200 {{ request()->routeIs('admin.communication.*') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                    Kirim Pengumuman
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">{{ $header ?? 'Dashboard' }}</h1>
                <!-- Tombol Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 hover:text-gray-900">Logout</button>
                </form>
            </header>
            <main class="flex-1 p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>