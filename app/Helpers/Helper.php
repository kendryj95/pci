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
