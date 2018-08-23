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

Route::get('/login', 'SiteController@login');
Route::post('/login/acceder', 'SiteController@acceder');


//Rutas con privilegios
Route::group(['middleware' =>'login'], function () { 
	Route::get('/logout', 'SiteController@logout');

	Route::get('/', 'SiteController@home');

	Route::group(['middleware' =>'configuracion'], function () { 

		########### CONFIGURACIÓN - ALIANZAS ##################

		Route::get('/alianzas', 'AlianzasController@index');
		Route::post('/alianzas/crear', 'AlianzasController@create');
		Route::get('/alianzas/edit/{id}', 'AlianzasController@editView')->where(['id' => '[0-9]+']);
		Route::post('/alianzas/editar', 'AlianzasController@editar');
		Route::post('/alianzas/delete', 'AlianzasController@delete');

		####################### FIN ############################

		########### CONFIGURACIÓN - PLAZAS ##################

		Route::get('/plazas', 'PlazasController@index');
		Route::post('/plazas/crear', 'PlazasController@create');
		Route::get('/plazas/edit/{id}', 'PlazasController@editView')->where(['id' => '[0-9]+']);
		Route::post('/plazas/editar', 'PlazasController@editar');
		Route::post('/plazas/delete', 'PlazasController@delete');

		####################### FIN ############################

		########### CONFIGURACIÓN - OFICINAS ##################

		Route::get('/oficinas', 'OficinasController@index');
		Route::post('/oficinas/crear', 'OficinasController@create');
		Route::get('/oficinas/edit/{id}', 'OficinasController@editView')->where(['id' => '[0-9]+']);
		Route::post('/oficinas/editar', 'OficinasController@editar');
		Route::post('/oficinas/delete', 'OficinasController@delete');
		Route::get('/oficinas/getPlazas', 'OficinasController@getPlazas');

		####################### FIN ############################

		########### CONFIGURACIÓN - AREAS ##################

		Route::get('/areas', 'AreasController@index');
		Route::post('/areas/crear', 'AreasController@create');
		Route::get('/areas/edit/{id}', 'AreasController@editView')->where(['id' => '[0-9]+']);
		Route::post('/areas/editar', 'AreasController@editar');
		Route::post('/areas/delete', 'AreasController@delete');

		####################### FIN ############################

		########### CONFIGURACIÓN - PUESTOS ##################

		Route::get('/puestos', 'PuestosController@index');
		Route::post('/puestos/crear', 'PuestosController@create');
		Route::get('/puestos/edit/{id}', 'PuestosController@editView')->where(['id' => '[0-9]+']);
		Route::post('/puestos/editar', 'PuestosController@editar');
		Route::post('/puestos/delete', 'PuestosController@delete');

		####################### FIN ############################

		########### CONFIGURACIÓN - USUARIOS ##################

		Route::get('/usuarios', 'UsuariosController@index');
		Route::post('/usuarios/crear', 'UsuariosController@create');
		Route::get('/usuarios/edit/{id}', 'UsuariosController@editView')->where(['id' => '[0-9]+']);
		Route::post('/usuarios/editar', 'UsuariosController@editar');
		Route::post('/usuarios/editarPass', 'UsuariosController@editarPass');
		Route::post('/usuarios/delete', 'UsuariosController@delete');
		Route::get('/usuarios/getInfo/{accion}/{id}', 'UsuariosController@getInfo');

		####################### FIN ############################

		########### CONFIGURACIÓN - PERMISOS ##################

		Route::get('/permisos', 'PermisosController@index');
		Route::post('/permisos/crear', 'PermisosController@store');
		Route::get('/permisos/getPermUsuario/{id}', 'PermisosController@getPermUsuario');
		Route::get('/permisos/validarPerm/{id_accion}/{id_usuario}', 'PermisosController@validar_permiso');

		####################### FIN ############################

		########### CONFIGURACIÓN - ACCESOS ##################

		Route::get('/accesos', 'AccesosController@index');
		Route::post('/accesos/crear', 'AccesosController@store');
		Route::get('/accesos/getAccesoUsuario/{id}', 'AccesosController@getAccesoUsuario');
		Route::get('/accesos/validarPerm/{id_accion}/{id_usuario}', 'AccesosController@validar_permiso');

		####################### FIN ############################
	});
});