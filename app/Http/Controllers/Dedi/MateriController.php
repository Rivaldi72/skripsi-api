<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dedi\MateriModel;
use Str;

class MateriController extends Controller
{
    public function materiindex(){

         $materi = MateriModel::with('matapelajaran')->get();
        //  dd($materi->toArray());

        return view('/content/pages/dedi/materi/materi_index',compact('materi'));
    }

    public function materiindexapi($id_mapel){
         $materi = MateriModel::where('id_mapel', $id_mapel)->with('matapelajaran')->get();
        //  dd($materi->toArray());

        return $materi;
    }

    public function materitambah(){


        return view('/content/pages/dedi/materi/materi_tambah');
    }

    public function materitambahpost(Request $request){
        // dd($request->mata_pelajaran);
        $getFileExt = $request->gambar->getClientOriginalExtension();
        $fileName = 'materi-image'.Str::uuid().'.'. $getFileExt;
        $request->file('gambar')->storeAs(
            'public/dedi/materi-image',$fileName
        );

        MateriModel::create(
            [
            "id_mapel" => $request->mata_pelajaran,
            "judul_materi" => $request->judul_materi,
            "detail_materi" => $request->detail_materi,
            "gambar"=>$fileName,
            ]
        );
        return redirect()->route('dedi.materi.index');
    }

    public function materiedit($id){
         $materi = MateriModel::where('id',$id)->first();

        return view('/content/pages/dedi/materi/materi_edit',compact('materi'));
    }
    public function materiupdate(Request $request,$id){
        // dd($request->all());
         $materi = MateriModel::where('id',$id)->first();
         MateriModel::where('id',$id)->update(

            [
                "id_mapel" => $request->mata_pelajaran ?? $materi->mata_pelajaran,
                "judul_materi" => $request->judul_materi ?? $materi->judul_materi,
                // "detail_pratikum" => $request->detail_pratikum ?? $pratikum->detail_pratikum,
                // "gambar"=>$fileName,
            ]
        );
        return redirect()->route('dedi.materi.index');
    }
    public function materidelete($id) {
            $materi = MateriModel::find($id);
            $materi ->delete();
        return redirect()->route('dedi.materi.index', ['message' => 'succes']);

}

}
