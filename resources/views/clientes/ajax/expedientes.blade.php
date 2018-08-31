<div class="row">
	<div class="col-lg-12">
		<div class="list-group">
			@foreach ($expedientes as $expediente)
		  <a href="{{ url('clientes/expediente/download', $expediente->id) }}" class="list-group-item">{{ $expediente->archivo }} <i class="mdi mdi-folder-download"></i></a>
		  	@endforeach
		</div> 
	</div>
</div>