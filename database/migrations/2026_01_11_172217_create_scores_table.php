<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_create_scores_table.php
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ID Juri

            // Jenis Penilaian: 'pitching', 'booth', 'poster', 'speaker'
            $table->string('type');

            // Skor total (hasil rata-rata atau akumulasi)
            $table->decimal('total_score', 8, 2);

            // Detail nilai per kriteria (disimpan dalam format JSON)
            $table->json('criteria_details')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();

            // Satu juri hanya boleh memberi satu nilai untuk satu kategori pada satu tim
            $table->unique(['registration_id', 'user_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
