@extends('layouts.app')

@section('title', 'Crear Protocolo Final')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@push('css')

<link rel="stylesheet" href="../assets/plugins/sweetalert2/sweetalert2.min.css">
<link rel="stylesheet" href="../assets/plugins/timepicker/bootstrap-timepicker.min.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="../assets/plugins/datepicker/datepicker3.css">

<link rel="stylesheet" href="../assets/plugins/select2/select2.min.css">

@endpush

@section('content')

<section class="content-header">
      <h1>
        Protocolos
        <small>Crear Protocolo Final</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Protocolos</a></li>
        <li class="active">Crear Protocolo Final</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     <div class="row">
          <div class="col-xs-12 col-lg-6">
               <label for="">Seleccionar Proyecto:</label>
               <select name="" id="" class="form-control" onchange="getListPiezas(this.value); getNroCampana(this.value)">
                    <option value="0">Seleccionar...</option>
                    @foreach ($proyectos as $proyecto)
                    <option value="{{ $proyecto->id }}">{{ $proyecto->codigo }} - {{ $proyecto->nombre }}</option>
                    @endforeach
               </select>
          </div>
          <div class="col-xs-12 col-lg-6">
               <label for="">Cliente:</label>
               <input type="text" class="form-control" placeholder="Nombre de cliente (*)" readonly="readonly" id="name_client">
          </div>
          <div class="col-xs-12 col-lg-6">
               <label for="">Nº de Campana:</label>
               <select name="" id="nro_campana" class="form-control" onchange="cargarDatos(this.value)">
               	<option value="0">Seleccione...</option>
               </select>
          </div>
          <input type="hidden" id="nro_campana_hd" value="0">
     </div>
     <br><br>

                	
      <div class="row">
           <div class="col-xs-12 col-lg-12">
               @include("protocolos.includes.form_protocolo_final", ["trabajadores" => $trabajadores])
          </div>
      </div>

    </section>

@endsection

@push('scripts')

<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="../assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script src="../assets/plugins/select2/select2.full.min.js"></script>

<script>

	// CONSTANTES PARA LAS OPERACIONES DE LLENADOS DEL PROTOCOLO

	const PEGADO_INFO_GRAL = 1; 
	const PROCESOS_PROTOCOLOFINAL = 2; 
	const OBSERVACIONES = 3; 
	const TERMINACIONES_INFO_GRAL = 4; 

	$(document).ready(function() {
		
		//Timepicker
	    $(".timepicker").timepicker({
	      showInputs: false
	    });

	    $('.datepicker').datepicker({
	      autoclose: true
	    });

	    $(".select2").select2();

	    $('.asig_falla').on('click', function(){

	    	var tipo_protocolo = $('.select_protocolo:visible').attr('data-tipoProtocolo');
	    	var falla = $(this).attr('data-falla');
	    	var protocolo = $(this).attr('data-protocolo');

	    	console.log($(this).attr('data-falla'));

	    	if ($(this).is(":checked")) {
	    		$("#falla_"+tipo_protocolo+"_chequeo_"+falla+"_"+protocolo).prop('disabled', false);
	    	} else {
	    		$("#falla_"+tipo_protocolo+"_chequeo_"+falla+"_"+protocolo).prop('disabled', true);
	    	}
	    });
         
	});

	function getListPiezas(id_proyecto){

		var html = '';
		$('.select_protocolo').hide();
		$('#tipo_protocolo_0').show();
		$('#nro_campana_hd').val("");

		if (id_proyecto != 0) {

			$.ajax({
				url: '../protocolos/listPiezas',
				type: 'GET',
				dataType: 'json',
				data: {id_proyecto: id_proyecto},
				beforeSend: function(){
					$('.list_piezas').addClass('disabled');
				},
				success: function(response){

					if (response.status == 200) {
						html += '<option value="0">Seleccionar</option>';
						response.data.forEach(function(p){
							html += '<option value="'+p.id+'">'+p.nombre+'</option>';
						});

						$('.list_piezas').html(html);
						$('#name_client').val(response.cliente[0].cliente);
					} else {
						swal("ERROR!", "Ha ocurrido un error inesperado, verifique su conexión a internet e intentelo de nuevo.", "error");
					}
				},
				error: function(error){
					swal("ERROR!", "Ha ocurrido un error inesperado, verifique su conexión a internet e intentelo de nuevo.", "error");
				},
				complete: function(){
					$('.list_piezas').removeClass('disabled');
				}
			});
		} else {
			$('.list_piezas').html("");
		}
		
	}

	function getNroCampana(id_producto){

		if (id_producto != 0) {

			$('.select_protocolo').hide();
			$('#tipo_protocolo_1').show();

			$.ajax({
				url: '../protocolofinal/getNroCampana',
				type: 'GET',
				dataType: 'json',
				data: {id_producto: id_producto},
				success: function(response){

					if (response.status == 200) {

							var html = '<option value="0">Seleccione...</option>';

							response.data.forEach(function(val){
								html += '<option value="'+val.id+'">'+val.nombre_nro_campana+'</option>';
							});
						
                            $('#nro_campana').html(html);

                            /*html = '<option value="0">Selecciona</option>';

                            response.nro_pieza.forEach(function(val){
								html += '<option value="'+val.id+'">'+val.nro_pieza+'</option>';
							});

							$('.nro_pieza').html(html);*/

							$('.select_protocolo').hide();
							$('#tipo_protocolo_1').show();

					} else {
						swal("ERROR!", "Ha ocurrido un error inesperado, verifique su conexión a internet e intentelo de nuevo.", "error");
					}
				},
				error: function(error){
					swal("ERROR!", "Ha ocurrido un error inesperado, verifique su conexión a internet e intentelo de nuevo.", "error");
				}
			});

		} else {
			$('#nro_campana').html("");
               $('.select_protocolo').hide();
               $('#tipo_protocolo_0').show();
		}
	}

	function cargarDatos(value){

		$('#nro_campana_hd').val(value); // setear campo oculto de nro de pieza

		var nro_campana = $('#nro_campana_hd').val();

		if (nro_campana != 0) {
			$.ajax({
				url: '../protocolofinal/getDatosProtocoloFinal',
				type: 'GET',
				dataType: 'json',
				data: "nro_campana="+nro_campana,
				success: function (response){
					if (response.status == 200) {
						console.dir(response.datos);

						$('.clean').val(""); // Limpiar campos primero antes de llenar.

						// INFO GRAL PINTADO - PROTOCOLO DE INYECCION.

						if (response.datos.info_gral_pegado.length > 0) {
							$('#fecha_entrada_peg_8').val(response.datos.info_gral_pegado[0].fecha_entrada);
							$('#fecha_salida_peg_8').val(response.datos.info_gral_pegado[0].fecha_salida);
							$('#hora_entrada_peg_8').val(response.datos.info_gral_pegado[0].hora_entrada);
							$('#hora_salida_peg_8').val(response.datos.info_gral_pegado[0].hora_salida);
							$('#hora_inicio_peg_linagua_8').val(response.datos.info_gral_pegado[0].hora_inicio_lin_agua);
							$('#hora_termino_peg_linagua_8').val(response.datos.info_gral_pegado[0].hora_termino_lin_agua);
							$('#hora_inicio_eme_8').val(response.datos.info_gral_pegado[0].hora_inicio_eme);
							$('#hora_termino_eme_8').val(response.datos.info_gral_pegado[0].hora_termino_eme);
							$('#hora_inicio_tapa_8').val(response.datos.info_gral_pegado[0].hora_inicio_tapa);
							$('#hora_termino_tapa_8').val(response.datos.info_gral_pegado[0].hora_termino_tapa);
						} 

						if (response.datos.nros_pieza_pegado.length > 0) {
							$('#pieza_eme_8').val(response.datos.nros_pieza_pegado[0].eme);
							$('#pieza_base_8').val(response.datos.nros_pieza_pegado[0].base);
							$('#pieza_lin_agua_8').val(response.datos.nros_pieza_pegado[0].linea_agua);
							$('#pieza_tapa_8').val(response.datos.nros_pieza_pegado[0].tapa);
							$('#pieza_tapas_int_8').val(response.datos.nros_pieza_pegado[0].tapa_int);
							$('#pieza_tapas_cierre_8').val(response.datos.nros_pieza_pegado[0].tapas_cierre);
						} 

						
						// PROCESOS DEL PROTOCOLO

						if (response.datos.procesos.length > 0) {

							response.datos.procesos.forEach(function(v){

								$('#proceso_'+v.proceso+'_'+v.id_protocolo).val(v.id_trabajador);
							});
						}

						// OBSERVACIONES - PARA TODOS LOS PROTOCOLOS

						if (response.datos.observaciones.length > 0) {

							response.datos.observaciones.forEach(function(v){

								$('#observacion_'+v.id_protocolo).val(v.descripcion);
							});

							
						}

						
					} else {
						alert("Ha ocurrido un error inesperado, intentelo de nuevo por favor.");
					}
				},
				error: function(error){
					console.log("Error:",error);
					alert("Ha ocurrido un error inesperado, intentelo de nuevo por favor.");
				}
			});
		} else {
			$('.clean').val("");
		}

		
		
	}

	function insertProtocoloFinal(protocolo, op, proceso = '', fase = '', sub_op = ''){

		switch (op){

			case PEGADO_INFO_GRAL:

				if ($('#nro_campana_hd').val() != 0) {
					
					var datos = $('#pegado_infgral_8').serialize();

					$.ajaxSetup({
					  headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});

					$.ajax({
						url: '../protocolofinal/datosProtocoloFinal',
						type: 'POST',
						dataType: 'json',
						data: 'op='+op+'&protocolo='+protocolo+'&nro_campana='+$('#nro_campana_hd').val()+'&'+datos,
						success: function(response){
							console.dir(response);

							if (response.status == 200) {
								swal({
								  position: 'top-end',
								  type: 'success',
								  title: 'Guardado exitosamente.',
								  showConfirmButton: false,
								  timer: 1500
								})
							} else {
								swal("ERROR!","Lo sentimos, ha ocurrido un error inesperado. Por favor intentelo de nuevo.", "error");
							}
						},
						error: function(error){
							console.dir(error);
							swal("ERROR!","Lo sentimos, ha ocurrido un error inesperado. Por favor intentelo de nuevo.", "error");
						}
					});
					
					
				} else {
					swal("SELECCIONA!","Escoge el nro de la campana con la que trabajarás", "warning");
					return 0;
				}

				break;

			case PROCESOS_PROTOCOLOFINAL:

				if ($('#nro_campana_hd').val() != 0) {

					var chequeo = $('#proceso_'+proceso+'_'+protocolo).val();

					if (chequeo != "") {
						var regex = /^(\d)+,(\d)+|(\d)+$/;

						if (regex.test(chequeo)) {
							
							$.ajaxSetup({
							  headers: {
							    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							  }
							});

							$.ajax({
								url: '../protocolofinal/datosProtocoloFinal',
								type: 'POST',
								dataType: 'json',
								data: 'op='+op+'&protocolo='+protocolo+'&nro_campana='+$('#nro_campana_hd').val()+'&proceso='+proceso+'&fase='+fase+'&id_trabajador='+chequeo,
								success: function(response){
									console.dir(response);

									if (response.status == 200) {
										swal({
										  position: 'top-end',
										  type: 'success',
										  title: 'Guardado exitosamente.',
										  showConfirmButton: false,
										  timer: 1500
										})
									} else {
										swal("ERROR!","Lo sentimos, ha ocurrido un error inesperado. Por favor intentelo de nuevo.", "error");
									}
								},
								error: function(error){
									console.dir(error);
									swal("ERROR!","Lo sentimos, ha ocurrido un error inesperado. Por favor intentelo de nuevo.", "error");
								}
							});

						} else {
							swal("ERROR!", "Formato Invalido (Ejm: 1,2)", "error");
							return 0;
						}
					}
					
				} else {
					swal("SELECCIONA!","Escoge el nro de la campana con la que trabajarás", "warning");
					return 0;
				}

				break;

			case OBSERVACIONES:

				if ($('#nro_campana_hd').val() != 0) {
					
					var descripcion = $('#observacion_'+protocolo).val();

					if (descripcion != "") {
						$.ajaxSetup({
						  headers: {
						    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						  }
						});

						$.ajax({
							url: '../protocolofinal/datosProtocoloFinal',
							type: 'POST',
							dataType: 'json',
							data: 'op='+op+'&protocolo='+protocolo+'&nro_campana='+$('#nro_campana_hd').val()+'&descripcion='+descripcion,
							success: function(response){
								console.dir(response);

								if (response.status == 200) {
									swal({
									  position: 'top-end',
									  type: 'success',
									  title: 'Guardado exitosamente.',
									  showConfirmButton: false,
									  timer: 1500
									})
								} else {
									swal("ERROR!","Lo sentimos, ha ocurrido un error inesperado. Por favor intentelo de nuevo.", "error");
								}
							},
							error: function(error){
								console.dir(error);
								swal("ERROR!","Lo sentimos, ha ocurrido un error inesperado. Por favor intentelo de nuevo.", "error");
							}
						});
					}

				} else {
					swal("SELECCIONA!","Escoge el nro de la campana con la que trabajarás", "warning");
					return 0;
				}

				break;

			case TERMINACIONES_INFO_GRAL:

				if ($('#nro_campana_hd').val() != 0) {
					
					var datos = $('#terminaciones_infgral_9').serialize();

					$.ajaxSetup({
					  headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});

					$.ajax({
						url: '../protocolofinal/datosProtocoloFinal',
						type: 'POST',
						dataType: 'json',
						data: 'op='+op+'&protocolo='+protocolo+'&nro_campana='+$('#nro_campana_hd').val()+'&'+datos,
						success: function(response){
							console.dir(response);

							if (response.status == 200) {
								swal({
								  position: 'top-end',
								  type: 'success',
								  title: 'Guardado exitosamente.',
								  showConfirmButton: false,
								  timer: 1500
								})
							} else {
								swal("ERROR!","Lo sentimos, ha ocurrido un error inesperado. Por favor intentelo de nuevo.", "error");
							}
						},
						error: function(error){
							console.dir(error);
							swal("ERROR!","Lo sentimos, ha ocurrido un error inesperado. Por favor intentelo de nuevo.", "error");
						}
					});
					
					
				} else {
					swal("SELECCIONA!","Escoge el nro de la campana con la que trabajarás", "warning");
					return 0;
				}

				break;

		}
	}
</script>

@endpush
