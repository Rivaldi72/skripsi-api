<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dedi\MateriModel;

class MateriController extends Controller
{
public function materiindex(){
         $materi = MateriModel::with('matapelajaran')->get();

        return view('/content/pages/dedi/materi/materi_index',compact('materi'));
    }

    public function materitambah(){


        return view('/content/pages/dedi/materi/materi_tambah');
    }

    public function materiedit(){


        return view('/content/pages/dedi/materi/materi_edit');
    }
}
