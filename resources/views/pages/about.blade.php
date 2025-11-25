<x-public-layout>
    <!-- Hero Section with Animated Background -->
    <div class="relative min-h-screen bg-black overflow-hidden flex items-center justify-center">
        <!-- Animated Grid Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(234, 179, 8, 0.2) 2px, transparent 2px), linear-gradient(90deg, rgba(234, 179, 8, 0.2) 2px, transparent 2px); background-size: 100px 100px;"></div>
        </div>
        
        <!-- Multiple Glowing Orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-yellow-500 rounded-full blur-[120px] opacity-30 animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-yellow-600 rounded-full blur-[200px] opacity-10 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto text-center space-y-8">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                    </span>
                    <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">About Event</span>
                </div>

                <!-- Main Title with Split Animation Effect -->
                <div class="space-y-4">
                    <h1 class="text-6xl lg:text-8xl font-black leading-none">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600" style="background-size: 200% auto; animation: gradient 3s ease infinite;">
                            TENTANG
                        </span>
                        <span class="block text-gray-100 mt-2">LONTARA 2025</span>
                    </h1>
                    <div class="flex items-center justify-center gap-4">
                        <div class="h-1 w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                        <div class="h-2 w-2 bg-yellow-500 rounded-full animate-pulse"></div>
                        <div class="h-1 w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                    </div>
                </div>

                <!-- Subtitle -->
                <p class="text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Ajang Nasional Kolaborasi Mahasiswa & Pengusaha untuk Solusi Inovatif Berbasis Teknologi
                </p>

                <!-- Scroll Indicator -->
                <div class="pt-12 animate-bounce">
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

    <!-- About Content Section - Diagonal Split Design -->
    <div class="relative bg-black py-32 overflow-hidden">
        <!-- Diagonal Background Effect -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>
            <div class="absolute top-0 left-0 right-0 h-64 bg-gradient-to-b from-yellow-500/5 to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-7xl mx-auto">
                <!-- Grid Layout with Asymmetric Cards -->
                <div class="grid lg:grid-cols-12 gap-8 lg:gap-12">
                    <!-- Large Feature Card -->
                    <div class="lg:col-span-7">
                        <div class="group relative h-full">
                            <!-- Glow Effect -->
                            <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 via-yellow-400 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                            
                            <!-- Card Content -->
                            <div class="relative h-full bg-gradient-to-br from-gray-900/90 via-gray-800/90 to-gray-900/90 backdrop-blur-2xl border border-yellow-500/30 rounded-[2rem] p-10 lg:p-12 hover:border-yellow-500/60 transition-all duration-500 hover:scale-[1.02]">
                                <!-- Number Badge -->
                                <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-3xl flex items-center justify-center shadow-2xl shadow-yellow-500/50 rotate-12 group-hover:rotate-0 transition-transform duration-500">
                                    <span class="text-5xl font-black text-black">01</span>
                                </div>

                                <!-- Icon -->
                                <div class="mb-8">
                                    <div class="inline-flex p-4 bg-yellow-500/10 border border-yellow-500/30 rounded-2xl">
                                        <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <h3 class="text-3xl lg:text-4xl font-black text-yellow-400 mb-6">
                                    Konsep Inovatif
                                </h3>
                                
                                <p class="text-lg text-gray-200 leading-relaxed mb-6">
                                    LONTARA 2025 merupakan ajang nasional yang menjadi wadah kolaborasi mahasiswa dan pengusaha untuk menghadirkan solusi inovatif berbasis teknologi dan keberlanjutan.
                                </p>

                                <p class="text-lg text-gray-300 leading-relaxed">
                                    Tahun ini, LONTARA hadir dengan konsep baru berupa lomba kewirausahaan dan expo bisnis, yang menggabungkan semangat riset, inovasi, serta implementasi nyata di dunia usaha. Kegiatan ini digagas oleh <span class="text-yellow-400 font-bold">UKM PERISAI Universitas Muslim Indonesia (UMI)</span>.
                                </p>

                                <!-- Decorative Element -->
                                <div class="absolute bottom-8 right-8 w-32 h-32 border-4 border-yellow-500/20 rounded-full"></div>
                                <div class="absolute bottom-12 right-12 w-24 h-24 border-4 border-yellow-500/10 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary Card with Stats -->
                    <div class="lg:col-span-5 space-y-8">
                        <div class="group relative">
                            <div class="absolute -inset-1 bg-gradient-to-r from-yellow-600 to-yellow-400 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                            
                            <div class="relative bg-gradient-to-br from-gray-900/90 to-gray-800/90 backdrop-blur-2xl border border-yellow-500/30 rounded-[2rem] p-10 hover:border-yellow-500/60 transition-all duration-500 hover:scale-[1.02]">
                                <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-3xl flex items-center justify-center shadow-2xl shadow-yellow-500/50 -rotate-12 group-hover:rotate-0 transition-transform duration-500">
                                    <span class="text-5xl font-black text-black">02</span>
                                </div>

                                <div class="mb-8">
                                    <div class="inline-flex p-4 bg-yellow-500/10 border border-yellow-500/30 rounded-2xl">
                                        <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <h3 class="text-3xl font-black text-yellow-400 mb-6">
                                    Ekosistem Berkelanjutan
                                </h3>
                                
                                <p class="text-lg text-gray-200 leading-relaxed">
                                    Kami percaya bahwa dengan mempertemukan mahasiswa, mentor, dan pelaku usaha dari berbagai daerah, kita dapat menciptakan ekosistem kewirausahaan yang berkelanjutan.
                                </p>
                            </div>
                        </div>

                        <!-- Mini Feature Card -->
                        <div class="group relative">
                            <div class="absolute -inset-1 bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-[2rem] blur-xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                            
                            <div class="relative bg-gradient-to-br from-yellow-500/20 to-yellow-400/10 backdrop-blur-xl border border-yellow-500/40 rounded-[2rem] p-8 hover:border-yellow-500/70 transition-all duration-500">
                                <p class="text-base text-gray-200 leading-relaxed">
                                    <span class="text-yellow-400 font-black text-2xl">"</span>
                                    LONTARA 2025 bukan hanya sekadar kompetisi, melainkan ruang inspiratif bagi generasi muda untuk menampilkan gagasan dan karya nyata dalam menjawab tantangan masa depan.
                                    <span class="text-yellow-400 font-black text-2xl">"</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Location Section - Modern Card Design -->
    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-6">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">Event Location</span>
                    </div>
                    
                    <h2 class="text-5xl lg:text-6xl font-black mb-6">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Lokasi</span>
                        <span class="text-gray-100"> Acara</span>
                    </h2>
                </div>

                <!-- Location Card -->
                <div class="group relative">
                    <div class="absolute -inset-2 bg-gradient-to-r from-yellow-500 via-yellow-400 to-yellow-600 rounded-[3rem] blur-3xl opacity-0 group-hover:opacity-50 transition-all duration-700"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-yellow-500/30 rounded-[3rem] overflow-hidden hover:border-yellow-500/60 transition-all duration-500">
                        <!-- Info Section -->
                        <div class="p-10 lg:p-12">
                            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
                                <div class="flex-1">
                                    <div class="inline-flex items-center gap-3 px-5 py-2 bg-yellow-500/20 border border-yellow-500/40 rounded-full mb-6">
                                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                                        <span class="text-yellow-400 font-bold text-sm uppercase tracking-wider">Venue</span>
                                    </div>
                                    
                                    <h3 class="text-3xl lg:text-4xl font-black text-yellow-400 mb-4">
                                        GOR Universitas Muslim Indonesia
                                    </h3>
                                    
                                    <p class="text-lg text-gray-300 leading-relaxed max-w-2xl">
                                        Jl. Urip Sumoharjo No.KM.05, Panaikang, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan
                                    </p>
                                </div>

                                <div class="flex gap-4">
                                    <a href="https://maps.google.com/?q=Universitas Muslim Indonesia" target="_blank" class="group/btn relative inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                                        <span class="relative z-10">Lihat Maps</span>
                                        <svg class="w-5 h-5 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Map Section -->
                        <div class="relative h-[500px] border-t-2 border-yellow-500/30">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.807522767766!2d119.44634597452036!3d-5.13466965193633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee306d5c606b3%3A0x507203320f23e65e!2sUniversitas%20Muslim%20Indonesia!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                class="grayscale hover:grayscale-0 transition-all duration-500">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Committee Section - Creative Grid -->
    <div class="relative bg-black py-32 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-yellow-500 rounded-full blur-[200px] opacity-20"></div>
            <div class="absolute bottom-1/4 left-1/4 w-[500px] h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-7xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-6">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">Our Team</span>
                    </div>
                    
                    <h2 class="text-5xl lg:text-7xl font-black mb-6">
                        <span class="text-gray-100">Panitia</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Penyelenggara</span>
                    </h2>

                    <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                        Tim solid yang siap menghadirkan pengalaman terbaik untuk Anda
                    </p>
                </div>

                <!-- Committee Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($committee as $index => $member)
                        <div class="group relative" style="animation-delay: {{ $index * 100 }}ms;">
                            <!-- Hover Glow -->
                            <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-60 transition-all duration-700"></div>
                            
                            <!-- Card -->
                            <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/70 transition-all duration-500 hover:-translate-y-3 h-full">
                                <!-- Image Container -->
                                <div class="relative mb-6">
                                    <!-- Decorative Ring -->
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="w-36 h-36 border-2 border-yellow-500/30 rounded-full group-hover:scale-110 group-hover:border-yellow-500/60 transition-all duration-500"></div>
                                    </div>
                                    
                                    <!-- Image with Glow -->
                                    <div class="relative flex justify-center">
                                        <div class="relative">
                                            <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full blur-xl opacity-40 group-hover:opacity-70 transition-opacity duration-500"></div>
                                            <div class="relative h-32 w-32 rounded-full overflow-hidden border-4 border-yellow-500/50 group-hover:border-yellow-400 transition-colors duration-500">
                                                <img src="{{ Storage::url($member->image_path) }}" alt="{{ $member->name }}" class="h-full w-full object-cover group-hover:scale-110 transition-transform duration-500">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Floating Badge -->
                                    <div class="absolute -top-2 -right-2 bg-gradient-to-br from-yellow-400 to-yellow-600 text-black font-black text-xs px-3 py-1 rounded-full shadow-lg">
                                        #{{ $index + 1 }}
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="text-center space-y-3">
                                    <h3 class="text-xl font-black text-gray-100 group-hover:text-yellow-400 transition-colors duration-300">
                                        {{ $member->name }}
                                    </h3>
                                    
                                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/20 border border-yellow-500/40 rounded-full">
                                        <div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
                                        <p class="text-sm text-yellow-400 font-bold uppercase tracking-wider">
                                            {{ $member->role }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Decorative Corner -->
                                <div class="absolute top-4 left-4 w-8 h-8 border-t-2 border-l-2 border-yellow-500/30 group-hover:border-yellow-500/60 transition-colors duration-500"></div>
                                <div class="absolute bottom-4 right-4 w-8 h-8 border-b-2 border-r-2 border-yellow-500/30 group-hover:border-yellow-500/60 transition-colors duration-500"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-yellow-500/5 to-black"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-5xl lg:text-6xl font-black text-gray-100 mb-6">
                    Siap Bergabung dengan
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">LONTARA 2025?</span>
                </h2>
                
                <p class="text-xl text-gray-300 mb-12 max-w-2xl mx-auto">
                    Jadilah bagian dari ekosistem inovasi dan wujudkan ide-ide cemerlangmu bersama kami
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                    <a href="#" class="group relative inline-flex items-center gap-3 px-12 py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-black text-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300">
                        <span class="relative z-10">Daftar Sekarang</span>
                        <svg class="w-6 h-6 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>

                    <a href="#" class="inline-flex items-center gap-3 px-12 py-5 bg-transparent border-2 border-yellow-500/50 text-yellow-400 font-bold text-lg rounded-xl hover:bg-yellow-500/10 hover:border-yellow-400 transition-all duration-300">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>