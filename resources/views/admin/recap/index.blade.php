<x-admin-layout>
    <x-slot name="header">
        Rekapitulasi & Peringkat Juara
    </x-slot>

    <div class="space-y-12">
        
        <div class="flex flex-col md:flex-row justify-between items-center bg-white p-6 rounded-xl shadow-sm border border-gray-100">
            <div>
                <h2 class="text-2xl font-black text-gray-800">🏆 Leaderboard Kompetisi</h2>
                <p class="text-gray-500 text-sm mt-1">Peringkat dihitung berdasarkan rata-rata nilai dari juri yang sudah masuk.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="{{ route('admin.recap.export') }}" class="inline-flex items-center px-5 py-2.5 bg-green-600 text-white font-bold rounded-xl hover:bg-green-700 shadow-lg transition-all">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Ekspor Data
                </a>    
            </div>
        </div>

        <div class="space-y-4">
            <div class="flex items-center gap-3">
                <span class="w-3 h-8 bg-green-500 rounded-full"></span>
                <h3 class="text-xl font-black text-gray-800 uppercase tracking-wide">Kategori Tahap Awal (Early Stage)</h3>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-green-100">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-green-50/50">
                                <th class="px-6 py-4 text-left text-xs font-bold text-green-700 uppercase w-20">Rank</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-green-700 uppercase">Tim & Instansi</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-green-700 uppercase">Progres Penilaian</th>
                                <th class="px-6 py-4 text-right text-xs font-bold text-green-700 uppercase">Nilai Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @php $rank = 1; @endphp
                            @forelse($earlyTeams as $team)
                                @include('admin.recap.partials.row-table', ['team' => $team, 'rank' => $rank])
                                @php $rank++; @endphp
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                                        Belum ada peserta Early Stage yang dinilai.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="space-y-4">
            <div class="flex items-center gap-3">
                <span class="w-3 h-8 bg-blue-500 rounded-full"></span>
                <h3 class="text-xl font-black text-gray-800 uppercase tracking-wide">Kategori Tahap Berjalan (Growth Stage)</h3>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-blue-100">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-blue-50/50">
                                <th class="px-6 py-4 text-left text-xs font-bold text-blue-700 uppercase w-20">Rank</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-blue-700 uppercase">Tim & Instansi</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-blue-700 uppercase">Progres Penilaian</th>
                                <th class="px-6 py-4 text-right text-xs font-bold text-blue-700 uppercase">Nilai Rata-Rata</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @php $rank = 1; @endphp
                            @forelse($growthTeams as $team)
                                @include('admin.recap.partials.row-table', ['team' => $team, 'rank' => $rank])
                                @php $rank++; @endphp
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-gray-500">
                                        Belum ada peserta Growth Stage yang dinilai.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>