<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\lowongan;
use Session;

class LowonganController extends Controller
{
    public function index() {
      $isLogin = Session::get('username') != null;
        if(!$isLogin) {
            return redirect()->route('geral.page.login');
        }
        return view('content.pages.geral.index');
     }
    
     public function indexLowongan() {
         $dataLowongan= lowongan::all();
         $isLogin = Session::get('username') != null;
         if(!$isLogin) {
             return redirect()->route('geral.page.login');
         }
        return view('content.pages.geral.data-lowongan.index', compact('dataLowongan'));
     }

     public function indexLowonganApi() {
      $dataLowongan= lowongan::all();

      foreach ($dataLowongan as $key => $lowongan) {
         $dataLowongan[$key]['date_formatted'] = $dataLowongan[$key]->created_at->format('d M y | H:i');
      }
     return $dataLowongan;
  }

     public function tambahPage() {
      $isLogin = Session::get('username') != null;
      if(!$isLogin) {
          return redirect()->route('geral.page.login');
      }
      return view('content.pages.geral.data-lowongan.tambah');
      }

      public function tambahPagePost(Request $request){
         // dd($request->all());
         lowongan::create( $request->all());
         return redirect()->route('geral.index.lowongan');
      }
      
   public function editPage($id) {
      $dataLowongan = lowongan::where('id', $id)->first();
      $isLogin = Session::get('username') != null;
      if(!$isLogin) {
          return redirect()->route('geral.page.login');
      }
      return view('content.pages.geral.data-lowongan.edit', compact('dataLowongan'));
   }
   public function delete($id) {
      $dataLowongan = lowongan::find($id);
      $dataLowongan->delete();

      return redirect()->route('geral.index.lowongan', ['message' => 'success']);
   }
   public function update(Request $request, $id){
      // dd($request->all());
      $dataLowongan = lowongan::where('id',$id)->first();
      lowongan::where('id', $id)->update(
         [
            'posisi_pekerjaan' => $request->posisi_pekerjaan ?? $dataLowongan->posisi_pekerjaan,
            'nama_perusahaan' => $request->nama_perusahaan ?? $dataLowongan->nama_perusahaan,
            'alamat' => $request->alamat ?? $dataLowongan->alamat,
            'kota' => $request->kota ?? $dataLowongan->kota,
            'deskripsi' => $request->deskripsi ?? $dataLowongan->deskripsi,
            'pendidikan' => $request->pendidikan ?? $dataLowongan->pendidikan,
            'syarat' => $request->syarat ?? $dataLowongan->syarat,
            'tipe_pekerjaan' => $request->tipe_pekerjaan ?? $dataLowongan->tipe_pekerjaan,
            'tipe_posisi' => $request->tipe_posisi ?? $dataLowongan->tipe_posisi,
            'fasilitas' => $request->fasilitas ?? $dataLowongan->fasilitas,
   
         ]
      );
      return redirect()->route('geral.index.lowongan');
      
   }
}
