@extends('layouts.app')

@section('title', 'Crear Protocolo')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@push('css')

<link rel="stylesheet" href="/gcapp/assets/plugins/sweetalert2/sweetalert2.min.css">
<link rel="stylesheet" href="/gcapp/assets/plugins/timepicker/bootstrap-timepicker.min.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="/gcapp/assets/plugins/datepicker/datepicker3.css">

<link rel="stylesheet" href="/gcapp/assets/plugins/select2/select2.min.css">

@endpush

@section('content')

<section class="content-header">
      <h1>
        Protocolos
        <small>Crear Protocolo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/gcapp/dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Protocolos</a></li>
        <li class="active">Crear Protocolo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     <div class="row">
          <div class="col-xs-12 col-lg-6">
               <label for="">Seleccionar Proyecto:</label>
               <select name="" id="" class="form-control" onChange="getListPiezas(this.value)">
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
               <label for="">Seleccionar Pieza:</label>
               <select name="" id="select_pieza" class="form-control list_piezas" onChange="getNroPieza(this.value)">
               </select>
          </div>
          <div class="col-xs-12 col-lg-6">
               <label for="">Nº de Pieza:</label>
               <select name="" id="" class="form-control nro_pieza" onchange="defineNroPieza(this.value)">
               	<option value="0">Seleccione...</option>
               </select>
          </div>
          <input type="hidden" id="nro_pieza_hd" value="0">
     </div>
     <br><br>

                	
      <div class="row">
           <div class="col-xs-12 col-lg-12">
               @include("protocolos.includes.form_protocolo", ["trabajadores" => $trabajadores])
          </div>
      </div>

    </section>

@endsection

@push('scripts')

<script src="/gcapp/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="/gcapp/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- bootstrap datepicker -->
<script src="/gcapp/assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<script src="/gcapp/assets/plugins/select2/select2.full.min.js"></script>

<script>

	// CONSTANTES PARA LAS OPERACIONES DE LLENADOS DEL PROTOCOLO

	const INFO_GRAL_INYECCION_PINTADO = 1; 
	const INFO_GRAL_INYECCION = 2; 
	const PROCESOS_PROTOCOLO = 3; 
	const INFO_GRAL_FINAL_INYECCION = 4; 
	const INFO_GRAL_CYL = 5; 
	const CYL_FALLAS = 6; 
	const OBSERVACIONES = 7; 
	const INFO_GRAL_PERFORADO = 8; 

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
		$('#nro_pieza_hd').val("");

		if (id_proyecto != 0) {

			$.ajax({
				url: '/gcapp/protocolos/listPiezas',
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

	function getNroPieza(id_pieza){

		if (id_pieza != 0) {

			$.ajax({
				url: '/gcapp/protocolos/getNroPieza',
				type: 'GET',
				dataType: 'json',
				data: {id_pieza: id_pieza},
				success: function(response){

					if (response.status == 200) {

							var html = '<option value="0">Seleccione...</option>';

							response.data.forEach(function(val){
								html += '<option value="'+val.id+'">'+val.nombre_nro_pieza+'</option>';
							});
						
                            $('.nro_pieza').html(html);

							var id_protocolo = response.data[0].id_protocolo;

	                        if (id_protocolo != 0) {
                               $('.select_protocolo').hide();

                               $('#tipo_protocolo_'+id_protocolo).show();
	                        }

					} else {
						swal("ERROR!", "Ha ocurrido un error inesperado, verifique su conexión a internet e intentelo de nuevo.", "error");
					}
				},
				error: function(error){
					swal("ERROR!", "Ha ocurrido un error inesperado, verifique su conexión a internet e intentelo de nuevo.", "error");
				}
			});
		} else {
			$('.nro_pieza:visible').html("");
               $('.select_protocolo').hide();
               $('#tipo_protocolo_0').show();
		}
	}

	function defineNroPieza(value){

		$('#nro_pieza_hd').val(value); // setear campo oculto de nro de pieza

		var nro_pieza = $('#nro_pieza_hd').val();
		var tipo_protocolo = $('.select_protocolo:visible').attr('data-tipoProtocolo'); // capturar tipo de protocolo solo del campo hidden visible.

		if (nro_pieza != 0) {
			$.ajax({
				url: '/gcapp/protocolos/getDatosProtocolo',
				type: 'GET',
				dataType: 'json',
				data: "nro_pieza="+nro_pieza+"&tipo_protocolo="+tipo_protocolo,
				success: function (response){
					if (response.status == 200) {
						console.dir(response.datos);

						$('.clean').val(""); // Limpiar campos primero antes de llenar.

						// INFO GRAL PINTADO - PROTOCOLO DE INYECCION.

						if (response.datos.info_gral_pintado.length > 0) {
							$('#nro_tarro_gel_coat_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].nro_tarro_coat);
							$('#t_molde_antes_pintar_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].temp_molde_antes_pintar);
							$('#kg_gel_coat_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].kg_coat);
							$('#porcent_catalizador_pintado_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].porcent_catalizador);
							$('#hora_inicio_pintado_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].hora_inicio_pintado);
							$('#t_gel_coat_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].temp_gel_coat);
							$('#catalizador_pintado_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].catalizador);
							$('#hora_termino_pintado_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].hora_final_pintado);
							$('#hora_tiempo_cat_'+tipo_protocolo).val(response.datos.info_gral_pintado[0].hora_tiempo_cat);
						} 

						// INFO GRAL INYECCION - PROTOCOLO DE INYECCION.

						if (response.datos.info_gral_inyeccion.length > 0) {
							$('#t_amb_seca_pieza_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].temp_amb_seca_pieza);
							$('#porcent_catalizador_inyeccion_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].porcent_catalizador);
							$('#catalizador_inyeccion_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].catalizador);
							$('#porcent_hr_seca_pieza_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].porcent_hr_seca_pieza);
							$('#t_molde_antes_inyeccion_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].temp_molde_ant_inyeccion);
							$('#n_tarro_resina_inyeccion_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].nro_tarro_resina_inyeccion);
							$('#t_ambiente_sala_inyeccion_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].temp_amb_sala_inyeccion);
							$('#t_resina_inicio_inyeccion_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].temp_resina_inicio_inyeccion);
							$('#hora_inicio_inyeccion_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].hora_inicio_inyeccion);
							$('#lts_resina_inyectada_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].litros_resina_inyectada);
							$('#porcent_hr_sala_inyeccion_'+tipo_protocolo).val(response.datos.info_gral_inyeccion[0].porcent_hr_sala_inyeccion);
						} 

						// PROCESOS DEL PROTOCOLO

						if (response.datos.procesos.length > 0) {

							response.datos.procesos.forEach(function(v){

								$('#proceso_'+tipo_protocolo+'_'+v.proceso+'_'+v.id_protocolo).val(v.id_trabajador);
							});
						}

						// INFO GRAL FINAL INYECCION - PROTOCOLO INYECCIÓN

						if (response.datos.info_gral_final_inyeccion.length > 0) {
							$('#hora_termino_inyeccion_final_'+tipo_protocolo).val(response.datos.info_gral_final_inyeccion[0].hora_termino_inyeccion);
							$('#hora_desmolde_pieza_final_'+tipo_protocolo).val(response.datos.info_gral_final_inyeccion[0].hora_desmolde_pieza);
							$('#t_desmolde_pieza_final_'+tipo_protocolo).val(response.datos.info_gral_final_inyeccion[0].temp_desmolde_pieza);
							$('#hora_llenado_pieza_final_'+tipo_protocolo).val(response.datos.info_gral_final_inyeccion[0].hora_llenado_pieza);
						}

						// INFO GRAL - PROTOCOLO CORTE Y LIJADO

						if (response.datos.info_gral_cyl.length > 0) {

							response.datos.info_gral_cyl.forEach(function(v){

								let protocolo = v.id_protocolo;

								$('#fecha_inicio_'+tipo_protocolo+'_cyl_'+protocolo).val(v.fecha_inicio);
								$('#fecha_termino_'+tipo_protocolo+'_cyl_'+protocolo).val(v.fecha_termino);
								$('#hora_entrada_'+tipo_protocolo+'_cyl_'+protocolo).val(v.hora_entrada);
								$('#hora_salida_'+tipo_protocolo+'_cyl_'+protocolo).val(v.hora_salida);
								$('#n_tarro_gel_coat_'+tipo_protocolo+'_cyl_'+protocolo).val(v.nro_tarro_gel_coat);
								$('#catalizador1_'+tipo_protocolo+'_cyl_'+protocolo).val(v.catalizador_1);
								$('#catalizador2_'+tipo_protocolo+'_cyl_'+protocolo).val(v.catalizador_2);
								$('#n_tarro_resina_'+tipo_protocolo+'_cyl_'+protocolo).val(v.nro_tarro_resina);
								$('#porcent_catalizador_'+tipo_protocolo+'_cyl_'+protocolo).val(v.porcent_catalizador);
								$('#hora_inicio_'+tipo_protocolo+'_cyl_'+protocolo).val(v.hora_inicio);
								$('#hora_termino_'+tipo_protocolo+'_cyl_'+protocolo).val(v.hora_termino);
							});

						}

						// CHEQUEO FALLAS - PROTOCO CORTE Y LIJADO

						if (response.datos.cyl_fallas.length > 0) {

							response.datos.cyl_fallas.forEach(function(v){

								$('.asig_falla[data-falla="'+v.falla+'"]').prop('checked', true);
								$('#falla_'+tipo_protocolo+'_horainicio_'+v.falla+'_'+v.id_protocolo).prop('disabled', false).val(v.hora_inicio);
								$('#falla_'+tipo_protocolo+'_horatermino_'+v.falla+'_'+v.id_protocolo).prop('disabled', false).val(v.hora_termino);
								$('#falla_'+tipo_protocolo+'_temp_'+v.falla+'_'+v.id_protocolo).prop('disabled', false).val(v.temperatura);
								$('#falla_'+tipo_protocolo+'_porchumedad_'+v.falla+'_'+v.id_protocolo).prop('disabled', false).val(v.porcent_humedad);
								$('#falla_'+tipo_protocolo+'_chequeo_'+v.falla+'_'+v.id_protocolo).prop('disabled', false).val(v.id_trabajador);
							});
						}

						// OBSERVACIONES - PARA TODOS LOS PROTOCOLOS

						if (response.datos.observaciones.length > 0) {

							response.datos.observaciones.forEach(function(v){

								$('#observacion_'+tipo_protocolo+'_'+v.id_protocolo).val(v.descripcion);
							});

							
						}

						// INFO GRAL - PROTOCOLO PERFORADO

						if (response.datos.info_gral_perforado.length > 0) {


							response.datos.info_gral_perforado.forEach(function(v){

								let protocolo = v.id_protocolo;

								$('#fecha_inicio_perf_'+tipo_protocolo+'_'+protocolo).val(v.fecha_inicio);
								$('#fecha_termino_perf_'+tipo_protocolo+'_'+protocolo).val(v.fecha_termino);
								$('#hora_entrada_perf_'+tipo_protocolo+'_'+protocolo).val(v.hora_entrada);
								$('#hora_salida_perf_'+tipo_protocolo+'_'+protocolo).val(v.hora_salida);

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

	function insertProtocolo(tipo_protocolo, protocolo, op, proceso = '', fase = '', sub_op = ''){

		switch (op){

			case INFO_GRAL_INYECCION_PINTADO:

				if ($('#nro_pieza_hd').val() != 0) {
					
					var datos = $('#infogral_pintado_'+tipo_protocolo).serialize();

					console.dir($('#infogral_pintado_'+tipo_protocolo).serialize());

					$.ajaxSetup({
					  headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});

					$.ajax({
						url: '/gcapp/protocolos/datosProtocolo',
						type: 'POST',
						dataType: 'json',
						data: 'op='+op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&'+datos,
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
					swal("SELECCIONA!","Escoge el nro de la pieza con la que trabajarás", "warning");
					return 0;
				}

				break;

			case INFO_GRAL_INYECCION:

				if ($('#nro_pieza_hd').val() != 0) {
					
					var datos = $('#infogral_inyeccion_'+tipo_protocolo).serialize();

					console.dir($('#infogral_inyeccion_'+tipo_protocolo).serialize());

					$.ajaxSetup({
					  headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});

					$.ajax({
						url: '/gcapp/protocolos/datosProtocolo',
						type: 'POST',
						dataType: 'json',
						data: 'op='+op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&'+datos,
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
					swal("SELECCIONA!","Escoge el nro de la pieza con la que trabajarás", "warning");
					return 0;
				}

				break;

			case PROCESOS_PROTOCOLO:

				if ($('#nro_pieza_hd').val() != 0) {

					var chequeo = $('#proceso_'+tipo_protocolo+'_'+proceso+'_'+protocolo).val();

					if (chequeo != "") {
						var regex = /^(\d)+,(\d)+|(\d)+$/;

						if (regex.test(chequeo)) {
							
							$.ajaxSetup({
							  headers: {
							    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							  }
							});

							$.ajax({
								url: '/gcapp/protocolos/datosProtocolo',
								type: 'POST',
								dataType: 'json',
								data: 'op='+op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&proceso='+proceso+'&fase='+fase+'&id_trabajador='+chequeo,
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
					swal("SELECCIONA!","Escoge el nro de la pieza con la que trabajarás", "warning");
					return 0;
				}

				break;

			case INFO_GRAL_FINAL_INYECCION:

				if ($('#nro_pieza_hd').val() != 0) {
					
					var datos = $('#infogral_final_inyeccion_'+tipo_protocolo).serialize();

					console.dir($('#infogral_final_inyeccion_'+tipo_protocolo).serialize());

					$.ajaxSetup({
					  headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});

					$.ajax({
						url: '/gcapp/protocolos/datosProtocolo',
						type: 'POST',
						dataType: 'json',
						data: 'op='+op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&'+datos,
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
					swal("SELECCIONA!","Escoge el nro de la pieza con la que trabajarás", "warning");
					return 0;
				}

				break;
			case INFO_GRAL_CYL:

				if ($('#nro_pieza_hd').val() != 0) {
					
					var datos = $('#cyl_infogral_'+tipo_protocolo+'_'+protocolo).serialize();

					$.ajaxSetup({
					  headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});

					$.ajax({
						url: '/gcapp/protocolos/datosProtocolo',
						type: 'POST',
						dataType: 'json',
						data: 'op='+op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&'+datos,
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
					swal("SELECCIONA!","Escoge el nro de la pieza con la que trabajarás", "warning");
					return 0;
				}

				break;
			case CYL_FALLAS:

				if ($('#nro_pieza_hd').val() != 0) {

					switch (sub_op){

						case 1:

							var chequeo = $('#falla_'+tipo_protocolo+'_chequeo_'+proceso+'_'+protocolo).val();

							console.log(chequeo);
							
							if (chequeo != "") {
								var regex = /^(\d)+,(\d)+|(\d)+$/;

								if (regex.test(chequeo)) {
									
									$.ajaxSetup({
									  headers: {
									    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									  }
									});

									$.ajax({
										url: '/gcapp/protocolos/datosProtocolo',
										type: 'POST',
										dataType: 'json',
										data: 'op='+op+'&sub_op='+sub_op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&falla='+proceso+'&id_trabajador='+chequeo,
										success: function(response){
											console.dir(response);

											if (response.status == 200) {
												swal({
												  position: 'top-end',
												  type: 'success',
												  title: 'Guardado exitosamente.',
												  showConfirmButton: false,
												  timer: 1500
												});

												$('#falla_'+tipo_protocolo+'_horainicio_'+proceso+'_'+protocolo).prop('disabled', false);
												$('#falla_'+tipo_protocolo+'_horatermino_'+proceso+'_'+protocolo).prop('disabled', false);
												$('#falla_'+tipo_protocolo+'_temp_'+proceso+'_'+protocolo).prop('disabled', false);
												$('#falla_'+tipo_protocolo+'_porchumedad_'+proceso+'_'+protocolo).prop('disabled', false);
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

							break;
						case 2:

							var hora_inicio = $('#falla_'+tipo_protocolo+'_horainicio_'+proceso+'_'+protocolo).val();
							var hora_termino = $('#falla_'+tipo_protocolo+'_horatermino_'+proceso+'_'+protocolo).val();
							var temperatura = $('#falla_'+tipo_protocolo+'_temp_'+proceso+'_'+protocolo).val();
							var porcent_humedad = $('#falla_'+tipo_protocolo+'_porchumedad_'+proceso+'_'+protocolo).val();
							var chequeo = $('#falla_'+tipo_protocolo+'_chequeo_'+proceso+'_'+protocolo).val();

							var datos = "&hora_inicio="+hora_inicio+"&hora_termino="+hora_termino+"&temperatura="+temperatura+"&porcent_humedad="+porcent_humedad+"&id_trabajador="+chequeo;

							console.log(datos);
							
							if (hora_inicio != "" || hora_termino != "" || temperatura != "" || porcent_humedad != "") {

								$.ajaxSetup({
								  headers: {
								    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								  }
								});

								$.ajax({
									url: '/gcapp/protocolos/datosProtocolo',
									type: 'POST',
									dataType: 'json',
									data: 'op='+op+'&sub_op='+sub_op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&falla='+proceso+'&id_trabajador='+chequeo+datos,
									success: function(response){
										console.dir(response);

										if (response.status == 200) {
											swal({
											  position: 'top-end',
											  type: 'success',
											  title: 'Guardado exitosamente.',
											  showConfirmButton: false,
											  timer: 1500
											});

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

							break;
					}

				} else {
					swal("SELECCIONA!","Escoge el nro de la pieza con la que trabajarás", "warning");
					return 0;
				}

				break;
			case OBSERVACIONES:

				if ($('#nro_pieza_hd').val() != 0) {
					
					var descripcion = $('#observacion_'+tipo_protocolo+'_'+protocolo).val();

					if (descripcion != "") {
						$.ajaxSetup({
						  headers: {
						    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						  }
						});

						$.ajax({
							url: '/gcapp/protocolos/datosProtocolo',
							type: 'POST',
							dataType: 'json',
							data: 'op='+op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&descripcion='+descripcion,
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
					swal("SELECCIONA!","Escoge el nro de la pieza con la que trabajarás", "warning");
					return 0;
				}

				break;
			case INFO_GRAL_PERFORADO:

				if ($('#nro_pieza_hd').val() != 0) {
					
					var datos = $('#perforado_infogral_'+tipo_protocolo+'_'+protocolo).serialize();

					$.ajaxSetup({
					  headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					  }
					});

					$.ajax({
						url: '/gcapp/protocolos/datosProtocolo',
						type: 'POST',
						dataType: 'json',
						data: 'op='+op+'&protocolo='+protocolo+'&tipo_protocolo='+tipo_protocolo+'&nro_pieza='+$('#nro_pieza_hd').val()+'&'+datos,
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
					swal("SELECCIONA!","Escoge el nro de la pieza con la que trabajarás", "warning");
					return 0;
				}

				break;

		}
	}
</script>

@endpush
