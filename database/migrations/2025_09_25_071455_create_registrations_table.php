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
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->string('full_name');
            $table->string('institution');
            $table->string('position');
            $table->string('phone_number');
            $table->enum('participant_type', ['Presenter', 'Participant']);
            $table->string('research_field')->nullable(); // Diisi oleh presenter
            $table->string('identity_card_path'); // Path file KTP/KTM
            $table->string('cv_path')->nullable(); // Path file CV (opsional)
            $table->string('package_choice');
            $table->boolean('is_present')->nullable(); // Konfirmasi kehadiran
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
