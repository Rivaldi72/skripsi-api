<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function userPage() {
      $dataUser= User::all();
      return view('content.pages.geral.data-user.user', compact('dataUser'));
   }

   public function userPageApi() {
      $dataUser= User::all();
      return $dataUser;
   }

   public function userTambahPost(Request $request) {
      dd($request->all());
      $registerData = new User();
      $registerData->username = $request->username;
      $registerData->password = bcrypt($request->password);
      if($registerData){
               return response()->json(['pesan' => 'User Berhasil Didaftartan','status'=> 'Berhasil']);
      }else{
         return response()->json(['pesan' => 'User tidak berhasil di daftarkan data yang anda masukkan salah','status'=> 'gagal']);
      }
   }
}
