<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Submission; // Import Submission
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    /**
     * Menampilkan halaman yang sesuai berdasarkan status pendaftaran user.
     * Ini adalah "pintu gerbang" utama bagi user yang sudah login.
     */
    public function create(): View|RedirectResponse
    {
        $user = Auth::user();
        $registration = $user->registrations()->with('payment')->first();

        // KASUS 1: User belum pernah mendaftar sama sekali.
        if (!$registration) {
            // Tampilkan form pendaftaran kosong.
            return view('user.registration-form');
        }

        // KASUS 2: User sudah mendaftar, tapi pembayaran belum LUNAS.
        if (!$registration->payment || $registration->payment->status !== 'Verified') {
            // Paksa user ke halaman pembayaran. Tidak boleh isi form lagi.
            return redirect()->route('payment.create')->with('info', 'Anda sudah terdaftar. Silakan selesaikan pembayaran Anda.');
        }

        // KASUS 3: User sudah mendaftar DAN sudah LUNAS.
        // Tampilkan halaman "Selamat Datang" dan form paper jika dia presenter.
        $submissions = collect(); // Default collection kosong
        if ($registration->participant_type == 'Presenter') {
            $submissions = $user->submissions()->latest()->get();
        }

        return view('user.registration-complete', [
            'registration' => $registration,
            'submissions' => $submissions,
        ]);
    }

    /**
     * Menyimpan data dari form registrasi konferensi.
     * Logika ini tidak berubah.
     */
    // app/Http/Controllers/User/RegistrationController.php

    public function store(Request $request): RedirectResponse
    {
        // 1. Validasi Input Sesuai Guidebook
        $validated = $request->validate([
            // Data Tim
            'team_name' => 'required|string|max:255',
            'full_name' => 'required|string|max:255', // Ketua Tim
            'institution' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'participant_type' => 'required|in:Tahap Awal,Tahap Berjalan', // Kategori Lomba
            'research_field' => 'nullable|string|max:255', // Subtema/Bidang (Opsional)

            // Berkas Lomba (Wajib PDF/Gambar)
            'ktm' => 'required|file|mimes:pdf|max:5120', // Scan KTM Gabungan
            'bmc' => 'required|file|mimes:pdf|max:10240', // Business Model Canvas
            'proposal' => 'required|file|mimes:pdf|max:15360', // Proposal Bisnis

            // Bukti Persyaratan (Gambar)
            'share_pamflet' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'twibbon' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'follow_medsos' => 'required|file|mimes:jpg,jpeg,png|max:5120', // Bisa gabungan screenshot

            'package_choice' => 'required|string', // Paket (Lomba/Expo)
            'is_present' => 'accepted',
            'agree_terms' => 'accepted',
        ]);

        // 2. Fungsi Helper untuk Upload File
        // Biar kodenya rapi, kita upload satu per satu
        $ktmPath = $request->file('ktm')->store('submissions/identities', 'public');
        $bmcPath = $request->file('bmc')->store('submissions/docs', 'public');
        $proposalPath = $request->file('proposal')->store('submissions/docs', 'public');
        $sharePath = $request->file('share_pamflet')->store('submissions/proofs', 'public');
        $twibbonPath = $request->file('twibbon')->store('submissions/proofs', 'public');
        $followPath = $request->file('follow_medsos')->store('submissions/proofs', 'public');

        // 3. Simpan ke Database
        Registration::create([
            'user_id' => Auth::id(),
            'team_name' => $validated['team_name'],
            'full_name' => $validated['full_name'],
            'institution' => $validated['institution'],
            // 'position' => 'Ketua Tim', // Default otomatis
            'phone_number' => $validated['phone_number'],
            'participant_type' => $validated['participant_type'],
            'research_field' => $validated['research_field'],

            // Simpan Path File
            'ktm_path' => $ktmPath,
            'bmc_path' => $bmcPath,
            'proposal_path' => $proposalPath,
            'share_pamflet_path' => $sharePath,
            'twibbon_path' => $twibbonPath,
            'follow_medsos_path' => $followPath,

            'package_choice' => $validated['package_choice'],
            'is_present' => true,
            'agree_terms' => true,
        ]);

        // 4. Redirect ke Pembayaran
        return redirect()->route('payment.create')->with('status', 'Pendaftaran tim berhasil! Berkas telah diterima. Silakan lanjutkan ke pembayaran.');
    }
}
