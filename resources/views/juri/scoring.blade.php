<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-yellow-400 leading-tight uppercase tracking-wider">
            {{ __('Penilaian Tim') }}
        </h2>
    </x-slot>

    <div class="relative min-h-screen bg-black py-12 overflow-hidden">
        
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, rgb(234, 179, 8) 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>
        
        <div class="absolute top-20 right-0 w-96 h-96 bg-yellow-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-20 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative z-10">
            
            <a href="{{ route('juri.dashboard') }}" class="inline-flex items-center gap-2 mb-8 text-gray-400 hover:text-yellow-400 font-bold transition-colors group">
                <div class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center group-hover:bg-yellow-500/20 group-hover:text-yellow-400 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </div>
                Kembali ke Dashboard
            </a>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-1 space-y-6">
                    
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-gray-700 to-gray-800 rounded-2xl opacity-50"></div>
                        <div class="relative bg-gray-900 border border-gray-800 rounded-2xl p-6 backdrop-blur-xl">
                            <h3 class="text-lg font-black text-white mb-6 border-b border-gray-800 pb-4">Profil Peserta</h3>
                            
                            <div class="space-y-5">
                                <div>
                                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Nama Tim</p>
                                    <p class="text-xl font-bold text-yellow-400">{{ $registration->team_name }}</p>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Kategori Lomba</p>
                                    <span class="inline-flex items-center px-3 py-1 bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 rounded-lg text-xs font-bold uppercase tracking-wide">
                                        {{ $registration->participant_type }}
                                    </span>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Subtema</p>
                                    <p class="text-gray-300 font-medium">{{ $registration->research_field }}</p>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-1">Asal Instansi</p>
                                    <p class="text-gray-300 font-medium flex items-center gap-2">
                                        <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                        {{ $registration->institution }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-br from-gray-700 to-gray-800 rounded-2xl opacity-50"></div>
                        <div class="relative bg-gray-900 border border-gray-800 rounded-2xl p-6 backdrop-blur-xl">
                            <h3 class="text-lg font-black text-white mb-6 border-b border-gray-800 pb-4">Berkas Penilaian</h3>
                            
                            <div class="space-y-4">
                                <a href="{{ Storage::url($registration->proposal_path) }}" target="_blank" class="flex items-center justify-between p-4 bg-gray-800 border border-gray-700 rounded-xl hover:bg-gray-700 hover:border-red-500/50 transition-all group/file">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-lg bg-red-500/10 flex items-center justify-center text-red-500 group-hover/file:bg-red-500 group-hover/file:text-white transition-all">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-200 group-hover/file:text-white">Proposal Bisnis</p>
                                            <p class="text-xs text-gray-500">Format PDF</p>
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-600 group-hover/file:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>

                                <a href="{{ Storage::url($registration->bmc_path) }}" target="_blank" class="flex items-center justify-between p-4 bg-gray-800 border border-gray-700 rounded-xl hover:bg-gray-700 hover:border-blue-500/50 transition-all group/file">
                                    <div class="flex items-center gap-4">
                                        <div class="w-10 h-10 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-500 group-hover/file:bg-blue-500 group-hover/file:text-white transition-all">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-200 group-hover/file:text-white">Business Model Canvas</p>
                                            <p class="text-xs text-gray-500">Format PDF</p>
                                        </div>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-600 group-hover/file:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-500 to-orange-600 rounded-2xl opacity-30 group-hover:opacity-50 transition duration-500"></div>
                        
                        <div class="relative bg-gray-900 border border-gray-800 rounded-2xl p-8 backdrop-blur-xl">
                            <form action="{{ route('juri.scoring.store', $registration->id) }}" method="POST">
                                @csrf
                                
                                <div class="flex items-center justify-between mb-8 pb-6 border-b border-gray-800">
                                    <div>
                                        <h3 class="text-2xl font-black text-white">Lembar Penilaian</h3>
                                        <p class="text-gray-400 text-sm mt-1">Berikan skor (0-100) untuk setiap kriteria di bawah ini.</p>
                                    </div>
                                    <div class="w-12 h-12 rounded-full bg-yellow-500/10 flex items-center justify-center text-yellow-400 animate-pulse">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                    </div>
                                </div>

                                <div class="space-y-6">
                                    @foreach($criteria as $key => $item)
                                        <div class="p-5 bg-black/40 rounded-xl border border-gray-800 hover:border-yellow-500/50 transition-all duration-300 group/input">
                                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                                                <div class="flex-1">
                                                    <label for="criteria_{{ $key }}" class="block font-bold text-gray-200 text-lg group-hover/input:text-yellow-400 transition-colors">
                                                        {{ $item['label'] }}
                                                    </label>
                                                    <div class="mt-2 flex items-center gap-2">
                                                        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">Bobot:</span>
                                                        <span class="px-2 py-0.5 bg-gray-800 text-gray-300 rounded text-xs font-bold border border-gray-700">{{ $item['weight'] }}%</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="w-full md:w-32 flex-shrink-0">
                                                    <div class="relative">
                                                        <input 
                                                            type="number" 
                                                            id="criteria_{{ $key }}" 
                                                            name="criteria[{{ $key }}]" 
                                                            min="0" 
                                                            max="100" 
                                                            value="{{ old("criteria.$key", $existingScore->criteria_scores[$key] ?? '') }}"
                                                            class="block w-full bg-gray-900 border border-gray-700 rounded-xl shadow-inner focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 text-center font-black text-2xl text-white py-3 transition-all placeholder-gray-700"
                                                            placeholder="0"
                                                            required
                                                        >
                                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                            <span class="text-gray-600 font-bold text-xs">/100</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @error("criteria.$key")
                                                <p class="text-red-400 text-sm mt-2 font-medium flex items-center gap-1">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-8 pt-8 border-t border-gray-800">
                                    <label for="feedback" class="block font-bold text-gray-200 mb-3 text-lg">Catatan / Masukan Juri</label>
                                    <textarea 
                                        name="feedback" 
                                        id="feedback" 
                                        rows="4" 
                                        class="block w-full bg-black/40 border border-gray-700 rounded-xl shadow-sm focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 text-gray-300 placeholder-gray-600 transition-all" 
                                        placeholder="Tuliskan masukan konstruktif untuk tim ini agar mereka dapat berkembang lebih baik..."
                                    >{{ old('feedback', $existingScore->feedback ?? '') }}</textarea>
                                </div>

                                <div class="mt-10 flex justify-end">
                                    <button type="submit" class="group relative inline-flex items-center justify-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-600 text-black font-black text-lg rounded-xl overflow-hidden hover:scale-105 transition-all duration-300 shadow-lg shadow-yellow-500/20 w-full md:w-auto">
                                        <span class="relative z-10">SIMPAN PENILAIAN</span>
                                        <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>