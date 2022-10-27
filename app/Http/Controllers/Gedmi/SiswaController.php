<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\SiswaModel;
use Session;

class SiswaController extends Controller
{
    public function siswa1(Request $request){
        $isLogin = Session::get('username') != null;
        if(!$isLogin) {
            return redirect()->route('gedmi.page.login');
        }
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
    public function apiSiswa1($kelas){
        $dataSiswa = SiswaModel::where('kelas', "$kelas")->get();
        return $dataSiswa;
    }
    public function tambahSiswa(){
        return view('content.pages.gedmi.siswa.createsiswa');
    }
    public function tambahSiswaPost(Request $request){
        // dd($request->all());
        SiswaModel::create($request->all());
        return redirect()->route('gedmi.siswa.index');
    }
   
    public function editSiswa($id) {
        $dataSiswa = SiswaModel::where('id', $id)->first();
        return view('content.pages.gedmi.siswa.edit', compact('dataSiswa'));
    }

    public function updateSiswa(Request $request, $id){
        $dataSiswa = SiswaModel::where('id', $id)->first();
        SiswaModel:: where('id', $id)->update(
            
            [
                "nis" => $request->nis ?? $dataSiswa->nis,
                "nama" => $request->nama?? $dataSiswa->nama,
                "kelas" => $request->kelas ?? $dataSiswa->kelas,
                "tempat_lahir" => $request->tempat_lahir ?? $dataSiswa->tempat_lahir,
                "tanggal_lahir" => $request->tanggal_lahir ?? $dataSiswa->tanggal_lahir,
                "tahun_masuk" => $request->tahun_masuk ?? $dataSiswa->tahun_masuk,
                "jenis_kelamin" => $request->jenis_kelamin?? $dataSiswa->jenis_kelamin,
                "agama" => $request->agama ?? $dataSiswa->agama,
                "alamat" => $request->alamat ?? $dataSiswa->alamat,
                "matematika_1" => $request->matematika_1 ?? $dataSiswa->matematika_1,
                "bindo_1" => $request->bindo_1 ?? $dataSiswa->bindo_1,
                "bing_1" => $request->bing_1?? $dataSiswa->bing_1,
                "ipa_1" => $request->ipa_1 ?? $dataSiswa->ipa_1,
                "ips_1" => $request->ips_1 ?? $dataSiswa->ips_1,
                "pkn_1" => $request->pkn_1 ?? $dataSiswa->pkn_1,
                "agama_1" => $request->agama_1 ?? $dataSiswa->agama_1,
                "penjas_1" => $request->penjas_1?? $dataSiswa->penjas_1,
                "senbud_1" => $request->senbud_1 ?? $dataSiswa->senbud_1,
                "matematika_2" => $request->matematika_2 ?? $dataSiswa->matematika_2,
                "bindo_2" => $request->bindo_2 ?? $dataSiswa->bindo_2,
                "bing_2" => $request->bing_2?? $dataSiswa->bing_2,
                "ipa_2" => $request->ipa_2 ?? $dataSiswa->ipa_2,
                "ips_2" => $request->ips_2 ?? $dataSiswa->ips_2,
                "pkn_2" => $request->pkn_2 ?? $dataSiswa->pkn_2,
                "agama_2" => $request->agama_2 ?? $dataSiswa->agama_2,
                "penjas_2" => $request->penjas_2?? $dataSiswa->penjas_2,
                "senbud_2" => $request->senbud_2 ?? $dataSiswa->senbud_2,
                "matematika_3" => $request->matematika_3 ?? $dataSiswa->matematika_3,
                "bindo_3" => $request->bindo_3 ?? $dataSiswa->bindo_3,
                "bing_3" => $request->bing_3?? $dataSiswa->bing_3,
                "ipa_3" => $request->ipa_3 ?? $dataSiswa->ipa_3,
                "ips_3" => $request->ips_3 ?? $dataSiswa->ips_3,
                "pkn_3" => $request->pkn_3 ?? $dataSiswa->pkn_3,
                "agama_3" => $request->agama_3 ?? $dataSiswa->agama_3,
                "penjas_3" => $request->penjas_3?? $dataSiswa->penjas_3,
                "senbud_3" => $request->senbud_3 ?? $dataSiswa->senbud_3,
                "matematika_4" => $request->matematika_4 ?? $dataSiswa->matematika_4,
                "bindo_4" => $request->bindo_4 ?? $dataSiswa->bindo_4,
                "bing_4" => $request->bing_4?? $dataSiswa->bing_4,
                "ipa_4" => $request->ipa_4 ?? $dataSiswa->ipa_4,
                "ips_4" => $request->ips_4 ?? $dataSiswa->ips_4,
                "pkn_4" => $request->pkn_4 ?? $dataSiswa->pkn_4,
                "agama_4" => $request->agama_4 ?? $dataSiswa->agama_4,
                "penjas_4" => $request->penjas_4?? $dataSiswa->penjas_4,
                "senbud_4" => $request->senbud_4 ?? $dataSiswa->senbud_4,
                "matematika_5" => $request->matematika_5 ?? $dataSiswa->matematika_5,
                "bindo_5" => $request->bindo_5 ?? $dataSiswa->bindo_5,
                "bing_5" => $request->bing_5?? $dataSiswa->bing_5,
                "ipa_5" => $request->ipa_5 ?? $dataSiswa->ipa_5,
                "ips_5" => $request->ips_5 ?? $dataSiswa->ips_5,
                "pkn_5" => $request->pkn_5 ?? $dataSiswa->pkn_5,
                "agama_5" => $request->agama_5 ?? $dataSiswa->agama_5,
                "penjas_5" => $request->penjas_5?? $dataSiswa->penjas_5,
                "senbud_5" => $request->senbud_5 ?? $dataSiswa->senbud_5,
                "matematika_6" => $request->matematika_6 ?? $dataSiswa->matematika_6,
                "bindo_6" => $request->bindo_6 ?? $dataSiswa->bindo_6,
                "bing_6" => $request->bing_6?? $dataSiswa->bing_6,
                "ipa_6" => $request->ipa_6 ?? $dataSiswa->ipa_6,
                "ips_6" => $request->ips_6 ?? $dataSiswa->ips_6,
                "pkn_6" => $request->pkn_6 ?? $dataSiswa->pkn_6,
                "agama_6" => $request->agama_6 ?? $dataSiswa->agama_6,
                "penjas_6" => $request->penjas_6?? $dataSiswa->penjas_6,
                "senbud_6" => $request->senbud_6 ?? $dataSiswa->senbud_6,

                
                
            ]
            );
        return redirect()->route('gedmi.siswa.index');
    }
    

    public function deleteSiswa($id){
        $dataSiswa = SiswaModel::find($id);
        $dataSiswa->delete();

        return redirect()->route('gedmi.siswa.index', ['message' => 'success']);
    }

    public function detailSiswa($id) {
        $dataSiswa = SiswaModel::where('id', $id)->first();
        return view('content.pages.gedmi.siswa.detailsiswa', compact('dataSiswa'));
    }
    public function apiDetailSiswa(){
        $dataSiswa = SiswaModel::all();
        return $dataSiswa;
    }
}
