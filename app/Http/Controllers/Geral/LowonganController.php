<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index() {
        return view('content.pages.geral.index');
     }
    
     public function indexLowongan() {
        return view('content.pages.geral.data-lowongan.index');
     }
     public function tambahPage() {
      return view('content.pages.geral.data-lowongan.tambah');
   }
}
