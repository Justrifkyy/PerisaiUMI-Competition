<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'full_name',
        'institution',
        'position',
        'phone_number',
        'participant_type',
        'research_field',
        'identity_card_path',
        'cv_path',
        'package_choice',
        'is_present',
        'agree_terms',
    ];

    /**
     * Mendefinisikan bahwa satu data Registration dimiliki oleh satu User.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
    
}
