@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Permisos')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Permisos')
  @slot('last_page', 'Dashboard')

  @endcomponent

@endsection

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12">
      <div class="card">
          <div class="card-body">
              @if (in_array(21, $permisos_user) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="asigPermiso()" class="btn btn-primary" title="Agregar"><i class="mdi mdi-plus-box mdi-18px"></i></a>&nbsp;
              @endif
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
                <table id="tablePermisos" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>MODULO</th>
                    <th>SUBMODULO</th>
                    <th>ACCION</th>
                    <th>USUARIOS</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($permisos as $i => $permiso)
                      <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$permiso->modulo}}</td>
                        <td>{{$permiso->submodulo}}</td>
                        <td>{{$permiso->accion}}</td>
                        <td>{{$permiso->usuarios}}</td>
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
<div class="modal fade" id="modalCrearPermisos" tabindex="-1" role="dialog" aria-labelledby="modalCrearPermisosTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCrearPermisosTitle">Nuevo Permiso - <span id="nombre_usuario"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="permisos/crear" method="post" id="form_create_usuario">
             {{ csrf_field() }}

             <input type="hidden" name="id_usuario" id="id_usuario">



             <div id="accordionexample" class="accordion" role="tablist" aria-multiselectable="true">
              @foreach ($modulos_submodulos_acciones as $val)

               <div class="card">
                 <div class="card-header" role="tab" id="headingOne">
                   <h5 class="mb-0">
                     <a data-toggle="collapse" data-parent="#accordionexample" href="#id_{{$val->id}}" aria-expanded="true" aria-controls="collapseexaOne">
                       {{$val->modulo}}
                     </a>
                   </h5>
                 </div>

                 <div id="id_{{$val->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                   <div class="card-body">
                     @php

                     $subm_acc = explode(";", $val->submodulos_acciones);

                     @endphp

                     @foreach ($subm_acc as $val)

                     @php

                     $submodulos = explode("/", $val)[0];
                     $id = explode("/", $val)[1];
                     @endphp

                     
                     <div>
                       <input type="checkbox" id="acc_{{$id}}" class="filled-in cleanCheck" name="perm[]" value="{{$id}}">
                       <label for="acc_{{$id}}">{{$submodulos}}</label>
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
        <button type="button" onclick="crearPermiso()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')

<script>
  var tablePermisos = '';
  const id_usuario = {{session()->get('user_id')}};
  $(document).ready(function(){
    var $tablePermisos = jQuery("#tablePermisos");
        tablePermisos = $tablePermisos.DataTable( {
       "aoColumnDefs": [ 
        { "visible": false, "targets": 4 },   
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

    $('#modalCrearPermisos').modal('show');

    @elseif ($errors->has('e_alianza') || $errors->has('e_plaza') || $errors->has('e_area') || $errors->has('e_puesto') || $errors->has('e_usuario') || $errors->has('e_correo') || $errors->has('e_pass'))

    $('#modalEditPermisos').modal('show');

    @elseif ($errors->has('pass_act') || $errors->has('pass_new') || $errors->has('pass_new_conf'))

    $('#modalEditPassPermisos').modal('show');

    @endif
  });

  function crear()
  {
    const id_accion = 21;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          $('#modalCrearPermisos').modal('show');
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

  function filtrar(valor)
  {
    tablePermisos.columns(4).search(valor).draw();
  }

  function cleanCheck()
  {
    $('.cleanCheck').prop('checked', false);
  }

  function crearPermiso()
  {
    $('#form_create_usuario').submit();
  }

  function asigPermiso()
  {
    var id_usuario_perm = $('#usuarios option:selected').attr('data-id');;
    var nombre_usuario = $('#usuarios').val();

    const id_accion = 21;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          if (nombre_usuario != "") {
            $('#modalCrearPermisos').modal('show');
            $('#modalCrearPermisos').find('#nombre_usuario').text(nombre_usuario);
            $('#id_usuario').val(id_usuario_perm);

            $.ajax({
              url: 'permisos/getPermUsuario/'+id_usuario_perm,
              type: 'GET',
              dataType: 'json',
              success: function (response) {
                response.permisos.forEach(function (p){
                  $('#acc_'+p.id_accion).prop('checked', true);
                });
              },
              error: function (error) {
                console.log("Error", error);
              }
            });
            
          } else {
            swal(
              'Vacío',
              'Debes seleccionar un usuario antes de crear un permiso.',
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

  function editPermiso()
  {
    $('#form_edit_usuario').submit();
  }

  function editPassPermiso()
  {
    $('#form_editpass_usuario').submit();    
  }

  function editar()
  {
    var count = $('.permisos:checked').length;
    var param = '';

    if (count != 0 && count == 1) {
      param = $('.permisos:checked').val();

      $.ajax({
        url: 'permisos/edit/'+param,
        type: 'GET',
        dataType: 'json',
        success: function(response){

          if (response.status == 200) {

            let html_plazas = '<option value="">Seleccionar</option>';

            response.plazas.forEach(function(p){
              let selected = response.data.plaza == p.id ? 'selected' : '';
              html_plazas += '<option value="'+p.id+'" '+selected+'>'+p.nombre+'</option>';
            });

            $('#e_plaza').html(html_plazas);

            let html_puestos = '<option value="">Seleccionar</option>';

            response.puestos.forEach(function(p){
              let selected = response.data.puesto == p.id ? 'selected' : '';
              html_puestos += '<option value="'+p.id+'" '+selected+'>'+p.puesto+'</option>';
            });

            $('#e_puesto').html(html_puestos);

            $('#e_usuario').val(response.data.usuario);
            $('#e_correo').val(response.data.correo);
            $('#e_alianza').val(response.data.alianza);
            $('#e_area').val(response.data.area);
            $('#estatus').val(response.data.estatus);

            $('#id_usuario').val(response.data.id);

            $('#e_estatus').val(response.data.estatus);

            $('#modalEditPermisos').modal('show');
          } else {
            console.log('Error');
          }
        },
        error: function (error) {
          console.log('Error');
        }
      });
      
    } else if (count == 0) {
      swal('Vacío', 'No has seleccionado ninguna usuario para editar', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 usuario para editar', 'warning');
    }
  }

  function editarPass()
  {
    var count = $('.permisos:checked').length;
    var param = '';

    if (count != 0 && count == 1) {
      param = $('.permisos:checked').val();

      $('#id_usuario_pass').val(param);

      $('#modalEditPassPermisos').modal('show');
      
    } else if (count == 0) {
      swal('Vacío', 'No has seleccionado ninguna usuario para editar', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 usuario para editar', 'warning');
    }
  }

  function asigPerfil()
  {
    var count = $('.permisos:checked').length;
    var param = '';

    if (count != 0 && count == 1) {
      param = $('.permisos:checked').val();

      $('.id_usuario_perfil').val(param);

      $('#modalAsigPerfilPermisos').modal('show');
      
    } else if (count == 0) {
      swal('Vacío', 'No has seleccionado ninguna usuario para editar', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 usuario para editar', 'warning');
    }
  }

  function deletePermiso()
  {
    var count = $('.permisos:checked').length;
    var values = [];

    if (count > 0) {
      $('.permisos:checked').each(function (){
        values.push($(this).val());
      });

      swal({
        title: 'Estás seguro?',
        text: "Se eliminarán las permisos seleccionadas.",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, borrar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        
        if (result) {

          $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          $.ajax({
            url: 'permisos/delete',
            type: 'POST',
            dataType: 'json',
            data: {values: values},
            success: function(response) {
              if (response.status == 200) {
                swal(
                  'Exito!',
                  'Han sido eliminadas las permisos correctamente',
                  'success'
                );
                setTimeout(function(){
                  window.location.reload();
                }, 2000);
              } else {
                swal(
                  'Error!',
                  'Lo sentimos, ha ocurrido un error inesperado.',
                  'error'
                );
              }
            },
            error: function(error) {
                console.dir(error);
                swal(
                  'Error!',
                  'Lo sentimos, ha ocurrido un error inesperado.',
                  'error'
                );
            }
          });
          
        }
      });
    } else {
      swal(
        'Vacío',
        'No has seleccionado ninguna usuario para eliminar',
        'info'
      );
    }
  }

  function getInfo(accion, id)
  {
    if (id != "") {
      $.ajax({
        url: 'permisos/getInfo/'+accion+'/'+id,
        type: 'GET',
        dataType: 'json',
        data: {},
        beforeSend: function () {
          if (accion == 1) {
            $('#plaza').prop('disabled', true);
          } else {
            $('#puesto').prop('disabled', true);
          }
        },
        success: function(response) {
          if (response.status == 200) {
            let html = '<option value="">Seleccionar...</option>';
            response.data.forEach(function (d){
              if (accion == 1) {
                html += '<option value="'+d.id+'">'+d.nombre+'</option>';
              } else {
                html += '<option value="'+d.id+'">'+d.puesto+'</option>';
              }
            });

            if (accion == 1) {
              $('#plaza').html(html);
            } else {
              $('#puesto').html(html);
            }
          } else {
            swal(
              'Error',
              'Ha ocurrido un error inesperado. Por favor vuelva a intentarlo.',
              'error'
              );
          }
        },
        error: function (error) {
          swal(
            'Error',
            'Ha ocurrido un error inesperado. Por favor vuelva a intentarlo.',
            'error'
            );
        },
        complete: function () {
          if (accion == 1) {
            $('#plaza').prop('disabled', false);
          } else {
            $('#puesto').prop('disabled', false);
          }
        }
      });
      
    } else {
      if (accion == 1) {
        $('#plaza').html('<option value="">Seleccionar...</option>');
      } else {
        $('#puesto').html('<option value="">Seleccionar...</option>');
      }
    }
  }

</script>

@endpush