@extends('layouts.app')

@section('title', 'Inf. Usuario')

@section('content')

	@parent

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Trabajadores
    <small>Usuario - Login</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="/gcapp/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/gcapp/trabajadores"><i class="fa fa-users"></i> Trabajadores</a></li>
    <li class="active">Usuario<li>
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
				<p><b>ERROR!</b> Ha ocurrido algún error en la conexión al servidor. Verifique su conexión a internet y por favor vuelva a intentarlo.</p>
			</div>

			@elseif (isset($_GET['error']) && $_GET['error'] == 2)
			
			<div class="alert alert-danger">
				<p><b>ERROR!</b> Las contraseñas no coinciden, intentelo de nuevo por favor</p>
			</div>

			@endif

			<div class="box box-info">
			  <div class="box-header with-border">
			    <h3 class="box-title">Datos Usuarios</h3>
			  </div>
			  <div class="box-body">
	
			   <form action="/gcapp/trabajadores/usuario/action" method="post" id="guardarUser">
			   	 {{ csrf_field() }}
			   	 <div class="form-group @if ($errors->has('user')) has-error @endif">
			   	 	<div class="input-group">
				   	 	 <span class="input-group-addon"><i class="fa fa-user"></i></span>
				   	 	 <input type="text" class="form-control" name="user" placeholder="Usuario (*)" value="{{ $usuario[0]->usuario }}" @if ($usuario[0]->usuario != "") readonly="true" @endif>
				   	 	 <input type="hidden" value="{{ $usuario[0]->id_asoc }}" name="id">
			   	 	</div>
				   	 	 @if ($errors->has('user'))
				   	 	 <span class="help-block">
				   	 	 	<i class="fa fa-times-circle-o"></i> {{ $errors->get('user')[0] }}
				   	 	 </span>
				   	 	 @endif
			   	 </div>
			   	
			   	<div class="form-group @if ($errors->has('pass')) has-error @endif">
			   		<div class="input-group">
			   		  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
			   		  <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña (*)" value="{{ $usuario[0]->password }}">
			   		</div>
			   		  @if ($errors->has('pass'))
			   		  <span class="help-block">
			   		  	<i class="fa fa-times-circle-o"></i> {{ $errors->get('pass')[0] }}
			   		  </span>
			   		  @endif
			   	</div>
			   		
			   	<div class="form-group @if ($errors->has('confirm_pass')) has-error @endif">
			   		<div class="input-group">
			   		  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
			   		  <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" placeholder="Confirmar Contraseña (*)">
			   		</div>
			   		  @if ($errors->has('confirm_pass'))
			   		  <span class="help-block">
			   		  	<i class="fa fa-times-circle-o"></i> {{ $errors->get('confirm_pass')[0] }}
			   		  </span>
			   		  @endif
			   	</div>
			   	
			   	<input type="submit" class="btn btn-success" id="send" value="Enviar"> 
			   	<a href="javascript:history.back()" class="btn btn-default">Cancelar</a>
			   </form>

			  </div>
			  <!-- /.box-body -->
			</div>
		</div>
	</div>
</section>


@endsection