<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\MapelModel;

class MapelController extends Controller
{
    public function mapel(){
        $mapel = MapelModel::all();
        return view('content.pages.gedmi.mapel.mapelindex', compact('mapel'));
    }

    public function tambahMapel(){
        return view('content.pages.gedmi.mapel.createmapel');
    }

    public function tambahMapelPost(Request $request){
        // dd($request->all());
        MapelModel::create($request->all());
        return redirect()->route('gedmi.mapel.index');
    }
}
