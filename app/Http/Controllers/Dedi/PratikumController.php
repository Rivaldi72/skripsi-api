<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dedi\PratikumModel;
use Str;

class PratikumController extends Controller
{
    public function pratikumindex(){
        $pratikum = PratikumModel::with('matapelajaran')->get();

        return view('/content/pages/dedi/pratikum/pratikum_index',compact('pratikum'));
    }

    public function pratikumindexapi($id_mapel){
        $pratikum = PratikumModel::where('id_mapel', $id_mapel)->with('matapelajaran')->get();

        return $pratikum;
    }

    public function pratikumtambah(){


        return view('/content/pages/dedi/pratikum/pratikum_tambah');
    }

    public function pratikumtambahpost(Request $request){
        //  dd($request->toArray());
        $getFileExt = $request->gambar->getClientOriginalExtension();
        $fileName = 'pratikum-image'.Str::uuid().'.'. $getFileExt;
        $request->file('gambar')->storeAs(
            'public/dedi/pratikum-image',$fileName
        );

        PratikumModel::create(
            [
            "id_mapel" => $request->mata_pelajaran,
            "judul_pratikum" => $request->judul_pratikum,
            "detail_pratikum" => $request->detail_pratikum,
            "gambar"=> $fileName,
            ]
        );
        return redirect()->route('dedi.pratikum.index');
    }

    public function pratikumedit($id){
         $pratikum = PratikumModel::where('id',$id)->first();

        return view('/content/pages/dedi/pratikum/pratikum_edit',compact('pratikum'));
    }

    public function pratikumupdate(Request $request,$id){
        $pratikum = PratikumModel::where('id',$id)->first();
        PratikumModel::where('id',$id)->update(

            [
                "id_mapel" => $request->mata_pelajaran ?? $pratikum->mata_pelajaran,
                "judul_pratikum" => $request->judul_pratikum ?? $pratikum->judul_pratikum,
                // "detail_pratikum" => $request->detail_pratikum ?? $pratikum->detail_pratikum,
                // "gambar"=>$fileName,
            ]
        );
        return redirect()->route('dedi.pratikum.index');
    }
    public function pratikumdelete($id) {
            $pratikum = PratikumModel::find($id);
            $pratikum ->delete();
        return redirect()->route('dedi.pratikum.index', ['message' => 'succes']);
}

}
