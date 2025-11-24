<x-admin-layout>
    <x-slot name="header">
        Rekapitulasi Nilai & Peringkat
    </x-slot>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Leaderboard Lomba</h2>
            <a href="{{ route('admin.recap.export') }}" class="px-4 py-2 bg-green-600 text-white font-semibold rounded hover:bg-green-700 shadow">
    📥 Ekspor Data Nilai
            </a>    
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">Peringkat</th>
                        <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">Nama Tim</th>
                        <th class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">Kategori</th>
                        <th class="px-6 py-3 text-center text-xs font-bold uppercase tracking-wider">Juri Menilai</th>
                        <th class="px-6 py-3 text-right text-xs font-bold uppercase tracking-wider">Nilai Rata-Rata</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @php $rank = 1; @endphp
                    @forelse($teams as $team)
                        {{-- Highlight 3 Besar --}}
                        <tr class="{{ $rank <= 3 ? 'bg-yellow-50' : '' }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    @if($rank == 1)
                                        <span class="text-2xl mr-2">🥇</span>
                                    @elseif($rank == 2)
                                        <span class="text-2xl mr-2">🥈</span>
                                    @elseif($rank == 3)
                                        <span class="text-2xl mr-2">🥉</span>
                                    @else
                                        <span class="text-gray-500 font-bold ml-2">#{{ $rank }}</span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-gray-900">{{ $team->team_name }}</div>
                                <div class="text-xs text-gray-500">{{ $team->institution }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $team->participant_type }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $team->jury_count > 0 ? 'bg-blue-100 text-blue-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $team->jury_count }} Juri
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                                <span class="text-lg font-bold text-indigo-600">
                                    {{ number_format($team->final_score, 1) }}
                                </span>
                                <span class="text-xs text-gray-400 block">/ 400 poin</span>
                            </td>
                        </tr>
                        @php $rank++; @endphp
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada data penilaian.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>