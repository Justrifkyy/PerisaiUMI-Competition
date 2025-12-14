@php
    $rowClass = '';
    // Highlight Top 3
    if ($rank == 1) $rowClass = 'bg-yellow-50/60 border-l-4 border-yellow-400';
    elseif ($rank == 2) $rowClass = 'bg-gray-50/60 border-l-4 border-gray-300';
    elseif ($rank == 3) $rowClass = 'bg-orange-50/60 border-l-4 border-orange-300';
    else $rowClass = 'hover:bg-gray-50 border-l-4 border-transparent';
@endphp

<tr class="{{ $rowClass }} transition-colors duration-150">
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="flex items-center justify-center w-10 h-10 rounded-full font-black text-lg shadow-sm
            {{ $rank == 1 ? 'bg-yellow-100 text-yellow-600' : '' }}
            {{ $rank == 2 ? 'bg-gray-200 text-gray-600' : '' }}
            {{ $rank == 3 ? 'bg-orange-100 text-orange-600' : '' }}
            {{ $rank > 3 ? 'bg-white border border-gray-200 text-gray-500 text-sm' : '' }}">
            
            @if($rank == 1) 🥇
            @elseif($rank == 2) 🥈
            @elseif($rank == 3) 🥉
            @else #{{ $rank }}
            @endif
        </div>
    </td>

    <td class="px-6 py-4">
        <div class="flex flex-col">
            <span class="text-base font-bold text-gray-900">{{ $team->team_name }}</span>
            <span class="text-xs font-medium text-gray-500 flex items-center gap-1 mt-0.5">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                {{ $team->institution }}
            </span>
        </div>
    </td>

    <td class="px-6 py-4 whitespace-nowrap text-center">
        @if($team->jury_count > 0)
            <div class="inline-flex items-center px-3 py-1 bg-indigo-50 border border-indigo-200 rounded-lg text-indigo-700 text-xs font-bold">
                <svg class="w-3 h-3 mr-1.5" fill="currentColor" viewBox="0 0 20 20"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                {{ $team->jury_count }} Juri Menilai
            </div>
        @else
            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-500 border border-gray-200">
                Belum Dinilai
            </span>
        @endif
    </td>

    <td class="px-6 py-4 whitespace-nowrap text-right">
        @if($team->jury_count > 0)
            <div class="flex flex-col items-end">
                <span class="text-2xl font-black text-gray-900 tracking-tight">
                    {{ number_format($team->final_score, 2) }}
                </span>
                <span class="text-[10px] uppercase font-bold text-gray-400">Poin Rata-rata</span>
            </div>
        @else
            <span class="text-2xl font-black text-gray-300">-</span>
        @endif
    </td>
</tr>