<?php

namespace App\Http\Controllers\Juri;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuriController extends Controller
{
    public function index()
    {
        // PERBAIKAN: Menggunakan nama variabel '$teams' agar sesuai dengan View
        $teams = Registration::with(['payment', 'scores' => function ($q) {
            $q->where('user_id', Auth::id());
        }])
            ->whereHas('payment', function ($q) {
                $q->where('status', 'verified');
            })
            ->latest()
            ->paginate(10);

        return view('juri.dashboard', compact('teams'));
    }

    public function show($id)
    {
        $registration = Registration::findOrFail($id);

        // Ambil nilai juri ini jika sudah ada
        $existingScore = Score::where('registration_id', $id)
            ->where('user_id', Auth::id())
            ->first();

        // Ambil kriteria penilaian sesuai kategori lomba
        $criteria = $this->getCriteria($registration->participant_type);

        return view('juri.scoring', compact('registration', 'criteria', 'existingScore'));
    }

    public function store(Request $request, $id)
    {
        $registration = Registration::findOrFail($id);
        $criteria = $this->getCriteria($registration->participant_type);

        // 1. Validasi Input Dinamis
        $rules = [];
        foreach ($criteria as $key => $item) {
            $rules["criteria.{$key}"] = 'required|numeric|min:0|max:100';
        }
        $rules['feedback'] = 'nullable|string';

        $request->validate($rules);

        // 2. Hitung Total Skor Berdasarkan Bobot
        $totalScore = 0;
        $inputScores = $request->input('criteria');

        foreach ($criteria as $key => $item) {
            $score = $inputScores[$key];
            $weight = $item['weight'];
            $totalScore += ($score * ($weight / 100));
        }

        // 3. Simpan ke Database
        Score::updateOrCreate(
            [
                'registration_id' => $id,
                'user_id' => Auth::id(),
            ],
            [
                'criteria_scores' => $inputScores,
                'total_score' => $totalScore,
                'feedback' => $request->input('feedback'),
            ]
        );

        return redirect()->route('juri.dashboard')->with('status', 'Penilaian berhasil disimpan!');
    }

    // Helper: Definisi Kriteria & Bobot
    private function getCriteria($type)
    {
        if ($type == 'Tahap Awal') {
            return [
                'latar_belakang' => ['label' => 'Latar Belakang Masalah', 'weight' => 10],
                'tujuan_bisnis' => ['label' => 'Tujuan Bisnis (Noble Purpose)', 'weight' => 10],
                'deskripsi_produk' => ['label' => 'Deskripsi Produk/Karya', 'weight' => 20],
                'rencana_pemasaran' => ['label' => 'Rencana Pemasaran', 'weight' => 20],
                'proyeksi_keuangan' => ['label' => 'Proyeksi Keuangan', 'weight' => 20],
                'analisis_risiko' => ['label' => 'Analisis Risiko (SWOT)', 'weight' => 10],
                'komposisi_tim' => ['label' => 'Komposisi Tim', 'weight' => 5],
                'orisinalitas' => ['label' => 'Orisinalitas Ide', 'weight' => 5],
            ];
        } else {
            // Tahap Berjalan
            return [
                'manajerial' => ['label' => 'Manajerial & Kewirausahaan', 'weight' => 15],
                'inovasi_teknologi' => ['label' => 'Inovasi & Teknologi', 'weight' => 50],
                'lingkungan' => ['label' => 'Dampak Lingkungan (SDGs)', 'weight' => 10],
                'tenaga_kerja' => ['label' => 'Penyerapan Tenaga Kerja', 'weight' => 10],
                'pertumbuhan' => ['label' => 'Potensi Pertumbuhan', 'weight' => 15],
            ];
        }
    }
}
