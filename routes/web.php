<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tiket','tiketController@index');
Route::post('tiket','tiketController@store');
Route::get('tiket/{tiket}','tiketController@show');
Route::put('tiket/{tiket}','tiketController@update');
Route::delete('tiket/{tiket}','tiketController@destroy');
Route::get('adddata',function(){
    DB::table('tiket')->insert([
        'tgl_transaksi' => '1990-02-12',
        'jenis_tiket' => '0',
        'stat' => '0',
        'kelas' => '0',
        'created_at'    => '2016-03-10 19:10:15',
        'updated_at'    => '2016-03-10 19:10:15'
    ]);
});
