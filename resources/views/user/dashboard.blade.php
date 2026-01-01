<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-yellow-400 leading-tight uppercase tracking-wider">
            {{ __('Dashboard Peserta') }}
        </h2>
    </x-slot>

    <div class="relative min-h-screen bg-black py-12 overflow-hidden">
        
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>
        
        <div class="absolute top-20 left-0 w-96 h-96 bg-yellow-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-20 right-0 w-96 h-96 bg-yellow-600/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative z-10">
            
            @php
                $registration = Auth::user()->registration;
                $payment = $registration ? $registration->payment : null;
                
                // Logic Status
                $isPaid = $payment && $payment->status === 'verified';
                $isPending = $payment && $payment->status === 'pending';
                $isRejected = $payment && $payment->status === 'rejected';
            @endphp

            <!-- Alert Messages -->
            @if (session('status'))
                <div class="mb-6 p-4 bg-green-500/10 border-l-4 border-green-500 rounded-r-xl backdrop-blur-xl" role="alert">
                    <div class="flex items-center gap-3">
                        <svg class="w-6 h-6 text-green-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <p class="text-green-300 font-medium">{{ session('status') }}</p>
                    </div>
                </div>
            @endif

            @if ($isPending)
                <div class="mb-6 p-4 bg-yellow-500/10 border-l-4 border-yellow-500 rounded-r-xl backdrop-blur-xl">
                    <h4 class="font-bold text-yellow-400">Status Pembayaran: Sedang Diverifikasi</h4>
                    <p class="text-yellow-200/80 text-sm mt-1">Mohon tunggu 1x24 jam. Admin sedang mengecek bukti transfer Anda.</p>
                </div>
            @elseif ($isRejected)
                <div class="mb-6 p-4 bg-red-500/10 border-l-4 border-red-500 rounded-r-xl backdrop-blur-xl">
                    <h4 class="font-bold text-red-400">Status Pembayaran: Ditolak</h4>
                    <p class="text-red-200/80 text-sm mt-1">Alasan: {{ $payment->admin_notes ?? 'Bukti tidak valid.' }}</p>
                    <a href="{{ route('payment.create') }}" class="inline-flex items-center gap-2 mt-3 text-red-400 hover:text-red-300 font-bold text-sm underline">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        Upload Ulang Bukti Pembayaran
                    </a>
                </div>
            @endif

            <!-- Welcome Card -->
            <div class="relative rounded-2xl p-6 sm:p-8 mb-8 overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 opacity-90 transition-all duration-500 group-hover:scale-105"></div>
                <div class="absolute top-0 right-0 -mt-10 -mr-10 w-48 h-48 bg-white/20 rounded-full blur-2xl animate-pulse"></div>
                
                <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                    <div>
                        <h3 class="text-2xl sm:text-3xl font-black text-black tracking-tight">Halo, {{ Auth::user()->name }}! 👋</h3>
                        <p class="text-black/80 mt-2 text-base sm:text-lg font-medium">Selamat datang di Dashboard LONTARA 2025.</p>
                    </div>
                    @if($registration)
                        <div class="px-4 py-2 bg-black/10 rounded-lg backdrop-blur-sm border border-black/10 self-start md:self-center">
                            <p class="text-black font-bold text-sm uppercase tracking-wider">{{ $registration->team_name }}</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Status Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                
                <!-- Registration Status -->
                <div class="bg-gray-900/80 border border-gray-800 rounded-2xl p-6 backdrop-blur-xl hover:border-gray-700 transition-all duration-300 group">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase tracking-wider mb-2">Status Registrasi</p>
                            <p class="text-xl font-black {{ $registration ? 'text-green-400' : 'text-gray-400' }}">
                                {{ $registration ? 'Terdaftar' : 'Belum Mendaftar' }}
                            </p>
                        </div>
                        <div class="w-12 h-12 rounded-xl {{ $registration ? 'bg-green-500/20 text-green-400' : 'bg-gray-800 text-gray-500' }} flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Payment Status -->
                @php
                    $statusColor = 'text-gray-400';
                    $iconBg = 'bg-gray-800 text-gray-500';
                    $statusText = 'Belum Bayar';

                    if ($isPaid) {
                        $statusColor = 'text-green-400';
                        $iconBg = 'bg-green-500/20 text-green-400';
                        $statusText = 'Lunas (Verified)';
                    } elseif ($isPending) {
                        $statusColor = 'text-yellow-400';
                        $iconBg = 'bg-yellow-500/20 text-yellow-400';
                        $statusText = 'Menunggu Verifikasi';
                    } elseif ($isRejected) {
                        $statusColor = 'text-red-400';
                        $iconBg = 'bg-red-500/20 text-red-400';
                        $statusText = 'Ditolak';
                    }
                @endphp
                <div class="bg-gray-900/80 border border-gray-800 rounded-2xl p-6 backdrop-blur-xl hover:border-gray-700 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-xs font-bold uppercase tracking-wider mb-2">Status Pembayaran</p>
                            <p class="text-xl font-black {{ $statusColor }}">
                                {{ $statusText }}
                            </p>
                        </div>
                        <div class="w-12 h-12 rounded-xl {{ $iconBg }} flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <!-- Registration Steps Card -->
                <div class="bg-gray-900/80 border border-gray-800 rounded-2xl overflow-hidden backdrop-blur-xl">
                    <div class="bg-gray-800/50 p-5 border-b border-gray-700">
                        <h3 class="text-lg font-bold text-gray-100 flex items-center gap-2">
                            <div class="p-1.5 bg-yellow-500/20 rounded-lg">
                                <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                            </div>
                            Langkah Pendaftaran
                        </h3>
                    </div>
                    <div class="p-6 space-y-5">
                        
                        <!-- Step 1: Registration -->
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center flex-shrink-0">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold border-2 {{ $registration ? 'bg-green-500 border-green-500 text-black' : 'bg-transparent border-yellow-500 text-yellow-500' }}">
                                    @if($registration) ✓ @else 1 @endif
                                </div>
                                <div class="flex-1 w-0.5 bg-gray-800 my-2 min-h-[40px]"></div>
                            </div>
                            <div class="pb-2 flex-1">
                                <h4 class="text-base font-bold text-gray-200 mb-1">Lengkapi Data Tim</h4>
                                @if($registration)
                                    <p class="text-sm text-green-400">Data tim telah tersimpan.</p>
                                @else
                                    <p class="text-sm text-gray-400 mb-3">Isi formulir pendaftaran lomba & anggota tim.</p>
                                    <a href="{{ route('registration.create') }}" class="group inline-flex items-center px-4 py-2 bg-yellow-500 text-black font-bold text-sm rounded-lg hover:bg-yellow-400 transition-all shadow-[0_0_15px_rgba(234,179,8,0.3)]">
                                        Daftar Sekarang
                                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <!-- Step 2: Payment -->
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center flex-shrink-0">
                                <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold border-2 {{ $isPaid ? 'bg-green-500 border-green-500 text-black' : ($registration ? 'bg-transparent border-yellow-500 text-yellow-500' : 'bg-gray-800 border-gray-700 text-gray-500') }}">
                                    @if($isPaid) ✓ @else 2 @endif
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-base font-bold {{ $registration ? 'text-gray-200' : 'text-gray-600' }} mb-1">Pembayaran Registrasi</h4>
                                @if($isPaid)
                                    <p class="text-sm text-green-400">Pembayaran Lunas.</p>
                                @elseif($registration)
                                    <p class="text-sm text-gray-400 mb-3">Lakukan pembayaran untuk memvalidasi pendaftaran.</p>
                                    
                                    @if($isPending)
                                        <span class="inline-flex items-center px-3 py-1.5 bg-yellow-500/10 text-yellow-400 rounded border border-yellow-500/30 text-xs font-medium">Menunggu Verifikasi...</span>
                                    @elseif($isRejected)
                                        <a href="{{ route('payment.create') }}" class="text-red-400 underline font-bold text-sm hover:text-red-300">Upload Ulang Bukti</a>
                                    @else
                                        <a href="{{ route('payment.create') }}" class="group inline-flex items-center px-4 py-2 bg-gray-800 border border-yellow-500/50 text-yellow-400 font-bold text-sm rounded-lg hover:bg-yellow-500 hover:text-black transition-all">
                                            Upload Bukti Bayar
                                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                                        </a>
                                    @endif
                                @else
                                    <p class="text-sm text-gray-600">Terkunci (Selesaikan Langkah 1)</p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Quick Access Card -->
                <div class="bg-gray-900/80 border border-gray-800 rounded-2xl overflow-hidden backdrop-blur-xl">
                    <div class="bg-gray-800/50 p-5 border-b border-gray-700">
                        <h3 class="text-lg font-bold text-gray-100 flex items-center gap-2">
                            <div class="p-1.5 bg-blue-500/20 rounded-lg">
                                <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                            </div>
                            Akses Cepat
                        </h3>
                    </div>
                    
                    <div class="p-6 grid grid-cols-2 gap-4">
                        <a href="{{ route('home') }}" class="flex flex-col items-center justify-center p-4 bg-black/40 border border-gray-700 rounded-xl hover:border-yellow-500 hover:bg-yellow-500/5 transition-all group">
                            <svg class="w-8 h-8 text-gray-500 group-hover:text-yellow-400 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            <span class="text-sm font-semibold text-gray-300 group-hover:text-yellow-400 text-center">Beranda</span>
                        </a>

                        <a href="{{ route('about') }}" class="flex flex-col items-center justify-center p-4 bg-black/40 border border-gray-700 rounded-xl hover:border-yellow-500 hover:bg-yellow-500/5 transition-all group">
                            <svg class="w-8 h-8 text-gray-500 group-hover:text-yellow-400 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-sm font-semibold text-gray-300 group-hover:text-yellow-400 text-center">Tentang</span>
                        </a>

                        <a href="{{ route('submission-info') }}" class="flex flex-col items-center justify-center p-4 bg-black/40 border border-gray-700 rounded-xl hover:border-yellow-500 hover:bg-yellow-500/5 transition-all group">
                            <svg class="w-8 h-8 text-gray-500 group-hover:text-yellow-400 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <span class="text-sm font-semibold text-gray-300 group-hover:text-yellow-400 text-center">Panduan</span>
                        </a>

                        <a href="{{ route('call-for-paper') }}" class="flex flex-col items-center justify-center p-4 bg-black/40 border border-gray-700 rounded-xl hover:border-yellow-500 hover:bg-yellow-500/5 transition-all group">
                            <svg class="w-8 h-8 text-gray-500 group-hover:text-yellow-400 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span class="text-sm font-semibold text-gray-300 group-hover:text-yellow-400 text-center">Jadwal</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>