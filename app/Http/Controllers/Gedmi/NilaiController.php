<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function nilaiSiswa1(){
        return view('content.pages.gedmi.nilai.nilaisiswa');
    }
}
