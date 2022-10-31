<?php

namespace App\Http\Controllers\Dedi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dedi\UserModel;
use App\Models\Dedi\MateriModel;
use App\Models\Dedi\PratikumModel;
use App\Models\Dedi\LatihanModel;
use App\Models\Dedi\MapelModel;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;

class UserController extends Controller
{
  public function dashboard(){

        // $data = UserModel::all()->toArray();
        // $data1 = MateriModel::all()->toArray();
        // $data2 = PratikumModel::all()->toArray();
        // $data3 = LatihanModel::all()->toArray();
        // $data4 = MapelModel::all()->toArray();

        // dd([
        //     $data,$data1,$data2,$data3,$data4
        // ]);

        return view('/content/pages/dedi/materi/dashboard');
    }

    public function daftarsiswa(){
        $siswa = UserModel::all();
        return view('/content/pages/dedi/user/daftar_siswa', compact('siswa'));
    }

    public function daftarsiswaapi(){
        $siswa = UserModel::all();

        return $siswa;
    }

    public function tambahsiswa(){


        return view('/content/pages/dedi/user/tambah_siswa');
    }



    public function tambahsiswapost(Request $request){
        $userData = new UserModel();
        $userData->name = $request->name;
        $userData->angkatan = $request->angkatan;
        $userData->tempat = $request->tempat;
        $userData->tanggal_lahir = $request->tanggal_lahir;
        $userData->alamat = $request->alamat;
        $userData->email = $request->email;
        $userData->password = bcrypt($request->password);
        $userData->save();
        return redirect()->route('dedi.siswa.daftar');
    }


    public function login()
    {
        return view('content.pages.dedi.user.login');
    }

    public function loginApi(Request $request){
        $email = $request ->email;
        $password = $request ->password;
        $loginData = UserModel::where('email', $email)
                                ->first();

       if($loginData == null) {
            return response()->json(['pesan' => 'Email yang anda masukkan tidak terdaftar']);
        } else {
            if(Hash::check($password, $loginData->password)) {
                return response()->json($loginData);
            } else {
                return response()->json(['pesan' => 'Kata sandi yang anda masukkan salah']);
            }
        }

    }
    public function siswadelete($id) {
            $user = UserModel::find($id);
            $user ->delete();
        return redirect()->route('dedi.siswa.daftar', ['message' => 'succes']);
    }

    public function loginPost(){
        $username = $request->username;
        $password = $request->password;
        $loginData = UserModel::where('username', $username)
                                ->first();
        if($loginData == null) {
         return redirect()->back()->withErrors('User Tidak Ditemukan');
        } else {
            if(Hash::check($password, $loginData->password)) {
                if($loginData->isAdmin) {
                 return redirect()->back()->withErrors('User Tidak Ditemukan');
                }
                Session::put('', $loginData->username);
                Session::put('nama', $loginData->nama);
                return response()->json($loginData);
            } else {
                return response()->json(['pesan' => 'Kata sandi yang anda masukkan salah']);
            }
        }
    }


}
