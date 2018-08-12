@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Puestos')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Puestos')
  @slot('last_page', 'Dashboard')

  @endcomponent

@endsection

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12">
      <div class="card">
          <div class="card-body">
              <a href="javascript:void(0)" class="btn btn-primary" title="Agregar" data-toggle="modal" data-target="#modalCrearPuestos"><i class="mdi mdi-plus-box mdi-18px"></i></a>&nbsp;
              <a href="javascript:void(0)" onclick="editar()" class="btn btn-success" title="Editar"><i class="mdi mdi-pencil-box mdi-18px"></i></a>&nbsp;
              <a href="javascript:void(0)" onclick="deletePuesto()" class="btn btn-danger" title="Eliminar"><i class="mdi mdi-delete mdi-18px"></i></a>
              <br><br>
              <div class="table-responsive">
                <table id="tablePuestos" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>No.</th>
                    <th>PUESTO</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($puestos as $i => $puesto)
                    <tr>
                      <td><input type="checkbox" class="puestos" value="{{ $puesto->id }}" id="id_{{ $puesto->id }}" name="ali[]"><label for="id_{{ $puesto->id }}"></label></td>
                      <td>{{ $i+1 }}</td>
                      <td>{{ $puesto->puesto }}</td>
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
<div class="modal fade" id="modalCrearPuestos" tabindex="-1" role="dialog" aria-labelledby="modalCrearPuestosTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCrearPuestosTitle">Nueva Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="puestos/crear" method="post" id="form_create_puesto">
             {{ csrf_field() }}

             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                 <select name="area" id="area" class="form-control">
                   @foreach ($areas as $area):
                    <option value="{{$area->id}}">{{$area->area}}</option>
                   @endforeach
                 </select>
              </div>
             </div>

             <div class="form-group @if ($errors->has('puesto')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                 <input type="text" class="form-control" name="puesto" placeholder="Nombre puesto (*)">
              </div>
                 @if ($errors->has('puesto'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('puesto')[0] }}
                 </span>
                 @endif
             </div>
            
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="crearPuesto()" class="btn btn-primary">Guardar</button>
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

           <form action="puestos/editar" method="post" id="form_edit_puesto">
             {{ csrf_field() }}
             <input type="hidden" id="id_puesto" name="id_puesto">

             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                 <select name="e_area" id="e_area" class="form-control">
                   @foreach ($areas as $area):
                    <option value="{{$area->id}}">{{$area->area}}</option>
                   @endforeach
                 </select>
              </div>
             </div>

             <div class="form-group @if ($errors->has('e_puesto')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                 <input type="text" class="form-control" name="e_puesto" id="e_puesto" placeholder="Nombre puesto (*)">
              </div>
                 @if ($errors->has('e_puesto'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_puesto')[0] }}
                 </span>
                 @endif
             </div>
            
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="editPuesto()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


@endsection

@push('scripts')

<script>
  $(document).ready(function(){
    var $tablePuestos = jQuery("#tablePuestos");
    var tablePuestos = $tablePuestos.DataTable( {
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

    @if ($errors->has('puesto'))

    $('#modalCrearPuestos').modal('show');

    @elseif ($errors->has('e_puesto'))

    $('#modalEditArea').modal('show');

    @endif
  });

  function crearPuesto()
  {
    $('#form_create_puesto').submit();
  }

  function editPuesto()
  {
    $('#form_edit_puesto').submit();
  }

  function editar()
  {
    var count = $('.puestos:checked').length;
    var param = '';

    if (count != 0 && count == 1) {
      param = $('.puestos:checked').val();

      $.ajax({
        url: 'puestos/edit/'+param,
        type: 'GET',
        dataType: 'json',
        success: function(response){

          if (response.status == 200) {

            $('#e_puesto').val(response.data.puesto);

            $('#id_puesto').val(response.data.id);

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
      swal('Vacío', 'No has seleccionado ninguna puesto para editar', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 puesto para editar', 'warning');
    }
  }

  function deletePuesto()
  {
    var count = $('.puestos:checked').length;
    var values = [];

    if (count > 0) {
      $('.puestos:checked').each(function (){
        values.push($(this).val());
      });

      swal({
        title: 'Estás seguro?',
        text: "Se eliminarán las puestos seleccionadas.",
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
            url: 'puestos/delete',
            type: 'POST',
            dataType: 'json',
            data: {values: values},
            success: function(response) {
              if (response.status == 200) {
                swal(
                  'Exito!',
                  'Han sido eliminadas las puestos correctamente',
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
        'No has seleccionado ninguna puesto para eliminar',
        'info'
      );
    }
  }

</script>

@endpush