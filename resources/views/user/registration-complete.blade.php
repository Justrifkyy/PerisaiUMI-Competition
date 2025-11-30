<x-app-layout>
    <div class="min-h-screen bg-black pt-32 pb-12 relative">
        <!-- Background Effects -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-500/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-yellow-600/5 rounded-full blur-[120px]"></div>

        <div class="relative max-w-7xl mx-auto px-6 space-y-8">
            
            <!-- Page Header -->
            <div class="mb-12">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/30 flex items-center justify-center backdrop-blur-xl">
                        <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-black text-gray-100">
                            Dashboard <span class="bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text text-transparent">Tim</span>
                        </h1>
                        <p class="text-gray-500 text-base mt-2">Selamat datang di portal tim Anda</p>
                    </div>
                </div>
            </div>

            <!-- Success Banner -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/30 to-yellow-400/30 rounded-3xl blur-2xl"></div>
                
                <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border-2 border-yellow-500/50 rounded-3xl p-8 backdrop-blur-xl overflow-hidden">
                    <!-- Animated Background Pattern -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-500/5 rounded-full blur-[100px]"></div>
                    
                    <div class="relative flex items-start gap-6">
                        <!-- Success Icon with Animation -->
                        <div class="flex-shrink-0">
                            <div class="relative">
                                <div class="absolute inset-0 bg-yellow-500/20 rounded-2xl blur-xl animate-pulse"></div>
                                <div class="relative w-20 h-20 rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center">
                                    <svg class="w-10 h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="flex-1">
                            <h3 class="text-3xl font-black text-gray-100 mb-3">
                                Pendaftaran Berhasil & <span class="text-yellow-400">Terverifikasi!</span>
                            </h3>
                            
                            <div class="space-y-3 text-gray-300">
                                <p class="text-lg">
                                    Halo, <span class="font-bold text-yellow-400">{{ Auth::user()->name }}</span>!
                                </p>
                                <p>
                                    Tim <span class="font-bold text-gray-100">{{ $registration->team_name }}</span> telah resmi terdaftar dalam kategori 
                                    <span class="inline-flex items-center gap-2 px-4 py-1.5 bg-yellow-500/20 border border-yellow-500/50 rounded-full text-sm font-bold text-yellow-400">
                                        <span class="relative flex h-2 w-2">
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
                                        </span>
                                        {{ $registration->participant_type }}
                                    </span>
                                </p>
                                <p class="text-sm text-gray-400 bg-yellow-500/5 border border-yellow-500/20 rounded-lg p-4 mt-4">
                                    💰 Pembayaran Anda telah kami terima. Silakan tunggu pengumuman selanjutnya terkait hasil seleksi berkas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <!-- Card 1: Identitas Tim -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl overflow-hidden backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                        <!-- Header -->
                        <div class="px-8 py-6 border-b border-yellow-500/20 bg-gradient-to-r from-yellow-500/5 to-transparent">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-yellow-500/20 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-black text-gray-100">Identitas Tim</h3>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8 space-y-6">
                            <div class="space-y-2">
                                <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Nama Tim</p>
                                <p class="text-xl font-bold text-gray-100">{{ $registration->team_name }}</p>
                            </div>

                            <div class="h-px bg-gradient-to-r from-transparent via-yellow-500/20 to-transparent"></div>

                            <div class="space-y-2">
                                <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Ketua Tim</p>
                                <p class="text-lg font-semibold text-gray-100">{{ $registration->full_name }}</p>
                            </div>

                            <div class="h-px bg-gradient-to-r from-transparent via-yellow-500/20 to-transparent"></div>

                            <div class="space-y-2">
                                <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Institusi</p>
                                <p class="text-lg font-semibold text-gray-100">{{ $registration->institution }}</p>
                            </div>

                            <div class="h-px bg-gradient-to-r from-transparent via-yellow-500/20 to-transparent"></div>

                            <div class="space-y-2">
                                <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Kontak WhatsApp</p>
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-lg bg-yellow-500/10 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                    </div>
                                    <p class="text-lg font-semibold text-gray-100">{{ $registration->phone_number }}</p>
                                </div>
                            </div>

                            @if($registration->research_field)
                                <div class="h-px bg-gradient-to-r from-transparent via-yellow-500/20 to-transparent"></div>
                                
                                <div class="space-y-2">
                                    <p class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Subtema / Fokus</p>
                                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/10 border border-yellow-500/30 rounded-lg">
                                        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                        </svg>
                                        <p class="text-sm font-bold text-yellow-400">{{ $registration->research_field }}</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Card 2: Berkas Kompetisi -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl overflow-hidden backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                        <!-- Header -->
                        <div class="px-8 py-6 border-b border-yellow-500/20 bg-gradient-to-r from-yellow-500/5 to-transparent">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-yellow-500/20 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-black text-gray-100">Berkas Kompetisi</h3>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <p class="text-sm text-gray-400 mb-6">Berikut adalah berkas yang telah Anda unggah saat pendaftaran:</p>
                            
                            <div class="space-y-4">
                                <!-- Proposal -->
                                <a href="{{ Storage::url($registration->proposal_path) }}" target="_blank" class="group/item flex items-center justify-between p-4 bg-black/30 border border-yellow-500/20 rounded-xl hover:border-yellow-500/50 hover:bg-yellow-500/5 transition-all">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-blue-500/20 to-blue-600/20 border border-blue-500/30 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-100">Proposal Bisnis</p>
                                            <p class="text-xs text-gray-500">Business Plan Document</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 px-4 py-2 bg-yellow-500/20 border border-yellow-500/50 rounded-lg text-yellow-400 font-bold text-sm group-hover/item:bg-yellow-500 group-hover/item:text-black transition-all">
                                        Lihat
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </div>
                                </a>

                                <!-- BMC -->
                                <a href="{{ Storage::url($registration->bmc_path) }}" target="_blank" class="group/item flex items-center justify-between p-4 bg-black/30 border border-yellow-500/20 rounded-xl hover:border-yellow-500/50 hover:bg-yellow-500/5 transition-all">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-purple-500/20 to-purple-600/20 border border-purple-500/30 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                            <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-100">Business Model Canvas</p>
                                            <p class="text-xs text-gray-500">BMC Document</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 px-4 py-2 bg-yellow-500/20 border border-yellow-500/50 rounded-lg text-yellow-400 font-bold text-sm group-hover/item:bg-yellow-500 group-hover/item:text-black transition-all">
                                        Lihat
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </div>
                                </a>

                                <!-- KTM -->
                                <a href="{{ Storage::url($registration->ktm_path) }}" target="_blank" class="group/item flex items-center justify-between p-4 bg-black/30 border border-yellow-500/20 rounded-xl hover:border-yellow-500/50 hover:bg-yellow-500/5 transition-all">
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 rounded-lg bg-gradient-to-br from-gray-500/20 to-gray-600/20 border border-gray-500/30 flex items-center justify-center group-hover/item:scale-110 transition-transform">
                                            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-100">Scan KTM Tim</p>
                                            <p class="text-xs text-gray-500">Student ID Cards</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2 px-4 py-2 bg-yellow-500/20 border border-yellow-500/50 rounded-lg text-yellow-400 font-bold text-sm group-hover/item:bg-yellow-500 group-hover/item:text-black transition-all">
                                        Lihat
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Info Card -->
            <div class="group relative">
                <div class="relative bg-gradient-to-br from-gray-900/50 to-gray-800/50 border border-yellow-500/10 rounded-2xl p-6 backdrop-blur-xl">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-yellow-500/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-300 mb-2">Informasi Penting</h4>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Pengumuman hasil seleksi berkas akan diumumkan melalui email dan WhatsApp yang terdaftar. 
                                Pastikan Anda selalu memantau kontak yang telah didaftarkan. Jika ada pertanyaan, jangan ragu untuk menghubungi panitia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>