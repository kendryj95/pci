<?php

namespace App\Helpers;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;
class Helper
{
    // Todos menos administrador
    public static function lessAdministrator($level){
      if ($level != 'Adm') {
        return true;
      }

      return false;
    }
    // Valida si es administrador
    public static function validateAdministrator($level){
      if ($level == 'Adm') {
        return true;
      }

      return false;
    }

    // Valida si es analista o administrador
    public static function validateAdminAnalyst($level){
      if ($level == 'Adm' || $level == 'Analista') {
        return true;
      }

      return false;
    }

    public static function validarAcceso($id_modulo,$id_submodulo,$id_usuario)
    {
      $acceso = DB::select("SELECT id FROM accesos_modulos_usuarios WHERE id_modulo=? AND id_submodulo=? AND id_usuario=? AND estatus=1", [$id_modulo, $id_submodulo, $id_usuario]);

      if ($acceso || session()->get('user_name') == 'admin') {
        return true;
      } else {
        return false;
      }
    }

    public static function countAccesoPerModulo($id_modulo,$id_usuario)
    {
      $count = DB::table('accesos_modulos_usuarios')
                  ->where('id_modulo', $id_modulo)
                  ->where('id_usuario', $id_usuario)
                  ->count();

      return $count;
    }

    // Crea un paginador
    public static function arrayPaginator($array, $request,$perPage = 50)
    {
      $page = 1;
      if (!empty($request->page)) {
        $page = $request->page;
      }
      $offset = ($page * $perPage) - $perPage;

      return new LengthAwarePaginator(array_slice($array, $offset, $perPage, true), count($array), $perPage, $page,
          ['path' => $request->url(), 'query' => $request->query()]);
    }


    // Creando session flash titulo y body
    public static function messageFlash($type = '',$title = '',$body = ''){
      $obj = new \stdClass;
      $obj->title = $title;
      $obj->body = $body;
      $obj->type = $type;
      \Session::flash('alert', $obj);
    }

}
