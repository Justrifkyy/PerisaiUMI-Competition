<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;

// User Controllers
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\RegistrationController;
use App\Http\Controllers\User\PaymentUploadController;
use App\Http\Controllers\User\SubmissionController;

// Admin Controllers
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\PaperController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\CommunicationController;
use App\Http\Controllers\Admin\JuriController;
use App\Http\Controllers\Admin\RecapController;
use App\Http\Controllers\Admin\CommitteeController;

// Juri Controllers
use App\Http\Controllers\Juri\JuriController as JuriDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// == HALAMAN PUBLIK ==
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/important-dates', [PageController::class, 'importantDates'])->name('important-dates');
Route::get('/call-for-paper', [PageController::class, 'callForPaper'])->name('call-for-paper');
Route::get('/submission-info', [PageController::class, 'submissionInfo'])->name('submission-info');

// == HALAMAN UNTUK PESERTA YANG SUDAH LOGIN ==
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Registrasi Tim
    Route::get('/conference-registration', [RegistrationController::class, 'create'])->name('registration.create');
    Route::post('/conference-registration', [RegistrationController::class, 'store'])->name('registration.store');

    // Pembayaran
    Route::get('/payment', [PaymentUploadController::class, 'create'])->name('payment.create');
    Route::post('/payment', [PaymentUploadController::class, 'store'])->name('payment.store');

    // Submission Paper
    Route::get('/my-submission', [SubmissionController::class, 'create'])->name('submission.create');
    Route::post('/my-submission', [SubmissionController::class, 'store'])->name('submission.store');

    Route::get('/registration-status', [App\Http\Controllers\User\RegistrationStatusController::class, 'index'])
        ->name('registration.status');
});


// == HALAMAN PANEL ADMIN ==
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Detail Tim & Verifikasi Pembayaran (WAJIB ADA AGAR ADMIN BISA KERJA)
    Route::get('/registrations/{id}', [AdminDashboardController::class, 'show'])->name('registrations.show');
    Route::post('/registrations/{id}/verify-payment', [AdminDashboardController::class, 'verifyPayment'])->name('registrations.verify-payment');

    // Manajemen Peserta
    Route::get('/participants', [ParticipantController::class, 'index'])->name('participants.index');
    Route::get('/participants/export', [ParticipantController::class, 'export'])->name('participants.export');
    Route::get('/participants/{registration}', [ParticipantController::class, 'show'])->name('participants.show');

    // Manajemen Paper
    Route::get('/papers', [PaperController::class, 'index'])->name('papers.index');
    Route::patch('/papers/{submission}', [PaperController::class, 'updateStatus'])->name('papers.updateStatus');

    // MANAJEMEN PEMBAYARAN
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::get('/payments/history', [PaymentController::class, 'history'])->name('payments.history');
    Route::get('/payments/{payment}/review', [PaymentController::class, 'review'])->name('payments.review');
    Route::post('/payments/{payment}/process', [PaymentController::class, 'process'])->name('payments.process');
    Route::delete('/payments/{payment}', [PaymentController::class, 'destroy'])->name('payments.destroy');

    // Manajemen Konten
    Route::get('/content/important-dates', [ContentController::class, 'editDates'])->name('content.dates.edit');
    Route::post('/content/important-dates', [ContentController::class, 'updateDates'])->name('content.dates.update');

    // Manajemen Keynote Speakers (CRUD)
    Route::resource('speakers', SpeakerController::class);

    // Komunikasi
    Route::get('/communication', [CommunicationController::class, 'create'])->name('communication.create');
    Route::post('/communication', [CommunicationController::class, 'send'])->name('communication.send');

    // MANAJEMEN AKUN JURI (CRUD User)
    Route::resource('juris', JuriController::class)->except(['show', 'edit', 'update']);

    // Rekapitulasi
    Route::get('/recap', [RecapController::class, 'index'])->name('recap.index');
    Route::get('/recap/export', [RecapController::class, 'export'])->name('recap.export');

    Route::resource('committees', CommitteeController::class);
});


// == HALAMAN PANEL JURI ==
Route::middleware(['auth', 'verified', 'is_juri'])->prefix('juri')->name('juri.')->group(function () {
    Route::get('/dashboard', [JuriDashboardController::class, 'index'])->name('dashboard');
    Route::get('/scoring/{registration}', [JuriDashboardController::class, 'show'])->name('scoring.show');
    Route::post('/scoring/{registration}', [JuriDashboardController::class, 'store'])->name('scoring.store');
});

// Rute Autentikasi Bawaan Breeze
require __DIR__ . '/auth.php';
