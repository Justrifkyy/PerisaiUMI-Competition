<x-guest-layout>
    <!-- Background Dynamic Effects - FIXED: Moved outside and made fixed -->
    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-950 via-black to-gray-900"></div>
        
        <!-- Animated Grid -->
        <div class="absolute inset-0 opacity-15" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 50px 50px;"></div>
        
        <!-- Glowing Orbs with Animation -->
        <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-yellow-500/15 rounded-full blur-[150px] animate-pulse"></div>
        <div class="absolute -bottom-32 -left-32 w-[500px] h-[500px] bg-yellow-600/15 rounded-full blur-[150px] animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-yellow-400/5 rounded-full blur-[100px]"></div>
    </div>

    <div class="relative z-10 w-full max-w-md mx-auto px-4 py-1 min-h-screen flex flex-col justify-center">
        <!-- Logo Section with Enhanced Design -->
        <div class="flex items-center justify-center gap-3 mb-10 flex-wrap">
            <div class="bg-gradient-to-br from-yellow-500/10 to-yellow-600/5 p-3 rounded-2xl border border-yellow-500/20 backdrop-blur-sm">
                <img src="{{ asset('storage/img/logo-umi.png') }}" alt="Logo UMI" class="h-12 md:h-14 object-contain" onerror="this.style.display='none'">
            </div>
            <div class="bg-gradient-to-br from-yellow-500/10 to-yellow-600/5 p-3 rounded-2xl border border-yellow-500/20 backdrop-blur-sm">
                <img src="{{ asset('storage/img/logo-perisai.png') }}" alt="Logo PERISAI" class="h-12 md:h-14 object-contain" onerror="this.style.display='none'">
            </div>
            <div class="hidden sm:block h-12 w-[2px] bg-gradient-to-b from-transparent via-yellow-500/50 to-transparent rounded-full"></div>
            <div class="bg-gradient-to-br from-yellow-500/10 to-yellow-600/5 p-3 rounded-2xl border border-yellow-500/20 backdrop-blur-sm">
                <img src="{{ asset('storage/img/logoLontara.png') }}" alt="Logo LONTARA" class="h-12 md:h-14 object-contain" onerror="this.style.display='none'">
            </div>
        </div>

        <!-- Header Section -->
        <div class="text-center mb-8">
            <div class="inline-block mb-3">
                <div class="relative">
                    <h2 class="text-4xl md:text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-yellow-500 to-yellow-600 uppercase tracking-wider">
                        Login Peserta
                    </h2>
                    <div class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-yellow-500 to-transparent opacity-50"></div>
                </div>
            </div>
        </div>

        <!-- Enhanced Glassmorphism Card -->
        <div class="relative group">
            <!-- Glow Effect -->
            <div class="absolute -inset-1 bg-gradient-to-r from-yellow-500/30 via-yellow-400/30 to-yellow-600/30 rounded-3xl opacity-0 group-hover:opacity-100 blur-xl transition duration-700"></div>
            
            <!-- Main Card -->
            <div class="relative bg-gray-900/90 border border-yellow-500/30 rounded-3xl p-8 md:p-10 backdrop-blur-2xl shadow-2xl shadow-yellow-500/10">
                <!-- Corner Accents -->
                <div class="absolute top-0 left-0 w-20 h-20 border-t-2 border-l-2 border-yellow-500/40 rounded-tl-3xl"></div>
                <div class="absolute bottom-0 right-0 w-20 h-20 border-b-2 border-r-2 border-yellow-500/40 rounded-br-3xl"></div>
                
                <div class="relative">
                    <x-auth-session-status class="mb-6" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}" class="space-y-6">
                        @csrf

                        <!-- Email Address -->
                        <div class="space-y-3">
                            <label for="email" class=" text-sm font-bold text-gray-200 tracking-wider uppercase flex items-center gap-2">
                                <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Email Address
                            </label>
                            <div class="relative group/input">
                                <input id="email" 
                                    class="block w-full px-5 py-4 bg-black/60 border-2 border-gray-700 rounded-2xl text-gray-100 font-medium focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all placeholder-gray-500 hover:border-gray-600" 
                                    type="email" 
                                    name="email" 
                                    :value="old('email')" 
                                    required 
                                    autofocus 
                                    autocomplete="username" 
                                    placeholder="nama@email.com" />
                                <div class="absolute right-5 top-1/2 transform -translate-y-1/2 text-gray-500 group-focus-within/input:text-yellow-400 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-xs font-bold flex items-center gap-1" />
                        </div>

                        <!-- Password -->
                        <div class="space-y-3">
                            <label for="password" class=" text-sm font-bold text-gray-200 tracking-wider uppercase flex items-center gap-2">
                                <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                Password
                            </label>
                            <div class="relative group/input">
                                <input id="password" 
                                    class="block w-full px-5 py-4 bg-black/60 border-2 border-gray-700 rounded-2xl text-gray-100 font-medium focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all placeholder-gray-500 hover:border-gray-600"
                                    type="password"
                                    name="password"
                                    required 
                                    autocomplete="current-password" 
                                    placeholder="••••••••" />
                                <div class="absolute right-5 top-1/2 transform -translate-y-1/2 text-gray-500 group-focus-within/input:text-yellow-400 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-xs font-bold flex items-center gap-1" />
                        </div>

                        <!-- Remember & Forgot -->
                        <div class="flex items-center justify-between pt-2">
                            <label for="remember_me" class="inline-flex items-center cursor-pointer group/check">
                                <input id="remember_me" type="checkbox" class="rounded-lg bg-gray-800 border-gray-600 text-yellow-500 shadow-sm focus:ring-yellow-500 focus:ring-2 w-5 h-5" name="remember">
                                <span class="ml-3 text-sm text-gray-400 group-hover/check:text-gray-200 transition-colors font-medium">Ingat saya</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-yellow-400 hover:text-yellow-300 transition-colors font-bold hover:underline decoration-2 underline-offset-4" href="{{ route('password.request') }}">
                                    Lupa Password?
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="relative w-full py-5 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:from-yellow-300 hover:via-yellow-400 hover:to-yellow-500 text-black font-black uppercase tracking-widest rounded-2xl shadow-xl shadow-yellow-500/30 transform hover:scale-[1.02] active:scale-[0.98] transition-all duration-300 group/btn overflow-hidden mt-8">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                Masuk Sekarang
                                <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover/btn:opacity-100 transition-opacity"></div>
                        </button>

                        <!-- Register Link -->
                        <div class="text-center pt-8 border-t border-gray-700/50">
                            <p class="text-sm text-gray-400 font-medium">
                                Belum memiliki akun?
                                <a class="text-yellow-400 hover:text-yellow-300 font-bold ml-1 underline decoration-yellow-400/40 decoration-2 underline-offset-4 hover:decoration-yellow-300 transition-colors" href="{{ route('register') }}">
                                    Daftar di sini
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>