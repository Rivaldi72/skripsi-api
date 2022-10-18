<?php

namespace App\Models\Dedi;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    // protected $guard = 'dedi_user';

    protected $table = 'dedi_user';

    // protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'angkatan',
        'tempat',
        'tanggal_lahir',
        'alamat',
        'email',
        'password',
        'token_api',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
