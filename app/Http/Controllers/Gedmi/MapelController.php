<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\MapelModel;

class MapelController extends Controller
{
    public function mapel(Request $request){
        if ($request->filter == "VII") {
            $mapel = MapelModel::where('kelas', "VII")->get();
        } elseif ($request->filter == "VIII") {
            $mapel = MapelModel::where('kelas', "VIII")->get();
        } elseif ($request->filter == "IX") {
            $mapel = MapelModel::where('kelas', "IX")->get();
        } else {
            $mapel = MapelModel::all();
        }
        return view('content.pages.gedmi.mapel.mapelindex', compact('mapel'));
    }
    
    public function apiMapel($kelas){
        $mapel = MapelModel::where('kelas', "$kelas")->get();
        return $mapel;
    }

    public function tambahMapel(){
        return view('content.pages.gedmi.mapel.createmapel');
    }

    public function tambahMapelPost(Request $request){
        // dd($request->all());
        MapelModel::create($request->all());
        return redirect()->route('gedmi.mapel.index');
    }

    public function editMapel($id) {
        $mapel = MapelModel::where('id', $id)->first();
        return view('content.pages.gedmi.mapel.editmapel', compact('mapel'));
    }

    public function updateMapel(Request $request, $id){
        $mapel = MapelModel::where('id', $id)->first();
        MapelModel:: where('id', $id)->update(
            
            [
                "hari" => $request->hari ?? $mapel->hari,
                "jam" => $request->jam ?? $mapel->jam,
                "nama_guru" => $request->nama_guru ?? $mapel->nama_guru,
                "bidang_studi" => $request->bidang_studi ?? $mapel->bidang_studi,
                "kelas" => $request->kelas ?? $mapel->kelas,
                
            ]
            );
        return redirect()->route('gedmi.mapel.index');
    }

    public function deleteMapel($id){
        $mapel = MapelModel::find($id);
        $mapel->delete();

        return redirect()->route('gedmi.mapel.index', ['message' => 'success']);
    }
}
