<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. MODIFIKASI TABEL USERS (Untuk Role Juri)
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
            $table->tinyInteger('role')->default(0)->after('email');
        });

        // 2. MODIFIKASI TABEL REGISTRATIONS (Gabung Submisi ke Sini)
        Schema::table('registrations', function (Blueprint $table) {
            // Tambah Nama Tim
            $table->string('team_name')->nullable()->after('user_id');

            // Tambah Kolom Upload Berkas Lomba
            $table->string('ktm_path')->nullable()->after('research_field');
            $table->string('share_pamflet_path')->nullable()->after('ktm_path');
            $table->string('twibbon_path')->nullable()->after('share_pamflet_path');
            $table->string('follow_medsos_path')->nullable()->after('twibbon_path');
            $table->string('bmc_path')->nullable()->after('follow_medsos_path');
            $table->string('proposal_path')->nullable()->after('bmc_path');

            // === PERBAIKAN DI SINI ===
            // Hapus kolom lama yang wajib diisi agar tidak error
            $table->dropColumn(['identity_card_path', 'cv_path']);
        });

        // 3. BUAT TABEL SCORES
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('registration_id')->constrained()->onDelete('cascade');

            $table->integer('score_bmc');
            $table->integer('score_idea');
            $table->integer('score_impact');
            $table->integer('score_visual');

            $table->text('feedback')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // Rollback logic (jika perlu undo)
        Schema::dropIfExists('scores');

        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn([
                'team_name',
                'ktm_path',
                'share_pamflet_path',
                'twibbon_path',
                'follow_medsos_path',
                'bmc_path',
                'proposal_path'
            ]);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
            $table->boolean('is_admin')->default(false);
        });
    }
};
