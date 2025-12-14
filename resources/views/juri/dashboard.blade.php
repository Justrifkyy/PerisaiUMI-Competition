<x-app-layout>
    <div class="min-h-screen bg-black pt-32 pb-12 relative">
        <!-- Background Effects -->
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(234, 179, 8, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(234, 179, 8, 0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
        <div class="absolute top-20 right-20 w-96 h-96 bg-yellow-500/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-yellow-600/5 rounded-full blur-[120px]"></div>

        <div class="relative max-w-7xl mx-auto px-6">
            
            <!-- Page Header -->
            <div class="mb-12">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/30 flex items-center justify-center backdrop-blur-xl">
                        <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    
                    <div>
                        <h1 class="text-4xl lg:text-5xl font-black text-gray-100">
                            Panel <span class="bg-gradient-to-r from-yellow-400 to-yellow-600 bg-clip-text text-transparent">Penilaian</span>
                        </h1>
                        <p class="text-gray-500 text-base mt-2">Dewan Juri - LONTARA 2025</p>
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

            <!-- Main Content Card -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-all duration-500"></div>
                
                <div class="relative bg-gradient-to-br from-gray-900 to-gray-800 border border-yellow-500/20 rounded-3xl overflow-hidden backdrop-blur-xl">
                    <!-- Header Section -->
                    <div class="px-8 py-6 border-b border-yellow-500/20 bg-gradient-to-r from-yellow-500/5 to-transparent">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-2xl font-black text-gray-100">Daftar Tim Peserta</h3>
                                <p class="text-gray-500 text-sm mt-1">Tim yang lolos verifikasi pembayaran</p>
                            </div>
                            <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-yellow-500/20 to-yellow-400/20 backdrop-blur-xl border border-yellow-500/50 rounded-full">
                                <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="text-yellow-400 font-bold text-sm">Total: {{ $teams->total() }} Tim</span>
                            </div>
                        </div>
                    </div>

                    <!-- Table Section -->
                    <div class="p-8">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-yellow-500/20">
                                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Nama Tim & Instansi</th>
                                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Kategori</th>
                                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Status Penilaian</th>
                                        <th class="px-6 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-wider">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($teams as $team)
                                        @php 
                                            $hasScored = $team->scores->contains('user_id', Auth::id());
                                        @endphp
                                        
                                        <tr class="border-b border-yellow-500/10 hover:bg-yellow-500/5 transition-all group/row">
                                            <td class="px-6 py-5">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-10 h-10 rounded-lg bg-yellow-500/10 flex items-center justify-center flex-shrink-0">
                                                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <div class="font-bold text-gray-100 group-hover/row:text-yellow-400 transition-colors">{{ $team->team_name }}</div>
                                                        <div class="text-xs text-gray-500 mt-0.5">{{ $team->institution }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-5">
                                                @if($team->participant_type == 'Tahap Awal')
                                                    <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-green-500/10 border border-green-500/30 rounded-lg text-xs font-bold text-green-400">
                                                        <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                                                        Tahap Awal
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-blue-500/10 border border-blue-500/30 rounded-lg text-xs font-bold text-blue-400">
                                                        <span class="w-2 h-2 bg-blue-400 rounded-full"></span>
                                                        Tahap Berjalan
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-5">
                                                @if($hasScored)
                                                    <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-yellow-500/10 border border-yellow-500/30 rounded-lg text-xs font-bold text-yellow-400">
                                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                        Sudah Dinilai
                                                    </span>
                                                @else
                                                    <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-gray-500/10 border border-gray-500/30 rounded-lg text-xs font-bold text-gray-400">
                                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        Belum Dinilai
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-5 text-right">
                                                <a href="{{ route('juri.scoring.show', $team->id) }}" class="group/btn inline-flex items-center gap-2 px-6 py-2.5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-black font-bold text-xs uppercase tracking-wider rounded-lg hover:scale-105 transition-all">
                                                    <span>{{ $hasScored ? 'Edit Nilai' : 'Beri Nilai' }}</span>
                                                    <svg class="w-4 h-4 group-hover/btn:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="px-6 py-16">
                                                <div class="text-center">
                                                    <div class="w-20 h-20 mx-auto mb-4 rounded-2xl bg-gray-500/10 flex items-center justify-center">
                                                        <svg class="w-10 h-10 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                        </svg>
                                                    </div>
                                                    <h4 class="text-lg font-bold text-gray-400 mb-2">Belum Ada Tim</h4>
                                                    <p class="text-sm text-gray-500">Belum ada tim yang lolos verifikasi pembayaran.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        @if($teams->hasPages())
                            <div class="mt-8 pt-6 border-t border-yellow-500/20">
                                <div class="flex items-center justify-between">
                                    <div class="text-sm text-gray-500">
                                        Menampilkan {{ $teams->firstItem() }} - {{ $teams->lastItem() }} dari {{ $teams->total() }} tim
                                    </div>
                                    <div class="flex gap-2">
                                        {{-- Previous Button --}}
                                        @if ($teams->onFirstPage())
                                            <span class="px-4 py-2 bg-gray-800/50 border border-gray-700 text-gray-600 rounded-lg cursor-not-allowed">
                                                ← Previous
                                            </span>
                                        @else
                                            <a href="{{ $teams->previousPageUrl() }}" class="px-4 py-2 bg-black/50 border border-yellow-500/30 text-yellow-400 font-semibold rounded-lg hover:bg-yellow-500/10 hover:border-yellow-500/50 transition-all">
                                                ← Previous
                                            </a>
                                        @endif

                                        {{-- Next Button --}}
                                        @if ($teams->hasMorePages())
                                            <a href="{{ $teams->nextPageUrl() }}" class="px-4 py-2 bg-black/50 border border-yellow-500/30 text-yellow-400 font-semibold rounded-lg hover:bg-yellow-500/10 hover:border-yellow-500/50 transition-all">
                                                Next →
                                            </a>
                                        @else
                                            <span class="px-4 py-2 bg-gray-800/50 border border-gray-700 text-gray-600 rounded-lg cursor-not-allowed">
                                                Next →
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Info Card -->
            <div class="mt-8 group relative">
                <div class="relative bg-gradient-to-br from-gray-900/50 to-gray-800/50 border border-yellow-500/10 rounded-2xl p-6 backdrop-blur-xl">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-lg bg-yellow-500/10 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-300 mb-2">Petunjuk Penilaian</h4>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Silakan klik tombol "Beri Nilai" untuk menilai tim yang belum dinilai, atau "Edit Nilai" untuk merevisi penilaian yang sudah ada. 
                                Pastikan Anda memberikan penilaian yang objektif dan adil untuk setiap tim peserta.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>