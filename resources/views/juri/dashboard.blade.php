<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel Penilaian Dewan Juri
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Daftar Tim Peserta (Lolos Verifikasi)</h3>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Tim</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status Penilaian</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($teams as $team)
                                    {{-- Cek apakah juri ini sudah menilai tim ini --}}
                                    @php $hasScored = $team->scores->isNotEmpty(); @endphp
                                    
                                    <tr class="{{ $hasScored ? 'bg-green-50' : '' }}">
                                        <td class="px-6 py-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $team->team_name }}</div>
                                            <div class="text-xs text-gray-500">{{ $team->institution }}</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{ $team->participant_type }}</td>
                                        <td class="px-6 py-4">
                                            @if($hasScored)
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Sudah Dinilai
                                                </span>
                                            @else
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                                    Belum Dinilai
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium">
                                            <a href="{{ route('juri.scoring.show', $team) }}" class="text-indigo-600 hover:text-indigo-900 font-bold">
                                                {{ $hasScored ? 'Edit Nilai' : 'Beri Nilai' }} &rarr;
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada tim yang lolos verifikasi pembayaran.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>