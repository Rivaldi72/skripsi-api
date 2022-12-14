<?php

namespace App\Models\Dedi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatihanModel extends Model
{
     protected $table = 'dedi_latihan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_mapel',
        'soal',
        'jawaban_beneran',
        'pilihan_jawaban1',
        'pilihan_jawaban2',
        'pilihan_jawaban3',

    ];
     public function matapelajaran()
    {
        return $this->hasOne('App\Models\Dedi\MapelModel', 'id', 'id_mapel');
    }
}
