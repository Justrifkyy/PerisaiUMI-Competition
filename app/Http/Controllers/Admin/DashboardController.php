<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Registration; // <-- Import Model
use App\Models\Submission;   // <-- Import Model
use App\Models\Payment;      // <-- Import Model

class DashboardController extends Controller
{
    public function index(): View
    {
        // 1. Hitung total peserta yang sudah melengkapi registrasi
        $totalParticipants = Registration::count();

        // 2. Hitung total paper yang sudah di-submit
        $totalSubmissions = Submission::count();

        // 3. Hitung total pembayaran yang masih menunggu verifikasi
        $pendingPayments = Payment::where('status', 'Pending Verification')->count();

        // 4. Kirim semua data ke view
        return view('admin.dashboard', [
            'totalParticipants' => $totalParticipants,
            'totalSubmissions' => $totalSubmissions,
            'pendingPayments' => $pendingPayments,
        ]);
    }
}
