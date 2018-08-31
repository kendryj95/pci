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

@if ($errors->has('e_rfc') || $errors->has('e_razon_social') || $errors->has('e_alias') || $errors->has('e_giro') || $errors->has('e_correo_recibos') || $errors->has('e_correo_facturas'))
  
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
      <p>{{$error}}</p>
      @endforeach
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
              <a href="javascript:void(0)" onclick="editar()" class="btn btn-success" title="Editar"><i class="mdi mdi-pencil-box mdi-18px"></i></a>&nbsp;
              @endif
              @if (in_array(28, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="deleteCliente()" class="btn btn-danger" title="Eliminar"><i class="mdi mdi-delete mdi-18px"></i></a>&nbsp;
              @endif
              @if (in_array(29, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="expediente()" class="btn btn-secondary" title="Expediente cliente"><i class="mdi mdi-archive mdi-18px"></i></a>
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
                <h4 class="modal-title" id="myLargeModalLabel">Crear cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('clientes/crear') }}" id="form_create_cliente" method="post">
                  {{csrf_field()}}
                  
                  <div class="row">
                    <div class="col-xs-12 col-lg-4">
                      <div class="form-group @if ($errors->has('rfc')) has-danger @endif">
                        <label class="form-control-label" for="rfc">RFC</label>
                        <input type="text" onkeyup="upperCase(this)" class="form-control @if ($errors->has('rfc')) form-control-danger @endif" name="rfc" id="rfc" placeholder="RFC">
                        @if ($errors->has('rfc'))
                          <div class="form-control-feedback">{{$errors->get('rfc')[0]}}</div>
                        @endif
                      </div>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                      <div class="form-group @if ($errors->has('razon_social')) has-danger @endif">
                        <label class="form-control-label" for="razon_social">Razón Social</label>
                        <input type="text" onkeyup="upperCase(this)" class="form-control @if ($errors->has('razon_social')) form-control-danger @endif" name="razon_social" id="razon_social" placeholder="Nombre completo/Razón social del cliente">
                        @if ($errors->has('razon_social'))
                          <div class="form-control-feedback">{{$errors->get('razon_social')[0]}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                      <div class="form-group @if ($errors->has('alias')) has-danger @endif">
                        <label class="form-control-label" for="alias">Alias</label>
                        <input type="text" onkeyup="upperCase(this)" class="form-control @if ($errors->has('alias')) form-control-danger @endif" name="alias" id="alias" placeholder="Alias">
                        @if ($errors->has('alias'))
                          <div class="form-control-feedback">{{$errors->get('alias')[0]}}</div>
                        @endif
                      </div>
                    </div>
                    <div class="col-xs-12 col-lg-5">
                      <div class="form-group @if ($errors->has('giro')) has-danger @endif">
                        <label class="form-control-label" for="giro">Giro</label>
                        <input type="text" onkeyup="upperCase(this)" class="form-control @if ($errors->has('giro')) form-control-danger @endif" name="giro" id="giro" placeholder="Giro">
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
                <h4 class="modal-title" id="myLargeModalLabel">Editar cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('clientes/editar') }}" id="form_edit_cliente" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="id_cliente" id="id_cliente">
                  
                  <div class="row">
                    <div class="col-xs-12 col-lg-4">
                      <div class="form-group @if ($errors->has('e_rfc')) has-danger @endif">
                        <label class="form-control-label" for="e_rfc">RFC</label>
                        <input type="text" onkeyup="upperCase(this)" class="form-control @if ($errors->has('e_rfc')) form-control-danger @endif" name="e_rfc" id="e_rfc" placeholder="RFC">
                        @if ($errors->has('e_rfc'))
                          <div class="form-control-feedback">{{$errors->get('e_rfc')[0]}}</div>
                        @endif
                      </div>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                      <div class="form-group @if ($errors->has('e_razon_social')) has-danger @endif">
                        <label class="form-control-label" for="e_razon_social">Razón Social</label>
                        <input type="text" onkeyup="upperCase(this)" class="form-control @if ($errors->has('e_razon_social')) form-control-danger @endif" name="e_razon_social" id="e_razon_social" placeholder="Nombre completo/Razón social del cliente">
                        @if ($errors->has('e_razon_social'))
                          <div class="form-control-feedback">{{$errors->get('e_razon_social')[0]}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                      <div class="form-group @if ($errors->has('e_alias')) has-danger @endif">
                        <label class="form-control-label" for="e_alias">Alias</label>
                        <input type="text" onkeyup="upperCase(this)" class="form-control @if ($errors->has('e_alias')) form-control-danger @endif" name="e_alias" id="e_alias" placeholder="Alias">
                        @if ($errors->has('e_alias'))
                          <div class="form-control-feedback">{{$errors->get('e_alias')[0]}}</div>
                        @endif
                      </div>
                    </div>
                    <div class="col-xs-12 col-lg-5">
                      <div class="form-group @if ($errors->has('e_giro')) has-danger @endif">
                        <label class="form-control-label" for="e_giro">Giro</label>
                        <input type="text" onkeyup="upperCase(this)" class="form-control @if ($errors->has('e_giro')) form-control-danger @endif" name="e_giro" id="e_giro" placeholder="Giro">
                        @if ($errors->has('e_giro'))
                          <div class="form-control-feedback">{{$errors->get('e_giro')[0]}}</div>
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
                      <div class="form-group @if ($errors->has('e_correos_recibos')) has-danger @endif">
                        <label class="form-control-label" for="e_correos_recibos">Correo para envío de Recibos timbrados</label>
                        <div class="tags-default">
                            <input type="text" class="form-control @if ($errors->has('e_correos_recibos')) form-control-danger @endif" id="e_correos_recibos" name="e_correos_recibos" data-role="tagsinput" placeholder="Agregar correos" /> 
                        </div>
                        @if ($errors->has('e_correos_recibos'))
                          <div class="form-control-feedback">{{$errors->get('e_correos_recibos')[0]}}</div>
                        @endif
                      </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                      <div class="form-group @if ($errors->has('e_correos_facturas')) has-danger @endif">
                        <label class="form-control-label" for="e_correos_facturas">Correo para envío de Factura eléctronica</label>
                        <div class="tags-default">
                            <input type="text" class="form-control @if ($errors->has('e_correos_facturas')) form-control-danger @endif" id="e_correos_facturas" name="e_correos_facturas" data-role="tagsinput" placeholder="Agregar correos" /> 
                        </div>
                        @if ($errors->has('e_correos_facturas'))
                          <div class="form-control-feedback">{{$errors->get('e_correos_facturas')[0]}}</div>
                        @endif
                      </div>
                    </div>



                  </div>
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

<!-- sample modal content -->
<div class="modal fade" id="modalExpedienteCliente" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Crear cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills m-t-30 m-b-30">
                    <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Expendiente</a> </li>
                    <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Anexar archivo</a> </li>
                </ul>
                <div class="tab-content br-n pn">
                    <div id="navpills-1" class="tab-pane active expedientes" >
                        
                    </div>
                    <div id="navpills-2" class="tab-pane">
                        <div class="row">
                            <div class="col-lg-12">
                              <form action="{{ url('clientes/expediente') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_cliente" id="id_cliente_exp">
                                <div class="form-group">
                                    <label>Anexar</label>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>
                                            <span class="fileinput-filename"></span>
                                        </div>
                                        <span class="input-group-addon btn btn-secondary btn-file"> 
                                            <span class="fileinput-new">Seleccionar</span>
                                        <span class="fileinput-exists">Cambiar</span>
                                        <input type="file" name="expediente">
                                        </span>
                                        <a href="#" class="input-group-addon btn btn-secondary fileinput-exists" data-dismiss="fileinput">Quitar</a> </div>

                                        <br>
                                        <button type="submit" class="btn btn-success btn-block">Guardar</button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection

@push('scripts')

<script src="{{asset('assets/js/jasny-bootstrap.js')}}"></script>

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
        url: '{{url('clientes/edit')}}/'+param,
        type: 'GET',
        dataType: 'json',
        success: function(response){

          $('#id_cliente').val(response.cliente.id);
          $('#e_alias').val(response.cliente.alias);
          $('#estatus').val(response.cliente.estatus);
          $('#e_giro').val(response.cliente.giro);
          $('#grupo').val(response.cliente.id_grupo);
          $('#e_razon_social').val(response.cliente.razon_social);
          $('#e_rfc').val(response.cliente.rfc);
          $('#e_correos_recibos').tagsinput('add', response.correos_recibos);
          $('#e_correos_facturas').tagsinput('add', response.correos_facturas);

          $('#modalEditCliente').modal('show');
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
            url: '{{url('clientes/delete')}}',
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

  function expediente()
  {
    var count = $('.clientes:checked').length;
    var cliente = '';

    if (count != 0 && count == 1) {
      cliente = $('.clientes:checked').val();

      $('#id_cliente_exp').val(cliente);

      $.ajax({
        url: '{{ url("clientes/getExpediente") }}/'+cliente,
        type: 'GET',
        dataType: 'HTML',
        success: function(response) {

          $('#modalExpedienteCliente').find('.expedientes').html(response);

          $('#modalExpedienteCliente').modal('show');
        },
        error: function(error) {
          console.dir(error);
        }
      });
      
    } else if (count == 0) {
      swal('Vacío', 'No has seleccionado ningun cliente', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 cliente', 'warning');
    }
  }

  function upperCase(cmp)
  {
    cmp.value = cmp.value.toUpperCase();
  }
</script>

@endpush