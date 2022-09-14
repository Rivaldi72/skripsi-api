<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function dashboard(){


        return view('/content/pages/dedi/materi/dashboard');
    }
    public function daftarsiswa(){


        return view('/content/pages/dedi/user/daftar_siswa');
    }
    public function tambahsiswa(){


        return view('/content/pages/dedi/user/tambah_siswa');
    }
}
