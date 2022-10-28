<?php

namespace App\Http\Controllers\Chairiah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chairiah\UserModel;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
    public function login() {
        return view('content.pages.chairiah.auth.login');
    }

    public function loginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $loginData = UserModel::where('email', $email)
                                ->first();
        if($loginData == null) {
            return redirect()->back()->withErrors('email tidak ditemukan');
        } else {
            if(Hash::check($password, $loginData->password)) {
                Session::put('username', $loginData->username);
                Session::put('email', $loginData->email);
                return redirect()->route('chairiah.index');
            } else {
                return redirect()->back()->withErrors('Kata sandi yang anda masukkan salah');
            }
        }
    }

    public function register() {
        return view('content.pages.chairiah.auth.register');
    }

    public function registerPost(Request $request)
    {
        $registerData = new UserModel();
        $registerData->username = $request->username;
        $registerData->email = $request->email;
        $registerData->password = bcrypt($request->password);
        $registerData->save();
        if($registerData) {
            return redirect()->route('chairiah.login', ['pesan' => 'Berhasil Mendaftar, Silahkan Login Untuk Mengisi Data']);
        }
    }
}
