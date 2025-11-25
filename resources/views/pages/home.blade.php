<x-public-layout>

    <!-- Hero Section -->
    <section class="relative bg-black text-white overflow-hidden min-h-screen flex items-center">
        <!-- Animated Background Grid -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 via-transparent to-yellow-500/5"></div>
            <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>
        
        <!-- Glowing Orbs -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-yellow-500 rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-yellow-400 rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-pulse" style="animation-delay: 1s;"></div>

        <div class="container mx-auto px-6 py-20 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                
                <!-- Content -->
                <div class="lg:w-1/2 space-y-8">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                        </span>
                        <span class="text-yellow-400 font-bold text-sm tracking-wider uppercase">Kompetisi Nasional 2025</span>
                    </div>

                    <!-- Heading -->
                    <div class="space-y-4">
                        <h1 class="text-5xl lg:text-7xl font-black leading-[1.1] tracking-tight">
                            <span class="block text-gray-100">Selamat Datang di</span>
                            <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 animate-gradient">
                                LONTARA 2025
                            </span>
                        </h1>
                        
                        <p class="text-xl lg:text-2xl text-gray-300 leading-relaxed max-w-2xl">
                            <span class="text-yellow-400 font-bold">Green Tech Revolution</span>
                            <span class="text-gray-400 mx-2">—</span>
                            Membangun Masa Depan dengan Teknologi Cerdas
                        </p>
                    </div>
                    
                    <!-- Countdown -->
                    <div id="countdown-timer" class="relative group" data-target-date="{{ $conferenceStartDate }}">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-yellow-400 rounded-2xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 to-black border border-yellow-500/30 rounded-2xl p-8 backdrop-blur-xl">
                            <p class="text-yellow-400 font-bold mb-6 text-sm uppercase tracking-[0.2em] text-center">Pendaftaran Ditutup Dalam</p>
                            <div class="grid grid-cols-4 gap-6">
                                <div class="text-center space-y-2">
                                    <div id="days" class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-b from-yellow-400 to-yellow-600">00</div>
                                    <div class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Hari</div>
                                </div>
                                <div class="text-center space-y-2">
                                    <div id="hours" class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-b from-yellow-400 to-yellow-600">00</div>
                                    <div class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Jam</div>
                                </div>
                                <div class="text-center space-y-2">
                                    <div id="minutes" class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-b from-yellow-400 to-yellow-600">00</div>
                                    <div class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Menit</div>
                                </div>
                                <div class="text-center space-y-2">
                                    <div id="seconds" class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-b from-yellow-400 to-yellow-600">00</div>
                                    <div class="text-xs text-gray-500 uppercase tracking-wider font-semibold">Detik</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="{{ route('register') }}" class="group relative inline-flex items-center justify-center gap-2 px-10 py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold rounded-xl overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-yellow-500/50">
                            <span class="relative z-10 text-lg">Daftar Sekarang</span>
                            <svg class="relative z-10 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </a>
                        <a href="{{ route('call-for-paper') }}" class="group inline-flex items-center justify-center gap-2 px-10 py-5 bg-transparent border-2 border-yellow-500/50 text-yellow-400 font-bold rounded-xl hover:bg-yellow-500 hover:text-black hover:border-yellow-500 transition-all duration-300 hover:scale-105">
                            <span class="text-lg">Lihat Panduan</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Mascot -->
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 bg-yellow-400 rounded-full blur-[100px] opacity-40 animate-pulse"></div>
                        <div class="absolute -inset-4 bg-gradient-to-r from-yellow-500 to-yellow-400 rounded-full blur-2xl opacity-20"></div>
                        <img src="{{ asset('storage/img/Maskot_Lontara.png') }}" alt="Maskot LONTARA 2025" class="relative max-w-sm lg:max-w-lg drop-shadow-2xl transform hover:scale-105 transition-all duration-700 ease-out">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="relative py-32 bg-gradient-to-b from-black via-gray-900 to-black overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-16">
                    <div class="inline-block">
                        <h2 class="text-5xl lg:text-6xl font-black mb-4">
                            <span class="text-gray-100">Tentang</span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> LONTARA</span>
                        </h2>
                        <div class="h-1.5 bg-gradient-to-r from-transparent via-yellow-500 to-transparent rounded-full"></div>
                    </div>
                </div>
                
                <!-- Content Cards -->
                <div class="space-y-6">
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-10 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                            <p class="text-gray-300 text-lg lg:text-xl leading-relaxed">
                                LONTARA 2025 merupakan <span class="text-yellow-400 font-bold">ajang nasional</span> yang dirancang sebagai titik temu antara <span class="text-yellow-400 font-bold">teknologi, kreativitas, dan kepedulian lingkungan</span>. Kegiatan ini digagas oleh UKM PERISAI Universitas Muslim Indonesia (UMI) dengan semangat bahwa mahasiswa bukan hanya pengguna teknologi, tetapi juga <span class="text-yellow-400 font-bold">pencipta solusi</span>.
                            </p>
                        </div>
                    </div>

                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/30 rounded-3xl p-10 backdrop-blur-xl hover:border-yellow-500/50 transition-all duration-300">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <p class="text-gray-300 text-lg lg:text-xl leading-relaxed flex-1">
                                    Tahun ini, LONTARA hadir dengan konsep baru berupa <span class="text-yellow-400 font-bold">Lomba Kewirausahaan dan Expo Bisnis</span>, yang menggabungkan semangat riset, inovasi, serta implementasi nyata di dunia usaha.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Jury Section -->
    <section class="relative py-32 bg-black overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-black to-gray-900"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Header -->
            <div class="text-center mb-20">
                <h2 class="text-5xl lg:text-6xl font-black mb-4">
                    <span class="text-gray-100">Dewan Juri &</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> Narasumber</span>
                </h2>
                <div class="w-32 h-1.5 bg-gradient-to-r from-transparent via-yellow-500 to-transparent mx-auto rounded-full"></div>
            </div>
            
            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @forelse($speakers as $speaker)
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/60 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center space-y-6">
                            <!-- Image -->
                            <div class="relative">
                                <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full blur-xl opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
                                <div class="relative w-32 h-32 rounded-full overflow-hidden border-4 border-yellow-500 shadow-2xl transform group-hover:scale-110 transition-transform duration-500">
                                    <img src="{{ Storage::url($speaker->image_path) }}" alt="{{ $speaker->name }}" class="w-full h-full object-cover">
                                </div>
                            </div>
                            
                            <!-- Info -->
                            <div class="space-y-2">
                                <h3 class="text-2xl font-black text-gray-100 group-hover:text-yellow-400 transition-colors">
                                    {{ $speaker->name }}
                                </h3>
                                <p class="text-yellow-400 font-semibold text-sm">{{ $speaker->title }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full flex justify-center py-16">
                    <div class="relative group">
                        <div class="absolute inset-0 bg-yellow-500/20 rounded-2xl blur-xl"></div>
                        <div class="relative flex items-center gap-4 px-8 py-6 bg-gradient-to-r from-gray-900 to-gray-800 border border-yellow-500/30 rounded-2xl backdrop-blur-xl">
                            <div class="relative flex h-12 w-12">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-50"></span>
                                <span class="relative inline-flex rounded-full h-12 w-12 bg-gradient-to-br from-yellow-400 to-yellow-600 items-center justify-center">
                                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </span>
                            </div>
                            <p class="text-yellow-400 text-xl font-bold">Dewan Juri dan Narasumber akan segera kami umumkan</p>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const countdownElement = document.getElementById('countdown-timer');
            
            if (!countdownElement || !countdownElement.dataset.targetDate) return;

            const targetDate = new Date(countdownElement.dataset.targetDate).getTime();

            const timer = setInterval(function() {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance < 0) {
                    clearInterval(timer);
                    countdownElement.innerHTML = `
                        <div class="relative bg-gradient-to-br from-gray-900 to-black border border-red-500/30 rounded-2xl p-8 backdrop-blur-xl text-center">
                            <p class="text-2xl font-bold text-red-500">⚠️ Pendaftaran Telah Ditutup!</p>
                        </div>
                    `;
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('days').innerText = String(days).padStart(2, '0');
                document.getElementById('hours').innerText = String(hours).padStart(2, '0');
                document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
                document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');

            }, 1000);
        });
    </script>
    @endpush

    <style>
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .animate-gradient {
            background-size: 200% auto;
            animation: gradient 3s ease infinite;
        }
    </style>

</x-public-layout>