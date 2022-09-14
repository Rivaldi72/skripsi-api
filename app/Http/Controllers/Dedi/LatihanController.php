<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function latihanindex(){


        return view('/content/pages/dedi/latihan/latihan_index');
    }

    public function latihantambah(){


        return view('/content/pages/dedi/latihan/latihan_tambah');
    }

    public function latihan_edit(){


        return view('/content/pages/dedi/latihan/latihan_edit');
    }
}
