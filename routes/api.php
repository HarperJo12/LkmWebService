<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
* @Author Marcel 2019 *
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::group(['middleware' => 'auth:api'], function()
{
    Route::get('details', 'AuthController@details');
    Route::post('rstpassword', 'AuthController@resetPassword');
    Route::get('logout', 'AuthController@logout');

    Route::get('tiket','tiketController@index');
    Route::get('tiket/m/{tiket}','tiketController@indexMhs');
    Route::post('tiket','tiketController@store');
    Route::get('tiket/{tiket}','tiketController@show');
    Route::put('tiket/{tiket}','tiketController@update');
    Route::delete('tiket/{tiket}','tiketController@destroy');

    Route::get('pizin','pIzinController@index');
    Route::post('pizin','pIzinController@store');
    Route::get('pizin/{pizin}','pIzinController@show');
    Route::put('pizin/{pizin}','pIzinController@update');
    Route::delete('pizin/{pizin}','pIzinController@destroy');

    Route::get('tpiz','tPizController@index');
    Route::post('tpiz','tPizController@store');
    Route::get('tpiz/{tpiz}','tPizController@show');

    Route::get('tpuj','tPujController@index');
    Route::post('tpuj','tPujController@store');
    Route::get('tpuj/{tpuj}','tPujController@show');

    Route::get('tper','tPerController@index');
    Route::post('tper','tPerController@store');
    Route::get('tper/s/{tper}','tPerController@indexKjr');
    Route::get('tper/{tper}','tPerController@show');

    Route::get('tpsi','tPsiController@index');
    Route::post('tpsi','tPsiController@store');
    Route::get('tpsi/d/{tpsi}','tPsiController@indexDsb');
    Route::get('tpsi/k/{tpsi}','tPsiController@indexKjr');
    Route::get('tpsi/{tpsi}','tPsiController@show');

    Route::get('mhs','mahasiswaController@index');
    Route::post('mhs','mahasiswaController@store');
    Route::get('mhs/{mhs}','mahasiswaController@show');
    Route::put('mhs/{mhs}','mahasiswaController@update');
    Route::delete('mhs/{mhs}','mahasiswaController@destroy');

    Route::get('user','userController@index');
    Route::get('user/{user}','userController@show');
    Route::put('user/{user}','userController@update');
    Route::delete('user/{user}','userController@destroy');

    Route::get('dsn','dosenController@index');
    Route::post('dsn','dosenController@store');
    Route::get('dsn/{dsn}','dosenController@show');
    Route::put('dsn/{dsn}','dosenController@update');
    Route::delete('dsn/{dsn}','dosenController@destroy');

    Route::get('cs','csController@index');
    Route::post('cs','csController@store');
    Route::get('cs/{cs}','csController@show');
    Route::put('cs/{cs}','csController@update');
    Route::delete('cs/{cs}','csController@destroy');

    Route::get('jkd','jadkulDummyController@index');
    Route::post('jkd','jadkulDummyController@store');
    Route::get('jkd/{jkd}','jadkulDummyController@show');
    Route::post('jkd/m/{jkd}','jadkulDummyController@showJadKul');
    Route::put('jkd/{jkd}','jadkulDummyController@update');
    Route::delete('jkd/{jkd}','jadkulDummyController@destroy');

    Route::get('download/{file}','upDownloadController@download');
    Route::post('upload/{npm}','upDownloadController@upload');

    Route::get('reportDown/{file}','reportController@downReport');
    Route::post('report','reportController@getReport');

    Route::get('kjrs','kJrsController@index');
    Route::post('kjrs','kJrsController@store');
    Route::get('kjrs/{kjrs}','kJrsController@show');
    Route::put('kjrs/{kjrs}','kJrsController@update');
    Route::delete('kjrs/{kjrs}','kJrsController@destroy');
});
Route::post('user','userController@store');


