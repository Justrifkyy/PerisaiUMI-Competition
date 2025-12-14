<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-yellow-400 leading-tight uppercase tracking-wider">
            {{ __('Status Pendaftaran Tim') }}
        </h2>
    </x-slot>

    <div class="relative min-h-screen bg-black py-12 pt-20 overflow-hidden">
        
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>
        
        <div class="absolute top-20 right-0 w-96 h-96 bg-yellow-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-20 left-0 w-96 h-96 bg-yellow-600/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 relative z-10 space-y-8">
            
            <div class="group relative">
                @php
                    $statusColor = match($payment->status) {
                        'verified' => 'from-green-500 to-emerald-600',
                        'rejected' => 'from-red-500 to-rose-600',
                        default => 'from-yellow-500 to-orange-600',
                    };
                    $shadowColor = match($payment->status) {
                        'verified' => 'shadow-green-500/20',
                        'rejected' => 'shadow-red-500/20',
                        default => 'shadow-yellow-500/20',
                    };
                @endphp

                <div class="absolute -inset-0.5 bg-gradient-to-r {{ $statusColor }} rounded-2xl opacity-30 group-hover:opacity-50 blur transition duration-500"></div>
                
                <div class="relative bg-gray-900 border border-gray-800 rounded-2xl p-6 md:p-8 backdrop-blur-xl shadow-2xl {{ $shadowColor }}">
                    <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                        
                        <div class="flex-shrink-0">
                            @if($payment->status == 'verified')
                                <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center border-2 border-green-500 animate-pulse">
                                    <svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            @elseif($payment->status == 'rejected')
                                <div class="w-16 h-16 rounded-full bg-red-500/20 flex items-center justify-center border-2 border-red-500 animate-pulse">
                                    <svg class="w-8 h-8 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                </div>
                            @else
                                <div class="w-16 h-16 rounded-full bg-yellow-500/20 flex items-center justify-center border-2 border-yellow-500 animate-pulse">
                                    <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                            @endif
                        </div>

                        <div class="flex-1">
                            @if($payment->status == 'verified')
                                <h3 class="text-2xl font-black text-green-400 mb-2">Pendaftaran Diterima!</h3>
                                <p class="text-gray-300 leading-relaxed">Selamat! Pembayaran Anda telah terverifikasi. Tim Anda resmi terdaftar sebagai peserta <span class="text-green-400 font-bold">Lomba LONTARA 2025</span>.</p>
                                <div class="mt-4 p-3 bg-green-900/30 border border-green-500/30 rounded-lg inline-block">
                                    <p class="text-sm text-green-300">ℹ️ Cek email ketua tim secara berkala untuk link grup WhatsApp & jadwal Technical Meeting.</p>
                                </div>

                            @elseif($payment->status == 'rejected')
                                <h3 class="text-2xl font-black text-red-400 mb-2">Pembayaran Ditolak</h3>
                                <p class="text-gray-300 leading-relaxed">Mohon maaf, bukti pembayaran yang Anda unggah tidak dapat kami verifikasi.</p>
                                
                                @if($payment->admin_notes)
                                    <div class="mt-4 p-4 bg-red-900/20 border border-red-500/30 rounded-xl">
                                        <p class="text-xs text-red-400 uppercase tracking-widest font-bold mb-1">Catatan Admin:</p>
                                        <p class="text-red-200 italic">"{{ $payment->admin_notes }}"</p>
                                    </div>
                                @endif

                                <div class="mt-6">
                                    <a href="{{ route('payment.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-red-500/20">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                                        Upload Ulang Bukti Pembayaran
                                    </a>
                                </div>

                            @else
                                <h3 class="text-2xl font-black text-yellow-400 mb-2">Menunggu Verifikasi</h3>
                                <p class="text-gray-300 leading-relaxed">Terima kasih telah melakukan pembayaran. Tim admin kami sedang memverifikasi bukti transfer Anda.</p>
                                <div class="mt-4 flex items-center gap-2 text-sm text-yellow-500/80">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span>Estimasi waktu verifikasi: 1x24 Jam Kerja</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-gray-700 to-gray-800 rounded-2xl opacity-20 group-hover:opacity-40 transition duration-500"></div>
                
                <div class="relative bg-gray-900 border border-gray-800 rounded-2xl overflow-hidden backdrop-blur-xl">
                    <div class="px-6 py-5 bg-gray-800/50 border-b border-gray-700 flex justify-between items-center">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-yellow-500/10 rounded-lg">
                                <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-100">Detail Tim Peserta</h3>
                        </div>
                        <span class="px-3 py-1 bg-yellow-500/10 border border-yellow-500/20 text-yellow-400 rounded-full text-xs font-bold uppercase tracking-wider">
                            {{ $registration->participant_type }}
                        </span>
                    </div>

                    <div class="p-6 md:p-8">
                        <dl class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-8">
                            <div class="space-y-1">
                                <dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Tim</dt>
                                <dd class="text-lg font-bold text-white tracking-wide">{{ $registration->team_name }}</dd>
                            </div>

                            <div class="space-y-1">
                                <dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">Asal Instansi</dt>
                                <dd class="text-lg font-bold text-white tracking-wide">{{ $registration->institution }}</dd>
                            </div>

                            <div class="space-y-1">
                                <dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">Ketua Tim</dt>
                                <dd class="flex items-center gap-2">
                                    <span class="text-lg font-semibold text-gray-200">{{ $registration->full_name }}</span>
                                    <span class="text-sm text-gray-500">({{ $registration->nim }})</span>
                                </dd>
                            </div>

                            <div class="space-y-1">
                                <dt class="text-xs font-medium text-gray-500 uppercase tracking-wider">Program Studi</dt>
                                <dd class="text-lg font-semibold text-gray-200">{{ $registration->major }}</dd>
                            </div>

                            <div class="md:col-span-2 pt-4 border-t border-gray-800">
                                <dt class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-4">Berkas Lomba Tersimpan</dt>
                                <div class="flex flex-wrap gap-4">
                                    <a href="{{ Storage::url($registration->proposal_path) }}" target="_blank" 
                                       class="group inline-flex items-center gap-3 px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl hover:border-yellow-500/50 hover:bg-gray-800/80 transition-all cursor-pointer">
                                        <div class="p-2 bg-red-500/10 rounded-lg group-hover:bg-red-500/20 transition-colors">
                                            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v15a2 2 0 002 2z"></path></svg>
                                        </div>
                                        <div class="text-left">
                                            <p class="text-sm font-bold text-gray-200 group-hover:text-white">Proposal Bisnis</p>
                                            <p class="text-xs text-gray-500">Format PDF</p>
                                        </div>
                                    </a>

                                    <a href="{{ Storage::url($registration->bmc_path) }}" target="_blank" 
                                       class="group inline-flex items-center gap-3 px-4 py-3 bg-gray-800 border border-gray-700 rounded-xl hover:border-blue-500/50 hover:bg-gray-800/80 transition-all cursor-pointer">
                                        <div class="p-2 bg-blue-500/10 rounded-lg group-hover:bg-blue-500/20 transition-colors">
                                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        </div>
                                        <div class="text-left">
                                            <p class="text-sm font-bold text-gray-200 group-hover:text-white">Business Model Canvas</p>
                                            <p class="text-xs text-gray-500">Format PDF</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>