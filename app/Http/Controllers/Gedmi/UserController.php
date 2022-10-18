<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\UserModel;


class UserController extends Controller
{
    
        public function login(Request $request) {
            $username = $request->username;
            $password = $request->password;

            // $loginData = userModel::where('username', $username)->where()
            // return view('content.pages.gedmi.login');
         }


}
