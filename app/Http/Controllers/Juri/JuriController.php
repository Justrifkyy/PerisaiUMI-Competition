<?php

namespace App\Http\Controllers\Juri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class JuriController extends Controller
{
    /**
     * Dashboard Juri: Menampilkan daftar tim yang SIAP dinilai.
     */
    public function index()
    {
        // Ambil tim yang pembayarannya SUDAH VERIFIED
        // Eager load 'scores' untuk mengecek apakah juri ini sudah menilai tim tersebut
        $teams = Registration::whereHas('payment', function ($q) {
            $q->where('status', 'Verified');
        })->with(['scores' => function ($q) {
            $q->where('user_id', Auth::id());
        }])->latest()->get();

        return view('juri.dashboard', compact('teams'));
    }

    /**
     * Halaman Penilaian: Form untuk menilai satu tim.
     */
    public function show(Registration $registration)
    {
        // Cek apakah juri sudah pernah menilai tim ini sebelumnya
        $existingScore = Score::where('user_id', Auth::id())
            ->where('registration_id', $registration->id)
            ->first();

        return view('juri.scoring', compact('registration', 'existingScore'));
    }

    /**
     * Simpan Nilai ke Database.
     */
    public function store(Request $request, Registration $registration)
    {
        $request->validate([
            'score_bmc' => 'required|integer|min:0|max:100',
            'score_idea' => 'required|integer|min:0|max:100',
            'score_impact' => 'required|integer|min:0|max:100',
            'score_visual' => 'required|integer|min:0|max:100',
            'feedback' => 'nullable|string',
        ]);

        // Gunakan updateOrCreate agar juri bisa mengedit nilai mereka sendiri
        Score::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'registration_id' => $registration->id,
            ],
            [
                'score_bmc' => $request->score_bmc,
                'score_idea' => $request->score_idea,
                'score_impact' => $request->score_impact,
                'score_visual' => $request->score_visual,
                'feedback' => $request->feedback,
            ]
        );

        return redirect()->route('juri.dashboard')->with('success', 'Penilaian untuk tim ' . $registration->team_name . ' berhasil disimpan.');
    }
}
