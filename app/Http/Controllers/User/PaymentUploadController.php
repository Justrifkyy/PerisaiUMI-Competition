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
    public function create()
    {
        $user = Auth::user();
        $registration = $user->registration;

        // 1. Cek: Belum daftar? Tendang ke form pendaftaran
        if (!$registration) {
            return redirect()->route('registration.create');
        }

        // 2. Cek: Sudah punya pembayaran?
        if ($registration->payment) {
            // Jika statusnya PENDING, lempar ke halaman status (karena sedang dicek)
            if ($registration->payment->status == 'pending') {
                return redirect()->route('registration.status');
            }

            // Jika statusnya VERIFIED, lempar ke halaman sukses
            if ($registration->payment->status == 'verified') {
                return redirect()->route('registration.create'); // Ke halaman complete
            }

            // Jika statusnya REJECTED, **BIARKAN DIA AKSES HALAMAN INI** untuk upload ulang
        }

        // 3. Tampilkan form upload
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

        // 2. Ambil data registrasi (Tunggal)
        $registration = Auth::user()->registration;

        // Jika tidak ada registrasi, kembalikan dengan error
        if (!$registration) {
            return redirect()->route('dashboard')->with('error', 'Anda harus melengkapi registrasi terlebih dahulu.');
        }

        // 3. Proses upload file bukti pembayaran
        // Pastikan folder public/payments ada atau storage link sudah dibuat
        $paymentProofPath = $request->file('payment_proof')->store('payments', 'public');

        // 4. Simpan data pembayaran ke database
        // Gunakan updateOrCreate untuk menghindari duplikasi jika user upload ulang (revisi)
        Payment::updateOrCreate(
            ['registration_id' => $registration->id],
            [
                'amount' => $validated['amount'],
                'proof_path' => $paymentProofPath,
                'status' => 'pending', // Konsisten huruf kecil
            ]
        );

        // PENTING: Setelah upload, arahkan ke Halaman STATUS, bukan dashboard/payment lagi
        return redirect()->route('registration.status')->with('status', 'Bukti pembayaran berhasil diunggah! Mohon tunggu verifikasi.');
    }
}
