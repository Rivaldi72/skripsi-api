<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\UserModel;
// use Auth;

class UserController extends Controller
{
    
        public function apiLogin(Request $request) {
            $username = $request->username;
            $loginData = UserModel::where('username', $username)
                                ->first();

                return $loginData;
               

                return view('content.pages.gedmi.login');
         }
}
