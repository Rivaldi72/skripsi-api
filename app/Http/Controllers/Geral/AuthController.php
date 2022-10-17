<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\user;
use Auth;

class AuthController extends Controller
{
    public function login() {
        return view('content.pages.geral.login');
     }

    public function apiLogin(Request $request){
        $credentials = $request->only('email', 'password');
        $loginData = Auth::attempt($credentials);
        if($loginData){
            return $loginData;
        }
        // $username = $request -> username;
        // $password = $request -> password;

        // $loginData = User::where('username', bcrypt($username))->where('password', bcrypt($password))->get();

       
    }
}
