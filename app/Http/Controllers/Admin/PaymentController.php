<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Mail\PaymentStatusUpdated; // Aktifkan jika mailer sudah siap
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    /**
     * Halaman 1: Menampilkan daftar pembayaran yang perlu diverifikasi ("To-Do List").
     */
    public function index(): View
    {
        // PERBAIKAN: Hapus where('status', 'pending') agar semua tampil
        // Kita urutkan agar yang 'pending' muncul paling atas, baru berdasarkan tanggal terbaru
        $allPayments = Payment::with('registration.user')
            ->orderByRaw("FIELD(status, 'pending', 'verified', 'rejected')") // Prioritaskan Pending
            ->latest()
            ->paginate(10);

        return view('admin.payments.index', ['payments' => $allPayments]);
    }

    /**
     * Halaman 2: Menampilkan detail lengkap satu pembayaran untuk ditinjau ("Workspace").
     */
    public function review(Payment $payment): View
    {
        $payment->load('registration.user');

        return view('admin.payments.review', ['payment' => $payment]);
    }

    /**
     * Aksi: Memproses keputusan (Approve/Reject) dan mengirim email.
     */
    public function process(Request $request, Payment $payment): RedirectResponse
    {
        // Validasi input dari form Admin (pastikan value di form adalah 'verified' atau 'rejected')
        $validated = $request->validate([
            'status' => ['required', Rule::in(['verified', 'rejected'])], // Huruf kecil
            'admin_notes' => 'nullable|string|max:500', // Note boleh diisi meski verified
        ]);

        // Update Database
        $payment->update([
            'status' => $validated['status'],
            'admin_notes' => $validated['admin_notes'] ?? null,
        ]);

        // Kirim Email (Opsional - Uncomment jika Mailable sudah dibuat)

        try {
            Mail::to($payment->registration->user->email)->send(new PaymentStatusUpdated($payment));
        } catch (\Exception $e) {
            // Biarkan lanjut meski email gagal
        }


        return redirect()->route('admin.payments.index')
            ->with('success', 'Status pembayaran berhasil diperbarui menjadi: ' . ucfirst($validated['status']));
    }

    /**
     * Halaman 3: Menampilkan riwayat pembayaran yang sudah diproses ("Archive").
     */
    public function history(): View
    {
        // PERBAIKAN: Gunakan status lowercase
        $processedPayments = Payment::with('registration.user')
            ->whereIn('status', ['verified', 'rejected'])
            ->latest()
            ->paginate(10);

        return view('admin.payments.history', ['payments' => $processedPayments]);
    }

    /**
     * Aksi: Menghapus data pembayaran.
     */
    public function destroy(Payment $payment): RedirectResponse
    {
        // PERBAIKAN: Nama kolom di database adalah 'proof_path', bukan 'payment_proof_path'
        if ($payment->proof_path) {
            Storage::delete($payment->proof_path);
        }

        $payment->delete();

        return redirect()->route('admin.payments.history')
            ->with('success', 'Data pembayaran berhasil dihapus.');
    }
}
