<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AreasController extends Controller
{
    public function index()
    {

        $permisos = \Helper::permisosUsuario(session()->get('user_id'));

        if (!\Helper::validarAcceso(1,4,session()->get('user_id'))) {
            \Helper::messageFlash('danger', 'Areas', 'Acceso denegado.');
            return redirect('/');
        }

    	$areas = DB::select("SELECT * FROM areas");

    	return view('configuracion.areas.index', ["areas" => $areas, "permisos_user" => $permisos]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
            'area' => 'required',
        ],
        [
            'area.required' => 'Nombre de area es un campo obligatorio, no puede quedar vacío.'
        ]);

        DB::beginTransaction();

        try {
        	DB::insert("INSERT INTO areas VALUES (null,?,null)", [$_POST['area']]);
        	DB::commit();
        	\Helper::messageFlash('success', 'Areas', 'Se ha creado el area satisfactoriamente.');
            return redirect('/areas');
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Areas', 'Ha ocurrido un error inesperado. Intentelo de nuevo por favor.');
            return redirect("/areas");
        }

        
    }

    public function editView($id)
    {
    	$area = DB::select("SELECT * FROM areas WHERE id=?", [$id]);

        $status = '';
        $data = '';

    	if ($area) {
    		$status = 200;
            $data = $area[0];
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
            'e_area' => 'required'
        ],
        [
            'e_area.required' => 'Nombre de area es un campo obligatorio, no puede quedar vacío.'
        ]);

        DB::beginTransaction();

        try {
        	DB::update("UPDATE areas SET area=? WHERE id=?", [$_POST['e_area'], $_POST['id_area']]);
        	DB::commit();
        	\Helper::messageFlash('success', 'Areas', 'Se ha editado el area satisfactoriamente.');
            return redirect('/areas');
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Areas', 'Ha ocurrido un error inesperado. Intentelo de nuevo por favor.');
            return redirect("/areas");
        }
    }

    public function delete()
    {
    	$id_areas = isset($_POST['values']) ? $_POST['values'] : false;
    	$status = '';

    	if ($id_areas) {
    		DB::beginTransaction();

    		try {
    			foreach ($id_areas as $id) {
    				
    				DB::delete("DELETE FROM areas WHERE id=?", [$id]);
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
