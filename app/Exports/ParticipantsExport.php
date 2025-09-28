<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Http\Request;

class ParticipantsExport implements FromCollection, WithHeadings, WithMapping
{
    protected $request;

    // Terima request agar bisa filter data yang diekspor
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Logika query ini sama persis dengan di ParticipantController
        $query = Registration::with('user', 'payment');

        if ($this->request->has('search') && $this->request->search != '') {
            $searchTerm = $this->request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('full_name', 'like', '%' . $searchTerm . '%')
                    ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                        $userQuery->where('email', 'like', '%' . $searchTerm . '%');
                    });
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

    /**
     * Mendefinisikan judul kolom di file Excel.
     */
    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'Email',
            'Institusi',
            'Jabatan',
            'Nomor Telepon',
            'Jenis Peserta',
            'Status Pembayaran',
            'Tanggal Daftar',
        ];
    }

    /**
     * Memetakan data dari collection ke format baris Excel.
     */
    public function map($registration): array
    {
        return [
            $registration->full_name,
            $registration->user->email,
            $registration->institution,
            $registration->position,
            $registration->phone_number,
            $registration->participant_type,
            $registration->payment?->status == 'Verified' ? 'Lunas' : 'Belum Lunas',
            $registration->created_at->format('d-m-Y'),
        ];
    }
}
