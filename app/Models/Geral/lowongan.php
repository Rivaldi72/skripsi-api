<?php

namespace App\Models\Geral;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'geral_lowongan';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'posisi_pekerjaan',
        'nama_perusahaan',
        'alamat',
        'kota',
        'deskripsi',
        'pendidikan',
        'syarat',
        'tipe_pekerjaan',
        'tipe_posisi'

    ];
}