<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// Import HasMany untuk type hinting
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'institution',
        'position',
        'phone_number',
        'role', // <-- Ganti is_admin jadi role
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Mendefinisikan bahwa satu User bisa memiliki banyak data Registration.
     */
    // Tambahkan/Perbaiki method ini di User.php
    public function registration()
    {
        // Menggunakan hasOne karena 1 User hanya boleh punya 1 Registrasi Tim
        return $this->hasOne(Registration::class);
    }

    public function submissions(): HasMany
    {
        return $this->hasMany(Submission::class);
    }

    public function getIsAdminAttribute()
    {
        return $this->role === 1;
    }

    public function getIsJuriAttribute()
    {
        return $this->role === 2;
    }
}
