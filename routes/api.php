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
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['middleware' => 'auth:api'], function(){
    Route::resource('roupa', 'RoupaController');

});


Route::resource('estacaoano', 'EstacaoAnoController');
Route::resource('marca', 'MarcaController');
Route::resource('tamanho', 'TamanhoController');
Route::resource('tipo', 'TipoController');
