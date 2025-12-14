<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse; // Import RedirectResponse

class RegistrationStatusController extends Controller
{
    /**
     * Menampilkan halaman status pendaftaran.
     */
    public function index()
    {
        $user = Auth::user();
        $registration = $user->registration;

        // ... (cek registration & payment null sama seperti sebelumnya) ...
        if (!$registration) return redirect()->route('registration.create');
        if (!$registration->payment) return redirect()->route('payment.create');

        // Jika SUDAH VERIFIED
        if ($registration->payment->status == 'verified') {
            return redirect()->route('registration.create');
        }

        // Jika PENDING atau REJECTED, tampilkan halaman status
        // Di halaman status (blade), kita sudah sediakan tombol "Upload Ulang" 
        // yang mengarah ke route('payment.create')
        return view('user.registration-status', [
            'registration' => $registration,
            'payment' => $registration->payment
        ]);
    }
}
