<?php

namespace App\Http\Controllers\Chairiah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chairiah\UserModel;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('content.pages.chairiah.auth.login');
    }

    public function register() {
        return view('content.pages.chairiah.auth.register');
    }

    public function registerPost(Request $request)
    {
        $registerData = new UserModel();
        $registerData->username = $request->username;
        $registerData->email = $request->email;
        $registerData->password = brypt($request->password);
        $registerData->save();
        if($registerData) {
            return redirect()->route('chairiah.login', ['pesan' => 'Berhasil Mendaftar, Silahkan Login Untuk Mengisi Data']);
        }
    }
}
