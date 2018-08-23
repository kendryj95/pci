<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

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

    public function cloneAccess(Request $request)
    {
        $msgs = [
          "user_acce.required" => "Debes seleccionar el usuario que quieres clonar los accesos."
        ];
        // Validamos
        $v = Validator::make($request->all(), [
            'user_acce' => 'required'
        ], $msgs);


        // Si hay errores retornamos a la pantalla anterior con los mensajes
        if ($v->fails())
        {
            \Helper::messageFlash('danger', 'Permisos', 'Debes seleccionar el usuario que quieres clonar los accesos.');
            return redirect()->back();
        }

        $accesos = DB::select("SELECT id_modulo FROM accesos_modulos_usuarios WHERE id_usuario=? AND estatus=1", [$request->user_acce]);

        $accesos_act = DB::select("SELECT id_modulo FROM accesos_modulos_usuarios WHERE id_usuario=? AND estatus=1", [$request->id_usuario]);

        $mis_accesos = [];

        if ($accesos_act) {

            foreach ($accesos_act as $acce) {
                $mis_accesos[] = $acce->id_modulo;
            }
        }

        if ($accesos) {
            DB::beginTransaction();

            try {
                $insert = [];

                foreach ($accesos as $acceso) {
                    if (!in_array($acceso->id_modulo, $mis_accesos)) {
                        
                        $insert[] = "($acceso->id_modulo, $request->id_usuario)";
                    }
                }

                if (count($insert)>0) {
                    $sql_insert = "INSERT INTO accesos_modulos_usuarios (id_modulo, id_usuario) VALUES " . implode(",", $insert);

                    DB::insert($sql_insert);
                    DB::commit();

                    \Helper::messageFlash('success', 'Accesos', 'Se ha clonado los accesos satisfactoriamente');
                } else {
                    \Helper::messageFlash('info', 'Accesos', 'Ya posee todos los accesos que intentas clonar.');
                }
                
                return redirect("/usuarios");

            } catch (Exception $e) {
                \Helper::messageFlash('danger', 'Accesos', 'Ha ocurrido un error inesperado. Intentelo de nuevo.');
                return redirect("/usuarios");
            }
        }
    }
}
