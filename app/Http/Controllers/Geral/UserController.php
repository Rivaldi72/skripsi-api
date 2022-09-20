<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geral\user;

class UserController extends Controller
{
    public function userPage() {
        $dataUser= user::all();
        return view('content.pages.geral.data-user.user', compact('dataUser'));
     }
}
