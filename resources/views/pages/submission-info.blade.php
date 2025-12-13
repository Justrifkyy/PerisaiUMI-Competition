<x-public-layout>
    <div class="relative min-h-screen bg-black overflow-hidden flex items-center justify-center">
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(234, 179, 8, 0.2) 2px, transparent 2px), linear-gradient(90deg, rgba(234, 179, 8, 0.2) 2px, transparent 2px); background-size: 100px 100px;"></div>
        </div>
        
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-yellow-500 rounded-full blur-[120px] opacity-30 animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-yellow-400 rounded-full blur-[150px] opacity-20 animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-yellow-600 rounded-full blur-[200px] opacity-10 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto text-center space-y-8">
                <div class="inline-flex items-center gap-3 px-6 py-3 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full">
                    <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <span class="text-yellow-400 font-bold text-sm tracking-widest uppercase">Submission Guide</span>
                </div>

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

                <p class="text-xl lg:text-2xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Panduan lengkap penyusunan proposal dan ketentuan teknis submission sesuai Guidebook Resmi.
                </p>

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

    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 50px 50px;"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-20">
                    <h2 class="text-5xl lg:text-6xl font-black mb-6">
                        <span class="text-gray-100">Format</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> Penulisan</span>
                    </h2>
                    <p class="text-xl text-gray-400">Wajib dipatuhi untuk menghindari diskualifikasi administrasi</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-indigo-600 rounded-[2rem] blur-xl opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                        <div class="relative h-full bg-gray-900 border border-indigo-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-indigo-500/60 transition-all">
                            <div class="h-12 w-12 bg-indigo-500/20 rounded-xl flex items-center justify-center mb-6">
                                <span class="text-2xl">Aa</span>
                            </div>
                            <h3 class="text-2xl font-bold text-indigo-400 mb-2">Tipografi</h3>
                            <ul class="text-gray-300 space-y-2">
                                <li>• Font: <b class="text-white">Arial</b></li>
                                <li>• Ukuran: <b class="text-white">11 pt</b></li>
                                <li>• Spasi: <b class="text-white">1.0 (Single)</b></li>
                            </ul>
                        </div>
                    </div>

                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-[2rem] blur-xl opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                        <div class="relative h-full bg-gray-900 border border-emerald-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-emerald-500/60 transition-all">
                            <div class="h-12 w-12 bg-emerald-500/20 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                            </div>
                            <h3 class="text-2xl font-bold text-emerald-400 mb-2">Tata Letak (A4)</h3>
                            <ul class="text-gray-300 space-y-2">
                                <li>• Kiri & Atas: <b class="text-white">3 cm</b></li>
                                <li>• Kanan & Bawah: <b class="text-white">2.5 cm</b></li>
                                <li>• Rata Kanan-Kiri (Justify)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-red-500 to-red-600 rounded-[2rem] blur-xl opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                        <div class="relative h-full bg-gray-900 border border-red-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-red-500/60 transition-all">
                            <div class="h-12 w-12 bg-red-500/20 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-red-400 mb-2">Batasan</h3>
                            <ul class="text-gray-300 space-y-2">
                                <li>• Isi Proposal: <b class="text-white">Max 10 Halaman</b></li>
                                <li>• File Max: <b class="text-white">10 MB</b></li>
                                <li>• Format: <b class="text-white">Wajib PDF</b></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0">
             <div class="absolute top-1/4 right-1/4 w-[600px] h-[600px] bg-yellow-500 rounded-full blur-[200px] opacity-20"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-20">
                    <h2 class="text-5xl lg:text-6xl font-black">
                        <span class="text-gray-100">Struktur</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> Proposal</span>
                    </h2>
                </div>

                <div class="space-y-6">
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        <div class="relative bg-gray-900 border border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0 h-16 w-16 rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                    <span class="text-3xl font-black text-black">1</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-yellow-400 mb-3">Bagian Awal</h3>
                                    <ul class="list-disc list-inside text-gray-300 space-y-1 ml-2">
                                        <li><b>Cover:</b> Judul, Logo PT, Nama PT, Nama Tim + NIM + Prodi, Tahun.</li>
                                        <li><b>Lembar Pengesahan:</b> Tanda tangan Ketua Tim, Dospem & Stempel PT.</li>
                                        <li><b>Profil Usaha & Tim:</b> Sektor industri, deskripsi singkat, kompetensi tim.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        <div class="relative bg-gray-900 border border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0 h-16 w-16 rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                    <span class="text-3xl font-black text-black">2</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-yellow-400 mb-3">Business Model Canvas (BMC)</h3>
                                    <p class="text-gray-300 leading-relaxed">
                                        Wajib dicantumkan sebagai Bab tersendiri (Huruf D dalam panduan). Menjelaskan 9 elemen kunci bisnis secara visual.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        <div class="relative bg-gray-900 border border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0 h-16 w-16 rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                    <span class="text-3xl font-black text-black">3</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-yellow-400 mb-3">Isi Proposal (Max 10 Halaman)</h3>
                                    <ul class="list-disc list-inside text-gray-300 space-y-1 ml-2">
                                        <li><b>1. Pendahuluan:</b> Latar belakang, Rumusan masalah, Tujuan & Manfaat.</li>
                                        <li><b>2. Metode Pelaksanaan:</b> Lokasi, Alat/Bahan, Teknologi, Alur kerja/Desain.</li>
                                        <li><b>3. Rencana Pelaksanaan:</b> Detail operasional, Kompetensi tim, Produk/Jasa.</li>
                                        <li><b>4. RAB:</b> Perincian anggaran & Rasionalisasi biaya.</li>
                                        <li><b>5. Analisis Risiko Bisnis (SWOT):</b> Strength, Weakness, Opportunity, Threat.</li>
                                        <li><b>6. Simpulan & Penutup:</b> Ukuran keberhasilan & Pernyataan penutup.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        <div class="relative bg-gray-900 border border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all">
                            <div class="flex items-start gap-6">
                                <div class="flex-shrink-0 h-16 w-16 rounded-2xl bg-gradient-to-br from-yellow-400 to-yellow-600 flex items-center justify-center border-2 border-yellow-400/50">
                                    <span class="text-3xl font-black text-black">4</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-2xl font-black text-yellow-400 mb-3">Bagian Akhir</h3>
                                    <ul class="list-disc list-inside text-gray-300 space-y-1 ml-2">
                                        <li><b>Daftar Pustaka:</b> Format bebas (APA/MLA/IEEE).</li>
                                        <li><b>Lampiran:</b> Foto produk, KTP, KTM, Foto diri 4x6, Surat pernyataan, Bukti pendukung lain.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-black py-20 overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-red-500 to-orange-500 rounded-[2rem] blur opacity-40 animate-pulse"></div>
                    <div class="relative bg-gray-900 border-2 border-red-500/50 rounded-[2rem] p-10 text-center">
                        <h3 class="text-3xl font-black text-red-400 mb-4">⚠️ Format Nama File</h3>
                        <p class="text-gray-300 mb-6">Pastikan nama file proposal PDF Anda sesuai dengan format berikut:</p>
                        
                        <div class="inline-block bg-black/50 border border-red-500/30 rounded-xl px-6 py-4 mb-4">
                            <code class="text-lg md:text-xl font-mono text-yellow-400 break-all">
                                LONTARA2025_Nama Ketua_Nama PT/Tim_Judul Karya
                            </code>
                        </div>
                        <p class="text-sm text-gray-500">*Judul karya maksimal 3 kata. Tidak boleh ada tanda titik (.) dalam nama file.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-black py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-5xl lg:text-7xl font-black mb-6">
                        <span class="text-gray-100">Download</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 mt-2">Template</span>
                    </h2>
                    <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                        Gunakan template resmi untuk memastikan format sesuai standar penilaian.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    @foreach($templates as $template)
                    <div class="group relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-[2rem] blur-2xl opacity-0 group-hover:opacity-30 transition-all duration-700"></div>
                        
                        <div class="relative h-full bg-gradient-to-br from-gray-900 to-gray-800 border-2 border-yellow-500/30 rounded-[2rem] p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-500 hover:-translate-y-2 flex flex-col justify-between">
                            <div>
                                <h3 class="text-2xl font-black text-yellow-400 mb-2">{{ $template['name'] }}</h3>
                                <p class="text-gray-300 leading-relaxed mb-6">{{ $template['description'] }}</p>
                            </div>

                            @if($template['downloadable'])
                                <a href="{{ $template['url'] }}" download class="group/btn relative inline-flex items-center justify-center w-full gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold text-lg rounded-xl overflow-hidden hover:scale-105 transition-transform duration-300 shadow-xl shadow-yellow-500/50">
                                    <span class="relative z-10">Unduh Template</span>
                                    <svg class="w-5 h-5 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                </a>
                            @else
                                <div class="inline-flex items-center justify-center w-full gap-3 px-8 py-4 bg-gray-700/50 text-gray-400 font-bold text-lg rounded-xl border-2 border-gray-600/50 cursor-not-allowed">
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
</x-public-layout>