<?php

namespace App\Http\Controllers\Chairiah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('content.pages.chairiah.auth.login');
    }

    public function register(){
        return view('content.pages.chairiah.auth.register');
    }
}
