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
}
