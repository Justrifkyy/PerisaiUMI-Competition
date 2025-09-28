<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail; 
use App\Mail\PaperStatusUpdated;

class PaperController extends Controller
{
    /**
     * Menampilkan daftar semua paper yang masuk.
     */
    public function index(): View
    {
        $submissions = Submission::with('user')->latest()->get();

        return view('admin.papers.index', [
            'submissions' => $submissions
        ]);
    }

    /**
     * Mengupdate status sebuah paper.
     */
    public function updateStatus(Request $request, Submission $submission): RedirectResponse
    {
        // Validasi input
        $validated = $request->validate([
            'status' => [
                'required',
                Rule::in(['Submitted', 'Under Review', 'Accepted', 'Rejected', 'Revision Needed']),
            ],
            // Catatan wajib diisi jika statusnya 'Rejected' atau 'Revision Needed'
            'admin_notes' => 'required_if:status,Rejected,Revision Needed|nullable|string',
        ]);

        // Update status dan catatan
        $submission->update([
            'status' => $validated['status'],
            'admin_notes' => $validated['admin_notes'],
        ]);

        // Kirim email notifikasi
        Mail::to($submission->user->email)->send(new PaperStatusUpdated($submission));

        return redirect()->route('admin.papers.index')->with('success', 'Status paper berhasil diperbarui dan notifikasi email telah dikirim.');
    }
}
