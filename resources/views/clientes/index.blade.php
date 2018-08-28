@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Clientes')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Clientes')
  @slot('last_page', 'Dashboard')

  @endcomponent

@endsection

@section('content')

@if ($errors->has('e_cliente'))

    <div class="alert alert-danger">
      <p>{{$errors->get('e_cliente')[0]}}</p>
    </div>

@endif

<div class="row">
  <div class="col-lg-12 col-md-12">
      <div class="card">
          <div class="card-body">
              @if (in_array(26, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="crear()" class="btn btn-primary" title="Agregar"><i class="mdi mdi-plus-box mdi-18px"></i></a>&nbsp;
              @endif
              @if (in_array(27, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="" class="btn btn-success" title="Editar"><i class="mdi mdi-pencil-box mdi-18px"></i></a>&nbsp;
              @endif
              @if (in_array(28, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="" class="btn btn-danger" title="Eliminar"><i class="mdi mdi-delete mdi-18px"></i></a>&nbsp;
              @endif
              @if (in_array(29, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="" class="btn btn-secondary" title="Expediente cliente"><i class="mdi mdi-archive mdi-18px"></i></a>
              @endif
              <br><br>
              <div class="table-responsive">
                <table id="tableClientes" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>No.</th>
                    <th>RFC</th>
                    <th>CLIENTE</th>
                    <th>NOMBRE COMERCIAL</th>
                    <th>GRUPO</th>
                    <th>CLASE RIESGO</th>
                    <th>ACTIVO</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($clientes as $i => $cliente)
                    <tr>
                      <td><input type="checkbox" class="clientes" value="{{ $cliente->id }}" id="id_{{ $cliente->id }}" name="ali[]"><label for="id_{{ $cliente->id }}"></label></td>
                      <td>{{ $i+1 }}</td>
                      <td>{{ $cliente->rfc }}</td>
                      <td>{{ $cliente->alias }}</td>
                      <td>{{ $cliente->razon_social }}</td>
                      <td>{{ $cliente->grupo }}</td>
                      <td>{{ $cliente->clase }}</td>
                      <td>{{ $cliente->activo }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- sample modal content -->
<div class="modal fade" id="modalCrearCliente" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('clientes/crear') }}" id="form_create_cliente" method="post">
                  {{csrf_field()}}
                  
                  <div class="row">
                    <div class="col-xs-12 col-lg-4">
                      <div class="form-group @if ($errors->has('rfc')) has-danger @endif">
                        <label class="form-control-label" for="rfc">RFC</label>
                        <input type="text" class="form-control @if ($errors->has('rfc')) form-control-danger @endif" name="rfc" id="rfc" placeholder="RFC">
                        @if ($errors->has('rfc'))
                          <div class="form-control-feedback">{{$errors->get('rfc')[0]}}</div>
                        @endif
                      </div>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                      <div class="form-group @if ($errors->has('razon_social')) has-danger @endif">
                        <label class="form-control-label" for="razon_social">Razón Social</label>
                        <input type="text" class="form-control @if ($errors->has('razon_social')) form-control-danger @endif" name="razon_social" id="razon_social" placeholder="Nombre completo/Razón social del cliente">
                        @if ($errors->has('razon_social'))
                          <div class="form-control-feedback">{{$errors->get('razon_social')[0]}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                      <div class="form-group @if ($errors->has('alias')) has-danger @endif">
                        <label class="form-control-label" for="alias">Alias</label>
                        <input type="text" class="form-control @if ($errors->has('alias')) form-control-danger @endif" name="alias" id="alias" placeholder="Alias">
                        @if ($errors->has('alias'))
                          <div class="form-control-feedback">{{$errors->get('alias')[0]}}</div>
                        @endif
                      </div>
                    </div>
                    <div class="col-xs-12 col-lg-5">
                      <div class="form-group @if ($errors->has('giro')) has-danger @endif">
                        <label class="form-control-label" for="giro">Giro</label>
                        <input type="text" class="form-control @if ($errors->has('giro')) form-control-danger @endif" name="giro" id="giro" placeholder="Giro">
                        @if ($errors->has('giro'))
                          <div class="form-control-feedback">{{$errors->get('giro')[0]}}</div>
                        @endif
                      </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="estatus">Estatus</label>
                        <select name="estatus" id="estatus" class="form-control">
                          <option value="1">SÍ</option>
                          <option value="2">NO</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="clase_riesgo">Clase Riesgo</label>
                        <select name="clase_riesgo" id="clase_riesgo" class="form-control">
                          @foreach ($clases_riesgo as $clase)
                            <option value="{{$clase->id}}">{{$clase->clase}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-12 col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="grupo">Grupo</label>
                        <select name="grupo" id="grupo" class="form-control">
                          <option value="">Sin Grupo</option>
                          @foreach ($grupos as $grupo)
                          <option value="{{$grupo->id}}">{{$grupo->grupo}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                      <div class="form-group @if ($errors->has('correos_recibos')) has-danger @endif">
                        <label class="form-control-label" for="correos_recibos">Correo para envío de Recibos timbrados</label>
                        <div class="tags-default">
                            <input type="text" class="form-control @if ($errors->has('correos_recibos')) form-control-danger @endif" id="correos_recibos" name="correos_recibos" data-role="tagsinput" placeholder="Agregar correos" /> 
                        </div>
                        @if ($errors->has('correos_recibos'))
                          <div class="form-control-feedback">{{$errors->get('correos_recibos')[0]}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                      <div class="form-group @if ($errors->has('correos_facturas')) has-danger @endif">
                        <label class="form-control-label" for="correos_facturas">Correo para envío de Factura eléctronica</label>
                        <div class="tags-default">
                            <input type="text" class="form-control @if ($errors->has('correos_facturas')) form-control-danger @endif" id="correos_facturas" name="correos_facturas" data-role="tagsinput" placeholder="Agregar correos" /> 
                        </div>
                        @if ($errors->has('correos_facturas'))
                          <div class="form-control-feedback">{{$errors->get('correos_facturas')[0]}}</div>
                        @endif
                      </div>
                    </div>



                  </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="crearCliente()" class="btn btn-primary waves-effect text-left">Crear</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample modal content -->
<div class="modal fade" id="modalEditCliente" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="" id="form_create_cliente" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="id_cliente" id="id_cliente">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, libero! Rerum voluptas commodi provident id totam eius vero soluta debitis. Exercitationem ex dicta molestiae hic dolor quod vitae facilis harum!
                  }
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancelar</button>
                <button type="button" onclick="editCliente()" class="btn btn-primary waves-effect text-left">Editar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection

@push('scripts')

<script>
  const id_usuario = {{session()->get('user_id')}};
  $(document).ready(function(){
    var $tableClientes = jQuery("#tableClientes");
    var tableClientes = $tableClientes.DataTable( {
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

    @if ($errors->has('rfc') || $errors->has('razon_social') || $errors->has('alias') || $errors->has('giro') || $errors->has('correo_recibos') || $errors->has('correo_facturas'))

    $('#modalCrearCliente').modal('show');

    @endif
  });

  function crear()
  {
    $('#modalCrearCliente').modal('show');
  }

  function crearCliente()
  {
    $('#form_create_cliente').submit();
  }

  function editCliente()
  {
    $('#form_edit_cliente').submit();
  }

  function editar()
  {
    var count = $('.clientes:checked').length;
    var param = '';

    if (count != 0 && count == 1) {
      param = $('.clientes:checked').val();

      $.ajax({
        url: '{{url('clientes/clientes/edit')}}/'+param,
        type: 'GET',
        dataType: 'json',
        success: function(response){

          console.dir(response.data);

          $('#id_cliente').val(response.data.id);
          $('#e_cliente').val(response.data.cliente);

          $('#modalEditGrupo').modal('show');
        },
        error: function (error) {
          console.log('Error');
        }
      });
      
    } else if (count == 0) {
      swal('Vacío', 'No has seleccionado ninguna cliente para editar', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 cliente para editar', 'warning');
    }
  }

  function deleteCliente()
  {
    var count = $('.clientes:checked').length;
    var values = [];

    if (count > 0) {
      $('.clientes:checked').each(function (){
        values.push($(this).val());
      });

      swal({
        title: 'Estás seguro?',
        text: "Se eliminarán los clientes seleccionados.",
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
            url: '{{url('clientes/clientes/delete')}}',
            type: 'POST',
            dataType: 'json',
            data: {values: values},
            success: function(response) {
              if (response.status == 200) {
                swal(
                  'Exito!',
                  'Han sido eliminados los clientes correctamente',
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
        'No has seleccionado ningun cliente para eliminar',
        'info'
      );
    }

  }
</script>

@endpush