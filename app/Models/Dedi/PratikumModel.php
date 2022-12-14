<?php

namespace App\Models\Dedi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PratikumModel extends Model
{
    use HasFactory;

     protected $table = 'dedi_pratikum';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_mapel',
        'judul_pratikum',
        'detail_pratikum',
    ];
     public function matapelajaran()
    {
        return $this->hasOne('App\Models\Dedi\MapelModel', 'id', 'id_mapel');
    }
}
