<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->string('type')->default('juri')->after('image_path'); // Nilai: 'juri' atau 'speaker'
        });
    }

    public function down()
    {
        Schema::table('speakers', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
