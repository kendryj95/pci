<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AccesosController extends Controller
{
    public function index()
    {
    	$accesos = DB::select("SELECT
								m.id AS id_m, 
								m.modulo,
								(SELECT GROUP_CONCAT(u.usuario) 
								FROM accesos_modulos_usuarios amu 
								LEFT JOIN usuarios u ON amu.id_usuario=u.id 
								WHERE amu.id_modulo=m.id 
								AND amu.estatus=1 
								GROUP BY amu.id_modulo) AS usuarios
								FROM modulos m");

    	$usuarios = DB::select("SELECT id, usuario FROM usuarios WHERE usuario <> 'admin'");

    	$modulos = DB::select("SELECT * FROM modulos");

    	return view('configuracion.accesos.index', compact('accesos', 'usuarios', 'modulos'));
    }

    public function store(Request $request)
    {
    	$exist = DB::select("SELECT id FROM accesos_modulos_usuarios WHERE id_usuario=?", [$request->id_usuario]);

    	DB::beginTransaction();

    	try {
    		if ($exist) {
    			DB::update("UPDATE accesos_modulos_usuarios SET estatus=0 WHERE id_usuario=?", [$request->id_usuario]);
    		} else {
    			if (!$request->accesos) {
    				DB::update("UPDATE accesos_modulos_usuarios SET estatus=0 WHERE id_usuario=?", [$request->id_usuario]);
    			}
    		}

    		$insert = [];

    		if ($request->accesos) {
    			foreach ($request->accesos as $acceso) {
    				$insert[] = "($acceso, $request->id_usuario)";
    			}

    			$sql_insert = "INSERT INTO accesos_modulos_usuarios (id_modulo, id_usuario) VALUES " . implode(",", $insert);

    			DB::insert($sql_insert);
    		}

    		DB::commit();

    		\Helper::messageFlash('success', 'Accesos', 'Se ha asignado los accesos satisfactoriamente');
    		return redirect("/accesos");
    	} catch (Exception $e) {
    		\Helper::messageFlash('danger', 'Accesos', 'Ha ocurrido un error inesperado. Intentelo de nuevo.');
    		return redirect("/accesos");
    	}

    	
    }

    public function getAccesoUsuario($id)
    {
    	$accesos = DB::select("SELECT id_modulo FROM accesos_modulos_usuarios WHERE id_usuario=? AND estatus=1", [$id]);

    	if (!$accesos) {
    		$accesos = [];
    	}

    	echo json_encode([
    		"accesos" => $accesos
    	]);
    }
}
