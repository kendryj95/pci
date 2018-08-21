<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PermisosController extends Controller
{
    public function index()
    {
    	$permisos = DB::select("SELECT m.modulo, sm.submodulo, sma.accion FROM modulos m LEFT JOIN submodulos sm ON m.id=sm.id_modulo LEFT JOIN submodulos_acciones sma ON sm.id=sma.id_submodulo");
    	$usuarios = DB::select("SELECT id, usuario FROM usuarios WHERE usuario <> 'admin'");
    	$modulos_submodulos_acciones = DB::select("SELECT m.id, m.modulo, GROUP_CONCAT(CONCAT(sm.submodulo,' - ',sma.accion,'/',sma.id) ORDER BY sma.id SEPARATOR ';') AS submodulos_acciones FROM modulos m LEFT JOIN submodulos sm ON m.id=sm.id_modulo LEFT JOIN submodulos_acciones sma ON sm.id=sma.id_submodulo GROUP BY m.id");

    	return view('permisos.index', compact('permisos', 'usuarios', 'modulos_submodulos_acciones'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'modulo' => 'required',
    		'modulo' => 'unique:modulos',
    		'submodulo' => 'required',
    		'submodulo' => 'unique:submodulos',
    		'accion' => 'required',
    		'accion' => 'unique:submodulos_acciones'
    	],
    	[
    		'modulo.required' => 'Nombre modulo es un campo obligatorio.',
    		'modulo.unique' => 'Nombre modulo ya existe.',
    		'submodulo.required' => 'Nombre submodulo es un campo obligatorio.',
    		'submodulo.unique' => 'Nombre submodulo ya existe.',
    		'accion.required' => 'Nombre accion es un campo obligatorio.',
    		'accion.unique' => 'Nombre accion ya existe.',
    	]);

    	DB::beginTransaction();

    	try {
    		DB::insert("INSERT INTO modulos VALUES (null,?,null)", [$request->modulo]);
    		$id_modulo = DB::getPdo()->lastInsertId();

    		DB::insert("INSERT INTO submodulos VALUES (null,?,?,null)", [$id_modulo, $request->submodulo]);
    		$id_submodulo = DB::getPdo()->lastInsertId();

    		DB::insert("INSERT INTO submodulos_acciones VALUES (null,?,?,null)", [$id_submodulo, $request->accion]);

    		DB::commit();
    		\Helper::messageFlash('success', 'Permisos', 'Se ha creado el permiso satisfactoriamente');
            return redirect("/permisos");
    	} catch (Exception $e) {
    		DB::rollback();
    		\Helper::messageFlash('danger', 'Permisos', 'Ha ocurrido un error inesperado. Intentelo de nuevo.');
            return redirect("/permisos");
    	}
    }
}
