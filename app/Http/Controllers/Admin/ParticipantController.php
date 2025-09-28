<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Exports\ParticipantsExport;
use Maatwebsite\Excel\Facades\Excel;

class ParticipantController extends Controller
{
    /**
     * Menampilkan daftar semua peserta yang sudah mendaftar.
     */
    public function index(Request $request): View
    {
        // Mulai query ke model Registration
        $query = Registration::with('user', 'payment');

        // 1. Logika untuk Pencarian (Search)
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('full_name', 'like', '%' . $searchTerm . '%')
                    ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                        $userQuery->where('email', 'like', '%' . $searchTerm . '%');
                    });
            });
        }

        // 2. Logika untuk Filter Status Pembayaran
        if ($request->has('payment_status') && $request->payment_status != '') {
            $status = $request->payment_status;
            if ($status == 'paid') {
                $query->whereHas('payment', fn($q) => $q->where('status', 'Verified'));
            } elseif ($status == 'unpaid') {
                // Logika: Punya registrasi tapi tidak punya pembayaran yang terverifikasi
                $query->where(function ($q) {
                    $q->whereDoesntHave('payment')
                        ->orWhereHas('payment', fn($subQ) => $subQ->where('status', '!=', 'Verified'));
                });
            }
        }

        // Eksekusi query dan ambil hasilnya
        $registrations = $query->latest()->paginate(15); // Menggunakan paginate untuk data yang banyak

        return view('admin.participants.index', [
            'registrations' => $registrations
        ]);
    }


    /**
     * Menampilkan detail dari satu peserta.
     */
    public function show(Registration $registration): View
    {
        // Laravel otomatis akan mencari data registration berdasarkan ID di URL
        return view('admin.participants.show', [
            'registration' => $registration
        ]);
    }

    public function export(Request $request)
    {
        // Menentukan nama file berdasarkan tanggal
        $fileName = 'peserta-lontara-2025-' . date('d-m-Y') . '.xlsx';

        // Memanggil class Export dan mengunduh file
        return Excel::download(new ParticipantsExport($request), $fileName);
    }
}
