<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa1(){
        return view('content.pages.gedmi.siswa.indexsiswa');
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
}
