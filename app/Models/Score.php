<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'registration_id',
        'score_bmc',
        'score_idea',
        'score_impact',
        'score_visual',
        'feedback',
    ];

    // Relasi ke Juri
    public function juri()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke Tim Peserta
    public function registration()
    {
        return $this->belongsTo(Registration::class);
    }
}
