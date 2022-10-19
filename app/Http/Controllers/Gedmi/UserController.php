<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gedmi\UserModel;
use App\Models\Gedmi\SiswaModel;
use Illuminate\Support\Facades\Hash;
// use Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        return view('content.pages.gedmi.login');
    }

    public function apiLogin(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $loginData = UserModel::where('username', $username)
                                ->first();
        if($loginData == null) {
            return response()->json(['pesan' => 'User yang anda masukkan tidak terdaftar']);
        } else {
            if(Hash::check($password, $loginData->password)) {
                if($loginData->role == 'siswa') {
                    $biodata = SiswaModel::where('id_user', $loginData->id)->first();
                    $loginData['biodata'] = $biodata;
                    return response()->json($loginData);
                }
                return response()->json($loginData);
            } else {
                return response()->json(['pesan' => 'Kata sandi yang anda masukkan salah']);
            }
        }
    }
}
