<?php

namespace App\Models\Geral;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'geral_user';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'password',
        'isAdmin',
        'nama_lengkap',
        'email',
        'tanggal_lahir',
        'no_hp',
        'keahlian',
        'api_token'

    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

}