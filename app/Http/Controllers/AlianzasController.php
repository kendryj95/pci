<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AlianzasController extends Controller
{
    public function index()
    {

    	$alianzas = DB::select("SELECT * FROM alianzas");

    	return view('configuracion.alianzas.index', ["alianzas" => $alianzas]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
            'nombre' => 'required',
            'domicilio' => 'required',
            'telefono' => 'required|numeric|min:7',
            'director' => 'required',
            'correo' => 'required|email'
        ],
        [
            'nombre.required' => 'Nombre de alianza es un campo obligatorio, no puede quedar vacío.',
            'domicilio.required' => 'Domicilio es un campo obligatorio, no puede quedar vacío.',
            'telefono.required' => 'Telefono es un campo obligatorio, no puede quedar vacío.',
            'telefono.numeric' => 'El telefono no es valido.',
            'telefono.min' => 'El telefono debe contener entre 7 y 12 dígitos.',
            'director.required' => 'Director de alianza es un campo obligatorio, no puede quedar vacío.',
            'correo.required' => 'Correo es un campo obligatorio, no puede quedar vacío.',
            'correo.email' => 'El correo electronico no es valido.'
        ]);

        DB::beginTransaction();

        try {
        	DB::insert("INSERT INTO alianzas VALUES (null,?,?,?,?,?,?)", [$_POST['nombre'], $_POST['domicilio'], $_POST['telefono'], $_POST['director'], $_POST['correo'], $_POST['estatus']]);
        	DB::commit();
            \Helper::messageFlash('success', 'Alianzas', 'Se ha creado la alianza satisfactoriamente');
        	return redirect('/alianzas');
        } catch (Exception $e) {
        	DB::rollback();
        	return dd($e);
        }

        
    }

    public function editView($id)
    {
    	$alianza = DB::select("SELECT * FROM alianzas WHERE id=?", [$id]);
        $status = '';
        $data = '';

    	if ($alianza) {
    		$status = 200;
            $data = $alianza[0];
    	} else {
    		$status = 500;
    	}

        echo json_encode([
            "status" => $status,
            "data" => $data
        ]);

    	
    }

    public function editar(Request $request)
    {
    	$this->validate($request, [
            'e_nombre' => 'required',
            'e_domicilio' => 'required',
            'e_telefono' => 'required|numeric|min:7',
            'e_director' => 'required',
            'e_correo' => 'required|email'
        ],
        [
            'e_nombre.required' => 'Nombre de alianza es un campo obligatorio, no puede quedar vacío.',
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
        	DB::update("UPDATE alianzas SET nombre=?, domicilio=?, telefono=?, director=?, correo=?, estatus=? WHERE id=?", [$_POST['e_nombre'], $_POST['e_domicilio'], $_POST['e_telefono'], $_POST['e_director'], $_POST['e_correo'], $_POST['estatus'], $_POST['id_alianza']]);
        	DB::commit();

            \Helper::messageFlash('success', 'Alianzas', 'Se ha editado la alianza satisfactoriamente');
        	return redirect("/alianzas");
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Alianzas', 'Ha ocurrido un error inesperado. Vuelva a intentarlo por favor');
            return redirect("/alianzas");
        }
    }

    public function delete()
    {
    	$id_alianzas = isset($_POST['values']) ? $_POST['values'] : false;
    	$status = '';

    	if ($id_alianzas) {
    		DB::beginTransaction();

    		try {
    			foreach ($id_alianzas as $id) {
    				
    				DB::delete("DELETE FROM alianzas WHERE id=?", [$id]);
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
}
