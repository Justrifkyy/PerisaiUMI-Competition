<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; // <-- TAMBAHKAN IMPORT INI
use App\Exports\RecapExport;

class RecapController extends Controller
{
    /**
     * Menampilkan Papan Skor / Leaderboard.
     */
    public function index()
    {
        // 1. Ambil semua tim yang sudah bayar (Verified) beserta nilai-nilainya
        $teams = Registration::whereHas('payment', fn($q) => $q->where('status', 'Verified'))
            ->with('scores.juri') // Load data skor dan juri yang menilai
            ->get()
            ->map(function ($team) {
                // 2. Hitung Skor Total dari setiap Juri, lalu cari Rata-ratanya
                $totalScoreAllJuries = 0;
                $juryCount = $team->scores->count();

                foreach ($team->scores as $score) {
                    // Total skor per juri (Skala 400 jika masing-masing max 100)
                    // Atau sesuaikan bobot jika perlu. Di sini kita jumlah murni.
                    $totalScoreAllJuries += ($score->score_bmc + $score->score_idea + $score->score_impact + $score->score_visual);
                }

                // 3. Hitung Rata-rata Akhir
                // Jika ada 3 juri, total dibagi 3.
                $team->final_score = $juryCount > 0 ? ($totalScoreAllJuries / $juryCount) : 0;
                $team->jury_count = $juryCount;

                return $team;
            })
            // 4. Urutkan dari Nilai Tertinggi (Juara 1 di atas)
            ->sortByDesc('final_score');

        return view('admin.recap.index', compact('teams'));
    }

    public function export()
    {
        $fileName = 'rekap-nilai-lontara-' . date('d-m-Y') . '.xlsx';
        return Excel::download(new RecapExport, $fileName);
    }
}
