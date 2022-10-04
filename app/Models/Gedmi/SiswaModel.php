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
        'matematika_1',
        'bindo_1',
        'bing_1',
        'ipa_1',
        'ips_1',
        'pkn_1',
        'agama_1',
        'penjas_1',
        'senbud_1',
        'matematika_2',
        'bindo_2',
        'bing_2',
        'ipa_2',
        'ips_2',
        'pkn_2',
        'agama_2',
        'penjas_2',
        'senbud_2',
        'matematika_3',
        'bindo_3',
        'bing_3',
        'ipa_3',
        'ips_3',
        'pkn_3',
        'agama_3',
        'penjas_3',
        'senbud_3',
        'matematika_4',
        'bindo_4',
        'bing_4',
        'ipa_4',
        'ips_4',
        'pkn_4',
        'agama_4',
        'penjas_4',
        'senbud_4',
        'matematika_5',
        'bindo_5',
        'bing_5',
        'ipa_5',
        'ips_5',
        'pkn_5',
        'agama_5',
        'penjas_5',
        'senbud_5',
        'matematika_6',
        'bindo_6',
        'bing_6',
        'ipa_6',
        'ips_6',
        'pkn_6',
        'agama_6',
        'penjas_6',
        'senbud_6',
    ];
}
