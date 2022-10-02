<?php

namespace App\Models\Gedmi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = 'gedmi_siswa';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nis',
        'nama',
        'kelas',
        'tempat_lahir',
        'tanggal_lahir',
        'tahun_masuk',
        'jenis_kelamin',
        'agama',
        'alamat',
    ];
}
