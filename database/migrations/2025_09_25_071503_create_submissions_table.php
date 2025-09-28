<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // ... file: database/migrations/xxxx_xx_xx_xxxxxx_create_submissions_table.php

    public function up(): void
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('authors');
            $table->string('topic');
            $table->string('paper_path'); // Path ke file paper .docx/.pdf
            $table->string('status')->default('Submitted'); // (Submitted, Under Review, Accepted, Rejected)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
