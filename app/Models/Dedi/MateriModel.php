<?php

namespace App\Models\Dedi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriModel extends Model
{
    use HasFactory;
     protected $table = 'dedi_materi';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_mapel',
        'judul_materi',
        'detail_materi',
        'gambar',

    ];
     public function matapelajaran()
    {
        return $this->hasOne('App\Models\Dedi\MapelModel', 'id', 'id_mapel');
    }
}

