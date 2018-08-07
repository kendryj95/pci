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

    	$sql = "SELECT * FROM admins WHERE usuario=:usuario AND password=:password";

    	$result = DB::select($sql, ['usuario' => $_REQUEST['user'], 'password' => md5($_REQUEST['pass'])]);

    	if ($result) {
	            $request->session()->put('nombre', $result[0]->nombres . ' ' . $result[0]->apellidos);
	            $request->session()->put('rol', 'A');

	            return redirect('/dashboard');
    	} else {
    		$sql = "SELECT * FROM login l INNER JOIN trabajadores t ON l.id_asoc=t.id_trabajador WHERE l.usuario=:usuario AND l.password=:password";

    		$result = DB::select($sql, ['usuario' => $_REQUEST['user'], 'password' => md5($_REQUEST['pass'])]);

    		if ($result) {
    			$request->session()->put('nombre', $result[0]->nombres . ' ' . $result[0]->apellidos);
    			$request->session()->put('rol', 'T');

    			return redirect('/dashboard');
    		} else {
    			return redirect('/?error=1');
    		}
    	}


    }

	public function logout(Request $request)
	{
		$request->session()->flush();
		   
        return redirect('/');
	}
}
