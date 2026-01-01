<x-public-layout>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Competition Guide</span>
                </div>

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

                <p class="text-lg sm:text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed px-4">
                    <span class="text-yellow-400 font-bold">"Green Tech Revolution"</span> - Membangun Masa Depan dengan Teknologi Cerdas
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

    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-7xl mx-auto">
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

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 lg:gap-12">
                    <div class="lg:col-span-7">
                        <div class="group relative h-full">
                            <div class="absolute -inset-1 md:-inset-2 bg-gradient-to-r from-green-500 via-green-400 to-green-600 rounded-2xl md:rounded-[3rem] blur-2xl md:blur-3xl opacity-0 group-hover:opacity-50 transition-all duration-700"></div>
                            
                            <div class="relative h-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-green-500/30 rounded-2xl md:rounded-[3rem] p-6 md:p-10 lg:p-12 backdrop-blur-xl hover:border-green-500/60 transition-all duration-500 hover:scale-[1.02]">
                                <div class="absolute -top-6 -right-6 md:-top-8 md:-right-8 w-20 h-20 md:w-28 md:h-28 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl md:rounded-3xl flex items-center justify-center shadow-2xl shadow-green-500/50 rotate-12 group-hover:rotate-0 transition-transform duration-500">
                                    <span class="text-4xl md:text-6xl font-black text-white">01</span>
                                </div>

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

                                <div class="absolute top-4 left-4 md:top-8 md:left-8 w-8 h-8 md:w-12 md:h-12 border-t-2 md:border-t-4 border-l-2 md:border-l-4 border-green-500/30 group-hover:border-green-500/60 transition-colors duration-500 rounded-tl-xl md:rounded-tl-2xl"></div>
                                <div class="absolute bottom-4 right-4 md:bottom-8 md:right-8 w-8 h-8 md:w-12 md:h-12 border-b-2 md:border-b-4 border-r-2 md:border-r-4 border-green-500/30 group-hover:border-green-500/60 transition-colors duration-500 rounded-br-xl md:rounded-br-2xl"></div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-5 space-y-6 md:space-y-8">
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-xs md:text-sm tracking-widest uppercase">Requirements</span>
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-4 md:mb-6">
                        <span class="text-gray-100">Persyaratan</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> Peserta</span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
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

    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-6xl mx-auto" x-data="{ activeTab: 'early' }">
                <div class="text-center mb-12 md:mb-16">
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
                    
                    <div class="flex justify-center gap-4 md:gap-6 mt-8">
                        <button @click="activeTab = 'early'" 
                            :class="activeTab === 'early' ? 'bg-gradient-to-r from-yellow-400 to-yellow-600 text-black border-yellow-400' : 'bg-transparent text-gray-400 border-gray-700 hover:text-yellow-400 hover:border-yellow-500/50'"
                            class="px-6 py-3 rounded-full text-sm md:text-base font-bold border-2 transition-all duration-300 focus:outline-none">
                            Early Stage
                        </button>
                        <button @click="activeTab = 'running'" 
                            :class="activeTab === 'running' ? 'bg-gradient-to-r from-yellow-400 to-yellow-600 text-black border-yellow-400' : 'bg-transparent text-gray-400 border-gray-700 hover:text-yellow-400 hover:border-yellow-500/50'"
                            class="px-6 py-3 rounded-full text-sm md:text-base font-bold border-2 transition-all duration-300 focus:outline-none">
                            Running Stage
                        </button>
                    </div>
                </div>

                <div class="group relative">
                    <div class="absolute -inset-1 md:-inset-2 bg-gradient-to-r from-yellow-500 via-yellow-400 to-yellow-600 rounded-2xl md:rounded-[3rem] blur-2xl md:blur-3xl opacity-20 group-hover:opacity-40 transition-all duration-700"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 via-black to-gray-900 border-2 border-yellow-500/30 rounded-2xl md:rounded-[3rem] p-6 md:p-12 lg:p-16 backdrop-blur-xl hover:border-yellow-500/50 transition-all duration-500">
                        
                        <div x-show="activeTab === 'early'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6 md:space-y-10">
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-indigo-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-indigo-500/20 hover:border-indigo-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-indigo-400 to-indigo-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-indigo-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-indigo-400">Business Model Canvas</h3>
                                            <span class="text-3xl md:text-4xl font-black text-indigo-400">35%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-indigo-500 h-3 rounded-full" style="width: 35%"></div></div>
                                        <p class="text-gray-300">Kelengkapan 9 elemen bisnis: value proposition, customer segments, revenue streams, dll.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-green-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-green-500/20 hover:border-green-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-green-400 to-green-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-green-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-green-400">Ide & Orisinalitas</h3>
                                            <span class="text-3xl md:text-4xl font-black text-green-400">30%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-green-500 h-3 rounded-full" style="width: 30%"></div></div>
                                        <p class="text-gray-300">Tingkat inovasi, kebaruan ide, riset dasar, dan diferensiasi dari kompetitor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-yellow-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-yellow-500/20 hover:border-yellow-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-yellow-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-yellow-400">Dampak Sosial</h3>
                                            <span class="text-3xl md:text-4xl font-black text-yellow-400">25%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-yellow-500 h-3 rounded-full" style="width: 25%"></div></div>
                                        <p class="text-gray-300">Manfaat nyata bagi masyarakat, pemberdayaan, dan kontribusi terhadap lingkungan (Green Tech).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-pink-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-pink-500/20 hover:border-pink-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-pink-400 to-pink-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-pink-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-pink-400">Visualisasi</h3>
                                            <span class="text-3xl md:text-4xl font-black text-pink-400">10%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-pink-500 h-3 rounded-full" style="width: 10%"></div></div>
                                        <p class="text-gray-300">Kualitas desain proposal, layout, dan kejelasan penyampaian ide secara visual.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div x-show="activeTab === 'running'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" class="space-y-6 md:space-y-10" style="display: none;">
                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-blue-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-blue-500/20 hover:border-blue-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-blue-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-blue-400">Inovasi & Kompetitif</h3>
                                            <span class="text-3xl md:text-4xl font-black text-blue-400">30%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-blue-500 h-3 rounded-full" style="width: 30%"></div></div>
                                        <p class="text-gray-300">Inovasi produk/jasa, penetapan harga, promosi, dan keunggulan teknologi produksi.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-green-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-green-500/20 hover:border-green-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-green-400 to-green-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-green-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-green-400">Proyeksi Keuangan</h3>
                                            <span class="text-3xl md:text-4xl font-black text-green-400">20%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-green-500 h-3 rounded-full" style="width: 20%"></div></div>
                                        <p class="text-gray-300">Estimasi modal, penjualan, proyeksi laba, dan keberlanjutan finansial bisnis.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-purple-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-purple-500/20 hover:border-purple-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-purple-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-purple-400">Manajerial & SDM</h3>
                                            <span class="text-3xl md:text-4xl font-black text-purple-400">15%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-purple-500 h-3 rounded-full" style="width: 15%"></div></div>
                                        <p class="text-gray-300">Kejelasan struktur organisasi, sistem manajemen, dan pemberdayaan tenaga kerja.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-orange-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-orange-500/20 hover:border-orange-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-orange-400 to-orange-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-orange-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-orange-400">Pertumbuhan Bisnis</h3>
                                            <span class="text-3xl md:text-4xl font-black text-orange-400">15%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-orange-500 h-3 rounded-full" style="width: 15%"></div></div>
                                        <p class="text-gray-300">Rencana kelangsungan bisnis, ukuran pasar, dan estimasi pertumbuhan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="group/item">
                                <div class="flex flex-col lg:flex-row lg:items-center gap-4 md:gap-8 p-4 md:p-8 bg-gradient-to-r from-teal-500/10 via-transparent to-transparent rounded-2xl md:rounded-3xl border border-teal-500/20 hover:border-teal-500/40 transition-all duration-500">
                                    <div class="flex-shrink-0">
                                        <div class="relative h-16 w-16 md:h-20 md:w-20 bg-gradient-to-br from-teal-400 to-teal-600 rounded-xl md:rounded-2xl flex items-center justify-center border-2 border-teal-400/50">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between items-center mb-3">
                                            <h3 class="text-xl md:text-2xl font-black text-teal-400">Dampak Lingkungan</h3>
                                            <span class="text-3xl md:text-4xl font-black text-teal-400">10%</span>
                                        </div>
                                        <div class="w-full bg-gray-800 rounded-full h-3 mb-3"><div class="bg-teal-500 h-3 rounded-full" style="width: 10%"></div></div>
                                        <p class="text-gray-300">Tanggung jawab lingkungan dan penyerapan tenaga kerja dalam operasional bisnis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute top-4 left-4 md:top-8 md:left-8 w-10 h-10 md:w-16 md:h-16 border-t-2 md:border-t-4 border-l-2 md:border-l-4 border-yellow-500/30 rounded-tl-2xl md:rounded-tl-3xl"></div>
                        <div class="absolute bottom-4 right-4 md:bottom-8 md:right-8 w-10 h-10 md:w-16 md:h-16 border-b-2 md:border-b-4 border-r-2 md:border-r-4 border-yellow-500/30 rounded-br-2xl md:rounded-br-3xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-black py-16 md:py-24 lg:py-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-black via-yellow-500/5 to-black"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.2) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.2) 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <div class="absolute top-1/3 left-1/4 w-64 h-64 md:w-96 md:h-96 bg-yellow-500 rounded-full blur-[150px] opacity-20 animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/4 w-64 h-64 md:w-96 md:h-96 bg-yellow-400 rounded-full blur-[150px] opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-5xl mx-auto">
                <div class="group relative">
                    <div class="absolute -inset-1 md:-inset-2 bg-gradient-to-r from-yellow-500 via-yellow-400 to-yellow-600 rounded-2xl md:rounded-[3rem] blur-2xl md:blur-3xl opacity-30 group-hover:opacity-50 transition-all duration-700"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-yellow-500/40 rounded-2xl md:rounded-[3rem] p-8 md:p-12 lg:p-16 text-center backdrop-blur-xl">
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

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mt-12 md:mt-16">
                            <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl md:rounded-2xl p-4 md:p-6 backdrop-blur-xl">
                                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1 md:mb-2">2</div>
                                <p class="text-xs md:text-sm text-gray-300 font-semibold uppercase tracking-wider">Kategori Lomba</p>
                            </div>
                            <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl md:rounded-2xl p-4 md:p-6 backdrop-blur-xl">
                                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1 md:mb-2">5</div>
                                <p class="text-xs md:text-sm text-gray-300 font-semibold uppercase tracking-wider">Kriteria Penilaian</p>
                            </div>
                            <div class="bg-yellow-500/10 border border-yellow-500/30 rounded-xl md:rounded-2xl p-4 md:p-6 backdrop-blur-xl">
                                <div class="text-3xl md:text-4xl font-black text-yellow-400 mb-1 md:mb-2">2-3</div>
                                <p class="text-xs md:text-sm text-gray-300 font-semibold uppercase tracking-wider">Anggota per Tim</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>