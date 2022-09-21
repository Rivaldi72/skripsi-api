<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MateriController extends Controller
{
public function materiindex(){


        return view('/content/pages/dedi/materi/materi_index');
    }

    public function materitambah(){


        return view('/content/pages/dedi/materi/materi_tambah');
    }

    public function materiedit(){


        return view('/content/pages/dedi/materi/materi_edit');
    }
}
