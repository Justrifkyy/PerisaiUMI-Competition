<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // ... file: database/migrations/xxxx_xx_xx_xxxxxx_create_payments_table.php

    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade');
            $table->integer('amount');
            $table->string('payment_proof_path'); // Path ke file bukti transfer
            $table->string('status')->default('Pending Verification'); // (Pending, Verified, Rejected)
            $table->text('admin_notes')->nullable(); // Catatan dari admin jika reject
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
