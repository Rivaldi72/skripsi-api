<?php

namespace App\Models\Gedmi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
    use HasFactory;
    protected $table = 'gedmi_nilai';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_guru',
        'bidang_studi',
    ];
}
