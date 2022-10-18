<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\UserModel;
use Auth;

class UserController extends Controller
{
    
        public function apiLogin(Request $request) {
            $credentials = $request->only('username', 'password');
            $loginData = Auth::attempt($credentials);
            if ($loginData) {

                return $loginData;
            }
               

            // return view('content.pages.gedmi.login');
         }
}
