<x-app-layout>
    <div class="min-h-screen bg-black pt-32 pb-12 relative">
        <!-- Background Effects -->
        <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-500/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-yellow-600/5 rounded-full blur-[120px]"></div>

        <div class="relative max-w-4xl mx-auto px-6">
            
            <!-- Page Header -->
            <div class="mb-12">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/30 flex items-center justify-center backdrop-blur-xl">
                        <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 0l3 3m-3-3l3-3M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                        </svg>
                    </div>
                    
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-black text-gray-100">
                            Upload Bukti <span class="bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text text-transparent">Pembayaran</span>
                        </h1>
                        <p class="text-gray-500 text-base mt-2">Finalisasi registrasi Anda untuk LONTARA 2025</p>
                    </div>
                </div>
            </div>
            
            @if (session('status'))
                <!-- Success Message -->
                <div class="mb-8 group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 rounded-2xl blur-xl"></div>
                    <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border-2 border-yellow-500/50 rounded-2xl p-6 backdrop-blur-xl">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-yellow-500/20 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-yellow-400 text-lg">Berhasil!</h4>
                                <p class="text-gray-300 mt-1">{{ session('status') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Registration Details Card -->
            <div class="mb-8 group relative">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                
                <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                    <!-- Status Badge -->
                    <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full mb-6">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                        </span>
                        <span class="text-yellow-400 font-bold text-sm tracking-wider uppercase">Pending Payment</span>
                    </div>

                    <h3 class="text-2xl font-black text-gray-100 mb-6">Detail Registrasi Anda</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <p class="text-gray-500 text-sm uppercase tracking-wider">Nama Lengkap</p>
                            <p class="text-xl font-bold text-gray-100">{{ $registration->full_name }}</p>
                        </div>
                        
                        <div class="space-y-2">
                            <p class="text-gray-500 text-sm uppercase tracking-wider">Paket Dipilih</p>
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-500/10 border border-yellow-500/30 rounded-xl">
                                <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                                </svg>
                                <span class="text-yellow-400 font-bold">{{ $registration->package_choice }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 p-4 bg-yellow-500/5 border border-yellow-500/20 rounded-xl">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-yellow-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-gray-300 text-sm leading-relaxed">
                                Silakan lakukan transfer sesuai tagihan paket yang Anda pilih, lalu unggah bukti transfer di form di bawah ini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upload Form Card -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                
                <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl p-8 backdrop-blur-xl hover:border-yellow-500/40 transition-all duration-300">
                    
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-12 h-12 rounded-xl bg-yellow-500/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-gray-100">Form Upload</h3>
                            <p class="text-gray-500 text-sm">Lengkapi data pembayaran Anda</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('payment.store') }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <!-- Amount Input -->
                        <div class="space-y-3">
                            <label for="amount" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">
                                Jumlah yang Ditransfer
                            </label>
                            <div class="relative">
                                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-yellow-400 font-bold text-lg">Rp</div>
                                <input 
                                    id="amount" 
                                    name="amount" 
                                    type="number" 
                                    value="{{ old('amount') }}"
                                    placeholder="000000"
                                    required
                                    class="w-full pl-14 pr-6 py-4 bg-black/50 border border-yellow-500/30 rounded-xl text-gray-100 font-semibold text-lg placeholder-gray-600 focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500/20 transition-all"
                                />
                            </div>
                            @error('amount')
                                <p class="text-red-400 text-sm flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                            <p class="text-gray-500 text-xs">*Masukkan nominal tanpa titik atau koma</p>
                        </div>

                        <!-- File Upload -->
                        <div class="space-y-3">
                            <label for="payment_proof" class="block text-sm font-bold text-gray-300 uppercase tracking-wider">
                                File Bukti Pembayaran
                            </label>
                            
                            <div class="relative">
                                <input 
                                    id="payment_proof" 
                                    name="payment_proof" 
                                    type="file" 
                                    accept=".jpg,.jpeg,.png,.pdf"
                                    required
                                    class="hidden"
                                    onchange="updateFileName(this)"
                                />
                                
                                <label for="payment_proof" class="flex items-center justify-center gap-4 w-full p-8 bg-black/50 border-2 border-dashed border-yellow-500/30 rounded-xl cursor-pointer hover:border-yellow-500/60 hover:bg-yellow-500/5 transition-all group">
                                    <div class="text-center">
                                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-yellow-500/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                            <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-300 font-semibold mb-1">
                                            <span class="text-yellow-400">Klik untuk upload</span> atau drag & drop
                                        </p>
                                        <p class="text-gray-500 text-sm" id="file-name">JPG, PNG atau PDF (Max. 5MB)</p>
                                    </div>
                                </label>
                            </div>
                            
                            @error('payment_proof')
                                <p class="text-red-400 text-sm flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end gap-4 pt-6">
                            <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-transparent border border-yellow-500/30 text-gray-300 font-bold rounded-xl hover:bg-yellow-500/10 hover:border-yellow-500/50 transition-all">
                                Batal
                            </a>
                            
                            <button type="submit" class="group relative inline-flex items-center justify-center gap-3 px-10 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-black rounded-xl hover:scale-105 transition-all overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <span class="relative z-10">Kirim Bukti Pembayaran</span>
                                <svg class="relative z-10 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Help Section -->
            <div class="mt-8 p-6 bg-gradient-to-br from-gray-900/50 to-gray-800/50 border border-yellow-500/10 rounded-2xl backdrop-blur-xl">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-lg bg-yellow-500/10 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-300 mb-2">Butuh Bantuan?</h4>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Jika Anda mengalami kendala dalam proses upload, silakan hubungi tim kami melalui WhatsApp atau email yang tertera di halaman kontak.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        function updateFileName(input) {
            const fileName = input.files[0]?.name;
            const fileNameDisplay = document.getElementById('file-name');
            if (fileName) {
                fileNameDisplay.textContent = fileName;
                fileNameDisplay.classList.add('text-yellow-400', 'font-semibold');
            }
        }
    </script>
</x-app-layout>