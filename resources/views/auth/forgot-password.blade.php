<x-guest-layout>
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black"></div>
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="relative z-10 w-full max-w-md mx-auto">
        <div class="bg-gray-900/80 border border-yellow-500/20 rounded-2xl p-8 backdrop-blur-xl shadow-2xl">
            
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-yellow-500/10 border border-yellow-500/30 mb-4">
                    <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-2">Lupa Password?</h2>
                <p class="text-sm text-gray-400 leading-relaxed">
                    {{ __('Jangan khawatir. Masukkan alamat email Anda dan kami akan mengirimkan tautan reset password.') }}
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                @csrf

                <!-- Email Address -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-300">Email Address</label>
                    <input id="email" class="block w-full px-4 py-3 bg-black/50 border border-gray-700 rounded-xl text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all" 
                        type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-xs" />
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-yellow-400 to-yellow-600 hover:from-yellow-300 hover:to-yellow-500 text-black font-bold rounded-xl shadow-lg transition-all">
                        {{ __('Kirim Link Reset') }}
                    </button>
                </div>
                
                <div class="text-center">
                    <a href="{{ route('login') }}" class="text-sm text-gray-500 hover:text-yellow-400 transition-colors">
                        &larr; Kembali ke Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>