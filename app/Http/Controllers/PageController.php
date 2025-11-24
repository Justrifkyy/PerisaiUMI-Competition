<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Setting;
use App\Models\Speaker;
use App\Models\Committee; // <-- Tambahkan ini

class PageController extends Controller
{
    /**
     * Menampilkan halaman Home.
     */
    public function home(): View
    {
        $conferenceStartDate = Setting::where('key', 'conference_starts_date')->value('value');

        // GANTI DATA DUMMY DENGAN QUERY KE DATABASE
        $speakers = Speaker::latest()->get();

        return view('pages.home', [
            'conferenceStartDate' => $conferenceStartDate,
            'speakers' => $speakers
        ]);
    }

    /**
     * Menampilkan halaman About.
     */
    public function about(): View
    {
        // Ambil data panitia dari database
        $committee = Committee::all();

        return view('pages.about', ['committee' => $committee]);
    }

    /**
     * Menampilkan halaman Important Dates.
     */
    public function importantDates(): View
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('pages.important-dates', compact('settings'));
    }

    /**
     * Menampilkan halaman Call For Paper.
     */
    public function callForPaper(): View
    {
        // Kita tidak butuh data topik lagi karena kontennya sudah spesifik di View
        return view('pages.call-for-paper');
    }

    /**
     * Menampilkan halaman Submission Info (peraturan, template, dll).
     */
    public function submissionInfo(): View
    {
        // Siapkan data untuk file template
        // Path ini mengasumsikan Anda akan meletakkan file template di folder `public/templates/`
        $templates = [
            [
                'name' => 'Template Jurnal (.docx)',
                'description' => 'Gunakan template ini untuk penulisan jurnal penuh sesuai format standar LONTARA 2025.',
                'url' => asset('templates/LONTARA2025_Paper_Template.docx'), // Contoh URL
                'downloadable' => true // Kita bisa cek file exist jika perlu
            ],
            [
                'name' => 'Template Presentasi (.pptx)',
                'description' => 'Template slide presentasi resmi untuk semua pemakalah yang diterima.',
                'url' => asset('templates/LONTARA2025_Presentation_Template.pptx'), // Contoh URL
                'downloadable' => true
            ]
        ];

        return view('pages.submission-info', ['templates' => $templates]);
    }
}
