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


Route::prefix('dedi')->name('dedi.')->namespace('App\Http\Controllers\Dedi')->group(function () {
    Route::get('/daftarsiswa','UserController@daftarsiswaapi')->name('siswa.daftar');
    Route::get('/materiindex','MateriController@materiindexapi')->name('materi.index');
    Route::get('/pratikumindex','PratikumController@pratikumindexapi')->name('pratikum.index');
    Route::get('/latihanindex','LatihanController@latihanindexapi')->name('latihan.index');
});

Route::prefix('gedmi')->name('gedmi.')->namespace('App\Http\Controllers\Gedmi')->group(function () {

    Route::get('/guru/index','GuruController@apiIndex')->name('guru.index');
    Route::get('/siswa/indexsiswa','SiswaController@apiSiswa1')->name('siswa.index');
    Route::get('/mapel','MapelController@apiMapel')->name('mapel.index');
    Route::get('/guru/detail/{id}','GuruController@apiDetailGuru')->name('detail.guru');
    Route::get('/siswa/detail/{id}','SiswaController@apiDetailSiswa')->name('detail.siswa');

});
