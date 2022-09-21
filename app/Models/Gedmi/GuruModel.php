<?php

namespace App\Models\Gedmi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruModel extends Model
{
    use HasFactory;
    protected $table = 'gedmi_guru';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jabatan',
        'tamatan',
        'gelar',
        'bidang_studi',
        'agama',
        'alamat',
    ];
}
