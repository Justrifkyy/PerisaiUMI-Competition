<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PaymentUploadController extends Controller
{
    /**
     * Menampilkan halaman untuk upload bukti pembayaran.
     */
    public function create(): View
    {
        // Ambil data registrasi terakhir dari user yang sedang login
        $registration = Auth::user()->registrations()->latest()->first();

        return view('user.payment', [
            'registration' => $registration,
        ]);
    }

    /**
     * Menyimpan data pembayaran dan bukti transfer.
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Validasi input
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1000',
            'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // file max 2MB
        ]);

        // 2. Ambil data registrasi terakhir user untuk dihubungkan dengan pembayaran
        $registration = Auth::user()->registrations()->latest()->first();

        // Jika tidak ada registrasi, kembalikan dengan error
        if (!$registration) {
            return redirect()->route('dashboard')->with('error', 'Anda harus melengkapi registrasi terlebih dahulu.');
        }

        // 3. Proses upload file bukti pembayaran
        $paymentProofPath = $request->file('payment_proof')->store('public/payments');

        // 4. Simpan data pembayaran ke database
        Payment::create([
            'registration_id' => $registration->id,
            'amount' => $validated['amount'],
            'payment_proof_path' => $paymentProofPath,
            'status' => 'Pending Verification', // Status awal
        ]);

        // 5. Redirect ke dashboard dengan pesan sukses
        return redirect()->route('dashboard')->with('status', 'Bukti pembayaran berhasil diunggah! Mohon tunggu verifikasi dari panitia.');
    }
}
