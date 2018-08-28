<?php

namespace App\Http\Controllers\Clientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ClientesController extends Controller
{
    public function index()
    {
    	$permisos = \Helper::permisosUsuario(session()->get('user_id'));
    	$clases_riesgo = DB::table('clases_riesgo')->get();
    	$grupos = DB::table('grupos')->get();

    	if (!\Helper::validarAcceso(2,10,session()->get('user_id'))) {
    	    \Helper::messageFlash('danger', 'Clientes', 'Acceso denegado.');
    	    return redirect('/');
    	}

    	$clientes = DB::table('clientes')
    				->select(DB::raw('clientes.*, IF(clientes.estatus=1,"SÍ","NO") AS activo, IF(clientes.id_grupo IS NULL,"Sin grupo",grupos.grupo) AS grupo, clases_riesgo.clase'))
    				->leftjoin('grupos', 'clientes.id_grupo', '=', 'grupos.id')
    				->leftjoin('clases_riesgo', 'clientes.id_clase_riesgo', '=', 'clases_riesgo.id')
    				->get();

    	return view('clientes.index', compact('permisos', 'clases_riesgo', 'grupos', 'clientes'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		"rfc" => "required",
    		"razon_social" => "required",
    		"alias" => "required",
    		"giro" => "required",
    		"correos_recibos" => "required",
    		"correos_facturas" => "required",
    	],
    	[
    		"rfc.required" => "RFC es un campo obligatorio.",
    		"razon_social.required" => "Razón social es un campo obligatorio.",
    		"alias.required" => "Alias es un campo obligatorio.",
    		"giro.required" => "Giro es un campo obligatorio.",
    		"correos_recibos.required" => "Debes proporcionar al menos un correo para recibir recibos.",
    		"correos_facturas.required" => "Debes proporcionar al menos un correo para recibir facturas.",
    	]);

    	DB::beginTransaction();

    	try {
    		$data = [];
    		$data["rfc"] = $request->rfc;
    		$data["razon_social"] = $request->razon_social;
    		$data["alias"] = $request->alias;
    		$data["giro"] = $request->giro;
    		$data["id_clase_riesgo"] = $request->clase_riesgo;
    		$data["id_grupo"] = $request->grupo;

    		DB::table('clientes')->insert($data);
    		$id_cliente = DB::getPdo()->lastInsertId();

    		$correos_recibos = explode(",", $request->correos_recibos);

    		foreach ($correos_recibos as $correo) {
    			$data = [];
    			$data["id_cliente"] = $id_cliente;
    			$data["correo"] = $correo;
    			DB::table('correos_clientes_recibos')->insert($data);
    		}

    		$correos_facturas = explode(",", $request->correos_facturas);

    		foreach ($correos_facturas as $correo) {
    			$data = [];
    			$data["id_cliente"] = $id_cliente;
    			$data["correo"] = $correo;
    			DB::table('correos_clientes_facturas')->insert($data);
    		}

    		DB::commit();

    		\Helper::messageFlash('success', 'Clientes', 'Se ha creado el cliente satisfactoriamente');
			return redirect()->back();

    	} catch (Exception $e) {
    		DB::rollback();
    		\Helper::messageFlash('danger', 'Clientes', 'Ha ocurrido un error inesperado. Vuelva a intentarlo por favor.');
			return redirect()->back();
    	}
    }
}
