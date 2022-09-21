<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PratikumController extends Controller
{
    public function pratikumindex(){


        return view('/content/pages/dedi/pratikum/pratikum_index');
    }

    public function pratikumtambah(){


        return view('/content/pages/dedi/pratikum/pratikum_tambah');
    }

    public function pratikumedit(){


        return view('/content/pages/dedi/pratikum/pratikum_edit');
    }
}
