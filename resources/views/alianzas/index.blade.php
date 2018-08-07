@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Alianzas')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Alianzas
    <small>Administración</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Alianzas</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  
<div class="row">
  <div class="col-xs-12 col-lg-12">

    <div class="row">
      <div class="col-xs-12 col-lg-6">
      
      @if (isset($_GET['success']) && $_GET['success'] == 1)
        <div class="alert alert-success">
          <p>Se ha creado la <b>alianza</b> satisfactoriamente</p>
        </div>
      @elseif (isset($_GET['success']) && $_GET['success'] == 2)
        <div class="alert alert-success">
          <p>Se ha actualizado el <b>usuario</b> de inicio de sesion satisfactoriamente</p>
        </div>
      @elseif (isset($_GET['success']) && $_GET['success'] == 3)
        <div class="alert alert-success">
          <p>Se ha creado el <b>trabajador</b> satisfactoriamente.</p>
        </div>
      @elseif (isset($_GET['success']) && $_GET['success'] == 4)
        <div class="alert alert-success">
          <p>Se ha actualizado el <b>trabajador</b> satisfactoriamente.</p>
        </div>
      @endif
      </div>
    </div>

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Administración</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <a href="alianzas/create" class="btn btn-default" title="Agregar"><i class="fa fa-plus-square fa-lg"></i></a>&nbsp;
        <a href="javascript:void(0)" onclick="editar()" class="btn btn-default" title="Editar"><i class="fa fa-pencil-square fa-lg"></i></a>&nbsp;
        <a href="javascript:void(0)" onclick="deleteAlianza()" class="btn btn-default" title="Eliminar"><i class="fa fa-trash fa-lg"></i></a>
        <br><br>
        <div class="table-responsive">
          <table id="tableAlianzas" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th></th>
              <th>No.</th>
              <th>ALIANZA</th>
              <th>TELEFONO</th>
              <th>DIRECTOR</th>
              <th>CORREO</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($alianzas as $i => $alianza)
              <tr>
                <td><input type="checkbox" class="alianzas" value="{{ $alianza->id }}" name="ali[]"></td>
                <td>{{ $i+1 }}</td>
                <td>{{ $alianza->nombre }}</td>
                <td>{{ $alianza->telefono }}</td>
                <td>{{ $alianza->director }}</td>
                <td>{{ $alianza->correo }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>

</section>
<!-- /.content -->
@endsection

@push('scripts')

<script>
  $(document).ready(function(){
    var $tableAlianzas = jQuery("#tableAlianzas");
    var tableAlianzas = $tableAlianzas.DataTable( {
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
  });

  function editar()
  {
    var count = $('.alianzas:checked').length;
    var param = '';

    if (count != 0 && count == 1) {
      param = $('.alianzas:checked').val();
      window.location.assign('alianzas/edit/'+param);
    } else if (count == 0) {
      swal('Vacío', 'No has seleccionado ninguna alianza para editar', 'info');
    } else {
      swal('Warning','No puedes seleccionar más de 1 alianza para editar', 'warning');
    }
  }

  function deleteAlianza()
  {
    var count = $('.alianzas:checked').length;
    var values = [];

    if (count > 0) {
      $('.alianzas:checked').each(function (){
        values.push($(this).val());
      });

      swal({
        title: 'Estás seguro?',
        text: "Se eliminarán las alianzas seleccionadas.",
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
            url: 'alianzas/delete',
            type: 'POST',
            dataType: 'json',
            data: {values: values},
            success: function(response) {
              if (response.status == 200) {
                swal(
                  'Exito!',
                  'Han sido eliminadas las alianzas correctamente',
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
        'No has seleccionado ninguna alianza para eliminar',
        'info'
      );
    }
  }
</script>

@endpush