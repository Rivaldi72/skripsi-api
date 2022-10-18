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
        
        $username = $request -> username;
        

        $loginData = User::where('username', $username)->first();

        return $loginData;
       
    }
}
