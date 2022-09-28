<?php

namespace App\Http\Controllers\Chairiah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chairiah\GudangModel;
use Str;

class GudangController extends Controller
{
    public function index(){
        return view('content.pages.chairiah.index');
    }

    public function profilGudang(){
        $data = GudangModel::where('id_user', 1)->get()->first();
        return view('content.pages.chairiah.profil-gudang', compact('data'));
    }

    public function profilGudangPost(Request $request) {
        // dd($request->all());
        $id_user = 1;
        $dataGudang = GudangModel::where('id_user',$id_user)->get()->first();
        if($request->gudangImage != null) {
            $getFileExt = $request->gudangImage->getClientOriginalExtension();
            $fileName =  'gudang-image' . Str::uuid() . '.' . $getFileExt;
            $request->file('gudangImage')->storeAs(
                'public/chairiah/gudang-image', $fileName
            );
        }
        // dd($fileName);
        GudangModel::updateOrCreate(
            [
                "id_user" => $id_user,
            ],
            [
                "nama" => $request->nama,
                "alamat" => $request->alamat,
                "no_hp" => $request->no_hp,
                "gambar" => $fileName ?? $dataGudang->gambar,
                "harga_kopi_gelondong" => $request->harga_kopi_gelondong,
                "harga_kopi_gabah" => $request->harga_kopi_gabah,
                "harga_kopi_biji_hijau" => $request->harga_kopi_biji_hijau,
            ]
        );
        return redirect()->route('chairiah.profil.gudang');
    }
}
