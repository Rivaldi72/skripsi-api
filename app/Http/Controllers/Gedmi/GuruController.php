<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\GuruModel;
use App\Models\Gedmi\UserModel;
use Session;

class GuruController extends Controller
{
    public function index(){
        $isLogin = Session::get('username') != null;
        if(!$isLogin) {
            return redirect()->route('gedmi.page.login');
        }
        $dataGuru = GuruModel::all();
        return view('content.pages.gedmi.guru.index', compact('dataGuru'));
    }
    public function apiIndex(){
        $dataGuru = GuruModel::all();
        return $dataGuru;
    }

    public function tambahGuru(){
        return view('content.pages.gedmi.guru.create');
    }
    public function tambahGuruPost(Request $request){
        // dd($request->all());
        $userData = new UserModel();
        $userData->username = $request->username;
        $userData->password = bcrypt($request->password);
        $userData->role = "Guru";
        $userData->save();

        $guruData = new GuruModel();
        $guruData->id_user = $userData->id;
        $guruData->nama = $request->nama;
        $guruData->tempat_lahir = $request->tempat_lahir;
        $guruData->tanggal_lahir = $request->tanggal_lahir;
        $guruData->jabatan = $request->jabatan;
        $guruData->tamatan = $request->tamatan;
        $guruData->gelar = $request->gelar;
        $guruData->bidang_studi = $request->bidang_studi;
        $guruData->agama = $request->agama;
        $guruData->alamat = $request->alamat;
        $guruData->save();

        return redirect()->route('gedmi.guru.index');
    }

    public function editGuru($id) {
        $dataGuru = GuruModel::where('id', $id)->first();
        return view('content.pages.gedmi.guru.edit', compact('dataGuru'));
    }
    public function updateGuru(Request $request, $id){
        $dataGuru = GuruModel::where('id', $id)->first();
        GuruModel:: where('id', $id)->update(
            
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

    public function deleteGuru($id){
        $dataGuru = GuruModel::find($id);
        $dataGuru->delete();

        return redirect()->route('gedmi.guru.index', ['message' => 'success']);
    }

    
    public function detailGuru($id) {
        $dataGuru = GuruModel::where('id', $id)->first();
        return view('content.pages.gedmi.guru.detail', compact('dataGuru'));
    }
    public function apiDetailGuru(){
        $dataGuru = GuruModel::all();
        return $dataGuru;
    }
   
    
   
   
    
}
