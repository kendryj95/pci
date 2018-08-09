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

// Route::get('/', 'SiteController@login');

Route::get('/', 'SiteController@home');

Route::get('/alianzas', 'AlianzasController@index');

Route::get('/alianzas/create', function (){ return view('alianzas.create'); });
Route::post('/alianzas/crear', 'AlianzasController@create');

Route::get('/alianzas/edit/{id}', 'AlianzasController@editView')->where(['id' => '[0-9]+']);
Route::post('/alianzas/editar', 'AlianzasController@editar');

Route::post('/alianzas/delete', 'AlianzasController@delete');

Route::get('/plazas', 'PlazasController@index');
Route::post('/plazas/crear', 'PlazasController@create');
Route::get('/plazas/edit/{id}', 'PlazasController@editView');
Route::post('/plazas/editar', 'PlazasController@editar');
Route::post('/plazas/delete', 'PlazasController@delete');

# -------------- LOGIN ------------------------

Route::post('/acceder', 'SiteController@acceder');

Route::get('/logout', 'SiteController@logout');

//Rutas con privilegios
/*Route::group(['middleware' =>'login'], function () { 
	Route::get('/dashboard', 'SiteController@home');
});
*/
# -------------- FIN LOGIN ---------------------

