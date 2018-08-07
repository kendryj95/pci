@extends('layouts.app')

@section('title', 'Editar Proyecto')

@push('css')

<link rel="stylesheet" href="../assets/plugins/bootstrap-tagsinput/src/bootstrap-tagsinput.css">

@endpush

@section('content')

	@parent

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Proyectos
    <small>Editar</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="../dashboard"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="../productos"><i class="fa fa-cart-plus"></i> Proyectos</a></li>
    <li class="active">Editar Proyecto<li>
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
				<p><b>ERROR!</b> Ya existe un producto con ese nombre. Intentalo de nuevo.</p>
			</div>

			@elseif (isset($_GET['error']) && $_GET['error'] == 2)

			<div class="alert alert-danger">
				<p><b>Lo sentimos, ha ocurrido un error durante el proceso, verifica su conexión a internet e intentelo nuevamente.</p>
			</div>

			@endif

			<div class="box box-info">
			  <div class="box-header with-border">
			    <h3 class="box-title">Editar Proyecto</h3>
			  </div>
			  <div class="box-body">
	
			   <form action="../productos/edit/action" method="post">
			   	 {{ csrf_field() }}
			   	 <div class="form-group @if ($errors->has('name_prod')) has-error @endif">
			   	 	<div class="input-group">
				   	 	 <span class="input-group-addon"><i class="fa fa-archive"></i></span>
				   	 	 <input type="text" class="form-control" name="name_prod" placeholder="Nombre del producto (*)" value="{{ $producto[0]->nombre }}">
			   	 	</div>
				   	 	 @if ($errors->has('name_prod'))
				   	 	 <span class="help-block">
				   	 	 	<i class="fa fa-times-circle-o"></i> {{ $errors->get('name_prod')[0] }}
				   	 	 </span>
				   	 	 @endif
			   	 </div>

			   	 <input type="hidden" value="{{ $producto[0]->id }}" name="id_producto">
			   	
			   	<div class="form-group @if ($errors->has('subprod')) has-error @endif">
			   		<div class="input-group">
			   		  <span class="input-group-addon"><i class="fa fa-cart-plus"></i></span>
			   		  <input type="text" class="form-control" name="code" placeholder="Código del proyecto (*)" value="{{ $producto[0]->codigo }}">
			   		</div>
			   		  @if ($errors->has('code'))
			   		  <span class="help-block">
			   		  	<i class="fa fa-times-circle-o"></i> {{ $errors->get('code')[0] }}
			   		  </span>
			   		  @endif
			   	</div>

			   	<div class="form-group @if ($errors->has('name_client')) has-error @endif">
			   	 	<div class="input-group">
				   	 	 <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
				   	 	 <input type="text" class="form-control" name="name_client" placeholder="Nombre del Cliente (*)" value="{{ $producto[0]->nombre_cliente }}">
			   	 	</div>
				   	 	 @if ($errors->has('name_client'))
				   	 	 <span class="help-block">
				   	 	 	<i class="fa fa-times-circle-o"></i> {{ $errors->get('name_client')[0] }}
				   	 	 </span>
				   	 	 @endif
			   	 </div>

			   	 <div class="form-group @if ($errors->has('nro_campana')) has-error @endif">
			   	 	<div class="input-group">
				   	 	 <span class="input-group-addon"><i class="fa fa-slack"></i></span>
				   	 	 <input type="text" class="form-control" name="nro_campana" placeholder="Cant. de Campanas (*)" id="nro_campana" value="{{ $producto[0]->nro_campanas }}">
			   	 	</div>
				   	 	 @if ($errors->has('nro_campana'))
				   	 	 <span class="help-block">
				   	 	 	<i class="fa fa-times-circle-o"></i> {{ $errors->get('nro_campana')[0] }}
				   	 	 </span>
				   	 	 @endif
			   	 </div>

			   	<input type="submit" class="btn btn-success" value="Enviar"> 
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

<script src="../assets/plugins/bootstrap-tagsinput/src/bootstrap-tagsinput.js"></script>

@endpush