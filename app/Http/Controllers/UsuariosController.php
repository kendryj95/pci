<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class UsuariosController extends Controller
{
    public function index()
    {

        if (!\Helper::validarAcceso(1,6,session()->get('user_id'))) {
            \Helper::messageFlash('danger', 'Usuarios', 'Acceso denegado.');
            return redirect('/');
        }

    	$usuarios = DB::select("SELECT u.id, u.usuario, u.correo, IF(u.estatus=1,'Sí','No') AS estatus, a.area, p.puesto FROM usuarios u INNER JOIN areas a ON u.id_area=a.id INNER JOIN puestos p ON u.id_puesto=p.id WHERE u.usuario <> 'admin'");

        $alianzas = DB::select("SELECT id, nombre FROM alianzas");
        $areas = DB::select("SELECT id, area FROM areas");

    	return view('configuracion.usuarios.index', ["usuarios" => $usuarios, "alianzas" => $alianzas, "areas" => $areas]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
            'alianza' => 'required',
            'plaza' => 'required',
            'area' => 'required',
            'puesto' => 'required',
            'usuario' => 'required',
            'correo' => 'required|email',
            'pass' => 'required',
        ],
        [
            'alianza.required' => 'alianza es un campo obligatorio, no puede quedar vacío.',
            'plaza.required' => 'Plaza es un campo obligatorio, no puede quedar vacío.',
            'area.required' => 'Área es un campo obligatorio, no puede quedar vacío.',
            'puesto.required' => 'Puesto es un campo obligatorio, no puede quedar vacío.',
            'usuario.required' => 'Nombre usuario es un campo obligatorio, no puede quedar vacío.',
            'correo.required' => 'Correo es un campo obligatorio, no puede quedar vacío.',
            'correo.email' => 'Correo invalido.',
            'pass.required' => 'Contraseña es un campo obligatorio, no puede quedar vacío.'
        ]);

        DB::beginTransaction();

        try {

            $user = DB::select("SELECT id FROM usuarios WHERE usuario=?", [$_POST['usuario']]);
            $correo = DB::select("SELECT id FROM usuarios WHERE correo=?", [$_POST['correo']]);

            if (!$user && !$correo) {
                DB::insert("INSERT INTO usuarios VALUES (null,?,?,?,?,?,?,?,null,?)", [$_POST['alianza'], $_POST['plaza'], $_POST['area'], $_POST['puesto'], $_POST['usuario'], $_POST['correo'], \Hash::make($_POST['pass']), $_POST['estatus']]);
                DB::commit();
                \Helper::messageFlash('success', 'Usuarios', 'Se ha creado el usuario satisfactoriamente.');
                return redirect('/usuarios');
            } else {
                \Helper::messageFlash('danger', 'Usuarios', 'El usuario y/o correo ya existe.');
                return redirect('/usuarios');
            }
        	
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Usuarios', 'Ha ocurrido un error inesperado. Intentelo de nuevo por favor.');
            return redirect("/usuarios");
        }

        
    }

    public function editView($id)
    {
    	$usuario = DB::select("SELECT id, id_alianza AS alianza, id_plaza AS plaza, id_area AS area, id_puesto AS puesto, usuario, correo, estatus FROM usuarios WHERE id=?", [$id]);
        $plazas = '';
        $puestos = '';

        $status = '';
        $data = '';

    	if ($usuario) {

            $plazas = DB::select("SELECT id, nombre FROM plazas WHERE id_alianza=?", [$usuario[0]->alianza]);
            $puestos = DB::select("SELECT id, puesto FROM puestos WHERE id_area=?", [$usuario[0]->area]);

    		$status = 200;
            $data = $usuario[0];
    	} else {
    		$status = 500;
    	}

        echo json_encode([
            "status" => $status,
            "data" => $data,
            "plazas" => $plazas,
            "puestos" => $puestos
        ]);

    	
    }

    public function editar(Request $request)
    {
    	$this->validate($request, [
            'e_alianza' => 'required',
            'e_plaza' => 'required',
            'e_area' => 'required',
            'e_puesto' => 'required',
            'e_usuario' => 'required',
            'e_correo' => 'required|email',
            'e_pass' => 'required',
        ],
        [
            'e_alianza.required' => 'alianza es un campo obligatorio, no puede quedar vacío.',
            'e_plaza.required' => 'Plaza es un campo obligatorio, no puede quedar vacío.',
            'e_area.required' => 'Área es un campo obligatorio, no puede quedar vacío.',
            'e_puesto.required' => 'Puesto es un campo obligatorio, no puede quedar vacío.',
            'e_usuario.required' => 'Nombre usuario es un campo obligatorio, no puede quedar vacío.',
            'e_correo.required' => 'Correo es un campo obligatorio, no puede quedar vacío.',
            'e_correo.email' => 'Correo invalido.',
            'e_pass.required' => 'Contraseña es un campo obligatorio, no puede quedar vacío.'
        ]);

        DB::beginTransaction();

        try {

            $user = DB::select("SELECT id FROM usuarios WHERE usuario=? AND id <> ?", [$_POST['e_usuario'], $_POST['id_usuario']]);

            $correo = DB::select("SELECT id FROM usuarios WHERE correo=? AND id <> ?", [$_POST['e_correo'], $_POST['id_usuario']]);

            if (!$user && !$correo) {
                DB::update("UPDATE usuarios SET id_alianza=?, id_plaza=?, id_area=?, id_puesto=?, usuario=?, correo=?, password=?, estatus=? WHERE id=?", [$_POST['e_alianza'], $_POST['e_plaza'], $_POST['e_area'], $_POST['e_puesto'], $_POST['e_usuario'], $_POST['e_correo'], $_POST['e_pass'], $_POST['estatus'], $_POST['id_usuario']]);

                DB::commit();
                \Helper::messageFlash('success', 'Usuarios', 'Se ha editado el usuario satisfactoriamente.');
                return redirect('/usuarios');
            } else {
                \Helper::messageFlash('danger', 'Usuarios', 'El usuario y/o correo ya existe.');
                return redirect('/usuarios');
            }

        	
        } catch (Exception $e) {
        	DB::rollback();
        	\Helper::messageFlash('danger', 'Usuarios', 'Ha ocurrido un error inesperado. Intentelo de nuevo por favor.');
            return redirect("/usuarios");
        }
    }

    public function delete()
    {
    	$id_usuarios = isset($_POST['values']) ? $_POST['values'] : false;
    	$status = '';

    	if ($id_usuarios) {
    		DB::beginTransaction();

    		try {
    			foreach ($id_usuarios as $id) {
    				
    				DB::delete("DELETE FROM usuarios WHERE id=?", [$id]);
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

    public function getInfo($accion, $id)
    {
        $data = '';
        $status = '';
        switch ($accion) {
            case 1: # Obtener plazas
                $data = DB::select("SELECT id, nombre FROM plazas WHERE id_alianza=?", [$id]);

                $status = 200;
                
                break;
            
            case 2: // Obtener puestos
                $data = DB::select("SELECT id, puesto FROM puestos WHERE id_area=?", [$id]);

                $status = 200;

                break;
        }

        echo json_encode([
            "data" => $data,
            "status" => $status
        ]);
    }

    public function editarPass(Request $request)
    {
            $this->validate($request, [
                'pass_new' => 'required',
                'pass_new_conf' => 'required',
            ],
            [
                'pass_new.required' => 'Nueva contraseña es un campo obligatorio, no puede quedar vacío.',
                'pass_new_conf.required' => 'Confirmar nueva contraseña es un campo obligatorio, no puede quedar vacío.',
            ]);

            if ($request->pass_new == $request->pass_new_conf) {
                DB::beginTransaction();

                try {
                    DB::update("UPDATE usuarios SET password=? WHERE id=?", [\Hash::make($request->pass_new), $request->id_usuario_pass]);
                    DB::commit();

                    \Helper::messageFlash('success', 'Usuarios', 'Se ha editado la contraseña del usuario satisfactoriamente.');
                    return redirect('/usuarios');
                } catch (Exception $e) {
                    DB::rollback();
                    \Helper::messageFlash('danger', 'Usuarios', 'Ha ocurrido un error inesperado. Por favor vuelva a intentarlo.');
                    return redirect('/usuarios');
                }
            } else {
                \Helper::messageFlash('danger', 'Usuarios', 'Las nuevas contraseñas no coinciden.');
                return redirect('/usuarios');
            }

            
    }
}
