<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RecapExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles
{
    public function collection()
    {
        // Ambil data tim yang sudah bayar
        return Registration::whereHas('payment', fn($q) => $q->where('status', 'Verified'))
            ->with('scores')
            ->get()
            ->map(function ($team) {
                // Hitung rata-rata skor (Logika sama dengan Controller)
                $totalScore = 0;
                $count = $team->scores->count();

                foreach ($team->scores as $score) {
                    $totalScore += ($score->score_bmc + $score->score_idea + $score->score_impact + $score->score_visual);
                }

                $team->final_score = $count > 0 ? ($totalScore / $count) : 0;
                $team->jury_count = $count;

                return $team;
            })
            ->sortByDesc('final_score'); // Urutkan dari yang tertinggi
    }

    public function headings(): array
    {
        return [
            'Peringkat', // Kita akan isi manual di map()
            'Nama Tim',
            'Kategori',
            'Institusi',
            'Ketua Tim',
            'Jumlah Juri Menilai',
            'Nilai Rata-Rata (0-400)',
        ];
    }

    // Variabel bantu untuk penomoran peringkat
    private $rank = 0;

    public function map($team): array
    {
        $this->rank++;

        return [
            $this->rank,
            $team->team_name,
            $team->participant_type,
            $team->institution,
            $team->full_name,
            $team->jury_count . ' Orang',
            number_format($team->final_score, 2),
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style baris pertama (Header) jadi Bold
            1 => ['font' => ['bold' => true]],
        ];
    }
}
