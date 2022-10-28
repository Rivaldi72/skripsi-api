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


Route::prefix('chairiah')->name('chairiah.')->namespace('App\Http\Controllers\Chairiah')->group(function () {
    Route::get('/index','GudangController@apiIndex')->name('index');
    Route::post('/login','UserController@apiLogin')->name('login');
});

    Route::prefix('geral')->name('geral.')->namespace('App\Http\Controllers\Geral')->group(function () {
        Route::get('/', 'LowonganController@indexApi')->name('index');
        Route::get('/data-lowongan/index', 'LowonganController@indexLowonganApi')->name('index.lowongan');
        Route::get('/data-user/user', 'UserController@userPageApi')->name('index.user');
        Route::post('/login', 'AuthController@apiLogin')->name('api.login');
        Route::post('/data-user-tambah-post', 'UserController@userTambahPost')->name('api.tambah.user');
    });

Route::prefix('dedi')->name('dedi.')->namespace('App\Http\Controllers\Dedi')->group(function () {
    Route::get('/daftarsiswa','UserController@daftarsiswaapi')->name('siswa.daftar');
    Route::get('/materiindex/{id_mapel}','MateriController@materiindexapi')->name('materi.index');
    Route::get('/pratikumindex/{id_mapel}','PratikumController@pratikumindexapi')->name('pratikum.index');
    Route::get('/latihanindex/{id_mapel}','LatihanController@latihanindexapi')->name('latihan.index');
    Route::post('/login','UserController@loginApi')->name('login.api');
});

Route::prefix('gedmi')->name('gedmi.')->namespace('App\Http\Controllers\Gedmi')->group(function () {

    Route::get('/guru/index','GuruController@apiIndex')->name('guru.index');
    Route::get('/siswa/indexsiswa/{kelas}','SiswaController@apiSiswa1')->name('siswa.index');
    Route::get('/mapel/{id}','MapelController@apiMapel')->name('mapel.index');
    Route::get('/guru/detail/{id}','GuruController@apiDetailGuru')->name('detail.guru');
    Route::get('/siswa/detail/{id}','SiswaController@apiDetailSiswa')->name('detail.siswa');
    Route::post('/login','UserController@apiLogin')->name('user.login');
});
