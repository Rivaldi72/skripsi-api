<?php

namespace App\Models\Geral;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{

    protected $table = 'geral_lowongan_';
    
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
        'tipe_posisi',
        'fasilitas'

    ];
}