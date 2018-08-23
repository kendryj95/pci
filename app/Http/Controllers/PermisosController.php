<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PermisosController extends Controller
{
    public function index()
    {
    	$permisos = DB::select("SELECT
								m.id AS id_m, 
								m.modulo, 
								sm.submodulo, 
								sma.id AS id_sma, 
								sma.accion,
								(SELECT GROUP_CONCAT(u.usuario) FROM permisos_usuarios pu LEFT JOIN usuarios u ON pu.id_usuario=u.id WHERE pu.id_accion=sma.id AND pu.estatus=1 GROUP BY pu.id_accion) AS usuarios
								FROM modulos m 
								LEFT JOIN submodulos sm ON m.id=sm.id_modulo 
								LEFT JOIN submodulos_acciones sma ON sm.id=sma.id_submodulo");

    	$usuarios = DB::select("SELECT id, usuario FROM usuarios WHERE usuario <> 'admin'");
    	$modulos_submodulos_acciones = DB::select("SELECT m.id, m.modulo, GROUP_CONCAT(CONCAT(sm.submodulo,' - ',sma.accion,'/',sma.id) ORDER BY sma.id SEPARATOR ';') AS submodulos_acciones FROM modulos m LEFT JOIN submodulos sm ON m.id=sm.id_modulo LEFT JOIN submodulos_acciones sma ON sm.id=sma.id_submodulo GROUP BY m.id");

    	return view('configuracion.permisos.index', compact('permisos', 'usuarios', 'modulos_submodulos_acciones'));
    }

    public function store(Request $request)
    {
    	$exist = DB::select("SELECT id FROM permisos_usuarios WHERE id_usuario=?", [$request->id_usuario]);

    	DB::beginTransaction();

    	try {
    		if ($exist) {
    			DB::update("UPDATE permisos_usuarios SET estatus=0 WHERE id_usuario=?", [$request->id_usuario]);
    		} else {
    			if (!$request->perm) {
    				DB::update("UPDATE permisos_usuarios SET estatus=0 WHERE id_usuario=?", [$request->id_usuario]);
    			}
    		}

    		$insert = [];

    		if ($request->perm) {
    			foreach ($request->perm as $permiso) {
    				$insert[] = "($request->id_usuario,$permiso)";
    			}

    			$sql_insert = "INSERT INTO permisos_usuarios (id_usuario, id_accion) VALUES " . implode(",", $insert);

    			DB::insert($sql_insert);
    		}
    		
    		DB::commit();

    		\Helper::messageFlash('success', 'Permisos', 'Se ha asignado los permisos satisfactoriamente');
    		return redirect("/permisos");
    	} catch (Exception $e) {
    		\Helper::messageFlash('danger', 'Permisos', 'Ha ocurrido un error inesperado. Intentelo de nuevo.');
    		return redirect("/permisos");
    	}

    	
    }

    public function getPermUsuario($id)
    {
    	$permisos = DB::select("SELECT id_accion FROM permisos_usuarios WHERE id_usuario=? AND estatus=1", [$id]);

    	if (!$permisos) {
    		$permisos = [];
    	}

    	echo json_encode([
    		"permisos" => $permisos
    	]);
    }

    public function validar_permiso($id_accion, $id_usuario)
    {
    	$permiso = false;

    	$validar = DB::select("SELECT id FROM permisos_usuarios WHERE id_accion=? AND id_usuario=? AND estatus=1", [$id_accion, $id_usuario]);

    	if ($validar || session()->get('user_name') == 'admin') {
    		$permiso = true;
    	}

    	echo json_encode([
    		"permiso" => $permiso
    	]);

    }
}
