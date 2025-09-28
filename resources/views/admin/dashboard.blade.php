<x-admin-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold">Selamat Datang di Panel Admin!</h2>
        <p class="mt-2 text-gray-600">
            Anda telah berhasil masuk ke area admin. Dari sini Anda bisa mengelola seluruh aspek konferensi LONTARA 2025.
        </p>
    </div>

    <!-- Statistik Dinamis -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-500">Total Peserta Terdaftar</h3>
            <p class="text-4xl font-bold mt-2 text-indigo-600">{{ $totalParticipants }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-500">Total Paper Masuk</h3>
            <p class="text-4xl font-bold mt-2 text-blue-600">{{ $totalSubmissions }}</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-500">Pembayaran Perlu Verifikasi</h3>
            <p class="text-4xl font-bold mt-2 text-yellow-600">{{ $pendingPayments }}</p>
        </div>
    </div>
</x-admin-layout>