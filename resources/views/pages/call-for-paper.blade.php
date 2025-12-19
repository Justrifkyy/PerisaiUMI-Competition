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
                    <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Competition Guide</span>
                </div>

                <!-- Main Title -->
                <div class="space-y-3 md:space-y-4">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-8xl font-black leading-none">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600" style="background-size: 200% auto; animation: gradient 3s ease infinite;">
                            PANDUAN
                        </span>
                        <span class="block text-gray-100 mt-2">& KATEGORI</span>
                    </h1>
                    <div class="flex items-center justify-center gap-3 md:gap-4">
                        <div class="h-1 w-20 md:w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                        <div class="h-2 w-2 bg-yellow-500 rounded-full animate-pulse"></div>
                        <div class="h-1 w-20 md:w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                    </div>
                </div>

                <!-- Subtitle -->
                <p class="text-lg sm:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed px-4">
                    <span class="text-yellow-400 font-bold">"Green Tech Revolution"</span> - Membangun Masa Depan dengan Teknologi Cerdas
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

    <!-- Kategori Section - Asymmetric Design -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-7xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12 md:mb-20">
                    <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-4 md:mb-6">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Competition Categories</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-black mb-4 md:mb-6">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Kategori</span>
                        <span class="text-gray-100"> Lomba</span>
                    </h2>
                    
                    <p class="text-base md:text-xl text-gray-400 max-w-3xl mx-auto px-4">
                        Dua jalur kompetisi untuk berbagai tahap perkembangan bisnis Anda
                    </p>
                </div>

                <!-- Asymmetric Grid Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 lg:gap-12">
                    <!-- Early Stage - Large Card -->
                    <div class="lg:col-span-7">
                        <div class="group relative h-full">
                            <!-- Glow Effect -->
                            <div class="absolute -inset-1 md:-inset-2 bg-gradient-to-r from-green-500 via-green-400 to-green-600 rounded-2xl md:rounded-[3rem] blur-2xl md:blur-3xl opacity-0 group-hover:opacity-50 transition-all duration-700"></div>
                            
                            <!-- Main Card -->
                            <div class="relative h-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-green-500/30 rounded-2xl md:rounded-[3rem] p-6 md:p-10 lg:p-12 backdrop-blur-xl hover:border-green-500/60 transition-all duration-500 hover:scale-[1.02]">
                                <!-- Floating Number Badge -->
                                <div class="absolute -top-6 -right-6 md:-top-8 md:-right-8 w-20 h-20 md:w-28 md:h-28 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl md:rounded-3xl flex items-center justify-center shadow-2xl shadow-green-500/50 rotate-12 group-hover:rotate-0 transition-transform duration-500">
                                    <span class="text-4xl md:text-6xl font-black text-white">01</span>
                                </div>

                                <!-- Icon Badge -->
                                <div class="mb-6 md:mb-8">
                                    <div class="inline-flex p-3 md:p-5 bg-green-500/10 border-2 border-green-500/30 rounded-2xl md:rounded-3xl">
                                        <svg class="w-10 h-10 md:w-16 md:h-16 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <h3 class="text-3xl md:text-4xl lg:text-5xl font-black text-green-400 mb-4 md:mb-6">
                                    Early Stage
                                </h3>
                                
                                <p class="text-base md:text-lg lg:text-xl text-gray-200 leading-relaxed mb-6 md:mb-8">
                                    Kategori untuk tim yang masih dalam tahap <span class="text-green-400 font-bold">ideasi, riset, atau pengembangan konsep</span>. Produk belum dipasarkan secara luas, namun memiliki validasi masalah yang kuat.
                                </p>

                                <!-- Focus Points -->
                                <div class="space-y-4 md:space-y-6">
                                    <div class="flex items-start gap-3 md:gap-4">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-2 h-2 md:w-3 md:h-3 bg-green-400 rounded-full animate-pulse"></div>
                                        </div>
                                        <p class="text-sm md:text-base lg:text-lg text-gray-300">Validasi masalah & solusi inovatif</p>
                                    </div>
                                    <div class="flex items-start gap-3 md:gap-4">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-2 h-2 md:w-3 md:h-3 bg-green-400 rounded-full animate-pulse" style="animation-delay: 0.2s;"></div>
                                        </div>
                                        <p class="text-sm md:text-base lg:text-lg text-gray-300">Perencanaan Business Model Canvas (BMC)</p>
                                    </div>
                                    <div class="flex items-start gap-3 md:gap-4">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-2 h-2 md:w-3 md:h-3 bg-green-400 rounded-full animate-pulse" style="animation-delay: 0.4s;"></div>
                                        </div>
                                        <p class="text-sm md:text-base lg:text-lg text-gray-300">Potensi dampak keberlanjutan</p>
                                    </div>
                                </div>

                                <!-- Decorative Corners -->
                                <div class="absolute top-4 left-4 md:top-8 md:left-8 w-8 h-8 md:w-12 md:h-12 border-t-2 md:border-t-4 border-l-2 md:border-l-4 border-green-500/30 group-hover:border-green-500/60 transition-colors duration-500 rounded-tl-xl md:rounded-tl-2xl"></div>
                                <div class="absolute bottom-4 right-4 md:bottom-8 md:right-8 w-8 h-8 md:w-12 md:h-12 border-b-2 md:border-b-4 border-r-2 md:border-r-4 border-green-500/30 group-hover:border-green-500/60 transition-colors duration-500 rounded-br-xl md:rounded-br-2xl"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Running Stage - Stacked Cards -->
                    <div class="lg:col-span-5 space-y-6 md:space-y-8">
                        <!-- Main Running Stage Card -->
                        <div class="group relative">
                            <div class="absolute -inset-1 md:-inset-2 bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl md:rounded-[2rem] blur-xl md:blur-2xl opacity-0 group-hover:opacity-50 transition-all duration-700"></div>
                            
                            <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border-2 border-blue-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-10 backdrop-blur-xl hover:border-blue-500/60 transition-all duration-500 hover:scale-[1.02]">
                                <div class="absolute -top-6 -right-6 md:-top-8 md:-right-8 w-20 h-20 md:w-28 md:h-28 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl md:rounded-3xl flex items-center justify-center shadow-2xl shadow-blue-500/50 -rotate-12 group-hover:rotate-0 transition-transform duration-500">
                                    <span class="text-4xl md:text-6xl font-black text-white">02</span>
                                </div>

                                <div class="mb-4 md:mb-6">
                                    <div class="inline-flex p-3 md:p-4 bg-blue-500/10 border-2 border-blue-500/30 rounded-xl md:rounded-2xl">
                                        <svg class="w-8 h-8 md:w-12 md:h-12 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <h3 class="text-2xl md:text-3xl font-black text-blue-400 mb-3 md:mb-4">
                                    Running Stage
                                </h3>
                                
                                <p class="text-sm md:text-base lg:text-lg text-gray-200 leading-relaxed mb-4 md:mb-6">
                                    Tim yang sudah memiliki <span class="text-blue-400 font-bold">produk jadi (MVP)</span>, operasional berjalan, atau bukti traksi pasar.
                                </p>

                                <div class="space-y-3 md:space-y-4">
                                    <div class="flex items-start gap-2 md:gap-3">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-1.5 h-1.5 md:w-2 md:h-2 bg-blue-400 rounded-full"></div>
                                        </div>
                                        <p class="text-xs md:text-sm lg:text-base text-gray-300">Bukti traksi & skalabilitas</p>
                                    </div>
                                    <div class="flex items-start gap-2 md:gap-3">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-1.5 h-1.5 md:w-2 md:h-2 bg-blue-400 rounded-full"></div>
                                        </div>
                                        <p class="text-xs md:text-sm lg:text-base text-gray-300">Kematangan produk</p>
                                    </div>
                                    <div class="flex items-start gap-2 md:gap-3">
                                        <div class="flex-shrink-0 mt-1">
                                            <div class="w-1.5 h-1.5 md:w-2 md:h-2 bg-blue-400 rounded-full"></div>
                                        </div>
                                        <p class="text-xs md:text-sm lg:text-base text-gray-300">Strategi pertumbuhan</p>
                                    </div>
                                </div>

                                <div class="absolute top-4 left-4 md:top-6 md:left-6 w-6 h-6 md:w-8 md:h-8 border-t-2 border-l-2 border-blue-500/30 group-hover:border-blue-500/60 transition-colors duration-500"></div>
                                <div class="absolute bottom-4 right-4 md:bottom-6 md:right-6 w-6 h-6 md:w-8 md:h-8 border-b-2 border-r-2 border-blue-500/30 group-hover:border-blue-500/60 transition-colors duration-500"></div>
                            </div>
                        </div>

                        <!-- Info Card -->
                        <div class="group relative">
                            <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-400 rounded-2xl md:rounded-[2rem] blur-xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                            
                            <div class="relative bg-gradient-to-br from-yellow-500/20 to-yellow-400/10 backdrop-blur-xl border border-yellow-500/40 rounded-2xl md:rounded-[2rem] p-6 md:p-8 hover:border-yellow-500/70 transition-all duration-500">
                                <div class="flex items-start gap-3 md:gap-4">
                                    <svg class="w-6 h-6 md:w-8 md:h-8 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-sm md:text-base text-gray-200 leading-relaxed">
                                        Pilih kategori yang sesuai dengan tahap perkembangan bisnis Anda untuk penilaian yang lebih tepat dan fair!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Requirements Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-1/4 w-96 h-96 md:w-[600px] md:h-[600px] bg-yellow-500 rounded-full blur-[200px] opacity-20"></div>
            <div class="absolute bottom-1/4 left-1/4 w-80 h-80 md:w-[500px] md:h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12 md:mb-20">
                    <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-4 md:mb-6">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Requirements</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6">
                        <span class="text-gray-100">Persyaratan</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> Peserta</span>
                    </h2>
                </div>

                <!-- Requirements Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    <!-- Requirement 1 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-xl md:blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex flex-col sm:flex-row items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-yellow-500 rounded-xl md:rounded-2xl blur-lg md:blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-12 w-12 md:h-16 md:w-16 rounded-xl md:rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                            <span class="text-2xl md:text-3xl font-black text-black">1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-2 md:mb-3">Mahasiswa Aktif</h3>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">Jenjang D3/D4/S1 dari perguruan tinggi seluruh Indonesia. Wajib lampirkan KTM yang masih berlaku.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Requirement 2 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-xl md:blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex flex-col sm:flex-row items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-yellow-500 rounded-xl md:rounded-2xl blur-lg md:blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-12 w-12 md:h-16 md:w-16 rounded-xl md:rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                            <span class="text-2xl md:text-3xl font-black text-black">2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-2 md:mb-3">Tim 3-5 Orang</h3>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">Satu tim terdiri dari 3 hingga 5 mahasiswa. Boleh lintas jurusan dalam satu kampus.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Requirement 3 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-xl md:blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex flex-col sm:flex-row items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-yellow-500 rounded-xl md:rounded-2xl blur-lg md:blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-12 w-12 md:h-16 md:w-16 rounded-xl md:rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                            <span class="text-2xl md:text-3xl font-black text-black">3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-2 md:mb-3">Karya Orisinal</h3>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">Ide bisnis belum pernah memenangkan kompetisi sejenis dan bebas plagiarisme.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Requirement 4 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl md:rounded-[2rem] blur-xl md:blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-2xl md:rounded-[2rem] p-6 md:p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex flex-col sm:flex-row items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-yellow-500 rounded-xl md:rounded-2xl blur-lg md:blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-12 w-12 md:h-16 md:w-16 rounded-xl md:rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                            <span class="text-2xl md:text-3xl font-black text-black">4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl md:text-2xl font-black text-yellow-400 mb-2 md:mb-3">Satu Akun Tim</h3>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">Pendaftaran dilakukan oleh Ketua Tim mewakili seluruh anggota.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Criteria Section - Dark Premium Card -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-12 md:mb-20">
                    <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-4 md:mb-6">
                        <svg class="w-4 h-4 md:w-5 md:h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 0022h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Scoring System</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl font-black mb-4 md:mb-6">
                        <span class="text-gray-100">Kriteria</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Penilaian</span>
                    </h2>
                    
                    <p class="text-base md:text-xl text-gray-400 max-w-2xl mx-auto px-4">
                        Empat aspek utama yang akan dinilai dalam proposal bisnis Anda
                    </p>
                </div>

                <!-- Main Criteria Card -->
                <div class="group relative">
                    <div class="absolute -inset-1 md:-inset-2 bg-gradient-to-r from-yellow-500 via-yellow-400 to-yellow-600 rounded-2xl md:rounded-[3rem] blur-2xl md:blur-3xl opacity-20 group-hover:opacity-40 transition-all duration-700"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 via-black to-gray-900 border-2 border-yellow-500/30 rounded-2xl md:rounded-[3rem] p-6 md:p-12 lg:p-16 backdrop-blur-xl hover:border-yellow-500/50 transition-all duration-500">
                        <!-- Decorative Pattern Overlay -->
                        <div class="absolute inset-0 opacity-5 rounded-2xl md:rounded-[3rem]" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
                        
                        <div class="relative space-y-6 md:space-y-10">
                            <!-- Criteria Item 1 -->
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-indigo-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-indigo-500/20 hover:border-indigo-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative">
                                            <div class="absolute inset-0 bg-indigo-500 rounded-xl md:rounded-2xl blur-xl md:blur-2xl opacity-40"></div>
                                            <div class="relative h-16 w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-indigo-400/50">
                                                <svg class="w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 md:gap-4 mb-3 md:mb-4">
                                            <h3 class="text-xl md:text-2xl lg:text-3xl font-black text-indigo-400">Business Model Canvas</h3>
                                            <div class="hidden sm:block flex-1 h-1 bg-gradient-to-r from-indigo-500/50 to-transparent rounded-full"></div>
                                            <span class="text-3xl md:text-4xl lg:text-5xl font-black text-indigo-400">35%</span>
                                        </div>
                                        <div class="w-full bg-gray-800/50 rounded-full h-3 md:h-4 mb-3 md:mb-4">
                                            <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 h-3 md:h-4 rounded-full shadow-lg shadow-indigo-500/50 transition-all duration-1000" style="width: 35%"></div>
                                        </div>
                                        <p class="text-sm md:text-base text-gray-300 leading-relaxed">Kelengkapan 9 elemen bisnis: value proposition, customer segments, revenue streams, cost structure, channels, key activities, key resources, key partnerships, dan customer relationships.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Criteria Item 2 -->
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-green-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-green-500/20 hover:border-green-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative">
                                            <div class="absolute inset-0 bg-green-500 rounded-xl md:rounded-2xl blur-xl md:blur-2xl opacity-40"></div>
                                            <div class="relative h-16 w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 bg-gradient-to-br from-green-400 to-green-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-green-400/50">
                                                <svg class="w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 md:gap-4 mb-3 md:mb-4">
                                            <h3 class="text-xl md:text-2xl lg:text-3xl font-black text-green-400">Ide & Orisinalitas</h3>
                                            <div class="hidden sm:block flex-1 h-1 bg-gradient-to-r from-green-500/50 to-transparent rounded-full"></div>
                                            <span class="text-3xl md:text-4xl lg:text-5xl font-black text-green-400">30%</span>
                                        </div>
                                        <div class="w-full bg-gray-800/50 rounded-full h-3 md:h-4 mb-3 md:mb-4">
                                            <div class="bg-gradient-to-r from-green-500 to-green-600 h-3 md:h-4 rounded-full shadow-lg shadow-green-500/50 transition-all duration-1000" style="width: 30%"></div>
                                        </div>
                                        <p class="text-sm md:text-base text-gray-300 leading-relaxed">Tingkat inovasi, kebaruan ide, riset dasar yang dilakukan, diferensiasi dari kompetitor, dan kelayakan implementasi di dunia nyata.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Criteria Item 3 -->
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-yellow-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-yellow-500/20 hover:border-yellow-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative">
                                            <div class="absolute inset-0 bg-yellow-500 rounded-xl md:rounded-2xl blur-xl md:blur-2xl opacity-40"></div>
                                            <div class="relative h-16 w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-yellow-400/50">
                                                <svg class="w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 md:gap-4 mb-3 md:mb-4">
                                            <h3 class="text-xl md:text-2xl lg:text-3xl font-black text-yellow-400">Dampak Sosial</h3>
                                            <div class="hidden sm:block flex-1 h-1 bg-gradient-to-r from-yellow-500/50 to-transparent rounded-full"></div>
                                            <span class="text-3xl md:text-4xl lg:text-5xl font-black text-yellow-400">25%</span>
                                        </div>
                                        <div class="w-full bg-gray-800/50 rounded-full h-3 md:h-4 mb-3 md:mb-4">
                                            <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 h-3 md:h-4 rounded-full shadow-lg shadow-yellow-500/50 transition-all duration-1000" style="width: 25%"></div>
                                        </div>
                                        <p class="text-sm md:text-base text-gray-300 leading-relaxed">Manfaat nyata bagi masyarakat, pemberdayaan UMKM, solusi terhadap isu lingkungan (Green Tech), dan kontribusi terhadap SDGs.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Criteria Item 4 -->
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-pink-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-pink-500/20 hover:border-pink-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative">
                                            <div class="absolute inset-0 bg-pink-500 rounded-xl md:rounded-2xl blur-xl md:blur-2xl opacity-40"></div>
                                            <div class="relative h-16 w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 bg-gradient-to-br from-pink-400 to-pink-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-pink-400/50">
                                                <svg class="w-8 h-8 md:w-10 md:h-10 lg:w-12 lg:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 md:gap-4 mb-3 md:mb-4">
                                            <h3 class="text-xl md:text-2xl lg:text-3xl font-black text-pink-400">Visualisasi</h3>
                                            <div class="hidden sm:block flex-1 h-1 bg-gradient-to-r from-pink-500/50 to-transparent rounded-full"></div>
                                            <span class="text-3xl md:text-4xl lg:text-5xl font-black text-pink-400">10%</span>
                                        </div>
                                        <div class="w-full bg-gray-800/50 rounded-full h-3 md:h-4 mb-3 md:mb-4">
                                            <div class="bg-gradient-to-r from-pink-500 to-pink-600 h-3 md:h-4 rounded-full shadow-lg shadow-pink-500/50 transition-all duration-1000" style="width: 10%"></div>
                                        </div>
                                        <p class="text-sm md:text-base text-gray-300 leading-relaxed">Kualitas desain proposal, layout yang komunikatif, penggunaan infografis, dan kejelasan penyampaian ide secara visual.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Corners -->
                        <div class="absolute top-4 left-4 md:top-8 md:left-8 w-10 h-10 md:w-16 md:h-16 border-t-2 md:border-t-4 border-l-2 md:border-l-4 border-yellow-500/30 rounded-tl-2xl md:rounded-tl-3xl"></div>
                        <div class="absolute bottom-4 right-4 md:bottom-8 md:right-8 w-10 h-10 md:w-16 md:h-16 border-b-2 md:border-b-4 border-r-2 md:border-r-4 border-yellow-500/30 rounded-br-2xl md:rounded-br-3xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-yellow-500/5 to-black"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.2) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.2) 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <!-- Floating Orbs -->
        <div class="absolute top-1/3 left-1/4 w-64 h-64 md:w-96 md:h-96 bg-yellow-500 rounded-full blur-[150px] opacity-20 animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/4 w-64 h-64 md:w-96 md:h-96 bg-yellow-400 rounded-full blur-[150px] opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-5xl mx-auto">
                <!-- Main CTA Card -->
                <div class="group relative">
                    <div class="absolute -inset-1 md:-inset-2 bg-gradient-to-r from-yellow-500 via-yellow-400 to-yellow-600 rounded-2xl md:rounded-[3rem] blur-2xl md:blur-3xl opacity-30 group-hover:opacity-50 transition-all duration-700"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-yellow-500/40 rounded-2xl md:rounded-[3rem] p-8 md:p-12 lg:p-16 text-center backdrop-blur-xl">
                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 md:gap-3 px-4 md:px-6 py-2 md:py-3 bg-gradient-to-r from-yellow-500/30 to-yellow-400/30 backdrop-blur-xl border border-yellow-500/60 rounded-full mb-6 md:mb-8">
                            <div class="w-2 h-2 md:w-3 md:h-3 bg-yellow-400 rounded-full animate-pulse"></div>
                            <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Ready to Compete?</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-gray-100 mb-4 md:mb-6">
                            Siap Berkompetisi &
                            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Raih Kemenangan?</span>
                        </h2>
                        
                        <p class="text-base md:text-lg lg:text-xl text-gray-300 mb-8 md:mb-12 max-w-3xl mx-auto leading-relaxed px-4">
                            Daftarkan tim Anda sekarang dan buktikan inovasi yang membawa perubahan nyata untuk masa depan yang lebih berkelanjutan!
                        </p>

                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 md:gap-6">
                            <a href="{{ route('register') }}" class="group/btn relative inline-flex items-center gap-2 md:gap-3 px-8 md:px-12 py-4 md:py-6 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-black text-base md:text-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300 shadow-2xl shadow-yellow-500/50 w-full sm:w-auto">
                                <span class="relative z-10">Daftar Lomba</span>
                                <svg class="w-5 h-5 md:w-6 md:h-6 relative z-10 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                            </a>

                            <a href="https://bit.ly/GuidebookLontara" class="inline-flex items-center gap-2 md:gap-3 px-8 md:px-12 py-4 md:py-6 bg-transparent border-2 border-yellow-500/50 text-yellow-400 font-bold text-base md:text-lg rounded-xl hover:bg-yellow-500/10 hover:border-yellow-400 transition-all duration-300 w-full sm:w-auto">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Download Guidebook
                            </a>
                        </div>

                        <!-- Stats Mini Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mt-12 md:mt-16">
                            <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl md:rounded-2xl p-4 md:p-6 backdrop-blur-xl">
                                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1 md:mb-2">2</div>
                                <p class="text-xs md:text-sm text-gray-300 font-semibold uppercase tracking-wider">Kategori Lomba</p>
                            </div>
                            <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl md:rounded-2xl p-4 md:p-6 backdrop-blur-xl">
                                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1 md:mb-2">4</div>
                                <p class="text-xs md:text-sm text-gray-300 font-semibold uppercase tracking-wider">Kriteria Penilaian</p>
                            </div>
                            <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl md:rounded-2xl p-4 md:p-6 backdrop-blur-xl">
                                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1 md:mb-2">2-5</div>
                                <p class="text-xs md:text-sm text-gray-300 font-semibold uppercase tracking-wider">Anggota per Tim</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>