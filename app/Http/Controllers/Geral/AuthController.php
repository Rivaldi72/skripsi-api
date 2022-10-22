<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\user;
use Illuminate\Support\Facades\Hash;
// use Auth;

class AuthController extends Controller
{
    public function login() {
        return view('content.pages.geral.login');
     }

    public function apiLogin(Request $request){
        
        $username = $request -> username;
        $password = $request->password;
        

        $loginData = User::where('username', $username)->first();

        if($loginData == null) {
            return response()->json(['pesan' => 'User yang anda masukkan tidak terdaftar']);
        } else {

            if(Hash::check($password, $loginData->password)) {
                if(!$loginData->isAdmin) {
                    return response()->json($loginData);
                } else{
                     return response()->json(['pesan' => 'User harus login melalui aplikasi Web']);
                }
               
            } else {
                return response()->json(['pesan' => 'Kata sandi yang anda masukkan salah']);
            }
        }
    }
} 
