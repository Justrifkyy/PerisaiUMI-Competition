<x-public-layout>
    <!-- Hero Section with Animated Background -->
    <div class="relative min-h-screen bg-black overflow-hidden flex items-center justify-center">
        <!-- Animated Grid Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(234, 179, 8, 0.2) 2px, transparent 2px), linear-gradient(90deg, rgba(234, 179, 8, 0.2) 2px, transparent 2px); background-size: 100px 100px;"></div>
        </div>
        
        <!-- Multiple Glowing Orbs -->
        <div class="absolute top-1/4 left-1/4 w-64 h-64 md:w-96 md:h-96 bg-yellow-500 rounded-full blur-[120px] opacity-30 animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 md:w-[500px] md:h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 md:w-[600px] md:h-[600px] bg-yellow-600 rounded-full blur-[200px] opacity-10 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-5xl mx-auto text-center space-y-6 md:space-y-8 py-12 md:py-0">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full">
                    <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Submission Guide</span>
                </div>

                <!-- Main Title -->
                <div class="space-y-3 md:space-y-4">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-black leading-none">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600" style="background-size: 200% auto; animation: gradient 3s ease infinite;">
                            PANDUAN
                        </span>
                        <span class="block text-gray-100 mt-2">SUBMISSION</span>
                    </h1>
                    <div class="flex items-center justify-center gap-3 md:gap-4">
                        <div class="h-1 w-20 md:w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                        <div class="h-2 w-2 bg-yellow-500 rounded-full animate-pulse"></div>
                        <div class="h-1 w-20 md:w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                    </div>
                </div>

                <!-- Subtitle -->
                <p class="text-lg sm:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed px-4">
                    Panduan lengkap penyusunan proposal dan ketentuan teknis submission sesuai Guidebook Resmi
                </p>

                <!-- Scroll Indicator -->
                <div class="pt-8 md:pt-12 animate-bounce">
                    <svg class="w-6 h-6 mx-auto text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </div>
        </div>

        <style>
            @keyframes gradient {
                0%, 100% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
            }
        </style>
    </div>

    <!-- Format Penulisan Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-7xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12 md:mb-20">
                    <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-4 md:mb-6">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Writing Format</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6">
                        <span class="text-gray-100">Format</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> Penulisan</span>
                    </h2>
                    <p class="text-base md:text-xl text-gray-400 max-w-2xl mx-auto">Wajib dipatuhi untuk menghindari diskualifikasi administrasi</p>
                </div>

                <!-- Format Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <!-- Tipografi Card -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-indigo-600 rounded-2xl md:rounded-[2rem] blur-xl opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                        <div class="relative h-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-indigo-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 backdrop-blur-xl hover:border-indigo-500/60 transition-all hover:-translate-y-2">
                            <div class="h-12 w-12 md:h-14 md:w-14 bg-indigo-500/20 rounded-xl flex items-center justify-center mb-4 md:mb-6">
                                <span class="text-2xl md:text-3xl">Aa</span>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-indigo-400 mb-3 md:mb-4">Tipografi</h3>
                            <ul class="text-sm md:text-base text-gray-300 space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="text-indigo-400 mt-1">•</span>
                                    <span>Font: <b class="text-white">Arial</b></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-indigo-400 mt-1">•</span>
                                    <span>Ukuran: <b class="text-white">11 pt</b></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-indigo-400 mt-1">•</span>
                                    <span>Spasi: <b class="text-white">1.0 (Single)</b></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tata Letak Card -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-2xl md:rounded-[2rem] blur-xl opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                        <div class="relative h-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-emerald-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 backdrop-blur-xl hover:border-emerald-500/60 transition-all hover:-translate-y-2">
                            <div class="h-12 w-12 md:h-14 md:w-14 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-4 md:mb-6">
                                <svg class="w-6 h-6 md:w-7 md:h-7 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-emerald-400 mb-3 md:mb-4">Tata Letak (A4)</h3>
                            <ul class="text-sm md:text-base text-gray-300 space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-400 mt-1">•</span>
                                    <span>Kiri & Atas: <b class="text-white">3 cm</b></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-400 mt-1">•</span>
                                    <span>Kanan & Bawah: <b class="text-white">2.5 cm</b></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-400 mt-1">•</span>
                                    <span>Rata Kanan-Kiri (Justify)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Batasan Card -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-red-500 to-red-600 rounded-2xl md:rounded-[2rem] blur-xl opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                        <div class="relative h-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-red-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 backdrop-blur-xl hover:border-red-500/60 transition-all hover:-translate-y-2">
                            <div class="h-12 w-12 md:h-14 md:w-14 bg-red-500/20 rounded-xl flex items-center justify-center mb-4 md:mb-6">
                                <svg class="w-6 h-6 md:w-7 md:h-7 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-red-400 mb-3 md:mb-4">Batasan</h3>
                            <ul class="text-sm md:text-base text-gray-300 space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="text-red-400 mt-1">•</span>
                                    <span>Isi Proposal: <b class="text-white">Max 10 Halaman</b></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-400 mt-1">•</span>
                                    <span>File Max: <b class="text-white">10 MB</b></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-400 mt-1">•</span>
                                    <span>Format: <b class="text-white">Wajib PDF</b></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Struktur Proposal Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-1/4 w-96 h-96 md:w-[600px] md:h-[600px] bg-yellow-500 rounded-full blur-[200px] opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12 md:mb-20">
                    <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-4 md:mb-6">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Proposal Structure</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6">
                        <span class="text-gray-100">Struktur</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> Proposal</span>
                    </h2>
                </div>

                <!-- Struktur Cards -->
                <div class="space-y-6 md:space-y-8">
                    <!-- Bagian Awal -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 lg:p-10 backdrop-blur-xl hover:border-yellow-500/60 transition-all">
                            <div class="flex flex-col sm:flex-row items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0 h-14 w-14 md:h-16 md:w-16 rounded-xl md:rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50 shadow-lg shadow-yellow-500/30">
                                    <span class="text-2xl md:text-3xl font-black text-black">1</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-3 md:mb-4">Bagian Awal</h3>
                                    <ul class="text-sm md:text-base text-gray-300 space-y-2 md:space-y-3">
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">Cover:</b> Judul, Logo PT, Nama PT, Nama Tim + NIM + Prodi, Tahun.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">Lembar Pengesahan:</b> Tanda tangan Ketua Tim, Dospem & Stempel PT.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">Profil Usaha & Tim:</b> Sektor industri, deskripsi singkat, kompetensi tim.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BMC -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 lg:p-10 backdrop-blur-xl hover:border-yellow-500/60 transition-all">
                            <div class="flex flex-col sm:flex-row items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0 h-14 w-14 md:h-16 md:w-16 rounded-xl md:rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50 shadow-lg shadow-yellow-500/30">
                                    <span class="text-2xl md:text-3xl font-black text-black">2</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-3 md:mb-4">Business Model Canvas (BMC)</h3>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">
                                        Wajib dicantumkan sebagai Bab tersendiri (Huruf D dalam panduan). Menjelaskan 9 elemen kunci bisnis secara visual.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Isi Proposal -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 lg:p-10 backdrop-blur-xl hover:border-yellow-500/60 transition-all">
                            <div class="flex flex-col sm:flex-row items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0 h-14 w-14 md:h-16 md:w-16 rounded-xl md:rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50 shadow-lg shadow-yellow-500/30">
                                    <span class="text-2xl md:text-3xl font-black text-black">3</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-3 md:mb-4">Isi Proposal (Max 10 Halaman)</h3>
                                    <ul class="text-sm md:text-base text-gray-300 space-y-2 md:space-y-3">
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">1. Pendahuluan:</b> Latar belakang, Rumusan masalah, Tujuan & Manfaat.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">2. Metode Pelaksanaan:</b> Lokasi, Alat/Bahan, Teknologi, Alur kerja/Desain.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">3. Rencana Pelaksanaan:</b> Detail operasional, Kompetensi tim, Produk/Jasa.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">4. RAB:</b> Perincian anggaran & Rasionalisasi biaya.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">5. Analisis Risiko Bisnis (SWOT):</b> Strength, Weakness, Opportunity, Threat.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">6. Simpulan & Penutup:</b> Ukuran keberhasilan & Pernyataan penutup.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Akhir -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 lg:p-10 backdrop-blur-xl hover:border-yellow-500/60 transition-all">
                            <div class="flex flex-col sm:flex-row items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0 h-14 w-14 md:h-16 md:w-16 rounded-xl md:rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50 shadow-lg shadow-yellow-500/30">
                                    <span class="text-2xl md:text-3xl font-black text-black">4</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-3 md:mb-4">Bagian Akhir</h3>
                                    <ul class="text-sm md:text-base text-gray-300 space-y-2 md:space-y-3">
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">Daftar Pustaka:</b> Format bebas (APA/MLA/IEEE).</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-yellow-400 mt-1 flex-shrink-0">•</span>
                                            <span><b class="text-white">Lampiran:</b> Foto produk, KTP, KTM, Foto diri 4x6, Surat pernyataan, Bukti pendukung lain.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Format Nama File Section -->
    <div class="relative bg-black py-16 md:py-20 lg:py-24 overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-5xl mx-auto">
                <div class="relative group">
                    <div class="absolute -inset-1 md:-inset-2 bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl md:rounded-[2rem] blur-xl md:blur-2xl opacity-40 animate-pulse"></div>
                    <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-red-500/50 rounded-2xl md:rounded-[2rem] p-6 md:p-10 text-center backdrop-blur-xl">
                        <div class="mb-4 md:mb-6">
                            <div class="inline-flex p-3 md:p-4 bg-red-500/20 border border-red-500/40 rounded-xl md:rounded-2xl">
                                <svg class="w-8 h-8 md:w-10 md:h-10 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <h3 class="text-2xl sm:text-3xl md:text-4xl font-black text-red-400 mb-3 md:mb-4">Format Nama File</h3>
                        <p class="text-sm md:text-base lg:text-lg text-gray-300 mb-6 md:mb-8 max-w-2xl mx-auto">
                            Pastikan nama file proposal PDF Anda sesuai dengan format berikut:
                        </p>
                        
                        <div class="inline-block bg-black/50 border border-red-500/30 rounded-xl md:rounded-2xl px-4 py-3 md:px-6 md:py-4 mb-4 md:mb-6 max-w-full overflow-x-auto">
                            <code class="text-sm sm:text-base md:text-lg lg:text-xl font-mono text-yellow-400 whitespace-nowrap block">
                                LONTARA2025_Nama Ketua_Nama PT/Tim_Judul Karya
                            </code>
                        </div>
                        
                        <div class="inline-flex items-start gap-2 px-4 py-2 md:px-5 md:py-3 bg-orange-500/10 border border-orange-500/30 rounded-lg md:rounded-xl max-w-full">
                            <svg class="w-4 h-4 md:w-5 md:h-5 text-orange-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <p class="text-xs md:text-sm text-gray-400 text-left">
                                Judul karya maksimal 3 kata. Tidak boleh ada tanda titik (.) dalam nama file.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Download Template Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12 md:mb-16">
                    <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-4 md:mb-6">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Templates</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-black mb-4 md:mb-6">
                        <span class="text-gray-100">Download</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Template</span>
                    </h2>
                    <p class="text-base md:text-xl text-gray-400 max-w-3xl mx-auto px-4">
                        Gunakan template resmi untuk memastikan format sesuai standar penilaian
                    </p>
                </div>

                <!-- Template Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    @foreach($templates as $template)
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative h-full bg-gradient-to-br from-gray-900 to-gray-800 border-2 border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2 flex flex-col justify-between">
                            <!-- Icon -->
                            <div class="mb-4 md:mb-6">
                                <div class="inline-flex p-3 md:p-4 bg-yellow-500/10 border border-yellow-500/30 rounded-xl md:rounded-2xl">
                                    <svg class="w-8 h-8 md:w-10 md:h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <div class="flex-1">
                                <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-2 md:mb-3">{{ $template['name'] }}</h3>
                                <p class="text-sm md:text-base text-gray-300 leading-relaxed mb-6">{{ $template['description'] }}</p>
                            </div>

                            @if($template['downloadable'])
                                <a href="{{ $template['url'] }}" download class="group/btn relative inline-flex items-center justify-center w-full gap-2 md:gap-3 px-6 md:px-8 py-3 md:py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold text-sm md:text-base lg:text-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300 shadow-xl shadow-yellow-500/50">
                                    <span class="relative z-10">Unduh Template</span>
                                    <svg class="w-4 h-4 md:w-5 md:h-5 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                </a>
                            @else
                                <div class="inline-flex items-center justify-center w-full gap-2 md:gap-3 px-6 md:px-8 py-3 md:py-4 bg-gray-700/50 text-gray-400 font-bold text-sm md:text-base lg:text-lg rounded-xl border-2 border-gray-600/50 cursor-not-allowed">
                                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>Segera Hadir</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-yellow-500/5 to-black"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-gray-100 mb-4 md:mb-6">
                    Sudah Siap untuk
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Submit Proposal?</span>
                </h2>
                
                <p class="text-base md:text-lg lg:text-xl text-gray-300 mb-8 md:mb-12 max-w-2xl mx-auto px-4">
                    Pastikan semua dokumen telah sesuai dengan panduan sebelum melakukan submission
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-6">
                    <a href="#" class="group relative inline-flex items-center gap-2 md:gap-3 px-8 md:px-12 py-4 md:py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-black text-base md:text-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300 w-full sm:w-auto">
                        <span class="relative z-10">Submit Sekarang</span>
                        <svg class="w-5 h-5 md:w-6 md:h-6 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <a href="#" class="inline-flex items-center gap-2 md:gap-3 px-8 md:px-12 py-4 md:py-5 bg-transparent border-2 border-yellow-500/50 text-yellow-400 font-bold text-base md:text-lg rounded-xl hover:bg-yellow-500/10 hover:border-yellow-400 transition-all duration-300 w-full sm:w-auto">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Butuh Bantuan?
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>