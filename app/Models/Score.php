<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // <-- Import BelongsTo

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'user_id',
        'criteria_scores',
        'total_score',
        'feedback',
    ];

    protected $casts = [
        'criteria_scores' => 'array',
    ];

    // Relasi ke Tim
    public function registration(): BelongsTo
    {
        return $this->belongsTo(Registration::class);
    }

    // Relasi ke Juri (User)
    // PERBAIKAN: Tambahkan method ini agar 'with(scores.juri)' berfungsi
    public function juri(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id'); // user_id adalah foreign key ke tabel users
    }

    // Opsional: Jika Anda sudah punya method user(), biarkan saja.
    // Tapi pastikan controller memanggil nama yang sama.
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
}
