@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Grupos')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Grupos')
  @slot('last_page', 'Dashboard')

  @endcomponent

@endsection

@section('content')

@if ($errors->has('e_grupo'))

    <div class="alert alert-danger">
      <p>{{$errors->get('e_grupo')[0]}}</p>
    </div>

@endif

<div class="row">
  <div class="col-lg-12 col-md-12">
      <div class="card">
          <div class="card-body">
              @if (in_array(23, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="crear()" class="btn btn-primary" title="Agregar"><i class="mdi mdi-plus-box mdi-18px"></i></a>&nbsp;
              @endif
              @if (in_array(24, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="editar()" class="btn btn-success" title="Editar"><i class="mdi mdi-pencil-box mdi-18px"></i></a>&nbsp;
              @endif
              @if (in_array(25, $permisos) || session()->get('user_name') == 'admin')
              <a href="javascript:void(0)" onclick="deleteGrupo()" class="btn btn-danger" title="Eliminar"><i class="mdi mdi-delete mdi-18px"></i></a>
              @endif
              <br><br>
              <div class="table-responsive">
                <table id="tableGrupos" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>No.</th>
                    <th>GRUPO</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($grupos as $i => $grupo)
                    <tr>
                      <td><input type="checkbox" class="grupos" value="{{ $grupo->id }}" id="id_{{ $grupo->id }}" name="ali[]"><label for="id_{{ $grupo->id }}"></label></td>
                      <td>{{ $i+1 }}</td>
                      <td>{{ $grupo->grupo }}</td>
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
<div class="modal fade" id="modalCrearGrupo" tabindex="-1" role="dialog" aria-labelledby="modalCrearGrupoTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCrearGrupoTitle">Nuevo Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="{{url('clientes/grupos/crear')}}" method="post" id="form_create_grupo">
             {{ csrf_field() }}
             <div class="form-group @if ($errors->has('grupo')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <input type="text" class="form-control" name="grupo" placeholder="Nombre grupo (*)">
              </div>
                 @if ($errors->has('grupo'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('grupo')[0] }}
                 </span>
                 @endif
             </div>
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="crearGrupo()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditGrupo" tabindex="-1" role="dialog" aria-labelledby="modalEditGrupoTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditGrupoTitle">Editar Grupo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="{{url('clientes/grupos/editar')}}" method="post" id="form_edit_grupo">
             {{ csrf_field() }}
             <input type="hidden" id="id_grupo" name="id_grupo">
             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <input type="text" class="form-control" name="e_grupo" id="e_grupo" placeholder="Nombre grupo (*)">
              </div>
             </div>
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="editGrupo()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>


@endsection

@push('scripts')

<script>
  const id_usuario = {{session()->get('user_id')}};
  $(document).ready(function(){
    var $tableGrupos = jQuery("#tableGrupos");
    var tableGrupos = $tableGrupos.DataTable( {
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

    @if ($errors->has('grupo'))

    $('#modalCrearGrupo').modal('show');

    @endif
  });

  function crear()
  {
    $('#modalCrearGrupo').modal('show');
  }

  function crearGrupo()
  {
    $('#form_create_grupo').submit();
  }

  function editGrupo()
  {
    $('#form_edit_grupo').submit();
  }

  function editar()
  {
    var count = $('.grupos:checked').length;
    var param = '';

    if (count != 0 && count == 1) {
      param = $('.grupos:checked').val();

      $.ajax({
        url: '{{url('clientes/grupos/edit')}}/'+param,
        type: 'GET',
        dataType: 'json',
        success: function(response){

          console.dir(response.data);

          $('#id_grupo').val(response.data.id);
          $('#e_grupo').val(response.data.grupo);

          $('#modalEditGrupo').modal('show');
        },
        error: function (error) {
          console.log('Error');
        }
      });
      
    } else if (count == 0) {
      swal('Vacío', 'No has seleccionado ninguna grupo para editar', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 grupo para editar', 'warning');
    }
  }

  function deleteGrupo()
  {
    var count = $('.grupos:checked').length;
    var values = [];

    if (count > 0) {
      $('.grupos:checked').each(function (){
        values.push($(this).val());
      });

      swal({
        title: 'Estás seguro?',
        text: "Se eliminarán las grupos seleccionados.",
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
            url: '{{url('clientes/grupos/delete')}}',
            type: 'POST',
            dataType: 'json',
            data: {values: values},
            success: function(response) {
              if (response.status == 200) {
                swal(
                  'Exito!',
                  'Han sido eliminados los grupos correctamente',
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
        'No has seleccionado ningun grupo para eliminar',
        'info'
      );
    }

  }
</script>

@endpush