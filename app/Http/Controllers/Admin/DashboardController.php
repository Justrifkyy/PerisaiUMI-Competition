<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data registrasi beserta relasinya (User, Payment, Anggota Tim)
        $registrations = Registration::with(['user', 'payment', 'teamMembers'])
            ->latest()
            ->paginate(10);

        return view('admin.dashboard', compact('registrations'));
    }

    // Method baru untuk melihat detail lengkap satu tim
    public function show($id)
    {
        $registration = Registration::with(['user', 'payment', 'teamMembers'])->findOrFail($id);

        return view('admin.registrations.show', compact('registration'));
    }

    // Method untuk verifikasi pembayaran (jika belum ada)
    public function verifyPayment($id)
    {
        $registration = Registration::findOrFail($id);

        if ($registration->payment) {
            $registration->payment->update(['status' => 'verified']);
            // Opsional: Kirim email notifikasi ke peserta
        }

        return redirect()->back()->with('success', 'Pembayaran berhasil diverifikasi!');
    }
}
