@extends('layouts.app')

@section('title', 'Asignar Pieza')

@push('css')

<link rel="stylesheet" href="../assets/plugins/sweetalert2/sweetalert2.min.css">

@endpush


@section('content')

	@parent

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Proyectos
    <small>Asignar Pieza</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="../dashboard"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="../productos"><i class="fa fa-cart-plus"></i> Proyectos</a></li>
    <li class="active">Asignar Pieza <li>
  </ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12 col-lg-6 col-lg-offset-3">
			<br>
			<br>
			<br>

			@if (isset($_GET['error']) && $_GET['error'] == 1)

			<div class="alert alert-danger">
				<p><b>ERROR!</b> Ya existe una pieza con ese nombre. Intentalo de nuevo.</p>
			</div>

			@elseif (isset($_GET['error']) && $_GET['error'] == 2)

			<div class="alert alert-danger">
				<p><b>Lo sentimos, ha ocurrido un error durante el proceso, verifica su conexión a internet e intentelo nuevamente.</p>
			</div>

			@endif

			<div class="box box-info">
			  <div class="box-header with-border">
			    <h3 class="box-title">Asignar Pieza</h3>
			  </div>
			  <div class="box-body">
	
			   <form action="../productos/pieza/action" method="post">
			   	 {{ csrf_field() }}

			   	 <div class="form-group">
			   	 	<div class="input-group">
				   	 	 <span class="input-group-addon"><i class="fa fa-mouse-pointer"></i></span>
				   	 	 <select name="id_pieza" id="" class="form-control" onChange="getPieza(this.value)">
				   	 	 	<option value="0">Nueva pieza</option>
				   	 	 	@foreach ($piezas as $pieza)

				   	 	 	<option value="{{ $pieza->id }}">{{ $pieza->nombre }}</option>

				   	 	 	@endforeach
				   	 	 </select>
			   	 	</div>
				   	
			   	 </div>

			   	 <div class="form-group @if ($errors->has('name_pieza')) has-error @endif">
			   	 	<div class="input-group">
				   	 	 <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
				   	 	 <input type="text" class="form-control" name="name_pieza" placeholder="Nombre de Pieza (*)" id="name_pieza">
			   	 	</div>
				   	 	 @if ($errors->has('name_pieza'))
				   	 	 <span class="help-block">
				   	 	 	<i class="fa fa-times-circle-o"></i> {{ $errors->get('name_pieza')[0] }}
				   	 	 </span>
				   	 	 @endif
			   	 </div>

			   	 <div class="form-group @if ($errors->has('nro_pieza')) has-error @endif">
			   	 	<div class="input-group">
				   	 	 <span class="input-group-addon"><i class="fa fa-slack"></i></span>
				   	 	 <input type="text" class="form-control" name="nro_pieza" placeholder="Cant. de Piezas (*)" id="nro_pieza">
			   	 	</div>
				   	 	 @if ($errors->has('nro_pieza'))
				   	 	 <span class="help-block">
				   	 	 	<i class="fa fa-times-circle-o"></i> {{ $errors->get('nro_pieza')[0] }}
				   	 	 </span>
				   	 	 @endif
			   	 </div>

	   	    	 <div class="form-group @if ($errors->has('id_protocolo')) has-error @endif">
	   	    	 	<div class="input-group">
	   	 	   	 	 <span class="input-group-addon"><i class="fa fa-book"></i></span>
	   	 	   	 	 <select name="id_protocolo" id="id_protocolo" class="form-control" id="">
	   	 	   	 	 	<option value="0">Seleccionar protocolo</option>
	   	 	   	 	 	@foreach ($protocolos as $protocolo)

	   	 	   	 	 	<option value="{{ $protocolo->id }}">{{ $protocolo->nombre }}</option>

	   	 	   	 	 	@endforeach
	   	 	   	 	 </select>
	   	    	 	</div>
	   	 	   		@if ($errors->has('id_protocolo'))
	   	 	   		<span class="help-block">
	   	 	   			<i class="fa fa-times-circle-o"></i> {{ $errors->get('id_protocolo')[0] }}
	   	 	   		</span>
	   	 	   		@endif
	   	    	 </div>

			   	 <input type="hidden" name="id_proy" value="{{ $_REQUEST['proy'] }}">
			   	 <input type="hidden" name="op" value="0" id="op">
			   	 <input type="hidden" name="old_pieza" value="" id="old_pieza">
			   	
			   	<input type="submit" class="btn btn-success" value="Enviar" id="send"> 
			   	<a href="javascript:history.back()" class="btn btn-default">Cancelar</a>
			   </form>

			  </div>
			  <!-- /.box-body -->
			</div>
		</div>
	</div>
</section>


@endsection

@push('scripts')

<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
	function getPieza(value){

		if (value != 0) {

			$.ajax({
				url: '../productos/pieza/info',
				type: 'GET',
				dataType: 'json',
				data: {id_pieza: value},
				beforeSend: function(){
					$('#send').addClass('disabled');
				},
				success: function(response){

					if (response.status == 200) {
						
						$('#nro_pieza, #old_pieza').val(response.data[0].cant_piezas);
						$('#nro_campana').val(response.data[0].cant_campanas);
						$('#name_pieza').val(response.data[0].nombre);
						$('#id_protocolo').val(response.data[0].id_protocolo).prop('disabled', true);
						$('#op').val(1);
					} else {
						swal("ERROR!", "Ha ocurrido un error, verifique su conexión a internet e intentelo de nuevo.", "error");
					}
				},
				error: function(error){
					swal("ERROR!", "Ha ocurrido un error, verifique su conexión a internet e intentelo de nuevo.", "error");
				},
				complete: function(){
					$('#send').removeClass('disabled');
				}
			});
		} else {
			$('#nro_pieza').val("");
			$('#nro_campana').val("");
			$('#name_pieza').val("");
			$('#id_protocolo').val(0).prop('disabled', false);
			$('#op').val(0);
		}

		

	}
</script>

@endpush