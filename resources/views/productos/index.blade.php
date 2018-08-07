@extends('layouts.app')

@section('title', 'Productos');

@push('css')

<link rel="stylesheet" href="/gcapp/assets/plugins/sweetalert2/sweetalert2.min.css">

@endpush

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Proyectos
    <small>Listado</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/gcapp/dashboard"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Proyectos</li>
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
          <p>Se ha creado el <b>proyecto</b> satisfactoriamente</p>
        </div>
      @elseif (isset($_GET['error']) && $_GET['error'] == 2)
        <div class="alert alert-danger">
          <p><b>ERROR!</b> El proyecto al que intentas acceder no existe.</p>
        </div>

	    @elseif (isset($_GET['success']) && $_GET['success'] == 3)
      <div class="alert alert-success">
        <p>Se ha actualizado el <b>proyecto</b> satisfactoriamente.</p>
      </div>
      @elseif (isset($_GET['success']) && $_GET['success'] == 4)
      <div class="alert alert-success">
        <p>Se ha asignado una <b>pieza</b> satisfactoriamente.</p>
      </div>
      @elseif (isset($_GET['success']) && $_GET['success'] == 5)
	    <div class="alert alert-success">
	      <p>Se ha asignado una <b>pieza</b> satisfactoriamente.</p>
	    </div>
      
      @endif
      </div>
    </div>

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Listado Proyectos</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <a href="/gcapp/productos/create" class="btn btn-primary"><i class="fa fa-plus-square"></i> Agregar</a>
        <br><br>
        <div class="table-responsive">
          <table id="tableProductos" class="table table-bordered table-striped" style="width: 100% !important">
            <thead>
            <tr>
              <th>ID</th>
              <th>Proyecto</th>
              <th>Código</th>
              <th>Piezas</th>
              <th>Cliente</th>
              <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
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

<script src="/gcapp/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>

	var tableProductos = null;

  $(document).ready(function(){
    var $tableProductos = jQuery("#tableProductos");
    	tableProductos = $tableProductos.DataTable( {
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
      "ajax": "/gcapp/productos/listar"
    } );
  });

  function elimProd(btn){

  	var id_producto = $(btn).attr('data-id');

  	swal({
  	  title: 'Estás seguro?',
  	  text: "Se eliminará el producto y el proceso no tiene reverso.",
  	  type: 'warning',
  	  showCancelButton: true,
  	  confirmButtonColor: '#3085d6',
  	  cancelButtonColor: '#d33',
  	  confirmButtonText: 'Sí, eliminar!'
  	}).then((result) => {

  	  if (result === true) {

  	  	$.ajax({
  	  		url: '/gcapp/productos/delete',
  	  		type: 'GET',
  	  		dataType: 'json',
  	  		data: {id_producto: id_producto},
  	  		success: function (response){
  	  			if (response.data) {
  	  				swal(
  	  				  'Eliminado!',
  	  				  'El producto ha sido removido satisfactoriamente.',
  	  				  'success'
  	  				)

  	  				tableProductos.ajax.reload();
  	  			} else {
  	  				swal(
  	  				  'ERROR!',
  	  				  'Ha ocurrido un error en el proceso, por favor verifica su conexión a internet e intentalo nuevamente.',
  	  				  'error'
  	  				)
  	  			}
  	  		},
  	  		error: function (error){
  	  			swal(
  	  			  'ERROR!',
  	  			  'Ha ocurrido un error, por favor verifica su conexión a internet e intentalo nuevamente.',
  	  			  'error'
  	  			)
  	  		}
  	  	});
  	    
  	  }
  	})
  }
</script>

@endpush