<x-guest-layout>
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-black"></div>
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="relative z-10 w-full max-w-md mx-auto">
        <div class="bg-gray-900/80 border border-yellow-500/20 rounded-2xl p-8 backdrop-blur-xl shadow-2xl">
            
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-white">Reset Password</h2>
                <p class="text-sm text-gray-400 mt-1">Buat password baru untuk akun Anda</p>
            </div>

            <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="space-y-1">
                    <label for="email" class="block text-sm font-medium text-gray-300">Email Address</label>
                    <input id="email" class="block w-full px-4 py-3 bg-black/50 border border-gray-700 rounded-xl text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all opacity-75 cursor-not-allowed" 
                        type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" readonly />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400 text-xs" />
                </div>

                <!-- Password -->
                <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-300">Password Baru</label>
                    <input id="password" class="block w-full px-4 py-3 bg-black/50 border border-gray-700 rounded-xl text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all" 
                        type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400 text-xs" />
                </div>

                <!-- Confirm Password -->
                <div class="space-y-1">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300">Konfirmasi Password</label>
                    <input id="password_confirmation" class="block w-full px-4 py-3 bg-black/50 border border-gray-700 rounded-xl text-gray-100 focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" placeholder="Ulangi password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-400 text-xs" />
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-yellow-400 to-yellow-600 hover:from-yellow-300 hover:to-yellow-500 text-black font-bold rounded-xl shadow-lg transition-all">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>