<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Setting;
use App\Models\Speaker;
use App\Models\Committee;

class PageController extends Controller
{
    /**
     * Menampilkan halaman Home.
     */
    public function home(): View
    {
        $conferenceStartDate = Setting::where('key', 'conference_starts_date')->value('value');
        $registrationClosesDate = Setting::where('key', 'registration_closes_date')->value('value');

        if (!$registrationClosesDate) {
            $registrationClosesDate = $conferenceStartDate;
        }

        // PISAHKAN DATA JURI DAN SPEAKER
        $juris = Speaker::where('type', 'juri')->latest()->get();
        $narasumbers = Speaker::where('type', 'speaker')->latest()->get();

        return view('pages.home', [
            'conferenceStartDate' => $conferenceStartDate,
            'registrationClosesDate' => $registrationClosesDate,
            'juris' => $juris,            // Kirim variabel juri
            'narasumbers' => $narasumbers // Kirim variabel narasumber
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
        // UPDATE: Link Google Docs & Slides
        $templates = [
            [
                'name' => 'Template Presentasi (PPT)',
                'description' => 'Template slide presentasi resmi untuk semua peserta.',
                'url' => 'https://docs.google.com/presentation/d/1wPOOtAUoUY3zOooNiMoBAX2_1bBTfj-L/edit?slide=id.p2#slide=id.p2',
                'downloadable' => true
            ]
        ];

        return view('pages.submission-info', ['templates' => $templates]);
    }
}
