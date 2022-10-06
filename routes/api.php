<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


    Route::prefix('geral')->name('geral.')->namespace('App\Http\Controllers\Geral')->group(function () {
        Route::get('/', 'LowonganController@indexApi')->name('index');
        Route::get('/data-lowongan/index', 'LowonganController@indexLowonganApi')->name('index.lowongan');
        Route::get('/data-user/user', 'UserController@userPageApi')->name('index.user');
    });
    

