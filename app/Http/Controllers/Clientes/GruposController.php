<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class GruposController extends Controller
{
    public function index()
    {
    	$permisos = \Helper::permisosUsuario(session()->get('user_id'));

    	if (!\Helper::validarAcceso(2,9,session()->get('user_id'))) {
    	    \Helper::messageFlash('danger', 'Grupos', 'Acceso denegado.');
    	    return redirect('/');
    	}

    	$grupos = DB::table('grupos')->get();

    	return view('clientes.grupos.index', compact('grupos', 'permisos'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		"grupo" => "required"
    	],
    	[
    		"grupo.required" => "Nombre de grupo es campo obligatorio."
    	]);

    	DB::beginTransaction();

    	try {
    		$data = [];
    		$data["grupo"] = $request->grupo;

    		DB::table('grupos')->insert($data);

    		DB::commit();

		    \Helper::messageFlash('success', 'Grupos', 'Se ha creado el grupo satisfactoriamente');
			return redirect()->back();
    	} catch (Exception $e) {
    		DB::rollback();
    		\Helper::messageFlash('danger', 'Grupos', 'Ha ocurrido un error inesperado. Vuelva a intentarlo por favor.');
			return redirect()->back();
    	}
    }

    public function edit($id)
    {
    	$grupo = DB::table('grupos')->where('id', $id)->first();

    	echo json_encode([
    		"data" => $grupo
    	]);
    }

    public function editStore(Request $request)
    {
    	$this->validate($request,[
    		"e_grupo" => "required"
    	],
    	[
    		"e_grupo.required" => "Nombre de grupo es campo obligatorio."
    	]);

    	DB::beginTransaction();

    	try {
    		$data = [];
    		$data["grupo"] = $request->e_grupo;

    		DB::table('grupos')->where('id', $request->id_grupo)->update($data);

    		DB::commit();

		    \Helper::messageFlash('success', 'Grupos', 'Se ha editado el grupo satisfactoriamente');
			return redirect()->back();
    	} catch (Exception $e) {
    		DB::rollback();
    		\Helper::messageFlash('danger', 'Grupos', 'Ha ocurrido un error inesperado. Vuelva a intentarlo por favor.');
			return redirect()->back();
    	}
    }

    public function delete(Request $request)
    {
    	$status = '';
    	if ($request->values) {
    		DB::beginTransaction();

    		try {
    			foreach ($request->values as $id_grupo) {
    				DB::table('grupos')->where('id', $id_grupo)->delete();
    			}

    			DB::commit();
    			$status = 200;
    		} catch (Exception $e) {
    			DB::rollback();
    			$status = 500;
    		}
    	}

    	echo json_encode([
    		"status" => $status
    	]);
    }
}
