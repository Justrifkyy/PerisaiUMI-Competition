<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Penilaian: {{ $registration->team_name }}
            </h2>
            <a href="{{ route('juri.dashboard') }}" class="text-sm text-gray-600 hover:text-gray-900">&larr; Kembali ke Daftar</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white p-6 shadow sm:rounded-lg">
                        <h3 class="text-lg font-bold mb-2">Informasi Tim</h3>
                        <p><strong>Kategori:</strong> {{ $registration->participant_type }}</p>
                        <p><strong>Institusi:</strong> {{ $registration->institution }}</p>
                        <p><strong>Subtema:</strong> {{ $registration->research_field }}</p>
                    </div>

                    <div class="bg-white p-6 shadow sm:rounded-lg">
                        <h3 class="text-lg font-bold mb-4">Berkas Kompetisi</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-blue-50 border border-blue-100 rounded">
                                <span class="font-semibold text-blue-800">Proposal Bisnis</span>
                                <a href="{{ Storage::url($registration->proposal_path) }}" target="_blank" class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Buka File</a>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-indigo-50 border border-indigo-100 rounded">
                                <span class="font-semibold text-indigo-800">Business Model Canvas (BMC)</span>
                                <a href="{{ Storage::url($registration->bmc_path) }}" target="_blank" class="px-3 py-1 bg-indigo-600 text-white text-sm rounded hover:bg-indigo-700">Buka File</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-white p-6 shadow sm:rounded-lg sticky top-6">
                        <h3 class="text-lg font-bold mb-4 text-gray-800 border-b pb-2">Formulir Penilaian</h3>
                        
                        <form method="POST" action="{{ route('juri.scoring.store', $registration) }}">
                            @csrf
                            
                            <div class="mb-4">
                                <x-input-label for="score_bmc" value="BMC (Bobot 35%)" />
                                <input type="number" name="score_bmc" id="score_bmc" min="0" max="100" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('score_bmc', $existingScore->score_bmc ?? '') }}" required>
                                <p class="text-xs text-gray-500 mt-1">Nilai 0 - 100</p>
                            </div>

                            <div class="mb-4">
                                <x-input-label for="score_idea" value="Ide Bisnis (Bobot 30%)" />
                                <input type="number" name="score_idea" id="score_idea" min="0" max="100" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('score_idea', $existingScore->score_idea ?? '') }}" required>
                            </div>

                            <div class="mb-4">
                                <x-input-label for="score_impact" value="Dampak Sosial (Bobot 25%)" />
                                <input type="number" name="score_impact" id="score_impact" min="0" max="100" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('score_impact', $existingScore->score_impact ?? '') }}" required>
                            </div>

                            <div class="mb-4">
                                <x-input-label for="score_visual" value="Visualisasi (Bobot 10%)" />
                                <input type="number" name="score_visual" id="score_visual" min="0" max="100" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" value="{{ old('score_visual', $existingScore->score_visual ?? '') }}" required>
                            </div>

                            <div class="mb-6">
                                <x-input-label for="feedback" value="Catatan / Feedback Juri" />
                                <textarea name="feedback" id="feedback" rows="4" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('feedback', $existingScore->feedback ?? '') }}</textarea>
                            </div>

                            <x-primary-button class="w-full justify-center py-3">
                                {{ __('Simpan Penilaian') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>