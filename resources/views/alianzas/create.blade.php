@extends('layouts.app')

@section('title', 'Nueva alianza')

@section('content')

	@parent

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Alianzas
    <small>Crear</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="../alianzas"><i class="fa fa-users"></i> Alianzas</a></li>
    <li class="active">Nueva alianza<li>
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
				<p><b>ERROR!</b> El ID ya pertenece a algún trabajador. Intenta con otro distinto</p>
			</div>

			@endif

			<div class="box box-info">
			  <div class="box-header with-border">
			    <h3 class="box-title">Nueva alianza</h3>
			  </div>
			  <div class="box-body">
	
			   <form action="crear" method="post">
			   	 {{ csrf_field() }}
			   	 <div class="form-group @if ($errors->has('nombre')) has-error @endif">
			   	 	<div class="input-group">
				   	 	 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
				   	 	 <input type="text" class="form-control" name="nombre" placeholder="Nombre alianza (*)">
			   	 	</div>
				   	 	 @if ($errors->has('nombre'))
				   	 	 <span class="help-block">
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
			   		  <span class="help-block">
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
			   		  <span class="help-block">
			   		  	@foreach ($errors->get('telefono') as $error)
			   		  	<i class="fa fa-times-circle-o"></i> {{ $error }}
			   		  	@endforeach
			   		  </span>
			   		  @endif
			   	</div>
			   		
			   	<div class="form-group @if ($errors->has('director')) has-error @endif">
			   		<div class="input-group">
			   		  <span class="input-group-addon"><i class="fa fa-user"></i></span>
			   		  <input type="text" class="form-control" name="director" placeholder="Director alianza (*)">
			   		</div>
			   		  @if ($errors->has('director'))
			   		  <span class="help-block">
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
			   		  <span class="help-block">
			   		  	@foreach ($errors->get('correo') as $error)
			   		  	<i class="fa fa-times-circle-o"></i> {{ $error }}
			   		  	@endforeach
			   		  </span>
			   		  @endif
			   	</div>

			   	<div class="form-group">
			   		<label for="estatus">Alianza activa</label>
			   		<div class="input-group">
			   		  <span class="input-group-addon"><i class="fa fa-power-off"></i></span>
			   		  <select name="estatus" id="estatus" class="form-control">
			   		  	<option value="1">Sí</option>
			   		  	<option value="0">NO</option>
			   		  </select>
			   		</div>
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