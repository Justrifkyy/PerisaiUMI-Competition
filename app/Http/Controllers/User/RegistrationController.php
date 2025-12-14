<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Submission; // Import Submission
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    /**
     * Menampilkan halaman yang sesuai berdasarkan status pendaftaran user.
     * Ini adalah "pintu gerbang" utama bagi user yang sudah login.
     */
    public function create()
    {
        $user = Auth::user();
        // Ambil data registrasi beserta pembayarannya
        $registration = $user->registration()->with('payment')->first();

        // KONDISI 1: Belum pernah daftar sama sekali
        if (!$registration) {
            return view('user.registration-form');
        }

        // KONDISI 2: Sudah daftar, tapi belum ada data pembayaran sama sekali
        if (!$registration->payment) {
            return redirect()->route('payment.create');
        }

        // KONDISI 3: Sudah bayar, tapi statusnya Masih Pending atau Ditolak
        if (in_array($registration->payment->status, ['pending', 'rejected'])) {
            return redirect()->route('registration.status');
        }

        // KONDISI 4: Sudah Lunas (Verified) -> Tampilkan Halaman Sukses
        // Ini sesuai permintaan Anda: kembali ke route ini tapi tampilannya beda
        return view('user.registration-complete', [
            'registration' => $registration
        ]);
    }

    /**
     * Menyimpan data dari form registrasi konferensi.
     * Logika ini tidak berubah.
     */
    // app/Http/Controllers/User/RegistrationController.php

    public function store(Request $request): RedirectResponse
    {
        // 1. Validasi Input
        $validated = $request->validate([
            // Data Tim & Ketua
            'team_name' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'participant_type' => 'required|in:Tahap Awal,Tahap Berjalan',
            'research_field' => 'nullable|string|max:255',

            // Data Tambahan Ketua (PENTING)
            'nim' => 'required|string|max:50',
            'major' => 'required|string|max:255',

            // Data Anggota (Array)
            'members' => 'required|array|min:2|max:4',
            'members.*.name' => 'required|string|max:255',
            'members.*.nim' => 'required|string|max:50',
            'members.*.major' => 'required|string|max:255',

            // Berkas Lomba
            'ktm' => 'required|file|mimes:pdf|max:5120',
            'bmc' => 'required|file|mimes:pdf|max:10240',
            'proposal' => 'required|file|mimes:pdf|max:15360',

            // Bukti Persyaratan
            'share_pamflet' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'twibbon' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'follow_medsos' => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',

            // Checkbox
            'is_present' => 'accepted',
            'agree_terms' => 'accepted',
        ]);

        // 2. Upload File
        $ktmPath = $request->file('ktm')->store('submissions/identities', 'public');
        $bmcPath = $request->file('bmc')->store('submissions/docs', 'public');
        $proposalPath = $request->file('proposal')->store('submissions/docs', 'public');
        $sharePath = $request->file('share_pamflet')->store('submissions/proofs', 'public');
        $twibbonPath = $request->file('twibbon')->store('submissions/proofs', 'public');
        $followPath = $request->file('follow_medsos')->store('submissions/proofs', 'public');

        // 3. Simpan Data Registrasi (Tim & Ketua)
        $registration = Registration::create([
            'user_id' => Auth::id(),
            'team_name' => $validated['team_name'],
            'full_name' => $validated['full_name'], // Ketua
            'institution' => $validated['institution'],

            // --- PERBAIKAN UTAMA: Masukkan Position secara Hardcode ---
            'position' => 'Ketua Tim',
            // ---------------------------------------------------------

            'phone_number' => $validated['phone_number'],
            'participant_type' => $validated['participant_type'],
            'research_field' => $validated['research_field'],

            // Simpan NIM & Major Ketua (Dari input, bukan Auth::user)
            'nim' => $validated['nim'],
            'major' => $validated['major'],

            // Path File
            'ktm_path' => $ktmPath,
            'bmc_path' => $bmcPath,
            'proposal_path' => $proposalPath,
            'share_pamflet_path' => $sharePath,
            'twibbon_path' => $twibbonPath,
            'follow_medsos_path' => $followPath,

            'package_choice' => 'Lomba Kewirausahaan', // Hardcode
            'is_present' => true,
            'agree_terms' => true,
        ]);

        // 4. Simpan Data Anggota Tim
        foreach ($validated['members'] as $memberData) {
            $registration->teamMembers()->create($memberData);
        }

        return redirect()->route('payment.create')->with('status', 'Pendaftaran tim berhasil! Silakan lanjutkan pembayaran.');
    }
}