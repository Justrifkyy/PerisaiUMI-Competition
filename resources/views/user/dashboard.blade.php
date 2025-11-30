<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-2xl shadow-xl p-8 mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-3xl font-black text-black">Selamat Datang, {{ Auth::user()->name }}! 👋</h3>
                        <p class="text-black/80 mt-2 text-lg">Anda telah berhasil login ke sistem pendaftaran LONTARA 2025</p>
                    </div>
                    <div class="hidden lg:block">
                        <svg class="w-32 h-32 text-black/10" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Status Pendaftaran -->
                <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500 hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-semibold uppercase">Status Pendaftaran</p>
                            <p class="text-2xl font-black text-gray-800 mt-2">
                                @if(Auth::user()->registration)
                                    Terdaftar
                                @else
                                    Belum Daftar
                                @endif
                            </p>
                        </div>
                        <div class="bg-blue-100 rounded-full p-3">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Status Pembayaran -->
                <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500 hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-semibold uppercase">Status Pembayaran</p>
                            <p class="text-2xl font-black text-gray-800 mt-2">
                                @if(Auth::user()->registration && Auth::user()->registration->payment_status === 'paid')
                                    Lunas
                                @elseif(Auth::user()->registration && Auth::user()->registration->payment_status === 'pending')
                                    Menunggu Verifikasi
                                @else
                                    Belum Bayar
                                @endif
                            </p>
                        </div>
                        <div class="bg-green-100 rounded-full p-3">
                            <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Status Paper -->
                <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500 hover:shadow-xl transition-shadow">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-semibold uppercase">Paper Submission</p>
                            <p class="text-2xl font-black text-gray-800 mt-2">
                                @if(Auth::user()->papers && Auth::user()->papers->count() > 0)
                                    {{ Auth::user()->papers->count() }} Paper
                                @else
                                    Belum Submit
                                @endif
                            </p>
                        </div>
                        <div class="bg-purple-100 rounded-full p-3">
                            <svg class="w-8 h-8 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Langkah Selanjutnya -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 p-6">
                        <h3 class="text-2xl font-black text-white flex items-center gap-3">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            Langkah Selanjutnya
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <!-- Step 1 -->
                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-indigo-500 text-white rounded-full flex items-center justify-center font-bold">
                                        1
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-800 mb-1">Lengkapi Data Diri</h4>
                                    <p class="text-sm text-gray-600 mb-2">Daftar dan lengkapi informasi tim Anda</p>
                                    <a href="{{ route('registration.create') }}" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-700 font-semibold text-sm">
                                        Daftar Sekarang
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-indigo-500 text-white rounded-full flex items-center justify-center font-bold">
                                        2
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-800 mb-1">Upload Bukti Pembayaran</h4>
                                    <p class="text-sm text-gray-600 mb-2">Lakukan pembayaran dan unggah bukti transfer</p>
                                    <a href="#" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-700 font-semibold text-sm">
                                        Upload Bukti
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-indigo-500 text-white rounded-full flex items-center justify-center font-bold">
                                        3
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-800 mb-1">Submit Proposal</h4>
                                    <p class="text-sm text-gray-600 mb-2">Kirimkan proposal bisnis Anda</p>
                                    <a href="#" class="inline-flex items-center gap-2 text-indigo-600 hover:text-indigo-700 font-semibold text-sm">
                                        Submit Paper
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline & Info -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 p-6">
                        <h3 class="text-2xl font-black text-black flex items-center gap-3">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Timeline Penting
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <!-- Timeline Item -->
                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                    <div class="w-0.5 h-full bg-gray-200"></div>
                                </div>
                                <div class="pb-6">
                                    <p class="text-sm text-gray-500 font-semibold">Pendaftaran Dibuka</p>
                                    <p class="text-lg font-bold text-gray-800">1 Desember 2024</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-0.5 h-full bg-gray-200"></div>
                                </div>
                                <div class="pb-6">
                                    <p class="text-sm text-gray-500 font-semibold">Batas Submit Proposal</p>
                                    <p class="text-lg font-bold text-gray-800">31 Desember 2024</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-0.5 h-full bg-gray-200"></div>
                                </div>
                                <div class="pb-6">
                                    <p class="text-sm text-gray-500 font-semibold">Pendaftaran Ditutup</p>
                                    <p class="text-lg font-bold text-gray-800">5 Januari 2025</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-semibold">Pelaksanaan Event</p>
                                    <p class="text-lg font-bold text-gray-800">12-14 Januari 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                    </svg>
                    Quick Links
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <a href="{{ route('home') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors group">
                        <svg class="w-8 h-8 text-gray-400 group-hover:text-indigo-500 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700">Beranda</span>
                    </a>

                    <a href="{{ route('about') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors group">
                        <svg class="w-8 h-8 text-gray-400 group-hover:text-indigo-500 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700">Tentang</span>
                    </a>

                    <a href="{{ route('call-for-paper') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors group">
                        <svg class="w-8 h-8 text-gray-400 group-hover:text-indigo-500 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700">Panduan</span>
                    </a>

                    <a href="{{ route('schedule') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors group">
                        <svg class="w-8 h-8 text-gray-400 group-hover:text-indigo-500 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-sm font-semibold text-gray-700">Jadwal</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>