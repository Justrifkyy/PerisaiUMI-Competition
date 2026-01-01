<x-guest-layout>
    <!-- Background Dynamic Effects - FIXED: Made fixed and full screen -->
    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-950 via-black to-gray-900"></div>
        
        <!-- Animated Grid -->
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
        
        <!-- Glowing Orbs with Animation -->
        <div class="absolute -top-32 -left-32 w-[500px] h-[500px] bg-yellow-500/15 rounded-full blur-[150px] animate-pulse"></div>
        <div class="absolute -bottom-32 -right-32 w-[500px] h-[500px] bg-yellow-600/15 rounded-full blur-[150px] animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/4 w-80 h-80 bg-yellow-400/10 rounded-full blur-[120px]"></div>
    </div>

    <div class="relative z-10 w-full max-w-md mx-auto px-4 py-1 min-h-screen flex flex-col justify-center">
        <!-- Logo Section with Enhanced Design -->
        <div class="flex items-center justify-center gap-3 mb-8 flex-wrap">
            <div class="bg-gradient-to-br from-yellow-500/10 to-yellow-600/5 p-3 rounded-2xl border border-yellow-500/20 backdrop-blur-sm">
                <img src="{{ asset('storage/img/logo-umi.png') }}" alt="Logo UMI" class="h-10 md:h-12 object-contain" onerror="this.style.display='none'">
            </div>
            <div class="bg-gradient-to-br from-yellow-500/10 to-yellow-600/5 p-3 rounded-2xl border border-yellow-500/20 backdrop-blur-sm">
                <img src="{{ asset('storage/img/logo-perisai.png') }}" alt="Logo PERISAI" class="h-10 md:h-12 object-contain" onerror="this.style.display='none'">
            </div>
            <div class="hidden sm:block h-10 w-[2px] bg-gradient-to-b from-transparent via-yellow-500/50 to-transparent rounded-full"></div>
            <div class="bg-gradient-to-br from-yellow-500/10 to-yellow-600/5 p-3 rounded-2xl border border-yellow-500/20 backdrop-blur-sm">
                <img src="{{ asset('storage/img/logoLontara.png') }}" alt="Logo LONTARA" class="h-10 md:h-12 object-contain" onerror="this.style.display='none'">
            </div>
        </div>

        <!-- Header Section -->
        <div class="text-center mb-8">
            <div class="inline-block mb-2">
                <div class="relative">
                    <h2 class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-yellow-500 to-yellow-600 uppercase tracking-widest">
                        Daftar Akun
                    </h2>
                    <div class="absolute -bottom-1 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-yellow-500 to-transparent opacity-50"></div>
                </div>
            </div>
            <p class="text-gray-400 text-sm mt-3 font-medium">Bergabunglah dalam kompetisi LONTARA 2025</p>
        </div>

        <!-- Enhanced Glassmorphism Card -->
        <div class="relative group">
            <!-- Glow Effect -->
            <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500/30 via-yellow-400/30 to-yellow-600/30 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition duration-700"></div>
            
            <!-- Main Card -->
            <div class="relative bg-gray-900/90 border border-yellow-500/30 rounded-3xl p-8 backdrop-blur-2xl shadow-2xl shadow-yellow-500/10">
                <!-- Corner Accents -->
                <div class="absolute top-0 left-0 w-16 h-16 border-t-2 border-l-2 border-yellow-500/40 rounded-tl-3xl"></div>
                <div class="absolute bottom-0 right-0 w-16 h-16 border-b-2 border-r-2 border-yellow-500/40 rounded-br-3xl"></div>
                
                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div class="space-y-2">
                        <label for="name" class=" text-sm font-bold text-gray-200 tracking-wide uppercase flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Nama Lengkap
                        </label>
                        <div class="relative group/input">
                            <input id="name" 
                                class="block w-full px-4 py-3 bg-black/60 border-2 border-gray-700 rounded-xl text-gray-100 font-medium focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all placeholder-gray-500 hover:border-gray-600" 
                                type="text" 
                                name="name" 
                                :value="old('name')" 
                                required 
                                autofocus 
                                autocomplete="name" 
                                placeholder="Nama Anda" />
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400 text-xs font-bold" />
                    </div>

                    <!-- Email Address -->
                    <div class="space-y-2">
                        <label for="email" class=" text-sm font-bold text-gray-200 tracking-wide uppercase flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Email Address
                        </label>
                        <div class="relative group/input">
                            <input id="email" 
                                class="block w-full px-4 py-3 bg-black/60 border-2 border-gray-700 rounded-xl text-gray-100 font-medium focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all placeholder-gray-500 hover:border-gray-600" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required 
                                autocomplete="username" 
                                placeholder="nama@email.com" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-xs font-bold" />
                    </div>

                    <!-- Password -->
                    <div class="space-y-2">
                        <label for="password" class=" text-sm font-bold text-gray-200 tracking-wide uppercase flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            Password
                        </label>
                        <div class="relative group/input">
                            <input id="password" 
                                class="block w-full px-4 py-3 bg-black/60 border-2 border-gray-700 rounded-xl text-gray-100 font-medium focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all placeholder-gray-500 hover:border-gray-600"
                                type="password"
                                name="password"
                                required 
                                autocomplete="new-password" 
                                placeholder="Minimal 8 karakter" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-xs font-bold" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="space-y-2">
                        <label for="password_confirmation" class="b text-sm font-bold text-gray-200 tracking-wide uppercase flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Konfirmasi Password
                        </label>
                        <div class="relative group/input">
                            <input id="password_confirmation" 
                                class="block w-full px-4 py-3 bg-black/60 border-2 border-gray-700 rounded-xl text-gray-100 font-medium focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all placeholder-gray-500 hover:border-gray-600"
                                type="password"
                                name="password_confirmation" 
                                required 
                                autocomplete="new-password" 
                                placeholder="Ulangi password" />
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400 text-xs font-bold" />
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="relative w-full py-4 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:from-yellow-300 hover:via-yellow-400 hover:to-yellow-500 text-black font-black uppercase tracking-widest rounded-2xl shadow-xl shadow-yellow-500/30 transform hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 group/btn overflow-hidden mt-6">
                        <span class="relative z-10 flex items-center justify-center gap-2">
                            Buat Akun Sekarang
                            <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover/btn:opacity-100 transition-opacity"></div>
                    </button>

                    <!-- Login Link -->
                    <div class="text-center pt-6 border-t border-gray-700/50">
                        <p class="text-sm text-gray-400 font-medium">
                            Sudah punya akun?
                            <a class="text-yellow-400 hover:text-yellow-300 font-bold ml-1 underline decoration-yellow-400/40 decoration-2 underline-offset-4 hover:decoration-yellow-300 transition-colors" href="{{ route('login') }}">
                                Login disini
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>