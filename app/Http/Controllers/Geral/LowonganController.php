<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index() {
        return view('pages.geral.index');
     }
    
     public function indexLowongan() {
        return view('pages.geral.data-lowongan.index');
     }
     public function tambahPage() {
      return view('pages.geral.data-lowongan.tambah');
   }
}
