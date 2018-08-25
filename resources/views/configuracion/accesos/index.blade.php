@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Accesos')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Accesos')
  @slot('last_page', 'Dashboard')

  @endcomponent

@endsection

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12">
      <div class="card">
          <div class="card-body">
              <a href="javascript:void(0)" onclick="asigAcceso()" class="btn btn-primary" title="Agregar"><i class="mdi mdi-plus-box mdi-18px"></i></a>&nbsp;
              <br><br>

              <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    <select name="" id="usuarios" class="form-control" onchange="cleanCheck(); filtrar(this.value)">
                      <option value="">Selecciona un usuario</option>
                      @foreach ($usuarios as $usuario)
                      <option value="{{$usuario->usuario}}" data-id="{{$usuario->id}}">{{$usuario->usuario}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table id="tableAccesos" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>MODULO</th>
                    <th>SUBMODULO</th>
                    <th>USUARIOS</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($accesos as $i => $acceso)
                      <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$acceso->modulo}}</td>
                        <td>{{$acceso->submodulo}}</td>
                        <td>{{$acceso->usuarios}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalCrearAccesos" tabindex="-1" role="dialog" aria-labelledby="modalCrearAccesosTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCrearAccesosTitle">Nuevo Acceso - <span id="nombre_usuario"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="accesos/crear" method="post" id="form_create_acceso">
             {{ csrf_field() }}

             <input type="hidden" name="id_usuario" id="id_usuario">



             <div id="accordionexample" class="accordion" role="tablist" aria-multiselectable="true">
              
              @foreach ($modulos as $modulo)

               <div class="card">
                 <div class="card-header" role="tab" id="headingOne">
                   <h5 class="mb-0">
                     <a data-toggle="collapse" data-parent="#accordionexample" href="#id_{{$modulo->id_modulo}}" aria-expanded="true" aria-controls="collapseexaOne">
                       {{$modulo->modulo}}
                     </a>
                   </h5>
                 </div>

                 <div id="id_{{$modulo->id_modulo}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                   <div class="card-body">
                     
                    @php

                    $submodulos = explode(';',$modulo->submodulos);

                    @endphp

                    @foreach ($submodulos as $subm)

                    @php
                      $submodulo = explode('/', $subm)[0];
                      $id_subm = explode('/', $subm)[1];
                    @endphp

                     
                     <div>
                       <input type="checkbox" id="mod_{{$id_subm}}" class="filled-in cleanCheck" name="accesos[]" value="{{$modulo->id_modulo}},{{$id_subm}}"> {{-- value: id_modulo,id_submodulo --}}
                       <label for="mod_{{$id_subm}}">{{$submodulo}}</label>
                     </div>

                     @endforeach

                    

                   </div>
                 </div>
               </div>

               @endforeach
               
             </div>
            
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="crearAcceso()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')

<script>
  var tableAccesos = '';
  const id_usuario = {{session()->get('user_id')}};
  $(document).ready(function(){
    var $tableAccesos = jQuery("#tableAccesos");
        tableAccesos = $tableAccesos.DataTable( {
       "aoColumnDefs": [ 
        // { "visible": false, "targets": 3 },   
        ],
      "language": {
        "decimal":        "",
        "emptyTable":     "Sin registros",
        "info":           "Mostrando de _START_ a _END_ registros de _TOTAL_ en total",
        "infoEmpty":      "Mostrando 0 de 0 de 0 registros",
        "infoFiltered":   "(filtrado desde _MAX_ registros en total)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing":     "Procesando...",
        "search":         "Buscar:",
        "zeroRecords":    "No se encontraron registros",
        "paginate": {
          "first":      "Primero",
          "last":       "Último",
          "next":       "Siguiente",
          "previous":   "Anterior"
        },
        "aria": {
          "sortAscending":  ": activar para ordenar la columna ascendente",
          "sortDescending": ": activar para ordenar la columna descendente",
        }
      },
      // "ajax": "/gcapp/trabajadores/listar"
    } );

    @if ($errors->has('modulo') || $errors->has('submodulo') || $errors->has('accion'))

    $('#modalCrearAccesos').modal('show');

    @elseif ($errors->has('e_alianza') || $errors->has('e_plaza') || $errors->has('e_area') || $errors->has('e_puesto') || $errors->has('e_usuario') || $errors->has('e_correo') || $errors->has('e_pass'))

    $('#modalEditPermisos').modal('show');

    @elseif ($errors->has('pass_act') || $errors->has('pass_new') || $errors->has('pass_new_conf'))

    $('#modalEditPassPermisos').modal('show');

    @endif
  });

  function filtrar(valor)
  {
    tableAccesos.columns(3).search(valor).draw();
  }

  function cleanCheck()
  {
    $('.cleanCheck').prop('checked', false);
  }

  function crearAcceso()
  {
    $('#form_create_acceso').submit();
  }

  function asigAcceso()
  {
    var id_usuario_acce = $('#usuarios option:selected').attr('data-id');;
    var nombre_usuario = $('#usuarios').val();

    const id_accion = 22;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {

          if (nombre_usuario != "") {
            $('#modalCrearAccesos').modal('show');
            $('#modalCrearAccesos').find('#nombre_usuario').text(nombre_usuario);
            $('#id_usuario').val(id_usuario_acce);

            $.ajax({
              url: 'accesos/getAccesoUsuario/'+id_usuario_acce,
              type: 'GET',
              dataType: 'json',
              success: function (response) {
                response.accesos.forEach(function (p){
                  $('#mod_'+p.id_submodulo).prop('checked', true);
                });
              },
              error: function (error) {
                console.log("Error", error);
              }
            });
            
          } else {
            swal(
              'Vacío',
              'Debes seleccionar un usuario antes de crear un acceso.',
              'warning'
              );
          }
          
        } else {
          swal(
            'Permiso',
            'No tienes permiso para realizar esta accion.',
            'error'
            );
        }
      }
    });
  }

</script>

@endpush