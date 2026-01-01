<x-public-layout>
    <!-- Hero Section -->
    <section class="relative bg-black text-white overflow-hidden min-h-screen flex items-center">
        <!-- Animated Background Grid -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 via-transparent to-yellow-500/5"></div>
            <div class="absolute inset-0 opacity-20" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>
        
        <!-- Glowing Orbs -->
        <div class="absolute top-0 left-1/4 w-64 h-64 md:w-96 md:h-96 bg-yellow-500 rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-pulse"></div>
        <div class="absolute bottom-0 right-1/4 w-80 h-80 md:w-[500px] md:h-[500px] bg-yellow-400 rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-pulse" style="animation-delay: 1s;"></div>

        <div class="container mx-auto px-4 sm:px-6 py-12 pt-32 md:py-20 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-16">
                
                <!-- Content -->
                <div class="w-full lg:w-1/2 space-y-6 md:space-y-8 text-center lg:text-left">
                    <!-- Heading -->
                    <div class="space-y-3 md:space-y-4">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-[1.1] tracking-tight">
                            <span class="block text-gray-100">Selamat Datang di</span>
                            <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 animate-gradient">
                                LONTARA 2025
                            </span>
                        </h1>
                        
                        <p class="text-lg sm:text-xl lg:text-2xl text-gray-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                            <span class="text-yellow-400 font-bold">Green Tech Revolution</span>
                            <span class="text-gray-400 mx-2">—</span>
                            <span class="block sm:inline mt-1 sm:mt-0">Membangun Masa Depan dengan Teknologi Cerdas</span>
                        </p>
                    </div>
                    
                    <!-- Countdown -->
                    <div id="countdown-timer" class="relative group w-full" data-target-date="{{ $conferenceStartDate }}">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500 to-yellow-400 rounded-2xl blur-xl opacity-30 transition-opacity"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 to-black border border-yellow-500/30 rounded-2xl p-6 md:p-8 backdrop-blur-xl">
                            <p class="text-yellow-400 font-bold mb-4 md:mb-6 text-xs md:text-sm uppercase tracking-[0.2em] text-center">Pendaftaran Ditutup Dalam</p>
                            <div class="grid grid-cols-4 gap-3 md:gap-6">
                                <div class="text-center space-y-1 md:space-y-2">
                                    <div id="days" class="text-3xl sm:text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-b from-yellow-400 to-yellow-600">00</div>
                                    <div class="text-[10px] sm:text-xs text-gray-500 uppercase tracking-wider font-semibold">Hari</div>
                                </div>
                                <div class="text-center space-y-1 md:space-y-2">
                                    <div id="hours" class="text-3xl sm:text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-b from-yellow-400 to-yellow-600">00</div>
                                    <div class="text-[10px] sm:text-xs text-gray-500 uppercase tracking-wider font-semibold">Jam</div>
                                </div>
                                <div class="text-center space-y-1 md:space-y-2">
                                    <div id="minutes" class="text-3xl sm:text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-b from-yellow-400 to-yellow-600">00</div>
                                    <div class="text-[10px] sm:text-xs text-gray-500 uppercase tracking-wider font-semibold">Menit</div>
                                </div>
                                <div class="text-center space-y-1 md:space-y-2">
                                    <div id="seconds" class="text-3xl sm:text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-b from-yellow-400 to-yellow-600">00</div>
                                    <div class="text-[10px] sm:text-xs text-gray-500 uppercase tracking-wider font-semibold">Detik</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 md:gap-4 pt-4 justify-center lg:justify-start">
                        <a href="{{ route('register') }}" class="group relative inline-flex items-center justify-center gap-2 px-8 md:px-10 py-4 md:py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold rounded-xl overflow-hidden transition-all duration-300">
                            <span class="relative z-10 text-base md:text-lg">Daftar Sekarang</span>
                            <svg class="relative z-10 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="{{ route('call-for-paper') }}" class="group inline-flex items-center justify-center gap-2 px-8 md:px-10 py-4 md:py-5 bg-transparent border-2 border-yellow-500/50 text-yellow-400 font-bold rounded-xl transition-all duration-300">
                            <span class="text-base md:text-lg">Lihat Panduan</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Mascot -->
                <div class="w-full lg:w-1/2 flex justify-center mt-8 lg:mt-0">
                    <div class="relative w-full max-w-xs sm:max-w-sm lg:max-w-lg">
                        <div class="absolute inset-0 bg-yellow-400 rounded-full blur-[80px] md:blur-[100px] opacity-40 animate-pulse"></div>
                        <div class="absolute -inset-4 bg-gradient-to-r from-yellow-500 to-yellow-400 rounded-full blur-2xl opacity-20"></div>
                        <img src="{{ asset('storage/img/Maskot_Lontara.png') }}" alt="Maskot LONTARA 2025" class="relative w-full h-auto drop-shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="relative py-16 md:py-24 lg:py-32 bg-gradient-to-b from-black via-gray-900 to-black overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
        
        <div class="container mx-auto px-4 sm:px-6 relative z-10">
            <div class="max-w-5xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-12 md:mb-16">
                    <div class="inline-block">
                        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-4">
                            <span class="text-gray-100">Tentang</span>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"> LONTARA</span>
                        </h2>
                        <div class="h-1.5 bg-gradient-to-r from-transparent via-yellow-500 to-transparent rounded-full"></div>
                    </div>
                </div>
                
                <!-- Content Cards -->
                <div class="space-y-4 md:space-y-6">
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 rounded-2xl md:rounded-3xl blur-xl opacity-0 transition-opacity"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-2xl md:rounded-3xl p-6 md:p-10 backdrop-blur-xl transition-all duration-300">
                            <p class="text-gray-300 text-base md:text-lg lg:text-xl leading-relaxed">
                                LONTARA 2025 merupakan <span class="text-yellow-400 font-bold">ajang nasional</span> yang dirancang sebagai titik temu antara <span class="text-yellow-400 font-bold">teknologi, kreativitas, dan kepedulian lingkungan</span>. Kegiatan ini digagas oleh UKM PERISAI Universitas Muslim Indonesia (UMI) dengan semangat bahwa mahasiswa bukan hanya pengguna teknologi, tetapi juga <span class="text-yellow-400 font-bold">pencipta solusi</span>.
                            </p>
                        </div>
                    </div>

                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 rounded-2xl md:rounded-3xl blur-xl opacity-0 transition-opacity"></div>
                        <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/30 rounded-2xl md:rounded-3xl p-6 md:p-10 backdrop-blur-xl transition-all duration-300">
                            <div class="flex flex-col sm:flex-row items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-5 h-5 md:w-6 md:h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                </div>
                                <p class="text-gray-300 text-base md:text-lg lg:text-xl leading-relaxed flex-1">
                                    Tahun ini, LONTARA hadir dengan konsep baru berupa <span class="text-yellow-400 font-bold">Lomba Kewirausahaan dan Expo Bisnis</span>, yang menggabungkan semangat riset, inovasi, serta implementasi nyata di dunia usaha.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- REFINED Juri & Narasumber Section -->
    <section class="relative py-20 md:py-32 overflow-hidden bg-[#0a0e1a]">
        <!-- Dramatic Background Effects -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-1/4 w-[800px] h-[800px] bg-yellow-500/5 rounded-full blur-[150px] animate-pulse-slow"></div>
            <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-yellow-400/5 rounded-full blur-[120px] animate-pulse-slow" style="animation-delay: 2s;"></div>
            <div class="absolute inset-0 opacity-[0.03]" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(234,179,8,0.1) 35px, rgba(234,179,8,0.1) 36px);"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            @if($narasumbers->count() > 0 || $juris->count() > 0)
            
            <!-- Two Column Layout -->
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 xl:gap-34">
                
                <!-- ===================================== -->
                <!-- LEFT: SPEAKERS (2 persons) -->
                <!-- ===================================== -->
                @if($narasumbers->count() > 0)
                <div class="space-y-10">
                    
                    <!-- Section Header -->
                    <div class="flex items-center justify-between mb-10">
                        <div>
                            <p class="text-yellow-500/60 text-xs font-bold uppercase tracking-[0.3em] mb-2 font-mono">Featured</p>
                            <h2 class="text-4xl md:text-5xl xl:text-6xl font-black text-white leading-none tracking-tight">
                                Speaker<span class="text-yellow-500">.</span>
                            </h2>
                        </div>
                        <div class="hidden md:block w-20 h-1 bg-gradient-to-r from-yellow-500 to-transparent"></div>
                    </div>

                    <!-- Speaker Cards -->
                    <div class="space-y-10">
                        @foreach($narasumbers as $index => $speaker)
                        <article class="relative bg-gradient-to-br from-[#141824] to-[#0d1117] rounded-2xl overflow-hidden border border-white/5" style="animation: fadeInUp 0.6s ease-out {{ $index * 0.15 }}s backwards;">
                            
                            <!-- Subtle Glow -->
                            <div class="absolute -inset-2 bg-gradient-to-br from-yellow-500/8 via-transparent to-transparent rounded-2xl blur-xl"></div>
                            
                            <!-- Content -->
                            <div class="relative p-6 md:p-8">
                                <div class="flex items-center gap-6">
                                    
                                    <!-- Photo with Badge Frame -->
                                    <div class="relative flex-shrink-0">
                                        <div class="w-28 h-28 md:w-32 md:h-32 rounded-2xl bg-gradient-to-br from-yellow-500/20 to-yellow-600/10 p-[2px]">
                                            <div class="w-full h-full rounded-2xl overflow-hidden">
                                                <img src="{{ Storage::url($speaker->image_path) }}" 
                                                     alt="{{ $speaker->name }}" 
                                                     class="w-full h-full object-cover">
                                            </div>
                                        </div>
                                        <!-- Corner Accents -->
                                        <div class="absolute -top-1 -left-1 w-5 h-5 border-t-2 border-l-2 border-yellow-500/40"></div>
                                        <div class="absolute -bottom-1 -right-1 w-5 h-5 border-b-2 border-r-2 border-yellow-500/40"></div>
                                    </div>
                                    
                                    <!-- Info -->
                                    <div class="flex-1 space-y-2">
                                        <h3 class="text-2xl md:text-3xl font-extrabold text-white leading-tight">
                                            {{ $speaker->name }}
                                        </h3>
                                        <div class="flex items-center gap-2 mb-2">
                                            <div class="w-8 h-[2px] bg-yellow-500/60"></div>
                                            <span class="text-xs text-yellow-500/80 font-semibold uppercase tracking-widest">Keynote Speaker</span>
                                        </div>
                                        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                                            {{ $speaker->title }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bottom Line -->
                            <div class="h-[2px] bg-gradient-to-r from-transparent via-yellow-500/40 to-transparent"></div>
                        </article>
                        @endforeach
                    </div>
                    
                </div>
                @endif

                <!-- ===================================== -->
                <!-- RIGHT: JUDGES (3 persons) -->
                <!-- ===================================== -->
                @if($juris->count() > 0)
                <div class="space-y-8">
                    
                    <!-- Section Header -->
                    <div class="flex items-center justify-between mb-10">
                        <div class="hidden md:block w-20 h-1 bg-gradient-to-l from-yellow-500 to-transparent"></div>
                        <div class="text-right ml-auto">
                            <p class="text-yellow-500/60 text-xs font-bold uppercase tracking-[0.3em] mb-2 font-mono">Panel of Experts</p>
                            <h2 class="text-4xl md:text-5xl xl:text-6xl font-black text-white leading-none tracking-tight">
                                Judges<span class="text-yellow-500">.</span>
                            </h2>
                        </div>
                    </div>

                    <!-- Judges Grid -->
                    <div class="space-y-4">
                        @foreach($juris as $index => $juri)
                        <div class="relative bg-gradient-to-br from-[#141824] to-[#0d1117] rounded-2xl overflow-hidden border border-white/5" style="animation: fadeInUp 0.5s ease-out {{ ($index * 0.12) + 0.3 }}s backwards;">
                            
                            <!-- Subtle Glow -->
                            <div class="absolute -inset-1 bg-gradient-to-br from-yellow-500/5 to-transparent rounded-2xl blur-lg"></div>
                            
                            <!-- Content -->
                            <div class="relative flex items-center gap-5 p-5 md:p-6">
                                
                                <!-- Square Badge Photo -->
                                <div class="relative flex-shrink-0">
                                    <div class="w-20 h-20 md:w-24 md:h-24 rounded-xl bg-gradient-to-br from-yellow-500/10 to-transparent p-[2px]">
                                        <div class="w-full h-full rounded-xl overflow-hidden">
                                            <img src="{{ Storage::url($juri->image_path) }}" 
                                                 alt="{{ $juri->name }}" 
                                                 class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <!-- Corner Accent -->
                                    <div class="absolute top-0 right-0 w-4 h-4 border-t border-r border-yellow-500/30"></div>
                                </div>
                                
                                <!-- Info -->
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg md:text-xl font-bold text-white leading-tight mb-1">
                                        {{ $juri->name }}
                                    </h3>
                                    <p class="text-sm md:text-base text-gray-400 leading-snug mb-2">
                                        {{ $juri->title }}
                                    </p>
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5 text-yellow-500/50" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                        </svg>
                                        <span class="text-xs text-yellow-500/60 font-medium uppercase tracking-wider">Expert Judge</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
                @endif

            </div>
            
            @endif

            <!-- Empty State -->
            @if($juris->count() == 0 && $narasumbers->count() == 0)
                <div class="text-center py-20">
                    <div class="inline-block p-8 rounded-2xl bg-white/5 border border-white/10">
                        <svg class="w-16 h-16 mx-auto mb-4 text-yellow-500/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <p class="text-gray-400 text-lg font-medium">Tokoh akan segera diumumkan.</p>
                    </div>
                </div>
            @endif

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
                        <div class="relative bg-gradient-to-br from-gray-900 to-black border border-red-500/30 rounded-2xl p-6 md:p-8 backdrop-blur-xl text-center">
                            <p class="text-xl md:text-2xl font-bold text-red-500">⚠️ Pendaftaran Telah Ditutup!</p>
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
        /* Gradient Animation */
        @keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .animate-gradient {
            background-size: 200% auto;
            animation: gradient 3s ease infinite;
        }
        
        /* Slow Pulse for Ambient Effects */
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.05); }
        }
        .animate-pulse-slow {
            animation: pulse-slow 8s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        /* Staggered Fade In Up Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</x-public-layout>