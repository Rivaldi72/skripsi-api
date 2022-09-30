<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\SiswaModel;

class SiswaController extends Controller
{
    public function siswa1(Request $request){
        // dd($request->all());
        if ($request->filter == "VII") {
            $dataSiswa = SiswaModel::where('kelas', "VII")->get();
        } elseif ($request->filter == "VIII") {
            $dataSiswa = SiswaModel::where('kelas', "VIII")->get();
        } elseif ($request->filter == "IX") {
            $dataSiswa = SiswaModel::where('kelas', "IX")->get();
        } else {
            $dataSiswa = SiswaModel::all();
        }
        return view('content.pages.gedmi.siswa.indexsiswa', compact('dataSiswa'));
    }
    public function tambahSiswa(){
        return view('content.pages.gedmi.siswa.createsiswa');
    }
    public function detailSiswa(){
        return view('content.pages.gedmi.siswa.detailsiswa');
    }
    public function editSiswa(){
        return view('content.pages.gedmi.siswa.edit');
    }
    public function tambahSiswaPost(Request $request){
        // dd($request->all());
        SiswaModel::create($request->all());
        return redirect()->route('gedmi.siswa.index');
    }

    public function deleteSiswa($id){
        $dataSiswa = SiswaModel::find($id);
        $dataSiswa->delete();

        return redirect()->route('gedmi.siswa.index', ['message' => 'success']);
    }
}
