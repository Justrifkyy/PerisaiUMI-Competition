<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Submission;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class SubmissionController extends Controller
{
    /**
     * Menampilkan form submission paper dan daftar paper yang sudah di-submit.
     */
    public function create(): View
    {
        $submissions = Auth::user()->submissions()->latest()->get();

        return view('user.submission', [
            'submissions' => $submissions
        ]);
    }

    /**
     * Menyimpan data submission paper baru.
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Validasi
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'authors' => 'required|string|max:255',
            'topic' => 'required|string|max:255',
            'paper' => 'required|file|mimes:doc,docx,pdf|max:5120', // file max 5MB
        ]);

        // 2. Proses upload file paper
        $paperPath = $request->file('paper')->store('public/papers');

        // 3. Simpan data ke database
        Submission::create([
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'authors' => $validated['authors'],
            'topic' => $validated['topic'],
            'paper_path' => $paperPath,
            'status' => 'Submitted',
        ]);

        // 4. Redirect ke dashboard
        return redirect()->route('dashboard')->with('status', 'Paper berhasil di-submit!');
    }
}
