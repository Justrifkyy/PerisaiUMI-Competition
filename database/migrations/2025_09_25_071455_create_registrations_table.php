<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // ... file: database/migrations/xxxx_xx_xx_xxxxxx_create_registrations_table.php

    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Ganti ENUM menjadi STRING agar fleksibel menerima "Tahap Awal", "Tahap Berjalan", dll.
            $table->string('participant_type');

            // Pastikan phone_number cukup panjang (jangan dibatasi misal 12 karakter)
            $table->string('phone_number');

            // Pastikan kolom lain menggunakan string (255 char) atau text (unlimited)
            $table->string('full_name');
            $table->string('institution');
            $table->string('position');
            $table->string('research_field')->nullable();

            // Kolom file path biasanya panjang, string (255) sudah cukup, 
            // tapi kalau nama file sangat panjang, bisa pakai text()
            $table->string('identity_card_path');
            $table->string('cv_path')->nullable();

            $table->string('package_choice');
            $table->boolean('is_present')->nullable();
            $table->boolean('agree_terms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
