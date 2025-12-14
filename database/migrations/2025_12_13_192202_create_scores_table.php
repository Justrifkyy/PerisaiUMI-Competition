<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade'); // Tim yang dinilai
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Juri yang menilai

            // Kita simpan detail nilai per kriteria dalam bentuk JSON 
            // agar fleksibel untuk kategori "Tahap Awal" vs "Tahap Berjalan"
            $table->json('criteria_scores');

            $table->float('total_score'); // Total penjumlahan bobot
            $table->text('feedback')->nullable(); // Masukan dari juri
            $table->timestamps();

            // Mencegah 1 juri menilai tim yang sama 2 kali
            $table->unique(['registration_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
