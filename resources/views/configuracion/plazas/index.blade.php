@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Plazas')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Plazas')
  @slot('last_page', 'Dashboard')

  @endcomponent

@endsection

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12">
      <div class="card">
          <div class="card-body">
              <a href="javascript:void(0)" onclick="crear()" class="btn btn-primary" title="Agregar"><i class="mdi mdi-plus-box mdi-18px"></i></a>&nbsp;
              <a href="javascript:void(0)" onclick="editar()" class="btn btn-success" title="Editar"><i class="mdi mdi-pencil-box mdi-18px"></i></a>&nbsp;
              <a href="javascript:void(0)" onclick="deletePlaza()" class="btn btn-danger" title="Eliminar"><i class="mdi mdi-delete mdi-18px"></i></a>
              <br><br>
              <div class="table-responsive">
                <table id="tablePlazas" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>No.</th>
                    <th>ALIANZA</th>
                    <th>PLAZA</th>
                    <th>TELEFONO</th>
                    <th>DIRECTOR</th>
                    <th>CORREO</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($plazas as $i => $plaza)
                    <tr>
                      <td><input type="checkbox" class="plazas" value="{{ $plaza->id }}" id="id_{{ $plaza->id }}" name="ali[]"><label for="id_{{ $plaza->id }}"></label></td>
                      <td>{{ $i+1 }}</td>
                      <td>{{ $plaza->alianza }}</td>
                      <td>{{ $plaza->nombre }}</td>
                      <td>{{ $plaza->telefono }}</td>
                      <td>{{ $plaza->director }}</td>
                      <td>{{ $plaza->correo }}</td>
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
<div class="modal fade" id="modalCrearAlianza" tabindex="-1" role="dialog" aria-labelledby="modalCrearAlianzaTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCrearAlianzaTitle">Nueva Plaza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="plazas/crear" method="post" id="form_create_plaza">
             {{ csrf_field() }}

             <div class="form-group">
               <label for="estatus">Alianza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <select name="alianza" id="alianza" class="form-control">
                  @foreach ($alianzas as $alianza)
                   <option value="{{$alianza->id}}">{{$alianza->nombre}}</option>
                  @endforeach
                 </select>
               </div>
             </div>

             <div class="form-group @if ($errors->has('nombre')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                 <input type="text" class="form-control" name="nombre" placeholder="Nombre plaza (*)">
              </div>
                 @if ($errors->has('nombre'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('nombre')[0] }}
                 </span>
                 @endif
             </div>
            
            <div class="form-group @if ($errors->has('domicilio')) has-error @endif">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" class="form-control" name="domicilio" placeholder="Domicilio (*)">
              </div>
                @if ($errors->has('domicilio'))
                <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('domicilio')[0] }}
                </span>
                @endif
            </div>

            <div class="form-group @if ($errors->has('telefono')) has-error @endif">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control" name="telefono" placeholder="Telefono (*)">
              </div>
                @if ($errors->has('telefono'))
                <span class="help-block" style="color: #FC718B">
                  @foreach ($errors->get('telefono') as $error)
                  <i class="fa fa-times-circle-o"></i> {{ $error }}
                  @endforeach
                </span>
                @endif
            </div>
              
            <div class="form-group @if ($errors->has('director')) has-error @endif">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="director" placeholder="Director plaza (*)">
              </div>
                @if ($errors->has('director'))
                <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('director')[0] }}
                </span>
                @endif
            </div>

            <div class="form-group @if ($errors->has('correo')) has-error @endif">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                <input type="text" class="form-control" name="correo" placeholder="Correo (*)">
              </div>
                @if ($errors->has('correo'))
                <span class="help-block" style="color: #FC718B">
                  @foreach ($errors->get('correo') as $error)
                  <i class="fa fa-times-circle-o"></i> {{ $error }}
                  @endforeach
                </span>
                @endif
            </div>

            <div class="form-group">
              <label for="estatus">Plaza activa</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-power-off"></i></span>
                <select name="estatus" id="estatus" class="form-control">
                  <option value="1">Sí</option>
                  <option value="0">NO</option>
                </select>
              </div>
            </div>
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="crearPlaza()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditAlianza" tabindex="-1" role="dialog" aria-labelledby="modalEditAlianzaTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditAlianzaTitle">Editar Alianza</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="plazas/editar" method="post" id="form_edit_plaza">
             {{ csrf_field() }}
             <input type="hidden" id="id_plaza" name="id_plaza">

             <div class="form-group">
               <label for="estatus">Alianza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <select name="alianza" id="e_alianza" class="form-control">
                  @foreach ($alianzas as $alianza)
                   <option value="{{$alianza->id}}">{{$alianza->nombre}}</option>
                  @endforeach
                 </select>
               </div>
             </div>

             <div class="form-group @if ($errors->has('e_nombre')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <input type="text" class="form-control" name="e_nombre" id="e_nombre" placeholder="Nombre plaza (*)">
              </div>
                 @if ($errors->has('e_nombre'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_nombre')[0] }}
                 </span>
                 @endif
             </div>
            
            <div class="form-group @if ($errors->has('e_domicilio')) has-error @endif">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" class="form-control" name="e_domicilio" id="e_domicilio" placeholder="Domicilio (*)">
              </div>
                @if ($errors->has('e_domicilio'))
                <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_domicilio')[0] }}
                </span>
                @endif
            </div>

            <div class="form-group @if ($errors->has('e_telefono')) has-error @endif">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control" name="e_telefono" id="e_telefono" placeholder="Telefono (*)">
              </div>
                @if ($errors->has('e_telefono'))
                <span class="help-block" style="color: #FC718B">
                  @foreach ($errors->get('e_telefono') as $error)
                  <i class="fa fa-times-circle-o"></i> {{ $error }}
                  @endforeach
                </span>
                @endif
            </div>
              
            <div class="form-group @if ($errors->has('e_director')) has-error @endif">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="e_director" id="e_director" placeholder="Director alianza (*)">
              </div>
                @if ($errors->has('e_director'))
                <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_director')[0] }}
                </span>
                @endif
            </div>

            <div class="form-group @if ($errors->has('e_correo')) has-error @endif">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                <input type="text" class="form-control" name="e_correo" id="e_correo" placeholder="Correo (*)">
              </div>
                @if ($errors->has('e_correo'))
                <span class="help-block" style="color: #FC718B">
                  @foreach ($errors->get('e_correo') as $error)
                  <i class="fa fa-times-circle-o"></i> {{ $error }}
                  @endforeach
                </span>
                @endif
            </div>

            <div class="form-group">
              <label for="estatus">Plaza activa</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-power-off"></i></span>
                <select name="estatus" id="estatus" class="form-control">
                  <option value="1">Sí</option>
                  <option value="0">NO</option>
                </select>
              </div>
            </div>
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="editPlaza()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


@endsection

@push('scripts')

<script>
  const id_usuario = {{session()->get('user_id')}};
  $(document).ready(function(){
    var $tablePlazas = jQuery("#tablePlazas");
    var tablePlazas = $tablePlazas.DataTable( {
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

    @if ($errors->has('nombre') || $errors->has('domicilio') || $errors->has('telefono') || $errors->has('director') || $errors->has('correo'))

    $('#modalCrearAlianza').modal('show');

    @elseif ($errors->has('e_nombre') || $errors->has('e_domicilio') || $errors->has('e_telefono') || $errors->has('e_director') || $errors->has('e_correo'))

    $('#modalEditAlianza').modal('show');

    @endif
  });

  function crear()
  {
    const id_accion = 4;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          $('#modalCrearAlianza').modal('show');
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

  function crearPlaza()
  {
    $('#form_create_plaza').submit();
  }

  function editPlaza()
  {
    $('#form_edit_plaza').submit();
  }

  function editar()
  {
    var count = $('.plazas:checked').length;
    var param = '';

    const id_accion = 5;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          
          if (count != 0 && count == 1) {
            param = $('.plazas:checked').val();

            $.ajax({
              url: 'plazas/edit/'+param,
              type: 'GET',
              dataType: 'json',
              success: function(response){

                if (response.status == 200) {

                  console.dir(response.data);

                  $('#id_plaza').val(response.data.id);
                  $('#e_alianza').val(response.data.alianza);
                  $('#e_nombre').val(response.data.nombre);
                  $('#e_domicilio').val(response.data.domicilio);
                  $('#e_telefono').val(response.data.telefono);
                  $('#e_director').val(response.data.director);
                  $('#e_correo').val(response.data.correo);
                  $('#estatus').val(response.data.estatus);

                  $('#modalEditAlianza').modal('show');
                } else {
                  console.log('Error');
                }
              },
              error: function (error) {
                console.log('Error');
              }
            });
            
          } else if (count == 0) {
            swal('Vacío', 'No has seleccionado ninguna alianza para editar', 'info');
          } else {
            swal('Warning','No puedes seleccionar más de 1 alianza para editar', 'warning');
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

  function deletePlaza()
  {
    var count = $('.plazas:checked').length;
    var values = [];

    const id_accion = 6;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          if (count > 0) {
            $('.plazas:checked').each(function (){
              values.push($(this).val());
            });

            swal({
              title: 'Estás seguro?',
              text: "Se eliminarán las plazas seleccionadas.",
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
                  url: 'plazas/delete',
                  type: 'POST',
                  dataType: 'json',
                  data: {values: values},
                  success: function(response) {
                    if (response.status == 200) {
                      swal(
                        'Exito!',
                        'Han sido eliminadas las plazas correctamente',
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
              'No has seleccionado ninguna plaza para eliminar',
              'info'
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