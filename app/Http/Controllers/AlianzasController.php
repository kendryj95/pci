<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AlianzasController extends Controller
{
    public function index()
    {

    	$alianzas = DB::select("SELECT * FROM alianzas");

    	return view('alianzas.index', ["alianzas" => $alianzas]);
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
        	return redirect('/alianzas?success=1');
        } catch (Exception $e) {
        	DB::rollback();
        	return dd($e);
        }

        
    }

    public function editView($id)
    {
    	$alianza = DB::select("SELECT * FROM alianzas WHERE id=?", [$id]);

    	return view('alianzas.edit', ["alianza" => $alianza[0]]);
    }

    public function editar(Request $request)
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
        	DB::update("UPDATE alianzas SET nombre=?, domicilio=?, telefono=?, director=?, correo=?, estatus=? WHERE id=?", [$_POST['nombre'], $_POST['domicilio'], $_POST['telefono'], $_POST['director'], $_POST['correo'], $_POST['estatus'], $_POST['id_alianza']]);
        	DB::commit();
        	return redirect("/alianzas/edit/$_POST[id_alianza]?success=1");
        } catch (Exception $e) {
        	DB::rollback();
        	return dd($e);
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
