<?php

namespace App\Http\Controllers\Geral;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function dashboard()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/pages/geral/dashboard', ['pageConfigs' => $pageConfigs]);
    }
}
