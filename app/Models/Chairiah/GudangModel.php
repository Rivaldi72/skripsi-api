<?php

namespace App\Models\Chairiah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GudangModel extends Model
{
    use HasFactory;
    protected $table = 'chairiah_gudang';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'id_user',
        'nama',
        'alamat',
        'gambar',
        'no_hp',
        'harga_kopi_gelondong',
        'harga_kopi_gabah',
        'harga_kopi_biji_hijau',
    ];
}
