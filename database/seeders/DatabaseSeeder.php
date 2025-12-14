<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Registration;
use App\Models\Payment;
use App\Models\TeamMember; // <-- Jangan lupa import ini

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Panggil Seeder Setting
        $this->call(SettingSeeder::class);

        // 2. Buat Akun ADMIN
        User::create([
            'name' => 'Admin Lontara',
            'email' => 'admin@lontara.com',
            'password' => bcrypt('password'),
            'role' => 1,
            'email_verified_at' => now(),
        ]);

        // 3. Buat Akun JURI
        $juris = [
            ['name' => 'Dr. Budi Santoso', 'email' => 'juri1@lontara.com'],
            ['name' => 'Prof. Rina Wijaya', 'email' => 'juri2@lontara.com'],
            ['name' => 'Ahmad Dhani, M.T.', 'email' => 'juri3@lontara.com'],
        ];

        foreach ($juris as $juriData) {
            User::create([
                'name' => $juriData['name'],
                'email' => $juriData['email'],
                'password' => bcrypt('password'),
                'role' => 2,
                'email_verified_at' => now(),
            ]);
        }

        // ==========================================
        // 4. DATA DUMMY PESERTA (LENGKAP)
        // ==========================================

        // --- KASUS 1: Tim Lengkap (Lunas, Ada Anggota, Berkas Lengkap) ---
        $userA = User::create([
            'name' => 'Andi Pratama',
            'email' => 'tim.a@gmail.com',
            'password' => bcrypt('password'),
            'role' => 0,
            'email_verified_at' => now(),
        ]);

        $regA = Registration::create([
            'user_id' => $userA->id,
            'team_name' => 'Tim Garuda Muda',
            'full_name' => 'Andi Pratama',
            'nim' => '1302020001',
            'major' => 'Teknik Informatika',
            'institution' => 'Universitas Muslim Indonesia',
            'position' => 'Ketua Tim',
            'phone_number' => '081234567890',
            'participant_type' => 'Tahap Awal',
            'research_field' => 'IoT Agriculture',
            // Dummy file paths
            'ktm_path' => 'submissions/identities/dummy_ktm.pdf',
            'bmc_path' => 'submissions/docs/dummy_bmc.pdf',
            'proposal_path' => 'submissions/docs/dummy_proposal.pdf',
            'share_pamflet_path' => 'submissions/proofs/dummy_share.jpg',
            'twibbon_path' => 'submissions/proofs/dummy_twibbon.jpg',
            'follow_medsos_path' => 'submissions/proofs/dummy_follow.jpg',
            'package_choice' => 'Lomba Kewirausahaan',
            'is_present' => true,
            'agree_terms' => true,
        ]);

        // Tambah Anggota Tim A
        TeamMember::create(['registration_id' => $regA->id, 'name' => 'Siti Aminah', 'nim' => '1302020002', 'major' => 'Teknik Industri']);
        TeamMember::create(['registration_id' => $regA->id, 'name' => 'Budi Darmawan', 'nim' => '1302020003', 'major' => 'Manajemen']);

        // Tambah Pembayaran Lunas
        Payment::create([
            'registration_id' => $regA->id,
            'amount' => 50000,
            'proof_path' => 'submissions/proofs/dummy_transfer.jpg',
            'status' => 'verified', // SUDAH LUNAS
        ]);


        // --- KASUS 2: Tim Menunggu Verifikasi (Sudah Upload Bayar, Belum dicek Admin) ---
        $userB = User::create([
            'name' => 'Rina Kurnia',
            'email' => 'tim.b@gmail.com',
            'password' => bcrypt('password'),
            'role' => 0,
            'email_verified_at' => now(),
        ]);

        $regB = Registration::create([
            'user_id' => $userB->id,
            'team_name' => 'Green Future Tech',
            'full_name' => 'Rina Kurnia',
            'nim' => '5520120001',
            'major' => 'Sistem Informasi',
            'institution' => 'Universitas Hasanuddin',
            'position' => 'Ketua Tim',
            'phone_number' => '089876543210',
            'participant_type' => 'Tahap Berjalan',
            'research_field' => 'Waste Management',
            'ktm_path' => 'submissions/identities/dummy_ktm.pdf',
            'bmc_path' => 'submissions/docs/dummy_bmc.pdf',
            'proposal_path' => 'submissions/docs/dummy_proposal.pdf',
            'share_pamflet_path' => 'submissions/proofs/dummy_share.jpg',
            'twibbon_path' => 'submissions/proofs/dummy_twibbon.jpg',
            'follow_medsos_path' => 'submissions/proofs/dummy_follow.jpg',
            'package_choice' => 'Lomba Kewirausahaan',
            'is_present' => true,
            'agree_terms' => true,
        ]);

        // Tambah Anggota Tim B
        TeamMember::create(['registration_id' => $regB->id, 'name' => 'Doni Salman', 'nim' => '5520120002', 'major' => 'Ilmu Lingkungan']);

        // Tambah Pembayaran Pending
        Payment::create([
            'registration_id' => $regB->id,
            'amount' => 75000,
            'proof_path' => 'submissions/proofs/dummy_transfer.jpg',
            'status' => 'pending', // BELUM DIVERIFIKASI
        ]);


        // --- KASUS 3: User Baru (Belum Daftar Lomba) ---
        User::create([
            'name' => 'Maba Polosan',
            'email' => 'tim.c@gmail.com',
            'password' => bcrypt('password'),
            'role' => 0,
            'email_verified_at' => now(),
        ]);
    }
}
