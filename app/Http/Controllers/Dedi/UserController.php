<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dedi\UserModel;
use App\Models\Dedi\MateriModel;
use App\Models\Dedi\PratikumModel;
use App\Models\Dedi\LatihanModel;
use App\Models\Dedi\MapelModel;

class UserController extends Controller
{
  public function dashboard(){

        // $data = UserModel::all()->toArray();
        // $data1 = MateriModel::all()->toArray();
        // $data2 = PratikumModel::all()->toArray();
        // $data3 = LatihanModel::all()->toArray();
        // $data4 = MapelModel::all()->toArray();

        // dd([
        //     $data,$data1,$data2,$data3,$data4
        // ]);

        return view('/content/pages/dedi/materi/dashboard');
    }
    public function daftarsiswa(){
        $siswa = UserModel::all();

        return view('/content/pages/dedi/user/daftar_siswa', compact('siswa'));
    }
    public function tambahsiswa(){


        return view('/content/pages/dedi/user/tambah_siswa');
    }

    public function tambahsiswapost(Request $request){
        UserModel::create($request->all());
        return redirect()->route('dedi.siswa.daftar');
    }
}
