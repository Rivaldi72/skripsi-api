<?php

namespace App\Models\Gedmi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiModel extends Model
{
    use HasFactory;
    protected $table = 'gedmi_nilai';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_siswa',
        'id_mapel',
        'nilai_angka',
        'nilai_huruf',
    ];
}
