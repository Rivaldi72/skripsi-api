<?php

namespace App\Http\Controllers\Chairiah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index(){
        return view('content.pages.chairiah.index');
    }

    public function profilGudang(){
        return view('content.pages.chairiah.profil-gudang');
    }
}
