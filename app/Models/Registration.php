<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'team_name',
        'full_name',
        'institution',
        'position',
        'phone_number',
        'participant_type',
        'research_field',
        'ktm_path',
        'share_pamflet_path',
        'twibbon_path',
        'follow_medsos_path',
        'bmc_path',
        'proposal_path',
        'package_choice',
        'is_present',
        'agree_terms',
    ];

    // Relasi ke User (Ketua Tim)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Pembayaran
    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    // Relasi ke Penilaian (Scores)
    public function scores(): HasMany
    {
        return $this->hasMany(Score::class);
    }
}
