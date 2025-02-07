<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_paid',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'is_paid' => 'boolean',
    ];

    // Relationship: A user has many payments
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
