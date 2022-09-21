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
        'soal',
        'jawaban_benar',
        'pilihan_jawaban1',
        'pilihan_jawaban2',
        'pilihan_jawaban3',

    ];
}
