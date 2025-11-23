<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ParticipantsExport;

class ParticipantController extends Controller
{
    /**
     * Menampilkan daftar tim peserta.
     */
    public function index(Request $request): View
    {
        $query = Registration::with('user', 'payment');

        // Filter Pencarian (Nama Tim, Nama Ketua, Email)
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('team_name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('full_name', 'like', '%' . $searchTerm . '%')
                    ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                        $userQuery->where('email', 'like', '%' . $searchTerm . '%');
                    });
            });
        }

        // Filter Status Pembayaran
        if ($request->has('payment_status') && $request->payment_status != '') {
            $status = $request->payment_status;
            if ($status == 'paid') {
                $query->whereHas('payment', fn($q) => $q->where('status', 'Verified'));
            } elseif ($status == 'unpaid') {
                $query->where(function ($q) {
                    $q->whereDoesntHave('payment')
                        ->orWhereHas('payment', fn($subQ) => $subQ->where('status', '!=', 'Verified'));
                });
            }
        }

        $registrations = $query->latest()->paginate(15);

        return view('admin.participants.index', [
            'registrations' => $registrations
        ]);
    }

    /**
     * Menampilkan detail tim.
     */
    public function show(Registration $registration): View
    {
        return view('admin.participants.show', [
            'registration' => $registration
        ]);
    }

    /**
     * Export data ke Excel.
     */
    public function export(Request $request)
    {
        $fileName = 'data-tim-lontara-' . date('d-m-Y') . '.xlsx';
        return Excel::download(new ParticipantsExport($request), $fileName);
    }
}
