<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'telepon',
        'role',
        'lokasi',
        'bergabung_pada',
        'resep_count',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}