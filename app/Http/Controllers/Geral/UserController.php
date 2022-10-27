<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\user;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
   public function userPage() {
      $dataUser= User::where('isAdmin',0)->get();
      $isLogin = Session::get('username') != null;
      if(!$isLogin) {
          return redirect()->route('geral.page.login');
      }
      return view('content.pages.geral.data-user.user', compact('dataUser'));
   }

   public function userPageApi() {
      $dataUser= User::all();
      return $dataUser;
   }

   public function userTambahPost(Request $request) {
      $registerData = new User();
      $registerData->username = $request->username;
      $registerData->password = bcrypt($request->password);
      $registerData->isAdmin = false;
      $registerData->nama_lengkap = $request->nama_lengkap;
      $registerData->email = $request->email;
      $registerData->umur = $request->umur;
      $registerData->jenis_kelamin = $request->jenis_kelamin;
      $registerData->no_hp = $request->no_hp;
      $registerData->keahlian = $request->keahlian;
      if($registerData){
               return response()->json(['pesan' => 'User Berhasil Didaftartan','status'=> 'Berhasil']);
      }else{
         return response()->json(['pesan' => 'User tidak berhasil di daftarkan data yang anda masukkan salah','status'=> 'gagal']);
      }
   }
}
