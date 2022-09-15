<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        return view('content.pages.gedmi.guru.index');
    }

    public function tambahGuru(){
        return view('content.pages.gedmi.guru.create');
    }
    public function editGuru(){
        return view('content.pages.gedmi.guru.edit');
    }
    public function detailGuru(){
        return view('content.pages.gedmi.guru.detail');
    }
    
}
