<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class OficinasController extends Controller
{
    public function index()
    {

        if (!\Helper::validarAcceso(1,3,session()->get('user_id'))) {
            \Helper::messageFlash('danger', 'Oficinas', 'Acceso denegado.');
            return redirect('/');
        }

    	$oficinas = DB::select("SELECT o.*, a.nombre AS alianza, p.nombre AS plaza FROM oficinas o INNER JOIN alianzas a ON o.id_alianza=a.id INNER JOIN plazas p ON o.id_plaza=p.id");
        $alianzas = DB::select("SELECT id, nombre FROM alianzas");

    	return view('configuracion.oficinas.index', ["oficinas" => $oficinas, "alianzas" => $alianzas]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
            'nombre' => 'required',
            'alianza' => 'required',
            'plaza' => 'required',
            'domicilio' => 'required',
            'telefono' => 'required|numeric|min:7',
            'director' => 'required',
            'correo' => 'required|email'
        ],
        [
            'nombre.required' => 'Nombre de oficina es un campo obligatorio, no puede quedar vacío.',
            'alianza.required' => 'Alianza es un campo obligatorio.',
            'plaza.required' => 'Plaza es un campo obligatorio.',
            'domicilio.required' => 'Domicilio es un campo obligatorio, no puede quedar vacío.',
            'telefono.required' => 'Telefono es un campo obligatorio, no puede quedar vacío.',
            'telefono.numeric' => 'El telefono no es valido.',
            'telefono.min' => 'El telefono debe contener entre 7 y 12 dígitos.',
            'director.required' => 'Director de oficina es un campo obligatorio, no puede quedar vacío.',
            'correo.required' => 'Correo es un campo obligatorio, no puede quedar vacío.',
            'correo.email' => 'El correo electronico no es valido.'
        ]);

        DB::beginTransaction();

        try {
        	DB::insert("INSERT INTO oficinas VALUES (null,?,?,?,?,?,?,?,?,null)", [$_POST['alianza'], $_POST['plaza'], $_POST['nombre'], $_POST['domicilio'], $_POST['telefono'], $_POST['director'], $_POST['correo'], $_POST['estatus']]);
        	DB::commit();

            \Helper::messageFlash('success', 'Oficinas', 'Se ha creado la oficina satisfactoriamente.');
        	return redirect('/oficinas');
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Oficinas', 'Ha ocurrido un error inesperado. Intentelo de nuevo por favor.');
            return redirect("/oficinas");
        }

        
    }

    public function editView($id)
    {
    	$oficina = DB::select("SELECT o.*, a.id AS alianza, p.id AS plaza FROM oficinas o INNER JOIN alianzas a ON o.id_alianza=a.id INNER JOIN plazas p ON o.id_plaza=p.id WHERE o.id=?", [$id]);

        $plazas = DB::select("SELECT id, nombre FROM plazas WHERE id_alianza=?", [$oficina[0]->alianza]);

        $status = '';
        $data = '';

    	if ($oficina) {
    		$status = 200;
            $data = $oficina[0];
    	} else {
    		$status = 500;
    	}

        echo json_encode([
            "status" => $status,
            "plazas" => $plazas,
            "data" => $data
        ]);

    	
    }

    public function editar(Request $request)
    {
    	$this->validate($request, [
            'e_nombre' => 'required',
            'e_alianza' => 'required',
            'e_plaza' => 'required',
            'e_domicilio' => 'required',
            'e_telefono' => 'required|numeric|min:7',
            'e_director' => 'required',
            'e_correo' => 'required|email'
        ],
        [
            'e_nombre.required' => 'Nombre de oficina es un campo obligatorio, no puede quedar vacío.',
            'e_alianza.required' => 'Alianza es un campo obligatorio, no puede quedar vacío.',
            'e_plaza.required' => 'Plaza es un campo obligatorio, no puede quedar vacío.',
            'e_domicilio.required' => 'Domicilio es un campo obligatorio, no puede quedar vacío.',
            'e_telefono.required' => 'Telefono es un campo obligatorio, no puede quedar vacío.',
            'e_telefono.numeric' => 'El telefono no es valido.',
            'e_telefono.min' => 'El telefono debe contener entre 7 y 12 dígitos.',
            'e_director.required' => 'Director de alianza es un campo obligatorio, no puede quedar vacío.',
            'e_correo.required' => 'Correo es un campo obligatorio, no puede quedar vacío.',
            'e_correo.email' => 'El correo electronico no es valido.'
        ]);

        DB::beginTransaction();

        try {
        	DB::update("UPDATE oficinas SET id_alianza=?, id_plaza=?, oficina=?, domicilio=?, telefono=?, director=?, correo=?, estatus=? WHERE id=?", [$_POST['e_alianza'], $_POST['e_plaza'], $_POST['e_nombre'], $_POST['e_domicilio'], $_POST['e_telefono'], $_POST['e_director'], $_POST['e_correo'], $_POST['estatus'], $_POST['id_oficina']]);
        	DB::commit();
        	\Helper::messageFlash('success', 'Oficinas', 'Se ha editado la oficina satisfactoriamente.');
            return redirect('/oficinas');
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Oficinas', 'Ha ocurrido un error inesperado. Intentelo de nuevo por favor.');
            return redirect("/oficinas");
        }
    }

    public function delete()
    {
    	$id_oficinas = isset($_POST['values']) ? $_POST['values'] : false;
    	$status = '';

    	if ($id_oficinas) {
    		DB::beginTransaction();

    		try {
    			foreach ($id_oficinas as $id) {
    				
    				DB::delete("DELETE FROM oficinas WHERE id=?", [$id]);
    			}
    			DB::commit();

    			$status = 200;
    		} catch (Exception $e) {
    			DB::rollback();
    			$status = 500;
    		}
    	} else {
    		$status = 500;
    	}

    	echo json_encode([
    		"status" => $status
    	]);
    }

    public function getPlazas(Request $request)
    {
        $plazas = DB::select('SELECT id, nombre AS plaza FROM plazas WHERE id_alianza=?', [$request->alianza]);
        $status = '';
        $data = '';

        if ($plazas) {
            $data = $plazas;
            $status = 200;
        } else {
            $status = 500;
        }

        echo json_encode([
            "data" => $data,
            "status" => $status
        ]);
    }
}
