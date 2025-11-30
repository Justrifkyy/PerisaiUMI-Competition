<x-public-layout>
    <!-- Hero Section -->
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
                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">Submission Guide</span>
                </div>

                <!-- Main Title -->
                <div class="space-y-4">
                    <h1 class="text-6xl lg:text-8xl font-black leading-none">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600" style="background-size: 200% auto; animation: gradient 3s ease infinite;">
                            PANDUAN
                        </span>
                        <span class="block text-gray-100 mt-2">SUBMISSION</span>
                    </h1>
                    <div class="flex items-center justify-center gap-4">
                        <div class="h-1 w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                        <div class="h-2 w-2 bg-yellow-500 rounded-full animate-pulse"></div>
                        <div class="h-1 w-32 bg-gradient-to-r from-transparent via-yellow-500 to-transparent"></div>
                    </div>
                </div>

                <!-- Subtitle -->
                <p class="text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Panduan lengkap penyusunan proposal dan ketentuan teknis submission
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

    <!-- Struktur Proposal Section -->
    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-6">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">Proposal Structure</span>
                    </div>
                    
                    <h2 class="text-5xl lg:text-6xl font-black">
                        <span class="text-gray-100">Struktur</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> Proposal Bisnis</span>
                    </h2>
                    
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto mt-6">
                        Proposal bisnis harus disusun dengan format yang jelas dan sistematis
                    </p>
                </div>

                <!-- Proposal Structure Items -->
                <div class="space-y-6">
                    <!-- Item 1 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-blue-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-blue-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-blue-500 rounded-2xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 rounded-2xl bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center border-2 border-blue-400/50">
                                            <span class="text-3xl font-black text-white">1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-blue-400 mb-3">Cover/Judul</h3>
                                    <p class="text-gray-300 leading-relaxed">Mencantumkan nama tim dan asal perguruan tinggi dengan jelas.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-green-500 to-green-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-green-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-green-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-green-500 rounded-2xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 rounded-2xl bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center border-2 border-green-400/50">
                                            <span class="text-3xl font-black text-white">2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-green-400 mb-3">Executive Summary</h3>
                                    <p class="text-gray-300 leading-relaxed">Ringkasan singkat namun padat mengenai ide bisnis secara keseluruhan.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-yellow-500 rounded-2xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                            <span class="text-3xl font-black text-white">3</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-yellow-400 mb-3">Pendahuluan</h3>
                                    <p class="text-gray-300 leading-relaxed">Latar belakang masalah, urgensi, dan tujuan dari usaha yang diusulkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-yellow-500 rounded-2xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                            <span class="text-3xl font-black text-black">4</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-yellow-400 mb-3">Deskripsi Produk</h3>
                                    <p class="text-gray-300 leading-relaxed">Penjelasan detail produk/jasa, proses pembuatan, dan keunggulan kompetitif (USP).</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-pink-500 to-pink-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-pink-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-pink-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-pink-500 rounded-2xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 rounded-2xl bg-gradient-to-br from-pink-400 to-pink-600 flex items-center justify-center border-2 border-pink-400/50">
                                            <span class="text-3xl font-black text-white">5</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-pink-400 mb-3">Business Model Canvas (BMC)</h3>
                                    <p class="text-gray-300 leading-relaxed">Penjelasan 9 elemen bisnis (dilampirkan terpisah atau dalam bab ini).</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-red-500 to-red-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border border-red-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-red-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-red-500 rounded-2xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-16 w-16 rounded-2xl bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center border-2 border-red-400/50">
                                            <span class="text-3xl font-black text-white">6</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-red-400 mb-3">Penutup</h3>
                                    <p class="text-gray-300 leading-relaxed">Kesimpulan yang meyakinkan juri mengapa ide ini layak menang.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ketentuan Teknis Section -->
    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-yellow-500 rounded-full blur-[200px] opacity-20"></div>
            <div class="absolute bottom-1/4 left-1/4 w-[500px] h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-6">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">Technical Requirements</span>
                    </div>
                    
                    <h2 class="text-5xl lg:text-6xl font-black">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Ketentuan</span>
                        <span class="text-gray-100"> Teknis Berkas</span>
                    </h2>
                </div>

                <!-- Two Column Grid -->
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Format File -->
                    <div class="group relative">
                        <div class="absolute -inset-2 bg-gradient-to-r from-indigo-500 to-indigo-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative h-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-indigo-500/30 rounded-[2rem] p-10 backdrop-blur-xl hover:border-indigo-500/60 transition-all duration-500">
                            <!-- Icon -->
                            <div class="mb-8">
                                <div class="inline-flex p-5 bg-indigo-500/10 border-2 border-indigo-500/30 rounded-2xl">
                                    <svg class="w-12 h-12 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>

                            <h3 class="text-3xl font-black text-indigo-400 mb-6">Format File</h3>
                            
                            <div class="space-y-4">
                                <div class="flex items-start gap-4 p-4 bg-indigo-500/10 rounded-xl border border-indigo-500/20">
                                    <div class="flex-shrink-0 w-2 h-2 bg-indigo-400 rounded-full mt-2"></div>
                                    <div>
                                        <p class="text-lg font-bold text-indigo-300">Proposal: PDF</p>
                                        <p class="text-sm text-gray-400">Maksimal 15 MB</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-indigo-500/10 rounded-xl border border-indigo-500/20">
                                    <div class="flex-shrink-0 w-2 h-2 bg-indigo-400 rounded-full mt-2"></div>
                                    <div>
                                        <p class="text-lg font-bold text-indigo-300">BMC: PDF</p>
                                        <p class="text-sm text-gray-400">Maksimal 10 MB</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-indigo-500/10 rounded-xl border border-indigo-500/20">
                                    <div class="flex-shrink-0 w-2 h-2 bg-indigo-400 rounded-full mt-2"></div>
                                    <div>
                                        <p class="text-lg font-bold text-indigo-300">KTM: PDF Gabungan</p>
                                        <p class="text-sm text-gray-400">Maksimal 5 MB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Ketentuan Penulisan -->
                    <div class="group relative">
                        <div class="absolute -inset-2 bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-40 transition-all duration-700"></div>
                        
                        <div class="relative h-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-emerald-500/30 rounded-[2rem] p-10 backdrop-blur-xl hover:border-emerald-500/60 transition-all duration-500">
                            <!-- Icon -->
                            <div class="mb-8">
                                <div class="inline-flex p-5 bg-emerald-500/10 border-2 border-emerald-500/30 rounded-2xl">
                                    <svg class="w-12 h-12 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </div>
                            </div>

                            <h3 class="text-3xl font-black text-emerald-400 mb-6">Ketentuan Penulisan</h3>
                            
                            <div class="space-y-4">
                                <div class="flex items-start gap-4 p-4 bg-emerald-500/10 rounded-xl border border-emerald-500/20">
                                    <div class="flex-shrink-0 w-2 h-2 bg-emerald-400 rounded-full mt-2"></div>
                                    <p class="text-lg text-gray-300">Bahasa Indonesia yang baik dan benar (PUEBI)</p>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-emerald-500/10 rounded-xl border border-emerald-500/20">
                                    <div class="flex-shrink-0 w-2 h-2 bg-emerald-400 rounded-full mt-2"></div>
                                    <p class="text-lg text-gray-300">Font: Times New Roman / Arial, Ukuran 12</p>
                                </div>

                                <div class="flex items-start gap-4 p-4 bg-emerald-500/10 rounded-xl border border-emerald-500/20">
                                    <div class="flex-shrink-0 w-2 h-2 bg-emerald-400 rounded-full mt-2"></div>
                                    <p class="text-lg text-gray-300">Spasi 1.5, Rata Kanan-Kiri (Justify)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kebijakan Kompetisi Section -->
    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-6">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">Competition Policy</span>
                    </div>
                    
                    <h2 class="text-5xl lg:text-6xl font-black">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Kebijakan</span>
                        <span class="text-gray-100"> Kompetisi</span>
                    </h2>
                </div>

                <!-- Main Card -->
                <div class="group relative">
                    <div class="absolute -inset-2 bg-gradient-to-r from-red-500 via-red-400 to-red-600 rounded-[3rem] blur-3xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                    
                    <div class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 border-2 border-red-500/30 rounded-[3rem] p-10 lg:p-12 backdrop-blur-xl hover:border-red-500/50 transition-all duration-500">
                        <div class="space-y-6">
                            <!-- Policy 1 -->
                            <div class="group/policy flex items-start gap-6 p-6 bg-gradient-to-r from-red-500/10 via-transparent to-transparent rounded-2xl border border-red-500/20 hover:border-red-500/40 transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-red-500 rounded-xl blur-xl opacity-50"></div>
                                        <div class="relative h-14 w-14 bg-gradient-to-br from-red-400 to-red-600 rounded-xl flex items-center justify-center border-2 border-red-400/50">
                                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-red-400 mb-3">Orisinalitas</h3>
                                    <p class="text-gray-300 leading-relaxed">Karya harus asli buatan tim, belum pernah dipublikasikan, dan bebas plagiarisme <span class="text-red-400 font-bold">(maksimal 20%)</span>.</p>
                                </div>
                            </div>

                            <!-- Policy 2 -->
                            <div class="group/policy flex items-start gap-6 p-6 bg-gradient-to-r from-red-500/10 via-transparent to-transparent rounded-2xl border border-red-500/20 hover:border-red-500/40 transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-red-500 rounded-xl blur-xl opacity-50"></div>
                                        <div class="relative h-14 w-14 bg-gradient-to-br from-red-400 to-red-600 rounded-xl flex items-center justify-center border-2 border-red-400/50">
                                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-red-400 mb-3">Belum Pernah Juara</h3>
                                    <p class="text-gray-300 leading-relaxed">Ide bisnis yang diajukan belum pernah memenangkan kompetisi sejenis di tingkat nasional.</p>
                                </div>
                            </div>

                            <!-- Policy 3 -->
                            <div class="group/policy flex items-start gap-6 p-6 bg-gradient-to-r from-red-500/10 via-transparent to-transparent rounded-2xl border border-red-500/20 hover:border-red-500/40 transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-red-500 rounded-xl blur-xl opacity-50"></div>
                                        <div class="relative h-14 w-14 bg-gradient-to-br from-red-400 to-red-600 rounded-xl flex items-center justify-center border-2 border-red-400/50">
                                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-red-400 mb-3">Diskualifikasi</h3>
                                    <p class="text-gray-300 leading-relaxed">Panitia berhak mendiskualifikasi tim yang terbukti melanggar hak cipta atau melakukan kecurangan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Decorative Corners -->
                        <div class="absolute top-8 left-8 w-12 h-12 border-t-4 border-l-4 border-red-500/30 rounded-tl-2xl"></div>
                        <div class="absolute bottom-8 right-8 w-12 h-12 border-b-4 border-r-4 border-red-500/30 rounded-br-2xl"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Download Template Section -->
    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-yellow-500 rounded-full blur-[200px] opacity-20"></div>
            <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-6">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">Templates Available</span>
                    </div>
                    
                    <h2 class="text-5xl lg:text-7xl font-black mb-6">
                        <span class="text-gray-100">Download</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Template</span>
                    </h2>
                    
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Gunakan template resmi agar format proposal Anda sesuai dengan standar penilaian juri
                    </p>
                </div>

                <!-- Templates Grid -->
                <div class="space-y-6">
                    @foreach($templates as $template)
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border-2 border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2">
                            <div class="flex flex-col lg:flex-row lg:items-center gap-6">
                                <!-- Icon -->
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <div class="absolute inset-0 bg-yellow-500 rounded-2xl blur-xl opacity-50 group-hover:opacity-70 transition-opacity"></div>
                                        <div class="relative h-20 w-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl flex items-center justify-center border-2 border-yellow-400/50">
                                            <svg class="w-10 h-10 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-yellow-400 mb-2">{{ $template['name'] }}</h3>
                                    <p class="text-gray-300 leading-relaxed">{{ $template['description'] }}</p>
                                </div>

                                <!-- Button -->
                                <div class="flex-shrink-0">
                                    @if($template['downloadable'])
                                        <a href="{{ $template['url'] }}" download class="group/btn relative inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold text-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300 shadow-xl shadow-yellow-500/50">
                                            <span class="relative z-10">Unduh</span>
                                            <svg class="w-5 h-5 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                        </a>
                                    @else
                                        <div class="inline-flex items-center gap-3 px-8 py-4 bg-gray-700/50 text-gray-400 font-bold text-lg rounded-xl border-2 border-gray-600/50 cursor-not-allowed">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>Segera Hadir</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Help Card -->
                <div class="mt-12 group relative">
                    <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-20"></div>
                    
                    <div class="relative bg-gradient-to-r from-yellow-500/20 to-yellow-400/10 backdrop-blur-xl border-2 border-yellow-500/40 rounded-[2rem] p-10 text-center">
                        <div class="inline-flex p-4 bg-yellow-500/20 border-2 border-yellow-400/40 rounded-2xl mb-6">
                            <svg class="w-12 h-12 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        
                        <h3 class="text-3xl font-black text-yellow-400 mb-4">Masih Bingung atau Punya Pertanyaan?</h3>
                        <p class="text-xl text-gray-300 mb-6">Jangan ragu untuk menghubungi panitia</p>
                        
                        <a href="mailto:panitia@lontara2025.com" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-500 to-yellow-600 text-white font-bold text-lg rounded-xl hover:scale-105 transition-transform duration-300 shadow-xl shadow-yellow-500/50">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            panitia@lontara2025.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>