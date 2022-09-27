<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\GuruModel;

class GuruController extends Controller
{
    public function index(){
        $dataGuru = GuruModel::all();
        return view('content.pages.gedmi.guru.index', compact('dataGuru'));
    }

    public function tambahGuru(){
        return view('content.pages.gedmi.guru.create');
    }
    public function editGuru($id) {
        $dataGuru = GuruModel::where('id', $id)->first();
        return view('content.pages.gedmi.guru.edit', compact('dataGuru'));
    }
    public function updateGuru(Request $request, $id){
        $dataGuru = GuruModel::where('id', $id)->first();
        GuruModel::update(
            [
                "id" => $id,
            ],
            [
                "nama" => $request->nama ?? $dataGuru->nama,
                "tempat_lahir" => $request->tempat_lahir ?? $dataGuru->tempat_lahir,
                "tanggal_lahir" => $request->tanggal_lahir ?? $dataGuru->tanggal_lahir,
                "jabatan" => $request->jabatan ?? $dataGuru->jabatan,
                "tamatan" => $request->tamatan ?? $dataGuru->tamatan,
                "gelar" => $request->gelar ?? $dataGuru->gelar,
                "bidang_studi" => $request->bidang_studi ?? $dataGuru->bidang_studi,
                "agama" => $request->agama ?? $dataGuru->agama,
                "alamat" => $request->alamat ?? $dataGuru->alamat,
            ]
            );
        return redirect()->route('gedmi.guru.index');
    }
    public function detailGuru(){
        return view('content.pages.gedmi.guru.detail');
    }
    public function tambahGuruPost(Request $request){
        // dd($request->all());
        GuruModel::create($request->all());
        return redirect()->route('gedmi.guru.index');
    }
   
    
}
