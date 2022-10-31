<?php

namespace App\Http\Controllers\Gedmi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    
        public function index(){
            $isLogin = Session::get('username') != null;
            if(!$isLogin) {
                return redirect()->route('gedmi.page.login');
            }
            return view('content.pages.gedmi.dashboard');
        }

    }

