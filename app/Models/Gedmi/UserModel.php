<?php

namespace App\Models\Gedmi;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $table = 'gedmi_user';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'username',
        'password',
        'role',
        'api_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
