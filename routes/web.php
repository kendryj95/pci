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

	// Route::group(['middleware' =>'configuracion'], function () { 

		########### CONFIGURACIÓN - ALIANZAS ##################

		Route::get('/alianzas', 'Configuracion\AlianzasController@index');
		Route::post('/alianzas/crear', 'Configuracion\AlianzasController@create');
		Route::get('/alianzas/edit/{id}', 'Configuracion\AlianzasController@editView')->where(['id' => '[0-9]+']);
		Route::post('/alianzas/editar', 'Configuracion\AlianzasController@editar');
		Route::post('/alianzas/delete', 'Configuracion\AlianzasController@delete');

		####################### FIN ############################

		########### CONFIGURACIÓN - PLAZAS ##################

		Route::get('/plazas', 'Configuracion\PlazasController@index');
		Route::post('/plazas/crear', 'Configuracion\PlazasController@create');
		Route::get('/plazas/edit/{id}', 'Configuracion\PlazasController@editView')->where(['id' => '[0-9]+']);
		Route::post('/plazas/editar', 'Configuracion\PlazasController@editar');
		Route::post('/plazas/delete', 'Configuracion\PlazasController@delete');

		####################### FIN ############################

		########### CONFIGURACIÓN - OFICINAS ##################

		Route::get('/oficinas', 'Configuracion\OficinasController@index');
		Route::post('/oficinas/crear', 'Configuracion\OficinasController@create');
		Route::get('/oficinas/edit/{id}', 'Configuracion\OficinasController@editView')->where(['id' => '[0-9]+']);
		Route::post('/oficinas/editar', 'Configuracion\OficinasController@editar');
		Route::post('/oficinas/delete', 'Configuracion\OficinasController@delete');
		Route::get('/oficinas/getPlazas', 'Configuracion\OficinasController@getPlazas');

		####################### FIN ############################

		########### CONFIGURACIÓN - AREAS ##################

		Route::get('/areas', 'Configuracion\AreasController@index');
		Route::post('/areas/crear', 'Configuracion\AreasController@create');
		Route::get('/areas/edit/{id}', 'Configuracion\AreasController@editView')->where(['id' => '[0-9]+']);
		Route::post('/areas/editar', 'Configuracion\AreasController@editar');
		Route::post('/areas/delete', 'Configuracion\AreasController@delete');

		####################### FIN ############################

		########### CONFIGURACIÓN - PUESTOS ##################

		Route::get('/puestos', 'Configuracion\PuestosController@index');
		Route::post('/puestos/crear', 'Configuracion\PuestosController@create');
		Route::get('/puestos/edit/{id}', 'Configuracion\PuestosController@editView')->where(['id' => '[0-9]+']);
		Route::post('/puestos/editar', 'Configuracion\PuestosController@editar');
		Route::post('/puestos/delete', 'Configuracion\PuestosController@delete');

		####################### FIN ############################

		########### CONFIGURACIÓN - USUARIOS ##################

		Route::get('/usuarios', 'Configuracion\UsuariosController@index');
		Route::post('/usuarios/crear', 'Configuracion\UsuariosController@create');
		Route::get('/usuarios/edit/{id}', 'Configuracion\UsuariosController@editView')->where(['id' => '[0-9]+']);
		Route::post('/usuarios/editar', 'Configuracion\UsuariosController@editar');
		Route::post('/usuarios/editarPass', 'Configuracion\UsuariosController@editarPass');
		Route::post('/usuarios/delete', 'Configuracion\UsuariosController@delete');
		Route::get('/usuarios/getInfo/{accion}/{id}', 'Configuracion\UsuariosController@getInfo');

		####################### FIN ############################

		########### CONFIGURACIÓN - PERMISOS ##################

		Route::get('/permisos', 'Configuracion\PermisosController@index');
		Route::post('/permisos/crear', 'Configuracion\PermisosController@store');
		Route::get('/permisos/getPermUsuario/{id}', 'Configuracion\PermisosController@getPermUsuario');
		Route::get('/permisos/validarPerm/{id_accion}/{id_usuario}', 'Configuracion\PermisosController@validar_permiso');
		Route::get('/permisos/usersWithPermAndAccess/{id}', 'Configuracion\PermisosController@usersWithPermAndAccess');
		Route::post('/permisos/clonePermits', 'Configuracion\PermisosController@clonePermits');

		####################### FIN ############################

		########### CONFIGURACIÓN - ACCESOS ##################

		Route::get('/accesos', 'Configuracion\AccesosController@index');
		Route::post('/accesos/crear', 'Configuracion\AccesosController@store');
		Route::get('/accesos/getAccesoUsuario/{id}', 'Configuracion\AccesosController@getAccesoUsuario');
		Route::get('/accesos/validarPerm/{id_accion}/{id_usuario}', 'Configuracion\AccesosController@validar_permiso');
		Route::post('/accesos/cloneAccess', 'Configuracion\AccesosController@cloneAccess');

		####################### FIN ############################

		########### CLIENTES - GRUPOS ##################

		Route::get('/clientes/grupos', 'Clientes\GruposController@index');
		Route::post('/clientes/grupos/crear', 'Clientes\GruposController@store');
		Route::get('/clientes/grupos/edit/{id}', 'Clientes\GruposController@edit');
		Route::post('/clientes/grupos/editar', 'Clientes\GruposController@editStore');
		Route::post('/clientes/grupos/delete', 'Clientes\GruposController@delete');

		####################### FIN ############################

		########### CLIENTES - CLIENTES ##################

		Route::get('/clientes', 'Clientes\ClientesController@index');
		Route::post('/clientes/crear', 'Clientes\ClientesController@store');
		Route::get('/clientes/edit/{id}', 'Clientes\ClientesController@edit');
		Route::post('/clientes/editar', 'Clientes\ClientesController@storeEdit');
		Route::post('/clientes/delete', 'Clientes\ClientesController@delete');

		####################### FIN ############################
	// });
});