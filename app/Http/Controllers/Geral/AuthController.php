<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\user;
use Illuminate\Support\Facades\Hash;
use Session;
// use Auth;

class AuthController extends Controller
{
    public function login() {
        $isLogin = Session::get('username') != null;
        if($isLogin) {
            return redirect()->route('geral.index');
        }
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

    public function loginPost(Request $request)
    {
        // dd($request->all());
        $username = $request->username;
        $password = $request->password;
        

        $loginData = User::where('username', $username)->first();

        if($loginData == null) {
            return redirect()->back()->withErrors('User tidak di temukan');
        } else {

            if(Hash::check($password, $loginData->password)) {
                if(!$loginData->isAdmin) {
                    return redirect()->back()->withErrors('User tidak di temukan');
                } 
                Session::put('username', $loginData->username);
                Session::put('nama_lengkap', $loginData->nama_lengkap);
                
                return redirect()->route('geral.index');
               
            } else {
                return redirect()->back()->withErrors('Katasandi yang anda masukkan salah');
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('geral.page.login');
    }
} 
