<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\lowongan;

class LowonganController extends Controller
{
    public function index() {
        return view('content.pages.geral.index');
     }
    
     public function indexLowongan() {
         $dataLowongan= lowongan::all();
        return view('content.pages.geral.data-lowongan.index', compact('dataLowongan'));
     }
     public function tambahPage() {
      return view('content.pages.geral.data-lowongan.tambah');
      }
   public function tambahPagePost(Request $request){
      // dd($request->all());
      lowongan::create( $request->all());
      return redirect()->route('geral.index.lowongan');
   }
   public function editPage($id) {
      $dataLowongan = lowongan::where('id', $id)->first();
      return view('content.pages.geral.data-lowongan.edit', compact('dataLowongan'));
   }
   public function update(Request $request, $id){
      // dd($request->all());
      $dataLowongan = lowongan::where('id',$id)->first;
      lowongan::update(
         [
            'id' => $id,
         ],
         [
            'posisi_pekerjaan' => $request->posisi_pekerjaan ?? $dataLowongan,
            'nama_pekerjaan' => $request->nama_pekerjaan ?? $dataLowongan,
            'alamat' => $request->alamat ?? $dataLowongan,
            'kota' => $request->kota ?? $dataLowongan,
            'deskripsi' => $request->deskripsi ?? $dataLowongan,
            'pendidikan' => $request->pendidikan ?? $dataLowongan,
            'syarat' => $request->syarat ?? $dataLowongan,
            'tipe_pekerjaan' => $request->tipe_pekerjaaan ?? $dataLowongan,
            'tipe_posisi' => $request->tipe_posisi ?? $dataLowongan,
            'fasilitas' => $request->fasilitas ?? $dataLowongan,
   
         ]
      );
      return redirect()->route(geral.data-lowongan.index);
      
   }
}
