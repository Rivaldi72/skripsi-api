<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\user;

class UserController extends Controller
{
    public function userPage() {
        $dataUser= User::all();
        return view('content.pages.geral.data-user.user', compact('dataUser'));
     }

     public function userPageApi() {
        $dataUser= User::all();
        return $dataUser;
     }
}
