<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Trabajadore;

class SiteController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function home()
    {
    	return view('dashboard');
    }

    public function acceder(Request $request)
    {

        $this->validate($request, [
            'usuario' => 'required',
            'pass' => 'required',
        ],
        [
            'usuario.required' => 'Usuario es un campo obligatorio, no puede quedar vacío.',
            'pass.required' => 'Contraseña es un campo obligatorio, no puede quedar vacío.',
        ]);

        $user = DB::select("SELECT id, usuario, correo, password FROM usuarios WHERE usuario=?", [$request->usuario]);

        if ($user) {
            if (\Hash::check($request->pass, $user[0]->password)) {
                $request->session()->put('user_id', $user[0]->id);
                $request->session()->put('user_name', $user[0]->usuario);
                $request->session()->put('user_correo', $user[0]->correo);

                return redirect('/');
            } else {
                return redirect()->back()->withErrors(['Contraseña incorrecta.']);
            }
        } else {
            return redirect()->back()->withErrors(['Usuario no registrado.']);
        }

    }

	public function logout(Request $request)
	{
		$request->session()->flush();
		   
        return redirect('/login');
	}
}
