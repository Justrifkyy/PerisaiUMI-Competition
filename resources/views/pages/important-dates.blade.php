<x-public-layout>
    <!-- Hero Section -->
    <div class="relative min-h-screen bg-black overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(234, 179, 8, 0.2) 2px, transparent 2px), linear-gradient(90deg, rgba(234, 179, 8, 0.2) 2px, transparent 2px); background-size: 100px 100px;"></div>
        </div>
        
        <div class="absolute top-1/4 left-1/4 w-64 h-64 md:w-96 md:h-96 bg-yellow-500 rounded-full blur-[120px] opacity-30 animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 md:w-[500px] md:h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 md:w-[600px] md:h-[600px] bg-yellow-600 rounded-full blur-[200px] opacity-10 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-5xl mx-auto text-center space-y-6 md:space-y-8 py-12 md:py-0">
                <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full">
                    <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Event Timeline</span>
                </div>

                <div class="space-y-3 md:space-y-4">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-black leading-none">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600" style="background-size: 200% auto; animation: gradient 3s ease infinite;">
                            JADWAL
                        </span>
                        <span class="block text-gray-100 mt-2">& RUNDOWN</span>
                    </h1>
                    <div class="flex items-center justify-center gap-3 md:gap-4">
                        <div class="h-1 w-20 md:w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                        <div class="h-2 w-2 bg-yellow-500 rounded-full animate-pulse"></div>
                        <div class="h-1 w-20 md:w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                    </div>
                </div>

                <p class="text-lg sm:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed px-4">
                    Catat tanggal-tanggal penting dan simak detail kegiatan LONTARA 2025
                </p>

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

    <!-- Timeline Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12 md:mb-16">
                    <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-4 md:mb-6">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Important Dates</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Timeline</span>
                        <span class="text-gray-100"> Kegiatan</span>
                    </h2>
                </div>

                <div class="group relative">
                    <div class="absolute -inset-2 bg-gradient-to-r from-yellow-500 via-yellow-400 to-yellow-600 rounded-2xl md:rounded-[3rem] blur-3xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-yellow-500/30 rounded-2xl md:rounded-[3rem] p-6 md:p-10 lg:p-12 backdrop-blur-xl hover:border-yellow-500/50 transition-all duration-500">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12"> <div class="group/item relative flex flex-col items-center text-center sm:text-left sm:flex-row sm:items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-green-500 rounded-full blur-xl opacity-50 group-hover/item:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 rounded-2xl bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center border-2 border-green-400/50 group-hover/item:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 w-full">
                                    <div class="flex flex-col items-center sm:items-start"> <div class="inline-flex items-center gap-2 px-3 py-1 bg-green-500/20 border border-green-500/40 rounded-full mb-2 md:mb-3">
                                            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                                            <span class="text-green-400 font-bold text-xs uppercase tracking-wider">Open</span>
                                        </div>
                                        <p class="text-sm text-gray-400 uppercase tracking-wide font-semibold mb-1">Pendaftaran Dibuka</p>
                                        <p class="text-2xl md:text-3xl font-black text-yellow-400">{{ \Carbon\Carbon::parse($settings['registration_opens_date'])->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group/item relative flex flex-col items-center text-center sm:text-left sm:flex-row sm:items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-yellow-500 rounded-full blur-xl opacity-50 group-hover/item:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50 group-hover/item:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 w-full">
                                    <div class="flex flex-col items-center sm:items-start">
                                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-yellow-500/20 border border-yellow-500/40 rounded-full mb-2 md:mb-3">
                                            <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                                            <span class="text-yellow-400 font-bold text-xs uppercase tracking-wider">Deadline</span>
                                        </div>
                                        <p class="text-sm text-gray-400 uppercase tracking-wide font-semibold mb-1">Batas Submit Proposal</p>
                                        <p class="text-2xl md:text-3xl font-black text-yellow-400">{{ \Carbon\Carbon::parse($settings['submission_deadline_date'])->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group/item relative flex flex-col items-center text-center sm:text-left sm:flex-row sm:items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-red-500 rounded-full blur-xl opacity-50 group-hover/item:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 rounded-2xl bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center border-2 border-red-400/50 group-hover/item:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 w-full">
                                    <div class="flex flex-col items-center sm:items-start">
                                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-red-500/20 border border-red-500/40 rounded-full mb-2 md:mb-3">
                                            <div class="w-2 h-2 bg-red-400 rounded-full animate-pulse"></div>
                                            <span class="text-red-400 font-bold text-xs uppercase tracking-wider">Closed</span>
                                        </div>
                                        <p class="text-sm text-gray-400 uppercase tracking-wide font-semibold mb-1">Pendaftaran Ditutup</p>
                                        <p class="text-2xl md:text-3xl font-black text-yellow-400">{{ \Carbon\Carbon::parse($settings['registration_closes_date'])->format('d F Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group/item relative flex flex-col items-center text-center sm:text-left sm:flex-row sm:items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-purple-500 rounded-full blur-xl opacity-50 group-hover/item:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 rounded-2xl bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center border-2 border-purple-400/50 group-hover/item:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1 w-full">
                                    <div class="flex flex-col items-center sm:items-start">
                                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-purple-500/20 border border-purple-500/40 rounded-full mb-2 md:mb-3">
                                            <div class="w-2 h-2 bg-purple-400 rounded-full animate-pulse"></div>
                                            <span class="text-purple-400 font-bold text-xs uppercase tracking-wider">Main Event</span>
                                        </div>
                                        <p class="text-sm text-gray-400 uppercase tracking-wide font-semibold mb-1">Pelaksanaan Lomba & Expo</p>
                                        <p class="text-2xl md:text-3xl font-black text-yellow-400">
                                            {{ \Carbon\Carbon::parse($settings['conference_starts_date'])->format('d') }} - 
                                            {{ \Carbon\Carbon::parse($settings['conference_ends_date'])->format('d F Y') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Rundown Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-1/4 w-96 h-96 md:w-[600px] md:h-[600px] bg-yellow-500 rounded-full blur-[200px] opacity-20"></div>
            <div class="absolute bottom-1/4 left-1/4 w-80 h-80 md:w-[500px] md:h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12 md:mb-20">
                    <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-4 md:mb-6">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Event Schedule</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-black">
                        <span class="text-gray-100">Rundown</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Acara</span>
                    </h2>
                </div>

                <div class="space-y-8 md:space-y-12">
                    <!-- Day 1 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl md:rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-blue-500/30 rounded-2xl md:rounded-[2rem] overflow-hidden hover:border-blue-500/60 transition-all duration-500">
                            <div class="relative bg-gradient-to-r from-blue-500/20 to-blue-600/20 backdrop-blur-xl border-b border-blue-500/30 px-4 sm:px-6 md:px-8 py-4 md:py-6">
                                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                                    <div class="flex items-center gap-4 md:gap-6">
                                        <div class="relative flex-shrink-0">
                                            <div class="absolute inset-0 bg-blue-500 rounded-xl md:rounded-2xl blur-xl opacity-60"></div>
                                            <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-blue-400/50">
                                                <span class="text-3xl md:text-4xl font-black text-white">1</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="text-xl sm:text-2xl md:text-3xl font-black text-blue-400 mb-1">Hari Pertama: Persiapan</h3>
                                            <p class="text-gray-300 text-sm md:text-lg">Minggu, 12 Januari 2025</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex items-center gap-2 px-3 md:px-4 py-1.5 md:py-2 bg-blue-500/30 border border-blue-400/50 rounded-full">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <span class="text-blue-400 font-bold text-xs md:text-sm">Setup Day</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 sm:p-6 md:p-8 space-y-3 md:space-y-4">
                                <div class="group/schedule flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-gray-800/50 to-transparent rounded-xl border border-gray-700/30 hover:border-blue-500/40 transition-all duration-300">
                                    <div class="flex-shrink-0">
                                        <div class="px-3 md:px-4 py-1.5 md:py-2 bg-blue-500/20 border border-blue-500/40 rounded-lg">
                                            <span class="font-mono text-xs md:text-sm font-bold text-blue-400">08.00 - 09.00</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-base md:text-lg font-semibold text-gray-200">Registrasi Peserta & Pengambilan ID Card</p>
                                    </div>
                                </div>

                                <div class="group/schedule flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-gray-800/50 to-transparent rounded-xl border border-gray-700/30 hover:border-blue-500/40 transition-all duration-300">
                                    <div class="flex-shrink-0">
                                        <div class="px-3 md:px-4 py-1.5 md:py-2 bg-blue-500/20 border border-blue-500/40 rounded-lg">
                                            <span class="font-mono text-xs md:text-sm font-bold text-blue-400">09.00 - 10.00</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-base md:text-lg font-semibold text-gray-200">Technical Meeting & Penjelasan Mekanisme</p>
                                    </div>
                                </div>

                                <div class="group/schedule flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-gray-800/50 to-transparent rounded-xl border border-gray-700/30 hover:border-blue-500/40 transition-all duration-300">
                                    <div class="flex-shrink-0">
                                        <div class="px-3 md:px-4 py-1.5 md:py-2 bg-blue-500/20 border border-blue-500/40 rounded-lg">
                                            <span class="font-mono text-xs md:text-sm font-bold text-blue-400">10.00 - 16.00</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-base md:text-lg font-semibold text-gray-200">Dekorasi dan Penataan Booth Peserta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Day 2 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-yellow-500/30 rounded-2xl md:rounded-[2rem] overflow-hidden hover:border-yellow-500/60 transition-all duration-500">
                            <div class="relative bg-gradient-to-r from-yellow-500/20 to-yellow-600/20 backdrop-blur-xl border-b border-yellow-500/30 px-4 sm:px-6 md:px-8 py-4 md:py-6">
                                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                                    <div class="flex items-center gap-4 md:gap-6">
                                        <div class="relative flex-shrink-0">
                                            <div class="absolute inset-0 bg-yellow-500 rounded-xl md:rounded-2xl blur-xl opacity-60"></div>
                                            <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-yellow-400/50">
                                                <span class="text-3xl md:text-4xl font-black text-black">2</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="text-xl sm:text-2xl md:text-3xl font-black text-yellow-400 mb-1">Hari Kedua: Opening & Presentasi</h3>
                                            <p class="text-gray-300 text-sm md:text-lg">Senin, 13 Januari 2025</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex items-center gap-2 px-3 md:px-4 py-1.5 md:py-2 bg-yellow-500/30 border border-yellow-400/50 rounded-full">
                                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                                        <span class="text-yellow-400 font-bold text-xs md:text-sm">Main Event</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 sm:p-6 md:p-8 space-y-3 md:space-y-4">
                                <div class="group/schedule flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-gray-800/50 to-transparent rounded-xl border border-gray-700/30 hover:border-yellow-500/40 transition-all duration-300">
                                    <div class="flex-shrink-0">
                                        <div class="px-3 md:px-4 py-1.5 md:py-2 bg-yellow-500/20 border border-yellow-500/40 rounded-lg">
                                            <span class="font-mono text-xs md:text-sm font-bold text-yellow-400">08.00 - 09.30</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-base md:text-lg font-semibold text-gray-200">Pembukaan Acara & Sambutan Rektor UMI</p>
                                    </div>
                                </div>

                                <div class="relative group/schedule">
                                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-xl blur opacity-40"></div>
                                    <div class="relative flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-yellow-500/20 to-yellow-400/10 rounded-xl border-2 border-yellow-500/50">
                                        <div class="flex-shrink-0">
                                            <div class="px-3 md:px-4 py-1.5 md:py-2 bg-yellow-500/40 border border-yellow-400/60 rounded-lg">
                                                <span class="font-mono text-xs md:text-sm font-bold text-black">10.00 - 11.30</span>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 md:gap-3 mb-2">
                                                <svg class="w-4 h-4 md:w-5 md:h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>
                                                <span class="text-black font-bold text-xs uppercase tracking-wider">Featured</span>
                                            </div>
                                            <p class="text-lg md:text-xl font-black text-black">Talkshow: "Green Tech Revolution"</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="group/schedule flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-gray-800/50 to-transparent rounded-xl border border-gray-700/30 hover:border-yellow-500/40 transition-all duration-300">
                                    <div class="flex-shrink-0">
                                        <div class="px-3 md:px-4 py-1.5 md:py-2 bg-yellow-500/20 border border-yellow-500/40 rounded-lg">
                                            <span class="font-mono text-xs md:text-sm font-bold text-yellow-400">13.00 - 16.00</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-base md:text-lg font-semibold text-gray-200">Sesi Presentasi Bisnis (Pitching) Tim 1-10</p>
                                    </div>
                                </div>

                                <div class="group/schedule flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-gray-800/50 to-transparent rounded-xl border border-gray-700/30 hover:border-yellow-500/40 transition-all duration-300">
                                    <div class="flex-shrink-0">
                                        <div class="px-3 md:px-4 py-1.5 md:py-2 bg-yellow-500/20 border border-yellow-500/40 rounded-lg">
                                            <span class="font-mono text-xs md:text-sm font-bold text-yellow-400">16.00 - 16.30</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-base md:text-lg font-semibold text-gray-200">Penjurian Langsung di Booth (In-Tenant Judging)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Day 3 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl md:rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-purple-500/30 rounded-2xl md:rounded-[2rem] overflow-hidden hover:border-purple-500/60 transition-all duration-500">
                            <div class="relative bg-gradient-to-r from-purple-500/20 to-purple-600/20 backdrop-blur-xl border-b border-purple-500/30 px-4 sm:px-6 md:px-8 py-4 md:py-6">
                                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                                    <div class="flex items-center gap-4 md:gap-6">
                                        <div class="relative flex-shrink-0">
                                            <div class="absolute inset-0 bg-purple-500 rounded-xl md:rounded-2xl blur-xl opacity-60"></div>
                                            <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-purple-400/50">
                                                <span class="text-3xl md:text-4xl font-black text-white">3</span>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="text-xl sm:text-2xl md:text-3xl font-black text-purple-400 mb-1">Hari Ketiga: Awarding & Closing</h3>
                                            <p class="text-gray-300 text-sm md:text-lg">Selasa, 14 Januari 2025</p>
                                        </div>
                                    </div>
                                    <div class="inline-flex items-center gap-2 px-3 md:px-4 py-1.5 md:py-2 bg-purple-500/30 border border-purple-400/50 rounded-full">
                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                        </svg>
                                        <span class="text-purple-400 font-bold text-xs md:text-sm">Grand Finale</span>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 sm:p-6 md:p-8 space-y-3 md:space-y-4">
                                <div class="group/schedule flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-gray-800/50 to-transparent rounded-xl border border-gray-700/30 hover:border-purple-500/40 transition-all duration-300">
                                    <div class="flex-shrink-0">
                                        <div class="px-3 md:px-4 py-1.5 md:py-2 bg-purple-500/20 border border-purple-500/40 rounded-lg">
                                            <span class="font-mono text-xs md:text-sm font-bold text-purple-400">08.05 - 08.30</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-base md:text-lg font-semibold text-gray-200">Penampilan Spesial UKM Seni UMI</p>
                                    </div>
                                </div>

                                <div class="relative group/schedule">
                                    <div class="absolute -inset-1 bg-gradient-to-r from-purple-400 to-purple-600 rounded-xl blur opacity-40"></div>
                                    <div class="relative flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-purple-500/20 to-purple-400/10 rounded-xl border-2 border-purple-500/50">
                                        <div class="flex-shrink-0">
                                            <div class="px-3 md:px-4 py-1.5 md:py-2 bg-purple-500/40 border border-purple-400/60 rounded-lg">
                                                <span class="font-mono text-xs md:text-sm font-bold text-white">09.00 - 09.45</span>
                                            </div>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 md:gap-3 mb-2">
                                                <svg class="w-4 h-4 md:w-5 md:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                                </svg>
                                                <span class="text-white font-bold text-xs uppercase tracking-wider">Grand Prize</span>
                                            </div>
                                            <p class="text-lg md:text-xl font-black text-white">Pengumuman Juara & Penyerahan Hadiah</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="group/schedule flex flex-col sm:flex-row items-start gap-3 md:gap-6 p-4 md:p-5 bg-gradient-to-r from-gray-800/50 to-transparent rounded-xl border border-gray-700/30 hover:border-purple-500/40 transition-all duration-300">
                                    <div class="flex-shrink-0">
                                        <div class="px-3 md:px-4 py-1.5 md:py-2 bg-purple-500/20 border border-purple-500/40 rounded-lg">
                                            <span class="font-mono text-xs md:text-sm font-bold text-purple-400">11.30 - 12.00</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <p class="text-base md:text-lg font-semibold text-gray-200">Penutupan LONTARA 2025 & Farewell</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-yellow-500/5 to-black"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.2) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.2) 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-6 md:mb-8">
                    <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                    <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Ready to Join?</span>
                </div>

                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-gray-100 mb-4 md:mb-6">
                    Jangan Lewatkan
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Kesempatan Emas Ini!</span>
                </h2>
                
                <p class="text-lg md:text-xl text-gray-300 mb-8 md:mb-12 max-w-2xl mx-auto leading-relaxed px-4">
                    Daftarkan diri Anda sekarang dan jadilah bagian dari perjalanan inovasi LONTARA 2025
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-6">
                    <a href="{{ route('register') }}" class="group relative inline-flex items-center gap-2 md:gap-3 px-8 md:px-12 py-4 md:py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-black text-base md:text-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300 w-full sm:w-auto">
                        <span class="relative z-10">Daftar Sekarang</span>
                        <svg class="w-5 h-5 md:w-6 md:h-6 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <a href="https://bit.ly/GuidebookLontara" target="_blank" class="inline-flex items-center gap-2 md:gap-3 px-8 md:px-12 py-4 md:py-5 bg-transparent border-2 border-yellow-500/50 text-yellow-400 font-bold text-base md:text-lg rounded-xl hover:bg-yellow-500/10 hover:border-yellow-400 transition-all duration-300 w-full sm:w-auto">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Download Guidebook
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>