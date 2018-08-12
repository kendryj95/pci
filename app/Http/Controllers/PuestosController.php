<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PuestosController extends Controller
{
    public function index()
    {

    	$puestos = DB::select("SELECT * FROM puestos");

        $areas = DB::select("SELECT * FROM areas");

    	return view('configuracion.puestos.index', ["puestos" => $puestos, "areas" => $areas]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
            'puesto' => 'required',
        ],
        [
            'puesto.required' => 'Nombre de puesto es un campo obligatorio, no puede quedar vacío.'
        ]);

        DB::beginTransaction();

        try {
        	DB::insert("INSERT INTO puestos VALUES (null,?,?,null)", [$_POST['area'], $_POST['puesto']]);
        	DB::commit();
        	\Helper::messageFlash('success', 'Puestos', 'Se ha creado el puesto satisfactoriamente.');
            return redirect('/puestos');
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Puestos', 'Ha ocurrido un error inesperado. Intentelo de nuevo por favor.');
            return redirect("/puestos");
        }

        
    }

    public function editView($id)
    {
    	$puesto = DB::select("SELECT * FROM puestos WHERE id=?", [$id]);

        $status = '';
        $data = '';

    	if ($puesto) {
    		$status = 200;
            $data = $puesto[0];
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
            'e_puesto' => 'required'
        ],
        [
            'e_puesto.required' => 'Nombre de puesto es un campo obligatorio, no puede quedar vacío.'
        ]);

        DB::beginTransaction();

        try {
        	DB::update("UPDATE puestos SET id_area=?, puesto=? WHERE id=?", [$_POST['e_area'], $_POST['e_puesto'], $_POST['id_puesto']]);
        	DB::commit();
        	\Helper::messageFlash('success', 'Puestos', 'Se ha editado el puesto satisfactoriamente.');
            return redirect('/puestos');
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Puestos', 'Ha ocurrido un error inesperado. Intentelo de nuevo por favor.');
            return redirect("/puestos");
        }
    }

    public function delete()
    {
    	$id_puestos = isset($_POST['values']) ? $_POST['values'] : false;
    	$status = '';

    	if ($id_puestos) {
    		DB::beginTransaction();

    		try {
    			foreach ($id_puestos as $id) {
    				
    				DB::delete("DELETE FROM puestos WHERE id=?", [$id]);
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
