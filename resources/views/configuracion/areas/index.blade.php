@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Areas')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Areas')
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
              <a href="javascript:void(0)" onclick="deleteArea()" class="btn btn-danger" title="Eliminar"><i class="mdi mdi-delete mdi-18px"></i></a>
              <br><br>
              <div class="table-responsive">
                <table id="tableAreas" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>No.</th>
                    <th>AREAS</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($areas as $i => $area)
                    <tr>
                      <td><input type="checkbox" class="areas" value="{{ $area->id }}" id="id_{{ $area->id }}" name="ali[]"><label for="id_{{ $area->id }}"></label></td>
                      <td>{{ $i+1 }}</td>
                      <td>{{ $area->area }}</td>
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
<div class="modal fade" id="modalCrearArea" tabindex="-1" role="dialog" aria-labelledby="modalCrearAreaTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCrearAreaTitle">Nueva Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="areas/crear" method="post" id="form_create_area">
             {{ csrf_field() }}

             <div class="form-group @if ($errors->has('area')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                 <input type="text" class="form-control" name="area" placeholder="Nombre area (*)">
              </div>
                 @if ($errors->has('area'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('area')[0] }}
                 </span>
                 @endif
             </div>
            
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="crearArea()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditArea" tabindex="-1" role="dialog" aria-labelledby="modalEditAreaTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditAreaTitle">Editar Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="areas/editar" method="post" id="form_edit_area">
             {{ csrf_field() }}
             <input type="hidden" id="id_area" name="id_area">

             <div class="form-group @if ($errors->has('e_area')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <input type="text" class="form-control" name="e_area" id="e_area" placeholder="Nombre area (*)">
              </div>
                 @if ($errors->has('e_area'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_area')[0] }}
                 </span>
                 @endif
             </div>
            
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="editArea()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


@endsection

@push('scripts')

<script>
  const id_usuario = {{session()->get('user_id')}};
  $(document).ready(function(){
    var $tableAreas = jQuery("#tableAreas");
    var tableAreas = $tableAreas.DataTable( {
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

    @if ($errors->has('area'))

    $('#modalCrearArea').modal('show');

    @elseif ($errors->has('e_area'))

    $('#modalEditArea').modal('show');

    @endif
  });

  function crear()
  {
    const id_accion = 10;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          $('#modalCrearArea').modal('show');
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

  function crearArea()
  {
    $('#form_create_area').submit();
  }

  function editArea()
  {
    $('#form_edit_area').submit();
  }

  function editar()
  {
    var count = $('.areas:checked').length;
    var param = '';

    const id_accion = 11;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          
          if (count != 0 && count == 1) {
            param = $('.areas:checked').val();

            $.ajax({
              url: 'areas/edit/'+param,
              type: 'GET',
              dataType: 'json',
              success: function(response){

                if (response.status == 200) {

                  $('#e_area').html(response.data.area);

                  $('#id_area').val(response.data.id);

                  $('#modalEditArea').modal('show');
                } else {
                  console.log('Error');
                }
              },
              error: function (error) {
                console.log('Error');
              }
            });
            
          } else if (count == 0) {
            swal('Vacío', 'No has seleccionado ninguna area para editar', 'info');
          } else {
            swal('Warning','No puedes seleccionar más de 1 area para editar', 'warning');
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

  function deleteArea()
  {
    var count = $('.areas:checked').length;
    var values = [];

    const id_accion = 12;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          
          if (count > 0) {
            $('.areas:checked').each(function (){
              values.push($(this).val());
            });

            swal({
              title: 'Estás seguro?',
              text: "Se eliminarán las areas seleccionadas.",
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
                  url: 'areas/delete',
                  type: 'POST',
                  dataType: 'json',
                  data: {values: values},
                  success: function(response) {
                    if (response.status == 200) {
                      swal(
                        'Exito!',
                        'Han sido eliminadas las areas correctamente',
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
              'No has seleccionado ninguna area para eliminar',
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