<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ParticipantsExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize, WithStyles
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        $query = Registration::with('user', 'payment');

        // Logika filter sama dengan Controller
        if ($this->request->has('search') && $this->request->search != '') {
            $searchTerm = $this->request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('team_name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('full_name', 'like', '%' . $searchTerm . '%')
                    ->orWhereHas('user', fn($uq) => $uq->where('email', 'like', '%' . $searchTerm . '%'));
            });
        }

        if ($this->request->has('payment_status') && $this->request->payment_status != '') {
            $status = $this->request->payment_status;
            if ($status == 'paid') {
                $query->whereHas('payment', fn($q) => $q->where('status', 'Verified'));
            } elseif ($status == 'unpaid') {
                $query->where(function ($q) {
                    $q->whereDoesntHave('payment')
                        ->orWhereHas('payment', fn($subQ) => $subQ->where('status', '!=', 'Verified'));
                });
            }
        }

        return $query->latest()->get();
    }

    public function headings(): array
    {
        return [
            'Nama Tim',
            'Kategori Lomba',
            'Ketua Tim',
            'Institusi',
            'No. WhatsApp',
            'Email Akun',
            'Status Pembayaran',
            'Tanggal Daftar',
            'Link Proposal Bisnis', // Kolom Baru
            'Link BMC',             // Kolom Baru
            'Link Folder Bukti',    // Kolom Baru
        ];
    }

    public function map($registration): array
    {
        // Helper untuk membuat full URL
        $proposalUrl = $registration->proposal_path ? url(Storage::url($registration->proposal_path)) : '-';
        $bmcUrl = $registration->bmc_path ? url(Storage::url($registration->bmc_path)) : '-';

        // Kita ambil salah satu bukti saja sebagai referensi
        $proofUrl = $registration->ktm_path ? url(Storage::url($registration->ktm_path)) : '-';

        return [
            $registration->team_name,
            $registration->participant_type,
            $registration->full_name,
            $registration->institution,
            "'" . $registration->phone_number, // Tanda kutip agar Excel membacanya sebagai teks (bukan angka ilmiah)
            $registration->user->email,
            $registration->payment?->status == 'Verified' ? 'Lunas' : 'Belum Lunas',
            $registration->created_at->format('d-m-Y H:i'),
            $proposalUrl,
            $bmcUrl,
            $proofUrl
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]], // Header Bold
        ];
    }
}
