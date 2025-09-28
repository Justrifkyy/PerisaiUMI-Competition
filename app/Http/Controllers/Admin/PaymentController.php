<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use App\Mail\PaymentStatusUpdated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    /**
     * Halaman 1: Menampilkan daftar pembayaran yang perlu diverifikasi ("To-Do List").
     */
    public function index(): View
    {
        $pendingPayments = Payment::with('registration.user')
            ->where('status', 'Pending Verification')
            ->latest()
            ->get();

        return view('admin.payments.index', ['payments' => $pendingPayments]);
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
        $validated = $request->validate([
            'status' => ['required', Rule::in(['Verified', 'Rejected'])],
            'admin_notes' => 'required_if:status,Rejected|nullable|string|max:500',
        ]);

        $payment->update([
            'status' => $validated['status'],
            'admin_notes' => $validated['admin_notes'] ?? null,
        ]);

        Mail::to($payment->registration->user->email)->send(new PaymentStatusUpdated($payment));

        // Redirect ke route dengan nama yang benar
        return redirect()->route('admin.payments.index')->with('success', 'Konfirmasi pembayaran untuk ' . $payment->registration->full_name . ' telah berhasil dikirim.'); // <-- DIUBAH
    }

    /**
     * Halaman 3: Menampilkan riwayat pembayaran yang sudah diproses ("Archive").
     */
    public function history(): View
    {
        $processedPayments = Payment::with('registration.user')
            ->whereIn('status', ['Verified', 'Rejected'])
            ->latest()
            ->get();

        return view('admin.payments.history', ['payments' => $processedPayments]);
    }

    /**
     * Aksi: Menghapus data pembayaran.
     */
    public function destroy(Payment $payment): RedirectResponse
    {
        Storage::delete($payment->payment_proof_path);

        $payment->delete();

        // Redirect ke route dengan nama yang benar
        return redirect()->route('admin.payments.history')->with('success', 'Data pembayaran berhasil dihapus.'); // <-- DIUBAH
    }
}
