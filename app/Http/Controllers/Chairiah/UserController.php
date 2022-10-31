<?php

namespace App\Http\Controllers\Chairiah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chairiah\UserModel;

class UserController extends Controller
{
    public function apiLogin(Request $request){
        $username = $request -> username;

        $loginData = UserModel::where('username', $username)
                                ->first();

        return $loginData;
    }
}
