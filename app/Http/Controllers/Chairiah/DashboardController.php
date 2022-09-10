<?php

namespace App\Http\Controllers\Chairiah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $pageConfigs = ['pageHeader' => false];
        return view('/content/pages/chairiah/dashboard', ['pageConfigs' => $pageConfigs]);
    }
}
