<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
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

        // Filter Pencarian
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

        // Filter Status Pembayaran (FIXED: Huruf kecil 'verified')
        if ($request->has('payment_status') && $request->payment_status != '') {
            $status = $request->payment_status;

            if ($status == 'paid') {
                // Perbaikan: Gunakan 'verified' (huruf kecil) sesuai database
                $query->whereHas('payment', fn($q) => $q->where('status', 'verified'));
            } elseif ($status == 'unpaid') {
                $query->where(function ($q) {
                    $q->whereDoesntHave('payment')
                        // Perbaikan: Gunakan 'verified' (huruf kecil)
                        ->orWhereHas('payment', fn($subQ) => $subQ->where('status', '!=', 'verified'));
                });
            }
        }

        $registrations = $query->latest()->paginate(15);

        return view('admin.participants.index', [
            'registrations' => $registrations
        ]);
    }

    /**
     * Menampilkan detail tim (Read).
     */
    public function show(Registration $registration): View
    {
        return view('admin.participants.show', [
            'registration' => $registration
        ]);
    }

    /**
     * Menampilkan form edit tim (Update View).
     */
    public function edit(Registration $registration): View
    {
        return view('admin.participants.edit', [
            'registration' => $registration
        ]);
    }

    /**
     * Menyimpan perubahan data tim (Update Logic).
     */
    public function update(Request $request, Registration $registration): RedirectResponse
    {
        $validated = $request->validate([
            'team_name' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'participant_type' => 'required|in:Tahap Awal,Tahap Berjalan',
            'research_field' => 'nullable|string|max:255',
        ]);

        $registration->update($validated);

        return redirect()->route('admin.participants.index')->with('success', 'Data tim berhasil diperbarui.');
    }

    /**
     * Menghapus tim beserta berkasnya (Delete).
     */
    public function destroy(Registration $registration): RedirectResponse
    {
        // 1. Hapus File Fisik dari Storage agar hemat ruang
        $files = [
            $registration->ktm_path,
            $registration->bmc_path,
            $registration->proposal_path,
            $registration->share_pamflet_path,
            $registration->twibbon_path,
            $registration->follow_medsos_path,
        ];

        foreach ($files as $file) {
            if ($file && Storage::exists($file)) {
                Storage::delete($file);
            }
        }

        // 2. Hapus Bukti Bayar jika ada
        if ($registration->payment && $registration->payment->proof_path) {
            Storage::delete($registration->payment->proof_path);
        }

        // 3. Hapus Data dari Database
        $registration->delete();

        return redirect()->route('admin.participants.index')->with('success', 'Data tim dan seluruh berkas berhasil dihapus.');
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
