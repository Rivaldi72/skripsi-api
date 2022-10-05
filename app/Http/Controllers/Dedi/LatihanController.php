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

    public function latihanindexapi(){
        $latihan = LatihanModel::with('matapelajaran')->get();

        return $latihan;
    }

    public function latihantambah(){


        return view('/content/pages/dedi/latihan/latihan_tambah');
    }

    public function latihantambahpost(Request $request){
        // dd($request->all());
        LatihanModel::create($request->all());
        return redirect()->route('dedi.latihan.index');
    }



    public function latihanedit($id){
        $latihan = LatihanModel::where('id',$id)->first();

        return view('/content/pages/dedi/latihan/latihan_edit',compact('latihan'));
    }
    public function latihanupdate(Request $request,$id){
        // dd($request->all());
         $latihan = LatihanModel::where('id',$id)->first();
         LatihanModel::where('id',$id)->update(

            [
                "id_mapel" => $request->mata_pelajaran ?? $materi->mata_pelajaran,
                "soal" => $request->soal ?? $latihan->soal,
                "jawaban_beneran" => $request->jawaban_beneran ?? $latihan->jawaban_beneran,
                "pilihan_jawaban1" => $request->pilihan_jawaban1 ?? $latihan->pilihan_jawaban1,
                "pilihan_jawaban2" => $request->pilihan_jawaban2 ?? $latihan->pilihan_jawaban2,
                "pilihan_jawaban3" => $request->pilihan_jawaban3 ?? $latihan->pilihan_jawaban3,
            ]
        );
        return redirect()->route('dedi.latihan.index');
    }
            public function latihandelete($id) {
            $latihan = LatihanModel::find($id);
            $latihan ->delete();
        return redirect()->route('dedi.latihan.index', ['message' => 'succes']);
}
}
