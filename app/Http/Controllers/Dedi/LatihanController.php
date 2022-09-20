<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dedi\LatihanModel;

class LatihanController extends Controller
{
    public function latihanindex(){
        $latihan = LatihanModel::with('matapelajaran')->get();

        return view('/content/pages/dedi/latihan/latihan_index',compact('latihan'));
    }

    public function latihantambah(){


        return view('/content/pages/dedi/latihan/latihan_tambah');
    }

    public function latihan_edit(){


        return view('/content/pages/dedi/latihan/latihan_edit');
    }
}
