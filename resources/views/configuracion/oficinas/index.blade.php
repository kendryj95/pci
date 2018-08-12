@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Oficinas')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Oficinas')
  @slot('last_page', 'Dashboard')

  @endcomponent

@endsection

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12">
      <div class="card">
          <div class="card-body">
              <a href="javascript:void(0)" class="btn btn-primary" title="Agregar" data-toggle="modal" data-target="#modalCrearOficina"><i class="mdi mdi-plus-box mdi-18px"></i></a>&nbsp;
              <a href="javascript:void(0)" onclick="editar()" class="btn btn-success" title="Editar"><i class="mdi mdi-pencil-box mdi-18px"></i></a>&nbsp;
              <a href="javascript:void(0)" onclick="deleteOficina()" class="btn btn-danger" title="Eliminar"><i class="mdi mdi-delete mdi-18px"></i></a>
              <br><br>
              <div class="table-responsive">
                <table id="tableOficinas" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>No.</th>
                    <th>OFICINA</th>
                    <th>TELEFONO</th>
                    <th>DIRECTOR</th>
                    <th>CORREO</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($oficinas as $i => $oficina)
                    <tr>
                      <td><input type="checkbox" class="oficinas" value="{{ $oficina->id }}" id="id_{{ $oficina->id }}" name="ali[]"><label for="id_{{ $oficina->id }}"></label></td>
                      <td>{{ $i+1 }}</td>
                      <td>{{ $oficina->oficina }}</td>
                      <td>{{ $oficina->telefono }}</td>
                      <td>{{ $oficina->director }}</td>
                      <td>{{ $oficina->correo }}</td>
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
<div class="modal fade" id="modalCrearOficina" tabindex="-1" role="dialog" aria-labelledby="modalCrearOficinaTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCrearOficinaTitle">Nueva Oficina</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="oficinas/crear" method="post" id="form_create_oficina">
             {{ csrf_field() }}

             <div class="form-group @if ($errors->has('alianza')) has-error @endif">
               <label for="estatus">Alianza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <select name="alianza" id="alianza" class="form-control" onchange="getPlazas(this.value)">
                  <option value="">Seleccionar</option>
                  @foreach ($alianzas as $alianza)
                   <option value="{{$alianza->id}}">{{$alianza->nombre}}</option>
                  @endforeach
                 </select>
               </div>
               @if ($errors->has('alianza'))
               <span class="help-block" style="color: #FC718B">
                <i class="fa fa-times-circle-o"></i> {{ $errors->get('alianza')[0] }}
               </span>
               @endif
             </div>

             <div class="form-group @if ($errors->has('plaza')) has-error @endif">
               <label for="estatus">Plaza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                 <select name="plaza" id="plaza" class="form-control">
                  <option value="">Seleccionar</option>
                 </select>
               </div>
               @if ($errors->has('plaza'))
               <span class="help-block" style="color: #FC718B">
                <i class="fa fa-times-circle-o"></i> {{ $errors->get('plaza')[0] }}
               </span>
               @endif
             </div>

             <div class="form-group @if ($errors->has('nombre')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                 <input type="text" class="form-control" name="nombre" placeholder="Nombre oficina (*)">
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
                <input type="text" class="form-control" name="director" placeholder="Director oficina (*)">
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
              <label for="estatus">Oficina activa</label>
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
        <button type="button" onclick="crearOficina()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditOficina" tabindex="-1" role="dialog" aria-labelledby="modalEditOficinaTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditOficinaTitle">Editar Oficina</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="oficinas/editar" method="post" id="form_edit_oficina">
             {{ csrf_field() }}
             <input type="hidden" id="id_oficina" name="id_oficina">

             <div class="form-group @if ($errors->has('e_alianza')) has-error @endif">
               <label for="estatus">Alianza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <select name="e_alianza" id="e_alianza" class="form-control" onchange="getPlazas(this.value)">
                  <option value="">Seleccionar</option>
                  @foreach ($alianzas as $alianza)
                   <option value="{{$alianza->id}}">{{$alianza->nombre}}</option>
                  @endforeach
                 </select>
               </div>
               @if ($errors->has('e_alianza'))
               <span class="help-block" style="color: #FC718B">
                <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_alianza')[0] }}
               </span>
               @endif
             </div>

             <div class="form-group @if ($errors->has('e_plaza')) has-error @endif">
               <label for="estatus">Plaza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                 <select name="e_plaza" id="e_plaza" class="form-control">
                  <option value="">Seleccionar</option>
                 </select>
               </div>
               @if ($errors->has('e_plaza'))
               <span class="help-block" style="color: #FC718B">
                <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_plaza')[0] }}
               </span>
               @endif
             </div>

             <div class="form-group @if ($errors->has('e_nombre')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <input type="text" class="form-control" name="e_nombre" id="e_nombre" placeholder="Nombre oficina (*)">
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
                <input type="text" class="form-control" name="e_director" id="e_director" placeholder="Director oficina (*)">
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
              <label for="estatus">Oficina activa</label>
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
        <button type="button" onclick="editOficina()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


@endsection

@push('scripts')

<script>
  $(document).ready(function(){
    var $tableOficinas = jQuery("#tableOficinas");
    var tableOficinas = $tableOficinas.DataTable( {
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

    @if ($errors->has('alianza') || $errors->has('plaza') || $errors->has('nombre') || $errors->has('domicilio') || $errors->has('telefono') || $errors->has('director') || $errors->has('correo'))

    $('#modalCrearOficina').modal('show');

    @elseif ($errors->has('e_alianza') || $errors->has('e_plaza') || $errors->has('e_nombre') || $errors->has('e_domicilio') || $errors->has('e_telefono') || $errors->has('e_director') || $errors->has('e_correo'))

    $('#modalEditOficina').modal('show');

    @endif
  });

  function crearOficina()
  {
    $('#form_create_oficina').submit();
  }

  function editOficina()
  {
    $('#form_edit_oficina').submit();
  }

  function editar()
  {
    var count = $('.oficinas:checked').length;
    var param = '';

    if (count != 0 && count == 1) {
      param = $('.oficinas:checked').val();

      $.ajax({
        url: 'oficinas/edit/'+param,
        type: 'GET',
        dataType: 'json',
        success: function(response){

          if (response.status == 200) {

            console.dir(response.data);

            let html_plazas = '<option value="">Seleccionar</option>';

            response.plazas.forEach(function(p){
              let selected = response.data.id_plaza == p.id ? 'selected' : '';
              html_plazas += '<option value="'+p.id+'" '+selected+'>'+p.nombre+'</option>';
            });

            $('#e_plaza').html(html_plazas);

            $('#id_oficina').val(response.data.id);
            $('#e_alianza').val(response.data.alianza);
            $('#e_nombre').val(response.data.oficina);
            $('#e_domicilio').val(response.data.domicilio);
            $('#e_telefono').val(response.data.telefono);
            $('#e_director').val(response.data.director);
            $('#e_correo').val(response.data.correo);
            $('#estatus').val(response.data.estatus);

            $('#modalEditOficina').modal('show');
          } else {
            console.log('Error');
          }
        },
        error: function (error) {
          console.log('Error');
        }
      });
      
    } else if (count == 0) {
      swal('Vacío', 'No has seleccionado ninguna oficina para editar', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 oficina para editar', 'warning');
    }
  }

  function deleteOficina()
  {
    var count = $('.oficinas:checked').length;
    var values = [];

    if (count > 0) {
      $('.oficinas:checked').each(function (){
        values.push($(this).val());
      });

      swal({
        title: 'Estás seguro?',
        text: "Se eliminarán las oficinas seleccionadas.",
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
            url: 'oficinas/delete',
            type: 'POST',
            dataType: 'json',
            data: {values: values},
            success: function(response) {
              if (response.status == 200) {
                swal(
                  'Exito!',
                  'Han sido eliminadas las oficinas correctamente',
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
  }

  function getPlazas(value)
  {
    if (value != "") {
      $.ajax({
        url: 'oficinas/getPlazas',
        type: 'GET',
        dataType: 'json',
        data: {alianza: value},
        beforeSend: function () {
          $('#plaza').prop('disabled', true);
        },
        success: function (response) {
          if (response.status == 200) {
            let html = '<option value="">Seleccionar</option>';

            (response.data).forEach(function(p){
              html += '<option value="'+p.id+'">'+p.plaza+'</option>';
            });

            $('#plaza').html(html);
          } else {
            swal(
              'Error',
              'Ha ocurrido un error inesperado al cargar las plazas.',
              'error'
              );
          }
        },
        error: function (error) {
          swal(
            'Error',
            'Ha ocurrido un error inesperado al cargar las plazas.',
            'error'
            );
        },
        complete: function () {
          $('#plaza').prop('disabled', false);
        }
      });
    } else {
      let html = '<option value="">Seleccionar</option>';

      $('#plaza').html(html);
    }
    
    
  }
</script>

@endpush