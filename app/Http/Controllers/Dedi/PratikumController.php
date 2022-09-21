<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dedi\PratikumModel;

class PratikumController extends Controller
{
    public function pratikumindex(){
        $pratikum = PratikumModel::with('matapelajaran')->get();

        return view('/content/pages/dedi/pratikum/pratikum_index',compact('pratikum'));
    }

    public function pratikumtambah(){


        return view('/content/pages/dedi/pratikum/pratikum_tambah');
    }

    public function pratikumedit(){


        return view('/content/pages/dedi/pratikum/pratikum_edit');
    }
}
