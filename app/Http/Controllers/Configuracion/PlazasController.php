<?php

namespace App\Http\Controllers\Configuracion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class PlazasController extends Controller
{
    public function index()
    {

        $permisos = \Helper::permisosUsuario(session()->get('user_id'));

        if (!\Helper::validarAcceso(1,2,session()->get('user_id'))) {
            \Helper::messageFlash('danger', 'Plazas', 'Acceso denegado.');
            return redirect('/');
        }

    	$plazas = DB::select("SELECT a.nombre AS alianza, p.* FROM plazas p INNER JOIN alianzas a ON p.id_alianza=a.id");
        $alianzas = DB::select("SELECT id, nombre FROM alianzas");

    	return view('configuracion.plazas.index', ["plazas" => $plazas, "alianzas" => $alianzas, "permisos_user" => $permisos]);
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
            'nombre.required' => 'Nombre de plaza es un campo obligatorio, no puede quedar vacío.',
            'domicilio.required' => 'Domicilio es un campo obligatorio, no puede quedar vacío.',
            'telefono.required' => 'Telefono es un campo obligatorio, no puede quedar vacío.',
            'telefono.numeric' => 'El telefono no es valido.',
            'telefono.min' => 'El telefono debe contener entre 7 y 12 dígitos.',
            'director.required' => 'Director de plaza es un campo obligatorio, no puede quedar vacío.',
            'correo.required' => 'Correo es un campo obligatorio, no puede quedar vacío.',
            'correo.email' => 'El correo electronico no es valido.'
        ]);

        DB::beginTransaction();

        try {
        	DB::insert("INSERT INTO plazas VALUES (null,?,?,?,?,?,?,?,null)", [$_POST['alianza'], $_POST['nombre'], $_POST['domicilio'], $_POST['telefono'], $_POST['director'], $_POST['correo'], $_POST['estatus']]);
        	DB::commit();
            \Helper::messageFlash('success', 'Plazas', 'Se ha editado la plaza satisfactoriamente');
            return redirect("/plazas");
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Plazas', 'Ha ocurrido un error inesperado. Vuelva a intentarlo por favor');
            return redirect("/plazas");
        }

        
    }

    public function editView($id)
    {
    	$plaza = DB::select("SELECT a.id AS alianza, p.* FROM plazas p INNER JOIN alianzas a ON p.id_alianza=a.id WHERE p.id=?", [$id]);
        $status = '';
        $data = '';

    	if ($plaza) {
    		$status = 200;
            $data = $plaza[0];
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
        	DB::update("UPDATE plazas SET id_alianza=?, nombre=?, domicilio=?, telefono=?, director=?, correo=?, estatus=? WHERE id=?", [$_POST['alianza'], $_POST['e_nombre'], $_POST['e_domicilio'], $_POST['e_telefono'], $_POST['e_director'], $_POST['e_correo'], $_POST['estatus'], $_POST['id_plaza']]);
        	DB::commit();
        	\Helper::messageFlash('success', 'Plazas', 'Se ha editado la plaza satisfactoriamente');
            return redirect("/plazas");
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Plazas', 'Ha ocurrido un error inesperado. Vuelva a intentarlo por favor');
            return redirect("/plazas");
        }
    }

    public function delete()
    {
    	$id_plazas = isset($_POST['values']) ? $_POST['values'] : false;
    	$status = '';

    	if ($id_plazas) {
    		DB::beginTransaction();

    		try {
    			foreach ($id_plazas as $id) {
    				
    				DB::delete("DELETE FROM plazas WHERE id=?", [$id]);
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
