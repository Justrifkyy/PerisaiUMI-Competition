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
    public function store(Request $request): RedirectResponse
    {
        // ... (seluruh kode di dalam method store() Anda tetap sama persis)
        // 1. Validasi semua input
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'participant_type' => 'required|in:Presenter,Participant',
            'research_field' => 'nullable|string|max:255',
            'identity_card' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'cv' => 'nullable|file|mimes:pdf|max:2048',
            'package_choice' => 'required|string',
            'is_present' => 'accepted',
            'agree_terms' => 'accepted',
        ]);

        // 2. Proses upload file
        $identityCardPath = $request->file('identity_card')->store('public/identities');
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('public/cvs');
        }

        // 3. Simpan data ke database
        Registration::create([
            'user_id' => Auth::id(),
            'full_name' => $validated['full_name'],
            'institution' => $validated['institution'],
            'position' => $validated['position'],
            'phone_number' => $validated['phone_number'],
            'participant_type' => $validated['participant_type'],
            'research_field' => $validated['research_field'],
            'identity_card_path' => $identityCardPath,
            'cv_path' => $cvPath,
            'package_choice' => $validated['package_choice'],
            'is_present' => true,
            'agree_terms' => true,
        ]);

        // 4. Redirect ke halaman pembayaran
        return redirect()->route('payment.create')->with('status', 'Registrasi berhasil! Silakan lanjutkan ke tahap pembayaran.');
    }
}
