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

/**
 * Unauthenticated Routes
 */
Route::get('/', 'MainController@index')->name('index');

Route::get('/list', 'MainController@list')->name('list');

Route::get('/perfil', 'MainController@perfil')->name('perfil');

Route::get('/edit_roupa/{id}', 'MainController@edit')->name('edit_roupa');
Route::put('/update_roupa/{id}/edit', 'MainController@update')->name('update_roupa');


Route::get('/insert-roupa', 'MainController@form')->name('insert-form');
Route::post('/insert-roupa', 'MainController@insert')->name('insert-roupa');

/**
 *  Auth & Registration
 */
Auth::routes();

/**
 * Authenticated only Routes
 */
Route::get('/home', 'HomeController@index')->name('home');


/**
 * Backoffice Routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Backoffice', 'middleware' => ['auth', 'role:admin|manager']],
    function()
    {
        Route::get('/', 'DashboardController@index')->name('admin');

        Route::resource('user', 'UserController');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
