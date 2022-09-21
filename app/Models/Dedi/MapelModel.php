<?php

namespace App\Models\Dedi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
     protected $table = 'dedi_mapel';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'mata_pelajaran',
    ];
}
