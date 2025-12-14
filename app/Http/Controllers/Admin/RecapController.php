<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel; // <-- TAMBAHKAN IMPORT INI
use App\Exports\RecapExport;
use Illuminate\View\View;

class RecapController extends Controller
{
    /**
     * Menampilkan Papan Skor / Leaderboard.
     */
    public function index(): View
    {
        // Fungsi helper untuk mengambil dan mengolah data tim per kategori
        $getRankedTeams = function ($category) {
            return Registration::with('scores') // Ambil relasi nilai
                ->where('participant_type', $category)
                // Hanya tim yang sudah bayar lunas yang masuk leaderboard
                ->whereHas('payment', function ($q) {
                    $q->where('status', 'verified');
                })
                ->get()
                ->map(function ($team) {
                    // LOGIKA PENILAIAN DINAMIS:
                    // Hitung rata-rata hanya dari juri yang SUDAH menilai.
                    // Jika ada 4 juri, tapi baru 1 yang nilai, pembaginya adalah 1.

                    $totalScore = $team->scores->sum('total_score'); // Total poin masuk
                    $juryCount = $team->scores->count(); // Jumlah juri yang sudah input

                    // Hindari division by zero
                    $finalScore = $juryCount > 0 ? ($totalScore / $juryCount) : 0;

                    $team->final_score = $finalScore;
                    $team->jury_count = $juryCount;

                    return $team;
                })
                // Urutkan dari nilai tertinggi (Desc)
                ->sortByDesc('final_score')
                ->values();
        };

        // Pisahkan data
        $earlyTeams = $getRankedTeams('Tahap Awal');
        $growthTeams = $getRankedTeams('Tahap Berjalan');

        return view('admin.recap.index', compact('earlyTeams', 'growthTeams'));
    }

    public function export()
    {
        $fileName = 'rekap-nilai-lontara-' . date('d-m-Y') . '.xlsx';
        return Excel::download(new RecapExport, $fileName);
    }
}
