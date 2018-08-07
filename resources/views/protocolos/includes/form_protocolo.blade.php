<div class="alert alert-info select_protocolo" id="tipo_protocolo_0">
     <p><b>Selecciona una pieza para llenar tu protocolo</b></p>
</div>

<div id="tipo_protocolo_1" class="select_protocolo" style="display: none;" data-tipoProtocolo="1">
     <div class="box box-primary">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO DE INYECCIÓN - TIPO 1</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-primary">
                              
                              CABINA DE PINTADO - SECCIÓN PINTADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>

                    {{-- Construir ID en este formulario, con el nombre y el tipo del protocolo - Ejm: nombre_1 --}}
     
                    <form action="" id="infogral_pintado_1">
                         <input type="hidden" value="1" id="id_protocolo_hd"> <!-- ID DE PROTOCOLO -->
                         <input type="hidden" value="1" id="tipo_protocolo_hd"> <!-- TIPO DE PROTOCOLO -->
                         <div class="col-xs-12 col-lg-4">
                              <label for="">N° TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="nro_tarro_gel_coat" id="nro_tarro_gel_coat_1">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <label for="">T° MOLDE ANTES DE PINTAR</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_molde_antes_pintar" id="t_molde_antes_pintar_1">
                                   <span class="input-group-addon">ºC</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">KG. GEL COAT</label>
                              <input type="text" class="form-control clean" name="kg_gel_coat" id="kg_gel_coat_1">
                         </div>
                              
                         <div class="col-xs-12 col-lg-4">
                              <label for="">%CATALIZADOR</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_pintado_1">
                                   <span class="input-group-addon">%</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <div class="bootstrap-timepicker">
                                        <label for="">HORA INICIO PINTADO</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_inicio_pintado" id="hora_inicio_pintado_1">
                                   </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">T° GEL COAT</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_gel_coat" id="t_gel_coat_1">
                                   <span class="input-group-addon">[KG]</span>
                              </div>
                         </div>
                              
                         <div class="col-xs-12 col-lg-4">
                              <label for="">CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="catalizador" id="catalizador_pintado_1" placeholder="Ejm: M50">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <div class="bootstrap-timepicker">
                                        <label for="">HORA TÉRMINO PINTADO</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_termino_pintado" id="hora_termino_pintado_1">
                                   </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <div class="bootstrap-timepicker">
                                        <label for="">HORA TIEMPO CAT</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_tiempo_cat" id="hora_tiempo_cat_1">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="guardar_iny_pintado" onclick="insertProtocolo(1, 1, 1)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-primary">
                              
                              CABINA PINTADO: INFORMACIÓN DEL PROCESO
                         </div>
                         <br>
                    </div>

                    {{-- Construir los ID de los formularios de los procesos con la palabra "proceso", tipo de protocolo y numero del proceso. Ejm: proceso_1_12 --}}
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PINTADO DEL MOLDE HEMBRA CON GEL COAT GRIS</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_1_1" onblur="insertProtocolo(1, 1, 3, 1, 1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONTROL DE ESPESORES POR PARTE DE GARANTÍA DE CALIDAD e=0,5 [mm]</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_2_1" onblur="insertProtocolo(1, 1, 3, 2, 1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONTROL QUE GEL COAT ESTÉ TAC POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_3_1" onblur="insertProtocolo(1, 1, 3, 3, 1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">PESO FIBRA CF700/D250/700</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_4_1" onblur="insertProtocolo(1, 1, 3, 4, 2)">
                              <span class="input-group-addon">[KG]</span>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">PESO FIBRA REFUERZO 300/D250/300</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_5_1" onblur="insertProtocolo(1, 1, 3, 5, 2)">
                              <span class="input-group-addon">[KG]</span>
                         </div>
                    </div>

                    {{-- Construir ID en este formulario, con el nombre y el tipo del protocolo - Ejm: nombre_1 --}}

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <fieldset>
                              <legend>Información General</legend>

                              <form action="" id="infogral_inyeccion_1">
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMB. DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_amb_seca_pieza" id="t_amb_seca_pieza_1">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%CATALIZADOR  / CATALIZADOR</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_catalizador_inyeccion" id="porcent_catalizador_inyeccion_1">
                                             <span class="input-group-addon">%</span> 
                                   
                                             <input type="text" class="form-control" name="catalizador_inyeccion" id="catalizador_inyeccion_1">
                                             <span class="input-group-addon">Ejm: K12</span> 
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%HR DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_seca_pieza" id="porcent_hr_seca_pieza_1">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° MOLDE ANTES DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_molde_antes_inyeccion" id="t_molde_antes_inyeccion_1">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">N°TARRO RESINA INYECCIÓN</label>
                                        <input type="text" class="form-control clean" name="n_tarro_resina_inyeccion" id="n_tarro_resina_inyeccion_1">
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMBIENTE SALA INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_ambiente_sala_inyeccion" id="t_ambiente_sala_inyeccion_1">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">T° RESINA INICIO INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_resina_inicio_inyeccion" id="t_resina_inicio_inyeccion_1">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <div class="bootstrap-timepicker">
                                             <label for="">HORA INICIO INYECCION</label>
                                             <input type="text" class="form-control timepicker clean" name="hora_inicio_inyeccion" id="hora_inicio_inyeccion_1">
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">LITROS DE RESINA INYECTADA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="lts_resina_inyectada" id="lts_resina_inyectada_1">
                                             <span class="input-group-addon">[LT]</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">%HR SALA DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_sala_inyeccion" id="porcent_hr_sala_inyeccion_1">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                              </form>
                         </fieldset>
                         <br>
                         <div class="pull-right">
                              <button type="button" class="btn btn-success" id="guardar_iny_inyeccion" onclick="insertProtocolo(1, 1, 2)">Guardar</button>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DE PROCESO PREVIO INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">UBICAR FIBRA DE VIDRIO, FIBRA DE REFUERZO Y AJUSTARLA MANUALMENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_6_1" onblur="insertProtocolo(1, 1, 3, 6, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">RECORTAR LOS EXCESOS DE FIBRA EN LOS BORDES DEJANDO EL LARGO DE LA FIBRA HASTA DONDE TERMINA EL PINTADO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_7_1" onblur="insertProtocolo(1, 1, 3, 7, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR REFUERZOS DE FIBRA Y FIJAR CON AIRTAC</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_8_1" onblur="insertProtocolo(1, 1, 3, 8, 3)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO. QUITAR LOS FILAMENTOS DE FIBRA DE VIDRIO EN EL PERÍMETRO DE MOLDE HEMBRA">LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO...</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_9_1" onblur="insertProtocolo(1, 1, 3, 9, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD APRUEBA LARGO DE LA FIBRA</label>
                         <div class="input-group">
                              <span class="input-group-addon">10</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_10_1" onblur="insertProtocolo(1, 1, 3, 10, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CERRAR EL MOLDE LENTAMENTE EVITANDO QUE LA FIBRA SE MUEVA</label>
                         <div class="input-group">
                              <span class="input-group-addon">11</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_11_1" onblur="insertProtocolo(1, 1, 3, 11, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR 15 [cm] DE MANGUERA MALLA FLEX DE 12 [cm] EN PUNTOS DE CIERRE, DE ENTRADA Y SALIDA DE RESINA; SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">12</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_12_1" onblur="insertProtocolo(1, 1, 3, 12, 3)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR MANGUERA DE INYECCIÓN DENTRO DE MANGUERA MALLA FLEX, SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">13</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_13_1" onblur="insertProtocolo(1, 1, 3, 13, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE TRAMPA DE VACÍO NO TENGA EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA, ES POSIBLE LA UTILIZACIÓN DE LA TRAMPA REPOSICIONANDO LA MANGUERA A LA ALTURA JUSTA">REVISAR QUE TRAMPA DE VACÍO NO TENGA EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA,...</label>
                         <div class="input-group">
                              <span class="input-group-addon">14</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_14_1" onblur="insertProtocolo(1, 1, 3, 14, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ENCENDER BOMBA DE VACÍO DE CIERRE DE MOLDE Y ASEGURAR QUE LA CAMARA DE CIERRE ESTÉ COMPLETAMENTE SELLADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">15</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_15_1" onblur="insertProtocolo(1, 1, 3, 15, 3)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">ENCENDER BOMBA  DE VACÍO INTERIOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">16</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_16_1" onblur="insertProtocolo(1, 1, 3, 16, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">DEJAR AMBAS BOMBAS DE VACÍO FUNCIONANDO POR 5 [min], CONFIRMAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">17</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_17_1" onblur="insertProtocolo(1, 1, 3, 17, 3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DEL PROCESO DE INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">REVISAR NIVELES DE ACETONA, RESINA Y CATALIZADOR EN LA MAQUINA DE INYECCIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">18</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_18_1" onblur="insertProtocolo(1, 1, 3, 18, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONECTAR LA LINEA DE AIRE Y ENCENDER LA MÁQUINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">19</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_19_1" onblur="insertProtocolo(1, 1, 3, 19, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN EN "PRESION DE INYECCIÓN": 1 [bar]</label>
                         <div class="input-group">
                              <span class="input-group-addon">20</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_20_1" onblur="insertProtocolo(1, 1, 3, 20, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN: "CIJECONE" EN "VELOCIDAD DE INYECCIÓN": 20%; "MEGAJECT4" EN:______ MPG</label>
                         <div class="input-group">
                              <span class="input-group-addon">21</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_21_1" onblur="insertProtocolo(1, 1, 3, 21, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN "MEGAJECT" EN ____ BOMBEOS DE RESINA Y LA MAQUINA "CIJECONE" EN ____ [l] A INYECTAR</label>
                         <div class="input-group">
                              <span class="input-group-addon">22</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_22_1" onblur="insertProtocolo(1, 1, 3, 22, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CEBAR MANUALMENTE HASTA ELIMINAR EL AIRE DENTRO DE LA LÍNEA DE CATALIZADOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">23</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_23_1" onblur="insertProtocolo(1, 1, 3, 23, 4)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">REALIZAR LA OPERACIÓN "RECIRCULAR" Y REALIZAR ÉSTA OPERACIÓN DURANTE 3 [min], VERIFICANDO QUE EN EL RECIRCULADO NO SALE AIRE.</label>
                         <div class="input-group">
                              <span class="input-group-addon">24</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_24_1" onblur="insertProtocolo(1, 1, 3, 24, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR LA PISTOLA DE INYECCIÓNEN EL PUNTO DE INYECCIÓN DE RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">25</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_25_1" onblur="insertProtocolo(1, 1, 3, 25, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">VERIFICAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">26</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_26_1" onblur="insertProtocolo(1, 1, 3, 26, 4)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO DEL VACÍO DE CIERRE DE MOLDE: -0,7 A -0,8 [bar]; VACUÓMETRO DEL VACÍO DE CIERRE INTERIOR: -0,5 [bar]">REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO DEL VACÍO DE CIERRE DE MOLDE:...</label>
                         <div class="input-group">
                              <span class="input-group-addon">27</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_27_1" onblur="insertProtocolo(1, 1, 3, 27, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD DEBE APROBAR LA PRUEBA DE VACÍO, MEDIANTE REALIZACIÓN DE PRUEBA DE VACÍO SEGÚN INSTRUCTIVO</label>
                         <div class="input-group">
                              <span class="input-group-addon">28</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_28_1" onblur="insertProtocolo(1, 1, 3, 28, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='PARA INICIAR LA INYECCIÓN PRESIONAR: EN "CIJECONE": EL BOTON "START" DOS VECES; EN "MEGAJECT4": EL BOTON VERDE; IR VERIFICANDO VISUALMENTE QUE NO SE ESTÉ INYECTANDO AIRE'>PARA INICIAR LA INYECCIÓN PRESIONAR: EN "CIJECONE": EL BOTON "START" DOS VECES; EN "MEGAJECT4": EL BOTON VERDE;...</label>
                         <div class="input-group">
                              <span class="input-group-addon">29</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_29_1" onblur="insertProtocolo(1, 1, 3, 29, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='FINALIZADA LA INYECCIÓN SI SE HA UTILIZADO LA MAQUINA: DESMONTAR LA PISTOLA DE INYECCIÓN, INICIAR EL PROCESO DE LAVADO DE LA MAQUINA PRESIONANDO EL BOTON "FLUSH"'>FINALIZADA LA INYECCIÓN SI SE HA UTILIZADO LA MAQUINA: DESMONTAR LA PISTOLA DE INYECCIÓN, INICIAR...</label>
                         <div class="input-group">
                              <span class="input-group-addon">30</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_30_1" onblur="insertProtocolo(1, 1, 3, 30, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ESPERAR GELADO DE LA RESINA CHEQUEANDO QUE VUELVA A 40°C DESPUÉS DEL PEAK EXOTÉRMICO</label>
                         <div class="input-group">
                              <span class="input-group-addon">31</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_31_1" onblur="insertProtocolo(1, 1, 3, 31, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">DESMOLDAR LA PIEZA INYECTADA SEGÚN PROCEDIMIENTO TRASLADO DE PIEZAS</label>
                         <div class="input-group">
                              <span class="input-group-addon">32</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_32_1" onblur="insertProtocolo(1, 1, 3, 32, 4)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">INGRESAR MARCA DE IDENTFICACIÓN DE PIEZA: N° PIEZA INYECTADA Y NOMBRE PROYECTO</label>
                         <div class="input-group">
                              <span class="input-group-addon">33</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_33_1" onblur="insertProtocolo(1, 1, 3, 33, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN SEGÚN CORRESPONDA: VERDE: APROBADO; AMARILLO: EN OBSERVACIÓN; ROJO: RECHAZADO.'>GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN SEGÚN CORRESPONDA:...</label>
                         <div class="input-group">
                              <span class="input-group-addon">34</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_34_1" onblur="insertProtocolo(1, 1, 3, 34, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">TRASLADAR LA PIEZA JUNTO AL PRESENTE PROTOCOLO</label>
                         <div class="input-group">
                              <span class="input-group-addon">35</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_35_1" onblur="insertProtocolo(1, 1, 3, 35, 4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <label for="">LIMPIEZA MOLDE HEMBRA Y MACHO CON DESMOLDANTE, PAÑO MOLETON LIMPIO, LAINA ACRILICA Y TALADRO EN PUNTOS DE INYECCION Y SUCCION</label>
                         <div class="input-group">
                              <span class="input-group-addon">36</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO. Ejm: 1,2" id="proceso_1_36_1" onblur="insertProtocolo(1, 1, 3, 36, 4)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: grey; color: #FFF">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN FINAL GENERAL
                         </div>
                         <br>
                    </div>

                    {{-- Construir ID en este formulario, con el nombre y el tipo del protocolo - Ejm: nombre_1 --}}

                    <form action="" id="infogral_final_inyeccion_1">
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TÉRMINO INYECCIÓN</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_termino_inyeccion_final" id="hora_termino_inyeccion_final_1">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE DESMOLDE PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_desmolde_pieza_final" id="hora_desmolde_pieza_final_1">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">T° DESMOLDE PIEZA</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_desmolde_pieza_final" id="t_desmolde_pieza_final_1">
                                   <span class="input-group-addon">ºC</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE LLENADO PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_llenado_pieza_final" id="hora_llenado_pieza_final_1">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" onclick="insertProtocolo(1, 1, 4)">Guardar</button>
                              </div>
                         </div>
                    </form>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box box-warning">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO CORTE Y LIJADO - TIPO 1</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              SECCIÓN CORTE Y LIJADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="cyl_infogral_1_2"> <!-- ID se construye (en este caso) nombre_tipoProtocolo_idProtocolo -->
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_inicio" id="fecha_inicio_1_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_termino" id="fecha_termino_1_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_entrada" id="hora_entrada_1_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_salida" id="hora_salida_1_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="n_tarro_gel_coat" id="n_tarro_gel_coat_1_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">CATALIZADOR</label>
                              <div class="row">
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="M50" name="catalizador_1" id="catalizador1_1_cyl_2">
                                   </div>
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="K12" name="catalizador_2" id="catalizador2_1_cyl_2">
                                   </div>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO RESINA</label>
                              <input type="text" class="form-control clean" name="n_tarro_resina" id="n_tarro_resina_1_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">% CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_1_cyl_2">
                          </div>
                         
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_inicio" id="hora_inicio_1_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_termino" id="hora_termino_1_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="" onclick="insertProtocolo(1,2,5)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CON ESMERIL ANGULAR, DAR LAS DIMENSIONES GENERALES DESCRITAS EN EL PLANO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_1_2"  onblur="insertProtocolo(1, 2, 3, 1, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CON ESMERIL ANGULAR Y DISCO DE LIJA GRANO 24, LIJAR EL PERÍMETRO DE LA PIEZA DANDO PLANITUD EN LOS ÁNGULOS VERTICAL Y HORIZONTAL</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_2_2"  onblur="insertProtocolo(1, 2, 3, 2, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">SELLAR BORDES LIJADOS CON RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_3_2"  onblur="insertProtocolo(1, 2, 3, 3, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO: INSPECCIÓN VISUAL, CHEQUEO DE FALLAS
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br><br>
                         <div class="table-responsive">
                              <table class="table table-striped table-bordered table-condensed">
                                   <thead style="background: grey">
                                        <tr>
                                             <th colspan="2">FALLAS</th>
                                             <th>SI</th>
                                             <th>HORA INICIO</th>
                                             <th>HORA TERMINO</th>
                                             <th>TEMPERATURA</th>
                                             <th>% HUMEDAD</th>
                                             <th style="background: #f39c12 !important">CHEQUEO</th>
                                        </tr>
                                   </thead>
                         
                                   <tbody>
                                        <tr>
                                             <td><b>1</b></td>
                                             <td>ARRUGAS DE FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="1" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horainicio_1_2" onblur="insertProtocolo(1,2,6,1,'',2)" disabled> <!-- ID: falla_tipoprot_nombre_nrofalla_idprotoc -->
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horatermino_1_2" onblur="insertProtocolo(1,2,6,1,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" id="falla_1_temp_1_2" onblur="insertProtocolo(1,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_1_porchumedad_1_2" onblur="insertProtocolo(1,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_1_chequeo_1_2" onblur="insertProtocolo(1,2,6,1,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>2</b></td>
                                             <td>SIN DUREZA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="2" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horainicio_2_2" onblur="insertProtocolo(1,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horatermino_2_2" onblur="insertProtocolo(1,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,2,'',2)" id="falla_1_temp_2_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,2,'',2)" id="falla_1_porchumedad_2_2" disabled></td>
                                             <td><input type="text" class="clean" id="falla_1_chequeo_2_2" onblur="insertProtocolo(1,2,6,2,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>3</b></td>
                                             <td>FIBRA SIN HUMECTAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="3" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horainicio_3_2" onblur="insertProtocolo(1,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horatermino_3_2" onblur="insertProtocolo(1,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,3,'',2)" id="falla_1_temp_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,3,'',2)" id="falla_1_porchumedad_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,3,'',1)" id="falla_1_chequeo_3_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>4</b></td>
                                             <td>FIBRA SIN GELAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="4" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horainicio_4_2" onblur="insertProtocolo(1,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horatermino_4_2" onblur="insertProtocolo(1,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,4,'',2)" id="falla_1_temp_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,4,'',2)" id="falla_1_porchumedad_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,4,'',1)" id="falla_1_chequeo_4_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>5</b></td>
                                             <td>FIBRA EXPUESTA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="5" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,5,'',2)" name="" id="falla_1_horainicio_5_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,5,'',2)" name="" id="falla_1_horatermino_5_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,5,'',2)" id="falla_1_temp_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,5,'',2)" id="falla_1_porchumedad_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,5,'',1)" id="falla_1_chequeo_5_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>6</b></td>
                                             <td>BORDES SIN FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="6" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,6,'',2)" name="" id="falla_1_horainicio_6_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,6,'',2)" name="" id="falla_1_horatermino_6_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,6,'',2)" id="falla_1_temp_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,6,'',2)" id="falla_1_porchumedad_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,6,'',1)" id="falla_1_chequeo_6_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>7</b></td>
                                             <td>POROSIDAD</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="7" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,7,'',2)" name="" id="falla_1_horainicio_7_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,7,'',2)" name="" id="falla_1_horatermino_7_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,7,'',2)" id="falla_1_temp_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,7,'',2)" id="falla_1_porchumedad_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,7,'',1)" id="falla_1_chequeo_7_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>8</b></td>
                                             <td>BURBUJAS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="8" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,8,'',2)" name="" id="falla_1_horainicio_8_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,8,'',2)" name="" id="falla_1_horatermino_8_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,8,'',2)" id="falla_1_temp_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,8,'',2)" id="falla_1_porchumedad_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,8,'',1)" id="falla_1_chequeo_8_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>9</b></td>
                                             <td>OTROS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="9" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,9,'',2)" name="" id="falla_1_horainicio_9_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,2,6,9,'',2)" name="" id="falla_1_horatermino_9_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,9,'',2)" id="falla_1_temp_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,9,'',2)" id="falla_1_porchumedad_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,2,6,9,'',1)" id="falla_1_chequeo_9_2" disabled></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-3">
                         <label for="">REPARAR FALLA SEGÚN SEA EL CASO EN FUNCIÓN DE PROCEDIMIENTO DE REPARACIONES</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_4_2"  onblur="insertProtocolo(1, 2, 3, 4, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">LIJAR REPARACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_5_2"  onblur="insertProtocolo(1, 2, 3, 5, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">SELLAR REPARACIÓN CON RESINA CATALIZADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_6_2"  onblur="insertProtocolo(1, 2, 3, 6, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_7_2"  onblur="insertProtocolo(1, 2, 3, 7, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label> <!-- ID: nombre_tipoprotocolo_idprotocolo -->
                         <textarea name="" id="observacion_1_2" rows="5" class="form-control clean" onblur="insertProtocolo(1,2,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box box-warning">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO CORTE Y LIJADO - TIPO 1 (Especialmente para la pieza Tapas)</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              SECCIÓN CORTE Y LIJADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="cyl_infogral_1_6"> <!-- ID se construye (en este caso) nombre_tipoProtocolo_idProtocolo -->
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_inicio" id="fecha_inicio_1_cyl_6">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_termino" id="fecha_termino_1_cyl_6">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_entrada" id="hora_entrada_1_cyl_6">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_salida" id="hora_salida_1_cyl_6">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="n_tarro_gel_coat" id="n_tarro_gel_coat_1_cyl_6">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">CATALIZADOR</label>
                              <div class="row">
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="M50" name="catalizador_1" id="catalizador1_1_cyl_6">
                                   </div>
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="K12" name="catalizador_2" id="catalizador2_1_cyl_6">
                                   </div>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO RESINA</label>
                              <input type="text" class="form-control clean" name="n_tarro_resina" id="n_tarro_resina_1_cyl_6">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">% CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_1_cyl_6">
                          </div>
                         
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_inicio" id="hora_inicio_1_cyl_6">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_termino" id="hora_termino_1_cyl_6">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="" onclick="insertProtocolo(1,6,5)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CON ESMERIL ANGULAR, DAR LAS DIMENSIONES GENERALES DESCRITAS EN EL PLANO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_1_6"  onblur="insertProtocolo(1, 6, 3, 1, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">REALIZAR BISELADO DE 4 [cm] EN EXTREMO DIMENSIONADO QUE DA AL CABEZAL</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_2_6"  onblur="insertProtocolo(1, 6, 3, 2, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CON ESMERIL ANGULAR Y DISCO DE LIJA GRANO 24, LIJAR EL PERÍMETRO DE LA PIEZA DANDO PLANITUD EN LOS ÁNGULOS VERTICAL Y HORIZONTAL</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_3_6"  onblur="insertProtocolo(1, 6, 3, 3, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">SELLAR BORDES LIJADOS CON RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_4_6"  onblur="insertProtocolo(1, 6, 3, 4, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CHEQUEAR QUE EL LARGO TOTAL DE LA PIEZA SEA DE 5090 [mm]</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_5_6"  onblur="insertProtocolo(1, 6, 3, 5, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO: INSPECCIÓN VISUAL, CHEQUEO DE FALLAS
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br><br>
                         <div class="table-responsive">
                              <table class="table table-striped table-bordered table-condensed">
                                   <thead style="background: grey">
                                        <tr>
                                             <th colspan="2">FALLAS</th>
                                             <th>SI</th>
                                             <th>HORA INICIO</th>
                                             <th>HORA TERMINO</th>
                                             <th>TEMPERATURA</th>
                                             <th>% HUMEDAD</th>
                                             <th style="background: #f39c12 !important">CHEQUEO</th>
                                        </tr>
                                   </thead>
                         
                                   <tbody>
                                        <tr>
                                             <td><b>1</b></td>
                                             <td>ARRUGAS DE FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="1" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horainicio_1_6" onblur="insertProtocolo(1,6,6,1,'',2)" disabled> <!-- ID: falla_tipoprot_nombre_nrofalla_idprotoc -->
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horatermino_1_6" onblur="insertProtocolo(1,6,6,1,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" id="falla_1_temp_1_6" onblur="insertProtocolo(1,6,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_1_porchumedad_1_6" onblur="insertProtocolo(1,6,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_1_chequeo_1_6" onblur="insertProtocolo(1,6,6,1,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>2</b></td>
                                             <td>SIN DUREZA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="2" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horainicio_2_6" onblur="insertProtocolo(1,6,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horatermino_2_6" onblur="insertProtocolo(1,6,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,2,'',2)" id="falla_1_temp_2_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,2,'',2)" id="falla_1_porchumedad_2_6" disabled></td>
                                             <td><input type="text" class="clean" id="falla_1_chequeo_2_6" onblur="insertProtocolo(1,6,6,2,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>3</b></td>
                                             <td>FIBRA SIN HUMECTAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="3" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horainicio_3_6" onblur="insertProtocolo(1,6,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horatermino_3_6" onblur="insertProtocolo(1,6,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,3,'',2)" id="falla_1_temp_3_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,3,'',2)" id="falla_1_porchumedad_3_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,3,'',1)" id="falla_1_chequeo_3_6" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>4</b></td>
                                             <td>FIBRA SIN GELAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="4" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horainicio_4_6" onblur="insertProtocolo(1,6,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_1_horatermino_4_6" onblur="insertProtocolo(1,6,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,4,'',2)" id="falla_1_temp_4_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,4,'',2)" id="falla_1_porchumedad_4_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,4,'',1)" id="falla_1_chequeo_4_6" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>5</b></td>
                                             <td>FIBRA EXPUESTA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="5" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,5,'',2)" name="" id="falla_1_horainicio_5_6" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,5,'',2)" name="" id="falla_1_horatermino_5_6" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,5,'',2)" id="falla_1_temp_5_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,5,'',2)" id="falla_1_porchumedad_5_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,5,'',1)" id="falla_1_chequeo_5_6" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>6</b></td>
                                             <td>BORDES SIN FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="6" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,6,'',2)" name="" id="falla_1_horainicio_6_6" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,6,'',2)" name="" id="falla_1_horatermino_6_6" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,6,'',2)" id="falla_1_temp_6_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,6,'',2)" id="falla_1_porchumedad_6_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,6,'',1)" id="falla_1_chequeo_6_6" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>7</b></td>
                                             <td>POROSIDAD</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="7" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,7,'',2)" name="" id="falla_1_horainicio_7_6" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,7,'',2)" name="" id="falla_1_horatermino_7_6" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,7,'',2)" id="falla_1_temp_7_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,7,'',2)" id="falla_1_porchumedad_7_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,7,'',1)" id="falla_1_chequeo_7_6" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>8</b></td>
                                             <td>BURBUJAS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="8" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,8,'',2)" name="" id="falla_1_horainicio_8_6" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,8,'',2)" name="" id="falla_1_horatermino_8_6" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,8,'',2)" id="falla_1_temp_8_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,8,'',2)" id="falla_1_porchumedad_8_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,8,'',1)" id="falla_1_chequeo_8_6" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>9</b></td>
                                             <td>OTROS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="9" data-protocolo="6"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,9,'',2)" name="" id="falla_1_horainicio_9_6" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(1,6,6,9,'',2)" name="" id="falla_1_horatermino_9_6" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,9,'',2)" id="falla_1_temp_9_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,9,'',2)" id="falla_1_porchumedad_9_6" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(1,6,6,9,'',1)" id="falla_1_chequeo_9_6" disabled></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-3">
                         <label for="">REPARAR FALLA SEGÚN SEA EL CASO EN FUNCIÓN DE PROCEDIMIENTO DE REPARACIONES</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_6_6"  onblur="insertProtocolo(1, 6, 3, 6, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">LIJAR REPARACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_7_6"  onblur="insertProtocolo(1, 6, 3, 7, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">SELLAR REPARACIÓN CON RESINA CATALIZADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_8_6"  onblur="insertProtocolo(1, 6, 3, 8, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_1_9_6"  onblur="insertProtocolo(1, 6, 3, 9, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_1_6" rows="5" class="form-control clean" onblur="insertProtocolo(1,6,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box" style="border-top-color: purple !important">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO PERFORADO - TIPO 1</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              SECCIÓN PERFOMADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="perforado_infogral_1_3">
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_inicio" id="fecha_inicio_perf_1_3" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_termino" id="fecha_termino_perf_1_3" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" name="hora_entrada" id="hora_entrada_perf_1_3" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" name="hora_salida" id="hora_salida_perf_1_3" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button class="btn btn-success" type="button" onclick="insertProtocolo(1,3,8)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              PERFORADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PERFORAR INSERTOS DE LAVADO DEMARCADOS EN LA PIEZA Y SEGÚN PLANO, CON SIERRA DE COPA 22 [mm]</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,3,3,1,1)" id="proceso_1_1_3">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PEFORAR PARA INSERTO LINEAL CON BROCA DE 9 [mm] A 60 [mm] DEL INSERTO DE LAVADO</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,3,3,2,1)" id="proceso_1_2_3">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PERFORAR ÚLTIMAS SALIDAS DE MANGUERAS EN ZONA LATERAL DE CAMARA DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,3,3,3,1)" id="proceso_1_3_3">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,3,3,4,1)" id="proceso_1_4_3">
                         </div>
                    </div>

                    

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_1_3" rows="5" class="form-control clean" onblur="insertProtocolo(1,3,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box" style="border-top-color: purple !important">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO PERFORADO - TIPO 1 (Especialmente para la pieza Tapas)</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              SECCIÓN PERFOMADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="perforado_infogral_1_7">
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_inicio" id="fecha_inicio_perf_1_7" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_termino" id="fecha_termino_perf_1_7" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" name="hora_entrada" id="hora_entrada_perf_1_7" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" name="hora_salida" id="hora_salida_perf_1_7" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button class="btn btn-success" type="button" onclick="insertProtocolo(1,7,8)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>


                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              PERFORADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">SEGUIR PROTOCOLO DE PERFORADO DE PIEZA EME</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,7,3,1,1)" id="proceso_1_1_7">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR PERFORACIÓN DE 15 [mm] SOBRE LA PERFORACIÓN DE 9 [mm] REALIZADA EN LA TAPA</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,7,3,2,1)" id="proceso_1_2_7">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">SELLAR PERFORACIONES REALIZADAS CON RESINA CATALIZADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,7,3,3,1)" id="proceso_1_3_7">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">ANOTARIDENSTIFICACIÓN DE PIEZA EME CON LA CUAL SE PERFORÓ</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,7,3,4,1)" id="proceso_1_4_7">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <label for="">N° PIEZA EME RELACIONADA</label>
                         <input type="text" class="form-control" readonly>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">SELLAR TODAS LAS PERFORACIONES DESCRITAS CON RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,7,3,5,1)" id="proceso_1_5_7">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocolo(1,7,3,6,1)" id="proceso_1_6_7">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_1_7" rows="5" class="form-control clean" onblur="insertProtocolo(1,7,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>
</div>
<!-- /.box -->

<div id="tipo_protocolo_2" class="select_protocolo" style="display: none;" data-tipoProtocolo="2">
     <div class="box box-primary">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO DE INYECCIÓN - TIPO 2</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-primary">
                              
                              CABINA DE PINTADO - SECCIÓN PINTADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="infogral_pintado_2">
                         <input type="hidden" value="1" id="id_protocolo_hd"> <!-- ID DE PROTOCOLO -->
                         <input type="hidden" value="2" id="tipo_protocolo_hd"> <!-- TIPO DE PROTOCOLO -->
                         <div class="col-xs-12 col-lg-4">
                              <label for="">N° TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="nro_tarro_gel_coat" id="nro_tarro_gel_coat_2">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <label for="">T° MOLDE ANTES DE PINTAR</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_molde_antes_pintar" id="t_molde_antes_pintar_2">
                                   <span class="input-group-addon">ºC</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">KG. GEL COAT</label>
                              <input type="text" class="form-control clean" name="kg_gel_coat" id="kg_gel_coat_2">
                         </div>
                              
                         <div class="col-xs-12 col-lg-4">
                              <label for="">%CATALIZADOR</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_pintado_2">
                                   <span class="input-group-addon">%</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <div class="bootstrap-timepicker">
                                        <label for="">HORA INICIO PINTADO</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_inicio_pintado" id="hora_inicio_pintado_2">
                                   </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">T° GEL COAT</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_gel_coat" id="t_gel_coat_2">
                                   <span class="input-group-addon">[KG]</span>
                              </div>
                         </div>
                              
                         <div class="col-xs-12 col-lg-4">
                              <label for="">CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="catalizador" id="catalizador_pintado_2" placeholder="Ejm: M50">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <div class="bootstrap-timepicker">
                                        <label for="">HORA TÉRMINO PINTADO</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_termino_pintado" id="hora_termino_pintado_2">
                                   </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <div class="bootstrap-timepicker">
                                        <label for="">HORA TIEMPO CAT</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_tiempo_cat" id="hora_tiempo_cat_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="guardar_iny_pintado" onclick="insertProtocolo(2, 1, 1)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-primary">
                              
                              CABINA PINTADO: INFORMACIÓN DEL PROCESO
                         </div>
                         <br>
                    </div>
     
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PINTADO DEL MOLDE HEMBRA CON GEL COAT GRIS</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control" id="proceso_2_1_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1, 3, 1, 1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONTROL DE ESPESORES POR PARTE DE GARANTÍA DE CALIDAD e=0,5 [mm]</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control" id="proceso_2_2_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1, 3, 2, 1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONTROL QUE GEL COAT ESTÉ TAC POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control" id="proceso_2_3_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1, 3, 3, 1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">PESO FIBRA CF700/D250/700</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control" id="proceso_2_4_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,4,2)">
                              <span class="input-group-addon">[KG]</span>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">PESO FIBRA REFUERZO 300/D250/300</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control" id="proceso_2_5_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,5,2)">
                              <span class="input-group-addon">[KG]</span>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <fieldset>
                              <legend>Información General</legend>

                              <form action="" id="infogral_inyeccion_2">
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMB. DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_amb_seca_pieza" id="t_amb_seca_pieza_2">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%CATALIZADOR  / CATALIZADOR</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_catalizador_inyeccion" id="porcent_catalizador_inyeccion_2">
                                             <span class="input-group-addon">%</span> 
                                   
                                             <input type="text" class="form-control" name="catalizador_inyeccion" id="catalizador_inyeccion_2">
                                             <span class="input-group-addon">Ejm: K12</span> 
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%HR DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_seca_pieza" id="porcent_hr_seca_pieza_2">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° MOLDE ANTES DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_molde_antes_inyeccion" id="t_molde_antes_inyeccion_2">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">N°TARRO RESINA INYECCIÓN</label>
                                        <input type="text" class="form-control clean" name="n_tarro_resina_inyeccion" id="n_tarro_resina_inyeccion_2">
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMBIENTE SALA INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_ambiente_sala_inyeccion" id="t_ambiente_sala_inyeccion_2">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">T° RESINA INICIO INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_resina_inicio_inyeccion" id="t_resina_inicio_inyeccion_2">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <div class="bootstrap-timepicker">
                                             <label for="">HORA INICIO INYECCION</label>
                                             <input type="text" class="form-control timepicker clean" name="hora_inicio_inyeccion" id="hora_inicio_inyeccion_2">
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">LITROS DE RESINA INYECTADA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="lts_resina_inyectada" id="lts_resina_inyectada_2">
                                             <span class="input-group-addon">[LT]</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">%HR SALA DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_sala_inyeccion" id="porcent_hr_sala_inyeccion_2">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                              </form>
                         </fieldset>
                         <br>
                         <div class="pull-right">
                              <button type="button" class="btn btn-success" id="guardar_iny_inyeccion" onclick="insertProtocolo(2,1, 2)">Guardar</button>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DE PROCESO PREVIO INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">UBICAR FIBRA DE VIDRIO, FIBRA DE REFUERZO Y AJUSTARLA MANUALMENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control" id="proceso_2_6_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,6,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">RECORTAR LOS EXCESOS DE FIBRA EN LOS BORDES DEJANDO EL LARGO DE LA FIBRA HASTA DONDE TERMINA EL PINTADO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control" id="proceso_2_7_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,7,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR REFUERZOS DE FIBRA Y FIJAR CON AIRTAC</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control" id="proceso_2_8_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,8,3)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">COLOCAR TAG EN LA POSICIÓN QUE SE INDIQUE EN EL MOLDE (CABEZAL CON CONO DE AIRE)</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control" id="proceso_2_9_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,9,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR INSERTO PARA TUERCA 5/16" CON NYLON</label>
                         <div class="input-group">
                              <span class="input-group-addon">10</span>
                              <input type="text" class="form-control" id="proceso_2_10_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,10,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">UBICAR 4 INSERTOS DE POLIURETANO EN CADA CABEZAL DE LA PIEZA Y 6 MEDIALUNAS DE FIBRA</label>
                         <div class="input-group">
                              <span class="input-group-addon">11</span>
                              <input type="text" class="form-control" id="proceso_2_11_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,11,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO. QUITAR LOS FILAMENTOS DE FIBRA DE VIDRIO EN EL PERÍMETRO DE MOLDE HEMBRA">LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO. QUITAR LOS FILAMENTOS...</label>
                         <div class="input-group">
                              <span class="input-group-addon">12</span>
                              <input type="text" class="form-control" id="proceso_2_12_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,12,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD APRUEBA LARGO DE LA FIBRA</label>
                         <div class="input-group">
                              <span class="input-group-addon">13</span>
                              <input type="text" class="form-control" id="proceso_2_13_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,13,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CERRAR EL MOLDE LENTAMENTE EVITANDO QUE LA FIBRA SE MUEVA</label>
                         <div class="input-group">
                              <span class="input-group-addon">14</span>
                              <input type="text" class="form-control" id="proceso_2_14_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,14,3)">
                         </div>
                    </div>

                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR 15 [cm] DE MANGUERA MALLA FLEX DE 12 [cm] EN PUNTOS DE CIERRE, DE ENTRADA Y SALIDA DE RESINA; SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">15</span>
                              <input type="text" class="form-control" id="proceso_2_15_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,15,3)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR MANGUERA DE INYECCIÓN DENTRO DE MANGUERA MALLA FLEX, SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">16</span>
                              <input type="text" class="form-control" id="proceso_2_16_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,16,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE TRAMPA DE VACÍO NO TENGA EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA, ES POSIBLE LA UTILIZACIÓN DE LA TRAMPA REPOSICIONANDO LA MANGUERA A LA ALTURA JUSTA">REVISAR QUE TRAMPA DE VACÍO NO TENGA EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA...</label>
                         <div class="input-group">
                              <span class="input-group-addon">17</span>
                              <input type="text" class="form-control" id="proceso_2_17_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,17,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ENCENDER BOMBA DE VACÍO DE CIERRE DE MOLDE Y ASEGURAR QUE LA CAMARA DE CIERRE ESTÉ COMPLETAMENTE SELLADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">18</span>
                              <input type="text" class="form-control" id="proceso_2_18_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,18,3)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">ENCENDER BOMBA  DE VACÍO INTERIOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">19</span>
                              <input type="text" class="form-control" id="proceso_2_19_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,19,3)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">DEJAR AMBAS BOMBAS DE VACÍO FUNCIONANDO POR 5 [min], CONFIRMAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">20</span>
                              <input type="text" class="form-control" id="proceso_2_20_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,20,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DEL PROCESO DE INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">REVISAR NIVELES DE ACETONA, RESINA Y CATALIZADOR EN LA MAQUINA DE INYECCIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">21</span>
                              <input type="text" class="form-control" id="proceso_2_21_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,21,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONECTAR LA LINEA DE AIRE Y ENCENDER LA MÁQUINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">22</span>
                              <input type="text" class="form-control" id="proceso_2_22_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,22,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN EN "PRESION DE INYECCIÓN": 1 [bar]</label>
                         <div class="input-group">
                              <span class="input-group-addon">23</span>
                              <input type="text" class="form-control" id="proceso_2_23_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,23,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN: "CIJECONE" EN "VELOCIDAD DE INYECCIÓN": 20%; "MEGAJECT4" EN:______ MPG</label>
                         <div class="input-group">
                              <span class="input-group-addon">24</span>
                              <input type="text" class="form-control" id="proceso_2_24_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,24,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN "MEGAJECT" EN ____ BOMBEOS DE RESINA Y LA MAQUINA "CIJECONE" EN ____ [l] A INYECTAR</label>
                         <div class="input-group">
                              <span class="input-group-addon">25</span>
                              <input type="text" class="form-control" id="proceso_2_25_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,25,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CEBAR MANUALMENTE HASTA ELIMINAR EL AIRE DENTRO DE LA LÍNEA DE CATALIZADOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">26</span>
                              <input type="text" class="form-control" id="proceso_2_26_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,26,4)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">REALIZAR LA OPERACIÓN "RECIRCULAR" Y REALIZAR ÉSTA OPERACIÓN DURANTE 3 [min], VERIFICANDO QUE EN EL RECIRCULADO NO SALE AIRE.</label>
                         <div class="input-group">
                              <span class="input-group-addon">27</span>
                              <input type="text" class="form-control" id="proceso_2_27_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,27,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR LA PISTOLA DE INYECCIÓNEN EL PUNTO DE INYECCIÓN DE RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">28</span>
                              <input type="text" class="form-control" id="proceso_2_28_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,28,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">VERIFICAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">29</span>
                              <input type="text" class="form-control" id="proceso_2_29_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,29,4)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO DEL VACÍO DE CIERRE DE MOLDE: -0,7 A -0,8 [bar]; VACUÓMETRO DEL VACÍO DE CIERRE INTERIOR: -0,5 [bar]">REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO DEL VACÍO DE CIERRE DE MOLDE:...</label>
                         <div class="input-group">
                              <span class="input-group-addon">30</span>
                              <input type="text" class="form-control" id="proceso_2_30_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,30,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD DEBE APROBAR LA PRUEBA DE VACÍO, MEDIANTE REALIZACIÓN DE PRUEBA DE VACÍO SEGÚN INSTRUCTIVO</label>
                         <div class="input-group">
                              <span class="input-group-addon">31</span>
                              <input type="text" class="form-control" id="proceso_2_31_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,31,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='PARA INICIAR LA INYECCIÓN PRESIONAR: EN "CIJECONE": EL BOTON "START" DOS VECES; EN "MEGAJECT4": EL BOTON VERDE; IR VERIFICANDO VISUALMENTE QUE NO SE ESTÉ INYECTANDO AIRE'>PARA INICIAR LA INYECCIÓN PRESIONAR: EN "CIJECONE": EL BOTON "START" DOS VECES; EN "MEGAJECT4": EL BOTON VERDE;...</label>
                         <div class="input-group">
                              <span class="input-group-addon">32</span>
                              <input type="text" class="form-control" id="proceso_2_32_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,32,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='FINALIZADA LA INYECCIÓN SI SE HA UTILIZADO LA MAQUINA: DESMONTAR LA PISTOLA DE INYECCIÓN, INICIAR EL PROCESO DE LAVADO DE LA MAQUINA PRESIONANDO EL BOTON "FLUSH"'>FINALIZADA LA INYECCIÓN SI SE HA UTILIZADO LA MAQUINA: DESMONTAR LA PISTOLA DE INYECCIÓN, INICIAR...</label>
                         <div class="input-group">
                              <span class="input-group-addon">33</span>
                              <input type="text" class="form-control" id="proceso_2_33_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,33,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ESPERAR GELADO DE LA RESINA CHEQUEANDO QUE VUELVA A 40°C DESPUÉS DEL PEAK EXOTÉRMICO</label>
                         <div class="input-group">
                              <span class="input-group-addon">34</span>
                              <input type="text" class="form-control" id="proceso_2_34_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,34,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">DESMOLDAR LA PIEZA INYECTADA SEGÚN PROCEDIMIENTO TRASLADO DE PIEZAS</label>
                         <div class="input-group">
                              <span class="input-group-addon">35</span>
                              <input type="text" class="form-control" id="proceso_2_35_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,35,4)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">INGRESAR MARCA DE IDENTFICACIÓN DE PIEZA: N° PIEZA INYECTADA Y NOMBRE PROYECTO</label>
                         <div class="input-group">
                              <span class="input-group-addon">36</span>
                              <input type="text" class="form-control" id="proceso_2_36_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,36,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN SEGÚN CORRESPONDA: VERDE: APROBADO; AMARILLO: EN OBSERVACIÓN; ROJO: RECHAZADO.'>GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN SEGÚN CORRESPONDA:...</label>
                         <div class="input-group">
                              <span class="input-group-addon">37</span>
                              <input type="text" class="form-control" id="proceso_2_37_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,37,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">TRASLADAR LA PIEZA JUNTO AL PRESENTE PROTOCOLO</label>
                         <div class="input-group">
                              <span class="input-group-addon">38</span>
                              <input type="text" class="form-control" id="proceso_2_38_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,38,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <label for="">LIMPIEZA MOLDE HEMBRA Y MACHO CON DESMOLDANTE, PAÑO MOLETON LIMPIO, LAINA ACRILICA Y TALADRO EN PUNTOS DE INYECCION Y SUCCION</label>
                         <div class="input-group">
                              <span class="input-group-addon">39</span>
                              <input type="text" class="form-control" id="proceso_2_39_1" placeholder="CHEQUEO" onblur="insertProtocolo(2,1,3,39,4)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: grey; color: #FFF">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN FINAL GENERAL
                         </div>
                         <br>
                    </div>

                    <form action="" id="infogral_final_inyeccion_2">
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TÉRMINO INYECCIÓN</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_termino_inyeccion_final" id="hora_termino_inyeccion_final_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE DESMOLDE PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_desmolde_pieza_final" id="hora_desmolde_pieza_final_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">T° DESMOLDE PIEZA</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_desmolde_pieza_final" id="t_desmolde_pieza_final_2">
                                   <span class="input-group-addon">ºC</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE LLENADO PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_llenado_pieza_final" id="hora_llenado_pieza_final_2">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" onclick="insertProtocolo(2, 1, 4)">Guardar</button>
                              </div>
                         </div>
                    </form>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">PROTOCOLO CORTE Y LIJADO - TIPO 2</h3>
          
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
               <div class="box-body">
                   <div class="row">

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: #f39c12">
                                   
                                   SECCIÓN CORTE Y LIJADO: INFORMACIÓN GENERAL
                              </div>
                              <br>
                         </div>
          
                         <form action="" id="cyl_infogral_2_2"> <!-- ID se construye (en este caso) nombre_tipoProtocolo_idProtocolo -->
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_inicio" id="fecha_inicio_2_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_termino" id="fecha_termino_2_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_entrada" id="hora_entrada_2_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_salida" id="hora_salida_2_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="n_tarro_gel_coat" id="n_tarro_gel_coat_2_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">CATALIZADOR</label>
                              <div class="row">
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="M50" name="catalizador_1" id="catalizador1_2_cyl_2">
                                   </div>
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="K12" name="catalizador_2" id="catalizador2_2_cyl_2">
                                   </div>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO RESINA</label>
                              <input type="text" class="form-control clean" name="n_tarro_resina" id="n_tarro_resina_2_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">% CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_2_cyl_2">
                          </div>
                         
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_inicio" id="hora_inicio_2_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_termino" id="hora_termino_2_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="" onclick="insertProtocolo(2,2,5)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: #f39c12">
                                   
                                   CORTE Y LIJADO
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-4">
                              <label for="">CON ESMERIL ANGULAR, DAR LAS DIMENSIONES GENERALES DESCRITAS EN EL PLANO DE LA PIEZA</label>
                              <div class="input-group">
                                   <span class="input-group-addon">1</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_1_2"  onblur="insertProtocolo(2, 2, 3, 1, 1)">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-4">
                              <label for="">CORTE DE LA QUILLA EN SECTOR DEL CABEZAL</label>
                              <div class="input-group">
                                   <span class="input-group-addon">2</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_2_2"  onblur="insertProtocolo(2, 2, 3, 2, 1)">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-4">
                              <label for="">CON ESMERIL ANGULAR Y DISCO DE LIJA GRANO 24, LIJAR EL PERÍMETRO DE LA PIEZA DANDO PLANITUD EN LOS ÁNGULOS VERTICAL Y HORIZONTAL</label>
                              <div class="input-group">
                                   <span class="input-group-addon">3</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_3_2"  onblur="insertProtocolo(2, 2, 3, 3, 1)">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-6">
                              <label for="">REESTRUCTURAR INSERTOS DE POLIURETANO (ZAPATILLA) EN LOS CABEZALES</label>
                              <div class="input-group">
                                   <span class="input-group-addon">4</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_4_2"  onblur="insertProtocolo(2, 2, 3, 4, 1)">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-6">
                              <label for="">SELLAR BORDES LIJADOS CON RESINA</label>
                              <div class="input-group">
                                   <span class="input-group-addon">5</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_5_2"  onblur="insertProtocolo(2, 2, 3, 5, 1)">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: #f39c12">
                                   
                                   CORTE Y LIJADO: INSPECCIÓN VISUAL, CHEQUEO DE FALLAS
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                         <br><br>
                         <div class="table-responsive">
                              <table class="table table-striped table-bordered table-condensed">
                                   <thead style="background: grey">
                                        <tr>
                                             <th colspan="2">FALLAS</th>
                                             <th>SI</th>
                                             <th>HORA INICIO</th>
                                             <th>HORA TERMINO</th>
                                             <th>TEMPERATURA</th>
                                             <th>% HUMEDAD</th>
                                             <th style="background: #f39c12 !important">CHEQUEO</th>
                                        </tr>
                                   </thead>
                         
                                   <tbody>
                                        <tr>
                                             <td><b>1</b></td>
                                             <td>ARRUGAS DE FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="1" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_2_horainicio_1_2" onblur="insertProtocolo(2,2,6,1,'',2)" disabled> <!-- ID: falla_tipoprot_nombre_nrofalla_idprotoc -->
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_2_horatermino_1_2" onblur="insertProtocolo(2,2,6,1,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" id="falla_2_temp_1_2" onblur="insertProtocolo(2,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_2_porchumedad_1_2" onblur="insertProtocolo(2,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_2_chequeo_1_2" onblur="insertProtocolo(2,2,6,1,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>2</b></td>
                                             <td>SIN DUREZA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="2" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_2_horainicio_2_2" onblur="insertProtocolo(2,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_2_horatermino_2_2" onblur="insertProtocolo(2,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,2,'',2)" id="falla_2_temp_2_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,2,'',2)" id="falla_2_porchumedad_2_2" disabled></td>
                                             <td><input type="text" class="clean" id="falla_2_chequeo_2_2" onblur="insertProtocolo(2,2,6,2,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>3</b></td>
                                             <td>FIBRA SIN HUMECTAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="3" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_2_horainicio_3_2" onblur="insertProtocolo(2,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_2_horatermino_3_2" onblur="insertProtocolo(2,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,3,'',2)" id="falla_2_temp_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,3,'',2)" id="falla_2_porchumedad_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,3,'',1)" id="falla_2_chequeo_3_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>4</b></td>
                                             <td>FIBRA SIN GELAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="4" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_2_horainicio_4_2" onblur="insertProtocolo(2,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_2_horatermino_4_2" onblur="insertProtocolo(2,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,4,'',2)" id="falla_2_temp_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,4,'',2)" id="falla_2_porchumedad_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,4,'',1)" id="falla_2_chequeo_4_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>5</b></td>
                                             <td>FIBRA EXPUESTA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="5" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,5,'',2)" name="" id="falla_2_horainicio_5_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,5,'',2)" name="" id="falla_2_horatermino_5_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,5,'',2)" id="falla_2_temp_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,5,'',2)" id="falla_2_porchumedad_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,5,'',1)" id="falla_2_chequeo_5_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>6</b></td>
                                             <td>BORDES SIN FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="6" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,6,'',2)" name="" id="falla_2_horainicio_6_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,6,'',2)" name="" id="falla_2_horatermino_6_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,6,'',2)" id="falla_2_temp_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,6,'',2)" id="falla_2_porchumedad_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,6,'',1)" id="falla_2_chequeo_6_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>7</b></td>
                                             <td>POROSIDAD</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="7" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,7,'',2)" name="" id="falla_2_horainicio_7_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,7,'',2)" name="" id="falla_2_horatermino_7_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,7,'',2)" id="falla_2_temp_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,7,'',2)" id="falla_2_porchumedad_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,7,'',1)" id="falla_2_chequeo_7_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>8</b></td>
                                             <td>BURBUJAS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="8" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,8,'',2)" name="" id="falla_2_horainicio_8_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,8,'',2)" name="" id="falla_2_horatermino_8_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,8,'',2)" id="falla_2_temp_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,8,'',2)" id="falla_2_porchumedad_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,8,'',1)" id="falla_2_chequeo_8_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>9</b></td>
                                             <td>OTROS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="9" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,9,'',2)" name="" id="falla_2_horainicio_9_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(2,2,6,9,'',2)" name="" id="falla_2_horatermino_9_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,9,'',2)" id="falla_2_temp_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,9,'',2)" id="falla_2_porchumedad_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(2,2,6,9,'',1)" id="falla_2_chequeo_9_2" disabled></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: #f39c12">
                                   
                                   CORTE Y LIJADO
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-3">
                              <label for="">REPARAR FALLA SEGÚN SEA EL CASO EN FUNCIÓN DE PROCEDIMIENTO DE REPARACIONES</label>
                              <div class="input-group">
                                   <span class="input-group-addon">6</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_6_2"  onblur="insertProtocolo(2, 2, 3, 6, 1)">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">LIJAR REPARACIÓN</label>
                              <div class="input-group">
                                   <span class="input-group-addon">7</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_7_2"  onblur="insertProtocolo(2, 2, 3, 7, 1)">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">SELLAR REPARACIÓN CON RESINA CATALIZADA</label>
                              <div class="input-group">
                                   <span class="input-group-addon">8</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_8_2"  onblur="insertProtocolo(2, 2, 3, 8, 1)">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                              <div class="input-group">
                                   <span class="input-group-addon">9</span>
                                   <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_9_2"  onblur="insertProtocolo(2, 2, 3, 9, 1)">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <label for="">OBSERVACIONES</label>
                              <textarea name="" id="observacion_2_2" rows="5" class="form-control clean" onblur="insertProtocolo(2,2,7)"></textarea>
                         </div>
                   </div>
               </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div>
            <!-- /.box-footer-->
          </div>


          <div class="box" style="border-top-color: purple !important">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO PERFORADO - TIPO 2</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              SECCIÓN PERFOMADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="perforado_infogral_2_3">
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_inicio" id="fecha_inicio_perf_2_3" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_termino" id="fecha_termino_perf_2_3" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" name="hora_entrada" id="hora_entrada_perf_2_3" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" name="hora_salida" id="hora_salida_perf_2_3" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button class="btn btn-success" type="button" onclick="insertProtocolo(2,3,8)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              PERFORADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR PLANTILLA DE PERFORADO DE PIEZA EME</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_1_3" onblur="insertProtocolo(2,3,3,1,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR PERFORACIONES CON BROCA  DE 12 [mm] EN SECTORES INDICADOS POR PLANTILLA</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_2_3" onblur="insertProtocolo(2,3,3,2,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR PERFORACIONES CON SIERRA DE COPA DE 15 [mm] EN SECTORES INDICADOS POR PLANTILLA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_3_3" onblur="insertProtocolo(2,3,3,3,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR PERFORACIONES CON SIERRA DE COPA DE 27 [mm] EN SECTORES INDICADOS POR PLANTILLA</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_4_3" onblur="insertProtocolo(2,3,3,4,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">DAR VUELTA LA PIEZA SOBRE MESA DE PERFORADO</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_5_3" onblur="insertProtocolo(2,3,3,5,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR PIEZA TAPA SOBRE EME</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_6_3" onblur="insertProtocolo(2,3,3,6,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR SISTEMA DE IZAJE SEGÚN PLANO DE ENSAMBLE</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_7_3" onblur="insertProtocolo(2,3,3,7,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PERFORAR CON BROCA DE 9 [mm] EN CADA UNA DE LAS 8 ENTRADAS DE PERNOS A MODO DE DEMARCACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_8_3" onblur="insertProtocolo(2,3,3,8,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">RETIRAR SISTEMA DE IZAJE Y TAPA</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_9_3" onblur="insertProtocolo(2,3,3,9,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PERFORAR LA PIEZA EME CON BROCA DE 18 [mm] SOBRE PERFORACIONES DE 9 [mm] DE SISTEMA DE IZAJE</label>
                         <div class="input-group">
                              <span class="input-group-addon">10</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_10_3" onblur="insertProtocolo(2,3,3,10,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PERFORAR CON BROCA DE 4 [mm] EN SECTORES DE REMACHES DE SOPORTE PLACA</label>
                         <div class="input-group">
                              <span class="input-group-addon">11</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_11_3" onblur="insertProtocolo(2,3,3,11,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">SELLAR TODAS LAS PERFORACIONES DESCRITAS CON RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">12</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_12_3" onblur="insertProtocolo(2,3,3,12,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">13</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_2_13_3" onblur="insertProtocolo(2,3,3,13,1)">
                         </div>
                    </div>

                    

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_2_3" rows="5" class="form-control clean" onblur="insertProtocolo(2,3,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

</div>
<!-- /.box -->

<div id="tipo_protocolo_3" class="select_protocolo" style="display: none;" data-tipoProtocolo="3">
     <div class="box box-primary">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO DE INYECCIÓN - TIPO 3</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">PESO FIBRA CF700/D250/700</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_1_1" onblur="insertProtocolo(3,1,3,1,1)">
                              <span class="input-group-addon">[KG]</span>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">PESO FIBRA REFUERZO 300/D250/300</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_2_1" onblur="insertProtocolo(3,1,3,2,1)">
                              <span class="input-group-addon">[KG]</span>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <fieldset>
                              <legend>Información General</legend>

                              <form action="" id="infogral_inyeccion_3">
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMB. DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_amb_seca_pieza" id="t_amb_seca_pieza_3">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%CATALIZADOR  / CATALIZADOR</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_catalizador_inyeccion" id="porcent_catalizador_inyeccion_3">
                                             <span class="input-group-addon">%</span> 
                                   
                                             <input type="text" class="form-control" name="catalizador_inyeccion" id="catalizador_inyeccion_3">
                                             <span class="input-group-addon">Ejm: K12</span> 
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%HR DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_seca_pieza" id="porcent_hr_seca_pieza_3">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° MOLDE ANTES DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_molde_antes_inyeccion" id="t_molde_antes_inyeccion_3">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">N°TARRO RESINA INYECCIÓN</label>
                                        <input type="text" class="form-control clean" name="n_tarro_resina_inyeccion" id="n_tarro_resina_inyeccion_3">
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMBIENTE SALA INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_ambiente_sala_inyeccion" id="t_ambiente_sala_inyeccion_3">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">T° RESINA INICIO INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_resina_inicio_inyeccion" id="t_resina_inicio_inyeccion_3">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <div class="bootstrap-timepicker">
                                             <label for="">HORA INICIO INYECCION</label>
                                             <input type="text" class="form-control timepicker clean" name="hora_inicio_inyeccion" id="hora_inicio_inyeccion_3">
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">LITROS DE RESINA INYECTADA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="lts_resina_inyectada" id="lts_resina_inyectada_3">
                                             <span class="input-group-addon">[LT]</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">%HR SALA DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_sala_inyeccion" id="porcent_hr_sala_inyeccion_3">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                              </form>
                         </fieldset>
                         <br>
                         <div class="pull-right">
                              <button type="button" class="btn btn-success" id="guardar_iny_inyeccion" onclick="insertProtocolo(3,1, 2)">Guardar</button>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DE PROCESO PREVIO INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">UBICAR FIBRA DE VIDRIO, FIBRA DE REFUERZO Y AJUSTARLA MANUALMENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_3_1" onblur="insertProtocolo(3,1,3,3,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">RECORTAR LOS EXCESOS DE FIBRA EN LOS BORDES DEJANDO EL LARGO DE LA FIBRA HASTA DONDE TERMINA EL PINTADO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_4_1" onblur="insertProtocolo(3,1,3,4,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO. QUITAR LOS FILAMENTOS DE FIBRA DE VIDRIO EN EL PERÍMETRO DE MOLDE HEMBRA">LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO. QUITAR LOS FILAMENTOS...</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_5_1" onblur="insertProtocolo(3,1,3,5,2)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD APRUEBA LARGO DE LA FIBRA</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_6_1" onblur="insertProtocolo(3,1,3,6,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CERRAR EL MOLDE LENTAMENTE EVITANDO QUE LA FIBRA SE MUEVA</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_7_1" onblur="insertProtocolo(3,1,3,7,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR 15 [cm] DE MANGUERA MALLA FLEX DE 12 [cm] EN PUNTOS DE CIERRE, DE ENTRADA Y SALIDA DE RESINA; SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_8_1" onblur="insertProtocolo(3,1,3,8,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR MANGUERA DE INYECCIÓN DENTRO DE MANGUERA MALLA FLEX, SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_9_1" onblur="insertProtocolo(3,1,3,8,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE TRAMPAS DE VACÍO NO TENGAN EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA, ES POSIBLE LA UTILIZACIÓN DE LA TRAMPA REPOSICIONANDO LA MANGUERA A LA ALTURA JUSTA">REVISAR QUE TRAMPAS DE VACÍO NO TENGAN EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA...</label>
                         <div class="input-group">
                              <span class="input-group-addon">10</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_10_1" onblur="insertProtocolo(3,1,3,10,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ENCENDER BOMBA DE VACÍO DE CIERRE DE MOLDE Y ASEGURAR QUE LA CAMARA DE CIERRE ESTÉ COMPLETAMENTE SELLADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">11</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_11_1" onblur="insertProtocolo(3,1,3,11,2)">
                         </div>
                    </div>

                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">ENCENDER BOMBA  DE VACÍO INTERIOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">12</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_12_1" onblur="insertProtocolo(3,1,3,12,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">DEJAR AMBAS BOMBAS DE VACÍO FUNCIONANDO POR 5 [min]</label>
                         <div class="input-group">
                              <span class="input-group-addon">13</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_13_1"onblur="insertProtocolo(3,1,3,13,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DEL PROCESO DE INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">REVISAR NIVELES DE ACETONA, RESINA Y CATALIZADOR EN LA MAQUINA DE INYECCIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">14</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_14_1"onblur="insertProtocolo(3,1,3,14,3)"">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONECTAR LA LINEA DE AIRE Y ENCENDER LA MÁQUINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">15</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_15_1" onblur="insertProtocolo(3,1,3,15,3)"">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN EN "PRESION DE INYECCIÓN": 1 [bar]</label>
                         <div class="input-group">
                              <span class="input-group-addon">16</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_16_1" onblur="insertProtocolo(3,1,3,16,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN: "CIJECONE" EN "VELOCIDAD DE INYECCIÓN": 20%; "MEGAJECT4" EN:______ MPG</label>
                         <div class="input-group">
                              <span class="input-group-addon">17</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_17_1" onblur="insertProtocolo(3,1,3,17,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN "MEGAJECT" EN ____ BOMBEOS DE RESINA Y LA MAQUINA "CIJECONE" EN ____ [l] A INYECTAR</label>
                         <div class="input-group">
                              <span class="input-group-addon">18</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_18_1" onblur="insertProtocolo(3,1,3,18,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CEBAR MANUALMENTE HASTA ELIMINAR EL AIRE DENTRO DE LA LÍNEA DE CATALIZADOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">19</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_19_1" onblur="insertProtocolo(3,1,3,19,3)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">REALIZAR LA OPERACIÓN "RECIRCULAR" Y REALIZAR ÉSTA OPERACIÓN DURANTE 3 [min], VERIFICANDO QUE EN EL RECIRCULADO NO SALE AIRE.</label>
                         <div class="input-group">
                              <span class="input-group-addon">20</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_20_1" onblur="insertProtocolo(3,1,3,20,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PROGRAMAR LA MAQUINA DE INYECCIÓN "MEGAJECT" EN 150 BOMBEOS DE RESINA Y LA MAQUINA "CIJECONE" EN 15 [l] A INYECTAR</label>
                         <div class="input-group">
                              <span class="input-group-addon">21</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_21_1" onblur="insertProtocolo(3,1,3,21,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">VERIFICAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">22</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_22_1" onblur="insertProtocolo(3,1,3,22,3)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO DEL VACÍO DE CIERRE DE MOLDE: -0,7 A -0,8 [bar]; VACUÓMETRO DEL VACÍO DE CIERRE INTERIOR: -0,5 [bar]">REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO DEL VACÍO DE CIERRE DE MOLDE:...</label>
                         <div class="input-group">
                              <span class="input-group-addon">23</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_23_1" onblur="insertProtocolo(3,1,3,23,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD DEBE APROBAR LA PRUEBA DE VACÍO, MEDIANTE REALIZACIÓN DE PRUEBA DE VACÍO SEGÚN INSTRUCTIVO</label>
                         <div class="input-group">
                              <span class="input-group-addon">24</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_24_1" onblur="insertProtocolo(3,1,3,24,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='PARA INICIAR LA INYECCIÓN PRESIONAR: EN "CIJECONE": EL BOTON "START" DOS VECES; EN "MEGAJECT4": EL BOTON VERDE; IR VERIFICANDO VISUALMENTE QUE NO SE ESTÉ INYECTANDO AIRE'>PARA INICIAR LA INYECCIÓN PRESIONAR: EN "CIJECONE": EL BOTON "START" DOS VECES; EN "MEGAJECT4": EL BOTON VERDE;...</label>
                         <div class="input-group">
                              <span class="input-group-addon">25</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_25_1" onblur="insertProtocolo(3,1,3,25,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='FINALIZADA LA INYECCIÓN SI SE HA UTILIZADO LA MAQUINA: DESMONTAR LA PISTOLA DE INYECCIÓN, INICIAR EL PROCESO DE LAVADO DE LA MAQUINA PRESIONANDO EL BOTON "FLUSH"'>FINALIZADA LA INYECCIÓN SI SE HA UTILIZADO LA MAQUINA: DESMONTAR LA PISTOLA DE INYECCIÓN, INICIAR...</label>
                         <div class="input-group">
                              <span class="input-group-addon">26</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_26_1" onblur="insertProtocolo(3,1,3,26,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ESPERAR GELADO DE LA RESINA CHEQUEANDO QUE VUELVA A 40°C DESPUÉS DEL PEAK EXOTÉRMICO</label>
                         <div class="input-group">
                              <span class="input-group-addon">27</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_27_1" onblur="insertProtocolo(3,1,3,27,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">DESMOLDAR LA PIEZA INYECTADA SEGÚN PROCEDIMIENTO TRASLADO DE PIEZAS</label>
                         <div class="input-group">
                              <span class="input-group-addon">28</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_28_1" onblur="insertProtocolo(3,1,3,28,3)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">INGRESAR MARCA DE IDENTFICACIÓN DE PIEZA: N° PIEZA INYECTADA Y NOMBRE PROYECTO</label>
                         <div class="input-group">
                              <span class="input-group-addon">29</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_29_1" onblur="insertProtocolo(3,1,3,29,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title='GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN SEGÚN CORRESPONDA: VERDE: APROBADO; AMARILLO: EN OBSERVACIÓN; ROJO: RECHAZADO.'>GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN SEGÚN CORRESPONDA:...</label>
                         <div class="input-group">
                              <span class="input-group-addon">30</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_30_1" onblur="insertProtocolo(3,1,3,30,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">TRASLADAR LA PIEZA JUNTO AL PRESENTE PROTOCOLO</label>
                         <div class="input-group">
                              <span class="input-group-addon">31</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_31_1" onblur="insertProtocolo(3,1,3,31,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <label for="">LIMPIEZA MOLDE HEMBRA Y MACHO CON DESMOLDANTE, PAÑO MOLETON LIMPIO, LAINA ACRILICA Y TALADRO EN PUNTOS DE INYECCION Y SUCCION</label>
                         <div class="input-group">
                              <span class="input-group-addon">32</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_32_1" onblur="insertProtocolo(3,1,3,32,3)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: grey; color: #FFF">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN FINAL GENERAL
                         </div>
                         <br>
                    </div>

                    <form action="" id="infogral_final_inyeccion_3">
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TÉRMINO INYECCIÓN</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_termino_inyeccion_final" id="hora_termino_inyeccion_final_3">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE DESMOLDE PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_desmolde_pieza_final" id="hora_desmolde_pieza_final_3">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">T° DESMOLDE PIEZA</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_desmolde_pieza_final" id="t_desmolde_pieza_final_3">
                                   <span class="input-group-addon">ºC</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE LLENADO PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_llenado_pieza_final" id="hora_llenado_pieza_final_3">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" onclick="insertProtocolo(3, 1, 4)">Guardar</button>
                              </div>
                         </div>
                    </form>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box box-warning">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO CORTE Y LIJADO - TIPO 3</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              SECCIÓN CORTE Y LIJADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="cyl_infogral_3_2"> <!-- ID se construye (en este caso) nombre_tipoProtocolo_idProtocolo -->
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_inicio" id="fecha_inicio_3_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_termino" id="fecha_termino_3_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_entrada" id="hora_entrada_3_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_salida" id="hora_salida_3_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="n_tarro_gel_coat" id="n_tarro_gel_coat_3_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">CATALIZADOR</label>
                              <div class="row">
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="M50" name="catalizador_1" id="catalizador1_3_cyl_2">
                                   </div>
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="K12" name="catalizador_2" id="catalizador2_3_cyl_2">
                                   </div>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO RESINA</label>
                              <input type="text" class="form-control clean" name="n_tarro_resina" id="n_tarro_resina_3_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">% CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_3_cyl_2">
                          </div>
                         
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_inicio" id="hora_inicio_3_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_termino" id="hora_termino_3_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="" onclick="insertProtocolo(3,2,5)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">CON ESMERIL ANGULAR, DAR LAS DIMENSIONES GENERALES DESCRITAS EN EL PLANO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_1_2"  onblur="insertProtocolo(3, 2, 3, 1, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR BISELADO DE 4 [cm] EN EXTREMO DIMENSIONADO QUE DA AL CABEZAL</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_2_2"  onblur="insertProtocolo(3, 2, 3, 2, 1)">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">CON ESMERIL ANGULAR Y DISCO DE LIJA GRANO 24, LIJAR EL PERÍMETRO DE LA PIEZA DANDO PLANITUD EN LOS ÁNGULOS VERTICAL Y HORIZONTAL</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_3_2"  onblur="insertProtocolo(3, 2, 3, 3, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">SELLAR BORDES LIJADOS CON RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_4_2"  onblur="insertProtocolo(3, 2, 3, 4, 1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO: INSPECCIÓN VISUAL, CHEQUEO DE FALLAS
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br><br>
                         <div class="table-responsive">
                              <table class="table table-striped table-bordered table-condensed">
                                   <thead style="background: grey">
                                        <tr>
                                             <th colspan="2">FALLAS</th>
                                             <th>SI</th>
                                             <th>HORA INICIO</th>
                                             <th>HORA TERMINO</th>
                                             <th>TEMPERATURA</th>
                                             <th>% HUMEDAD</th>
                                             <th style="background: #f39c12 !important">CHEQUEO</th>
                                        </tr>
                                   </thead>
                         
                                   <tbody>
                                        <tr>
                                             <td><b>1</b></td>
                                             <td>ARRUGAS DE FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="1" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_3_horainicio_1_2" onblur="insertProtocolo(3,2,6,1,'',2)" disabled> <!-- ID: falla_tipoprot_nombre_nrofalla_idprotoc -->
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_3_horatermino_1_2" onblur="insertProtocolo(3,2,6,1,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" id="falla_3_temp_1_2" onblur="insertProtocolo(3,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_3_porchumedad_1_2" onblur="insertProtocolo(3,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_3_chequeo_1_2" onblur="insertProtocolo(3,2,6,1,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>2</b></td>
                                             <td>SIN DUREZA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="2" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_3_horainicio_2_2" onblur="insertProtocolo(3,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_3_horatermino_2_2" onblur="insertProtocolo(3,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,2,'',2)" id="falla_3_temp_2_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,2,'',2)" id="falla_3_porchumedad_2_2" disabled></td>
                                             <td><input type="text" class="clean" id="falla_3_chequeo_2_2" onblur="insertProtocolo(3,2,6,2,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>3</b></td>
                                             <td>FIBRA SIN HUMECTAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="3" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_3_horainicio_3_2" onblur="insertProtocolo(3,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_3_horatermino_3_2" onblur="insertProtocolo(3,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,3,'',2)" id="falla_3_temp_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,3,'',2)" id="falla_3_porchumedad_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,3,'',1)" id="falla_3_chequeo_3_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>4</b></td>
                                             <td>FIBRA SIN GELAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="4" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_3_horainicio_4_2" onblur="insertProtocolo(3,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_3_horatermino_4_2" onblur="insertProtocolo(3,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,4,'',2)" id="falla_3_temp_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,4,'',2)" id="falla_3_porchumedad_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,4,'',1)" id="falla_3_chequeo_4_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>5</b></td>
                                             <td>FIBRA EXPUESTA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="5" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,5,'',2)" name="" id="falla_3_horainicio_5_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,5,'',2)" name="" id="falla_3_horatermino_5_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,5,'',2)" id="falla_3_temp_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,5,'',2)" id="falla_3_porchumedad_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,5,'',1)" id="falla_3_chequeo_5_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>6</b></td>
                                             <td>BORDES SIN FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="6" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,6,'',2)" name="" id="falla_3_horainicio_6_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,6,'',2)" name="" id="falla_3_horatermino_6_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,6,'',2)" id="falla_3_temp_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,6,'',2)" id="falla_3_porchumedad_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,6,'',1)" id="falla_3_chequeo_6_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>7</b></td>
                                             <td>POROSIDAD</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="7" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,7,'',2)" name="" id="falla_3_horainicio_7_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,7,'',2)" name="" id="falla_3_horatermino_7_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,7,'',2)" id="falla_3_temp_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,7,'',2)" id="falla_3_porchumedad_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,7,'',1)" id="falla_3_chequeo_7_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>8</b></td>
                                             <td>BURBUJAS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="8" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,8,'',2)" name="" id="falla_3_horainicio_8_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,8,'',2)" name="" id="falla_3_horatermino_8_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,8,'',2)" id="falla_3_temp_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,8,'',2)" id="falla_3_porchumedad_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,8,'',1)" id="falla_3_chequeo_8_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>9</b></td>
                                             <td>OTROS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="9" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,9,'',2)" name="" id="falla_3_horainicio_9_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(3,2,6,9,'',2)" name="" id="falla_3_horatermino_9_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,9,'',2)" id="falla_3_temp_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,9,'',2)" id="falla_3_porchumedad_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(3,2,6,9,'',1)" id="falla_3_chequeo_9_2" disabled></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-3">
                         <label for="">REPARAR FALLA SEGÚN SEA EL CASO EN FUNCIÓN DE PROCEDIMIENTO DE REPARACIONES</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_5_2"  onblur="insertProtocolo(3, 2, 3, 5, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">LIJAR REPARACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_6_2"  onblur="insertProtocolo(3, 2, 3, 6, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">SELLAR REPARACIÓN CON RESINA CATALIZADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_7_2"  onblur="insertProtocolo(3, 2, 3, 7, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_8_2"  onblur="insertProtocolo(3, 2, 3, 8, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_3_2" rows="5" class="form-control clean" onblur="insertProtocolo(3,2,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box" style="border-top-color: purple !important">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO PERFORADO - TIPO 3</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              SECCIÓN PERFOMADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="perforado_infogral_3_3">
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_inicio" id="fecha_inicio_perf_3_3" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_termino" id="fecha_termino_perf_3_3" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" name="hora_entrada" id="hora_entrada_perf_3_3" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" name="hora_salida" id="hora_salida_perf_3_3" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button class="btn btn-success" type="button" onclick="insertProtocolo(3,3,8)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              PERFORADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR AMBAS LINEAS DE AGUA EN PIEZA BASE</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_1_3" onblur="insertProtocolo(3,3,3,1,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PONER PLANTILLAS DE PERFORACIÓN EN EXTREMO DE CONO DE AGUA DE LÍNEAS DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_2_3" onblur="insertProtocolo(3,3,3,2,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PERFORAR CON SIERRA DE COPA DE 22 [mm] EN AMBAS LÍNEAS DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_3_3" onblur="insertProtocolo(3,3,3,3,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">SELLAR EPRFORACIONES CON RESINA CATALIZADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_4_3" onblur="insertProtocolo(3,3,3,4,1)">
                         </div>
                    </div>

                    
                    <div class="col-xs-12 col-lg-12">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_3_5_3" onblur="insertProtocolo(3,3,3,5,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_3_3" rows="5" class="form-control clean" onblur="insertProtocolo(3,3,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>
</div>
<!-- /.box -->

<div id="tipo_protocolo_4" class="select_protocolo" style="display: none" data-tipoProtocolo="4">
     <div class="box box-primary">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO DE INYECCIÓN - TIPO 4</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-primary">
                              
                              CABINA DE PINTADO - SECCIÓN PINTADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="infogral_pintado_4">
                         <input type="hidden" value="1" id="id_protocolo_hd"> <!-- ID DE PROTOCOLO -->
                         <input type="hidden" value="4" id="tipo_protocolo_hd"> <!-- TIPO DE PROTOCOLO -->
                         <div class="col-xs-12 col-lg-4">
                              <label for="">N° TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="nro_tarro_gel_coat" id="nro_tarro_gel_coat_4">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <label for="">T° MOLDE ANTES DE PINTAR</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_molde_antes_pintar" id="t_molde_antes_pintar_4">
                                   <span class="input-group-addon">ºC</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">KG. GEL COAT</label>
                              <input type="text" class="form-control clean" name="kg_gel_coat" id="kg_gel_coat_4">
                         </div>
                              
                         <div class="col-xs-12 col-lg-4">
                              <label for="">%CATALIZADOR</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_pintado_4">
                                   <span class="input-group-addon">%</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <div class="bootstrap-timepicker">
                                        <label for="">HORA INICIO PINTADO</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_inicio_pintado" id="hora_inicio_pintado_4">
                                   </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">T° GEL COAT</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_gel_coat" id="t_gel_coat_4">
                                   <span class="input-group-addon">[KG]</span>
                              </div>
                         </div>
                              
                         <div class="col-xs-12 col-lg-4">
                              <label for="">CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="catalizador" id="catalizador_pintado_4" placeholder="Ejm: M50">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <div class="bootstrap-timepicker">
                                        <label for="">HORA TÉRMINO PINTADO</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_termino_pintado" id="hora_termino_pintado_4">
                                   </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <div class="bootstrap-timepicker">
                                        <label for="">HORA TIEMPO CAT</label>
                                        <input type="text" class="form-control timepicker clean" name="hora_tiempo_cat" id="hora_tiempo_cat_4">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="guardar_iny_pintado" onclick="insertProtocolo(4, 1, 1)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-primary">
                              
                              CABINA PINTADO: INFORMACIÓN DEL PROCESO
                         </div>
                         <br>
                    </div>
     
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PINTADO DEL MOLDE HEMBRA CON GEL COAT AZUL</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_1_1" onblur="insertProtocolo(4,1,3,1,1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONTROL DE ESPESORES POR PARTE DE GARANTÍA DE CALIDAD e=0,5 [mm]</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_2_1" onblur="insertProtocolo(4,1,3,2,1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CONTROL QUE GEL COAT ESTÉ TAC POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_3_1" onblur="insertProtocolo(4,1,3,3,1)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <label for="">PESO FIBRA CF700/D250/700</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_4_1" onblur="insertProtocolo(4,1,3,4,2)">
                              <span class="input-group-addon">[KG]</span>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <fieldset>
                              <legend>Información General</legend>

                              <form action="" id="infogral_inyeccion_4">
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMB. DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_amb_seca_pieza" id="t_amb_seca_pieza_4">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%CATALIZADOR  / CATALIZADOR</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_catalizador_inyeccion" id="porcent_catalizador_inyeccion_4">
                                             <span class="input-group-addon">%</span> 
                                   
                                             <input type="text" class="form-control" name="catalizador_inyeccion" id="catalizador_inyeccion_4">
                                             <span class="input-group-addon">Ejm: K12</span> 
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%HR DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_seca_pieza" id="porcent_hr_seca_pieza_4">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° MOLDE ANTES DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_molde_antes_inyeccion" id="t_molde_antes_inyeccion_4">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">N°TARRO RESINA INYECCIÓN</label>
                                        <input type="text" class="form-control clean" name="n_tarro_resina_inyeccion" id="n_tarro_resina_inyeccion_4">
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMBIENTE SALA INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_ambiente_sala_inyeccion" id="t_ambiente_sala_inyeccion_4">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">T° RESINA INICIO INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_resina_inicio_inyeccion" id="t_resina_inicio_inyeccion_4">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <div class="bootstrap-timepicker">
                                             <label for="">HORA INICIO INYECCION</label>
                                             <input type="text" class="form-control timepicker clean" name="hora_inicio_inyeccion" id="hora_inicio_inyeccion_4">
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">LITROS DE RESINA INYECTADA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="lts_resina_inyectada" id="lts_resina_inyectada_4">
                                             <span class="input-group-addon">[LT]</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">%HR SALA DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_sala_inyeccion" id="porcent_hr_sala_inyeccion_4">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                              </form>
                         </fieldset>
                         <br>
                         <div class="pull-right">
                              <button type="button" class="btn btn-success" id="guardar_iny_inyeccion" onclick="insertProtocolo(4,1, 2)">Guardar</button>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DE PROCESO PREVIO INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">UBICAR FIBRA DE VIDRIO, FIBRA DE REFUERZO Y AJUSTARLA MANUALMENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_5_1" onblur="insertProtocolo(4,1,3,5,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">RECORTAR LOS EXCESOS DE FIBRA EN LOS BORDES DEJANDO EL LARGO DE LA FIBRA HASTA DONDE TERMINA EL PINTADO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_6_1" onblur="insertProtocolo(4,1,3,6,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO. QUITAR LOS FILAMENTOS DE FIBRA DE VIDRIO EN EL PERÍMETRO DE MOLDE HEMBRA">LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO...</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_7_1" onblur="insertProtocolo(4,1,3,7,3)">
                         </div>
                    </div>

                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD APRUEBA LARGO DE LA FIBRA</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_8_1" onblur="insertProtocolo(4,1,3,8,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CERRAR EL MOLDE LENTAMENTE EVITANDO QUE LA FIBRA SE MUEVA</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_9_1" onblur="insertProtocolo(4,1,3,9,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR 15 [cm] DE MANGUERA MALLA FLEX DE 12 [cm] EN PUNTOS DE CIERRE, DE ENTRADA Y SALIDA DE RESINA; SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">10</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_10_1" onblur="insertProtocolo(4,1,3,10,3)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR MANGUERA DE INYECCIÓN DENTRO DE MANGUERA MALLA FLEX, SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">11</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_11_1" onblur="insertProtocolo(4,1,3,11,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE TRAMPA DE VACÍO NO TENGA EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA, ES POSIBLE LA UTILIZACIÓN DE LA TRAMPA REPOSICIONANDO LA MANGUERA A LA ALTURA JUSTA">REVISAR QUE TRAMPA DE VACÍO NO TENGA EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA,...</label>
                         <div class="input-group">
                              <span class="input-group-addon">12</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_12_1" onblur="insertProtocolo(4,1,3,12,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ENCENDER BOMBA DE VACÍO DE CIERRE DE MOLDE Y ASEGURAR QUE LA CAMARA DE CIERRE ESTÉ COMPLETAMENTE SELLADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">13</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_13_1" onblur="insertProtocolo(4,1,3,13,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">ENCENDER BOMBA  DE VACÍO INTERIOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">14</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_14_1" onblur="insertProtocolo(4,1,3,14,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">DEJAR AMBAS BOMBAS DE VACÍO FUNCIONANDO POR 5 [min], CONFIRMAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">15</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_15_1" onblur="insertProtocolo(4,1,3,15,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DEL PROCESO DE INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PREPARAR 3200 [g] DE RESINA EN UN ENVASE DE PLÁSTICO</label>
                         <div class="input-group">
                              <span class="input-group-addon">16</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_16_1" onblur="insertProtocolo(4,1,3,16,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">AGREGAR  ______ [ml] DE CATALIZADOR CORRESPONDIENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">17</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_17_1" onblur="insertProtocolo(4,1,3,17,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">MEZCLAR RESINA Y CATALIZADOR HASTA OBTENER UNA MEZCLA HOMOGÉNEA</label>
                         <div class="input-group">
                              <span class="input-group-addon">18</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_18_1" onblur="insertProtocolo(4,1,3,18,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">VERIFICAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">19</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_19_1" onblur="insertProtocolo(4,1,3,19,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO DEL VACÍO DE CIERRE DE MOLDE: -0,7 A -0,8 [bar]; VACUÓMETRO DEL VACÍO DE CIERRE INTERIOR: -0,5 [bar]">REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO...</label>
                         <div class="input-group">
                              <span class="input-group-addon">20</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_20_1" onblur="insertProtocolo(4,1,3,20,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD DEBE APROBAR LA PRUEBA DE VACÍO, MEDIANTE REALIZACIÓN DE PRUEBA DE VACÍO SEGÚN INSTRUCTIVO</label>
                         <div class="input-group">
                              <span class="input-group-addon">21</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_21_1" onblur="insertProtocolo(4,1,3,21,4)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">INICIAR INYECCIÓN UTILIZANDO SÓLO EL VACÍO INTERIOR DEL MOLDE</label>
                         <div class="input-group">
                              <span class="input-group-addon">22</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_22_1" onblur="insertProtocolo(4,1,3,22,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">TERMINADA LA INYECCIÓN, CERRAR LAS MANGUERAS DANDO DOS VUELTAS Y CERRANDO CON CINTA ADHESIVA DE PAPEL</label>
                         <div class="input-group">
                              <span class="input-group-addon">23</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_23_1" onblur="insertProtocolo(4,1,3,23,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ESPERAR GELADO DE LA RESINA CHEQUEANDO QUE VUELVA A 40°C DESPUÉS DEL PEAK EXOTÉRMICO</label>
                         <div class="input-group">
                              <span class="input-group-addon">24</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_24_1" onblur="insertProtocolo(4,1,24,4)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">DESCONECTAR MANGUERAS Y RETIRAR EL MOLDE MACHO</label>
                         <div class="input-group">
                              <span class="input-group-addon">25</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_25_1" onblur="insertProtocolo(4,1,3,25,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">DESMOLDAR LA PIEZA DESDE LOS BORDES CON AYUDA DE CUÑAS DE TEFLON</label>
                         <div class="input-group">
                              <span class="input-group-addon">26</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_26_1" onblur="insertProtocolo(4,1,3,26,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">INGRESAR MARCA DE IDENTFICACIÓN DE PIEZA: N° PIEZA INYECTADA Y NOMBRE PROYECTO</label>
                         <div class="input-group">
                              <span class="input-group-addon">27</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_27_1" onblur="insertProtocolo(4,1,3,27,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN SEGÚN CORRESPONDA: VERDE: APROBADO; AMARILLO: EN OBSERVACIÓN; ROJO: RECHAZADO.">GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN...</label>
                         <div class="input-group">
                              <span class="input-group-addon">28</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_28_1" onblur="insertProtocolo(4,1,3,28,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">TRASLADAR LA PIEZA JUNTO AL PRESENTE PROTOCOLO</label>
                         <div class="input-group">
                              <span class="input-group-addon">29</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_29_1" onblur="insertProtocolo(4,1,3,29,4)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">LIMPIEZA MOLDE HEMBRA Y MACHO CON DESMOLDANTE, PAÑO MOLETON LIMPIO, LAINA ACRILICA Y TALADRO EN PUNTOS DE INYECCION Y SUCCION</label>
                         <div class="input-group">
                              <span class="input-group-addon">30</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_30_1" onblur="insertProtocolo(4,1,3,30,4)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: grey; color: #FFF">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN FINAL GENERAL
                         </div>
                         <br>
                    </div>

                   <form action="" id="infogral_final_inyeccion_4">
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TÉRMINO INYECCIÓN</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_termino_inyeccion_final" id="hora_termino_inyeccion_final_4">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE DESMOLDE PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_desmolde_pieza_final" id="hora_desmolde_pieza_final_4">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">T° DESMOLDE PIEZA</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_desmolde_pieza_final" id="t_desmolde_pieza_final_4">
                                   <span class="input-group-addon">ºC</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE LLENADO PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_llenado_pieza_final" id="hora_llenado_pieza_final_4">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" onclick="insertProtocolo(4, 1, 4)">Guardar</button>
                              </div>
                         </div>
                    </form>
     
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box box-warning">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO CORTE Y LIJADO - TIPO 4</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              SECCIÓN CORTE Y LIJADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="cyl_infogral_4_2"> <!-- ID se construye (en este caso) nombre_tipoProtocolo_idProtocolo -->
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_inicio" id="fecha_inicio_4_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_termino" id="fecha_termino_4_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_entrada" id="hora_entrada_4_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_salida" id="hora_salida_4_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="n_tarro_gel_coat" id="n_tarro_gel_coat_4_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">CATALIZADOR</label>
                              <div class="row">
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="M50" name="catalizador_1" id="catalizador1_4_cyl_2">
                                   </div>
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="K12" name="catalizador_2" id="catalizador2_4_cyl_2">
                                   </div>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO RESINA</label>
                              <input type="text" class="form-control clean" name="n_tarro_resina" id="n_tarro_resina_4_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">% CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_4_cyl_2">
                          </div>
                         
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_inicio" id="hora_inicio_4_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_termino" id="hora_termino_4_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="" onclick="insertProtocolo(4,2,5)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CON ESMERIL ANGULAR, DAR LAS DIMENSIONES GENERALES DESCRITAS EN EL PLANO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_1_2"  onblur="insertProtocolo(4, 2, 3, 1, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CON ESMERIL ANGULAR Y DISCO DE LIJA GRANO 24, LIJAR EL PERÍMETRO DE LA PIEZA DANDO PLANITUD EN LOS ÁNGULOS VERTICAL Y HORIZONTAL</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_2_2"  onblur="insertProtocolo(4, 2, 3, 2, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">SELLAR BORDES LIJADOS CON RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_3_2"  onblur="insertProtocolo(4, 2, 3, 3, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO: INSPECCIÓN VISUAL, CHEQUEO DE FALLAS
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br><br>
                         <div class="table-responsive">
                              <table class="table table-striped table-bordered table-condensed">
                                   <thead style="background: grey">
                                        <tr>
                                             <th colspan="2">FALLAS</th>
                                             <th>SI</th>
                                             <th>HORA INICIO</th>
                                             <th>HORA TERMINO</th>
                                             <th>TEMPERATURA</th>
                                             <th>% HUMEDAD</th>
                                             <th style="background: #f39c12 !important">CHEQUEO</th>
                                        </tr>
                                   </thead>
                         
                                   <tbody>
                                        <tr>
                                             <td><b>1</b></td>
                                             <td>ARRUGAS DE FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="1" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_4_horainicio_1_2" onblur="insertProtocolo(4,2,6,1,'',2)" disabled> <!-- ID: falla_tipoprot_nombre_nrofalla_idprotoc -->
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_4_horatermino_1_2" onblur="insertProtocolo(4,2,6,1,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" id="falla_4_temp_1_2" onblur="insertProtocolo(4,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_4_porchumedad_1_2" onblur="insertProtocolo(4,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_4_chequeo_1_2" onblur="insertProtocolo(4,2,6,1,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>2</b></td>
                                             <td>SIN DUREZA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="2" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_4_horainicio_2_2" onblur="insertProtocolo(4,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_4_horatermino_2_2" onblur="insertProtocolo(4,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,2,'',2)" id="falla_4_temp_2_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,2,'',2)" id="falla_4_porchumedad_2_2" disabled></td>
                                             <td><input type="text" class="clean" id="falla_4_chequeo_2_2" onblur="insertProtocolo(4,2,6,2,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>3</b></td>
                                             <td>FIBRA SIN HUMECTAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="3" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_4_horainicio_3_2" onblur="insertProtocolo(4,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_4_horatermino_3_2" onblur="insertProtocolo(4,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,3,'',2)" id="falla_4_temp_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,3,'',2)" id="falla_4_porchumedad_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,3,'',1)" id="falla_4_chequeo_3_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>4</b></td>
                                             <td>FIBRA SIN GELAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="4" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_4_horainicio_4_2" onblur="insertProtocolo(4,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_4_horatermino_4_2" onblur="insertProtocolo(4,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,4,'',2)" id="falla_4_temp_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,4,'',2)" id="falla_4_porchumedad_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,4,'',1)" id="falla_4_chequeo_4_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>5</b></td>
                                             <td>FIBRA EXPUESTA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="5" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,5,'',2)" name="" id="falla_4_horainicio_5_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,5,'',2)" name="" id="falla_4_horatermino_5_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,5,'',2)" id="falla_4_temp_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,5,'',2)" id="falla_4_porchumedad_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,5,'',1)" id="falla_4_chequeo_5_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>6</b></td>
                                             <td>BORDES SIN FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="6" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,6,'',2)" name="" id="falla_4_horainicio_6_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,6,'',2)" name="" id="falla_4_horatermino_6_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,6,'',2)" id="falla_4_temp_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,6,'',2)" id="falla_4_porchumedad_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,6,'',1)" id="falla_4_chequeo_6_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>7</b></td>
                                             <td>POROSIDAD</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="7" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,7,'',2)" name="" id="falla_4_horainicio_7_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,7,'',2)" name="" id="falla_4_horatermino_7_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,7,'',2)" id="falla_4_temp_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,7,'',2)" id="falla_4_porchumedad_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,7,'',1)" id="falla_4_chequeo_7_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>8</b></td>
                                             <td>BURBUJAS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="8" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,8,'',2)" name="" id="falla_4_horainicio_8_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,8,'',2)" name="" id="falla_4_horatermino_8_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,8,'',2)" id="falla_4_temp_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,8,'',2)" id="falla_4_porchumedad_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,8,'',1)" id="falla_4_chequeo_8_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>9</b></td>
                                             <td>OTROS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="9" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,9,'',2)" name="" id="falla_4_horainicio_9_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(4,2,6,9,'',2)" name="" id="falla_4_horatermino_9_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,9,'',2)" id="falla_4_temp_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,9,'',2)" id="falla_4_porchumedad_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(4,2,6,9,'',1)" id="falla_4_chequeo_9_2" disabled></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-3">
                         <label for="">REPARAR FALLA SEGÚN SEA EL CASO EN FUNCIÓN DE PROCEDIMIENTO DE REPARACIONES</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_4_2"  onblur="insertProtocolo(4, 2, 3, 4, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">LIJAR REPARACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_5_2"  onblur="insertProtocolo(4, 2, 3, 5, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">SELLAR REPARACIÓN CON RESINA CATALIZADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_6_2"  onblur="insertProtocolo(4, 2, 3, 6, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_7_2"  onblur="insertProtocolo(4, 2, 3, 7, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_4_2" rows="5" class="form-control clean" onblur="insertProtocolo(4,2,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box" style="border-top-color: purple !important">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO PERFORADO - TIPO 4</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              SECCIÓN PERFOMADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="perforado_infogral_4_3">
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_inicio" id="fecha_inicio_perf_4_3" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_termino" id="fecha_termino_perf_4_3" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" name="hora_entrada" id="hora_entrada_perf_4_3" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" name="hora_salida" id="hora_salida_perf_4_3" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button class="btn btn-success" type="button" onclick="insertProtocolo(4,3,8)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: purple; color: #FFF">
                              
                              PERFORADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR LA PIEZA EN LA MESA DE TRABAJO</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_1_3" onblur="insertProtocolo(4,3,3,1,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PONER CILINDRO DE LA PLANTILLA DE PERFORACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_2_3" onblur="insertProtocolo(4,3,3,2,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PERFORAR CON SIERRA DE COPA 27 [mm] ARRIBA DEL CONO</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_3_3" onblur="insertProtocolo(4,3,3,3,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">SELLAR PERFORACIONES EFECTUADAS CON RESINA CATALIZADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_5_3" onblur="insertProtocolo(4,3,3,5,1)">
                         </div>
                    </div>

                    
                    <div class="col-xs-12 col-lg-12">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_4_5_3" onblur="insertProtocolo(4,3,3,5,1)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_4_3" rows="5" class="form-control clean" onblur="insertProtocolo(4,3,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>
</div>

<div id="tipo_protocolo_5" class="select_protocolo" style="display: none;" data-tipoProtocolo="5">
     <div class="box box-primary">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO DE INYECCIÓN - TIPO 5</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <label for="">PESO FIBRA CF700/D250/700</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_1_1" onblur="insertProtocolo(5,1,3,1,1)">
                              <span class="input-group-addon">[KG]</span>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <fieldset>
                              <legend>Información General</legend>

                              <form action="" id="infogral_inyeccion_5">
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMB. DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_amb_seca_pieza" id="t_amb_seca_pieza_5">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%CATALIZADOR  / CATALIZADOR</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_catalizador_inyeccion" id="porcent_catalizador_inyeccion_5">
                                             <span class="input-group-addon">%</span> 
                                   
                                             <input type="text" class="form-control" name="catalizador_inyeccion" id="catalizador_inyeccion_5">
                                             <span class="input-group-addon">Ejm: K12</span> 
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">%HR DONDE SECA LA PIEZA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_seca_pieza" id="porcent_hr_seca_pieza_5">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° MOLDE ANTES DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_molde_antes_inyeccion" id="t_molde_antes_inyeccion_5">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">N°TARRO RESINA INYECCIÓN</label>
                                        <input type="text" class="form-control clean" name="n_tarro_resina_inyeccion" id="n_tarro_resina_inyeccion_5">
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-4">
                                        <label for="">T° AMBIENTE SALA INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_ambiente_sala_inyeccion" id="t_ambiente_sala_inyeccion_5">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">T° RESINA INICIO INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="t_resina_inicio_inyeccion" id="t_resina_inicio_inyeccion_5">
                                             <span class="input-group-addon">ºC</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <div class="bootstrap-timepicker">
                                             <label for="">HORA INICIO INYECCION</label>
                                             <input type="text" class="form-control timepicker clean" name="hora_inicio_inyeccion" id="hora_inicio_inyeccion_5">
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">LITROS DE RESINA INYECTADA</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="lts_resina_inyectada" id="lts_resina_inyectada_5">
                                             <span class="input-group-addon">[LT]</span>
                                        </div>
                                   </div>
                                   
                                   <div class="col-xs-12 col-lg-3">
                                        <label for="">%HR SALA DE INYECCIÓN</label>
                                        <div class="input-group">
                                             <input type="text" class="form-control clean" name="porcent_hr_sala_inyeccion" id="porcent_hr_sala_inyeccion_5">
                                             <span class="input-group-addon">%</span>
                                        </div>
                                   </div>
                              </form>
                         </fieldset>
                         <br>
                         <div class="pull-right">
                              <button type="button" class="btn btn-success" id="guardar_iny_inyeccion" onclick="insertProtocolo(5,1, 2)">Guardar</button>
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DE PROCESO PREVIO INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">UBICAR FIBRA DE VIDRIO, FIBRA DE REFUERZO Y AJUSTARLA MANUALMENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_2_1" onblur="insertProtocolo(5,1,3,2,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">RECORTAR LOS EXCESOS DE FIBRA EN LOS BORDES DEJANDO EL LARGO DE LA FIBRA HASTA DONDE TERMINA EL PINTADO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_3_1" onblur="insertProtocolo(5,1,3,3,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO. QUITAR LOS FILAMENTOS DE FIBRA DE VIDRIO EN EL PERÍMETRO DE MOLDE HEMBRA">LIMPIAR LAS GOMAS DE SELLO DEL MOLDE MACHO CON UN PAÑO MOLETÓN LIMPIO Y SECO...</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_4_1" onblur="insertProtocolo(5,1,3,4,2)">
                         </div>
                    </div>

                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD APRUEBA LARGO DE LA FIBRA</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_5_1" onblur="insertProtocolo(5,1,3,5,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">CERRAR EL MOLDE LENTAMENTE EVITANDO QUE LA FIBRA SE MUEVA</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_6_1" onblur="insertProtocolo(5,1,3,6,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR 15 [cm] DE MANGUERA MALLA FLEX DE 12 [cm] EN PUNTOS DE CIERRE, DE ENTRADA Y SALIDA DE RESINA; SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_7_1" onblur="insertProtocolo(5,1,3,7,2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">POSICIONAR MANGUERA DE INYECCIÓN DENTRO DE MANGUERA MALLA FLEX, SELLAR CON TAC-TAPE</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_8_1" onblur="insertProtocolo(5,1,3,8,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE TRAMPA DE VACÍO NO TENGA EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA, ES POSIBLE LA UTILIZACIÓN DE LA TRAMPA REPOSICIONANDO LA MANGUERA A LA ALTURA JUSTA">REVISAR QUE TRAMPA DE VACÍO NO TENGA EXCESO DE RESINA INTRODUCIENDO 10 [cm] DE MANGUERA, SI NO TOPA,...</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_9_1" onblur="insertProtocolo(5,1,3,9,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ENCENDER BOMBA DE VACÍO DE CIERRE DE MOLDE Y ASEGURAR QUE LA CAMARA DE CIERRE ESTÉ COMPLETAMENTE SELLADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">10</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_10_1" onblur="insertProtocolo(5,1,3,10,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">ENCENDER BOMBA  DE VACÍO INTERIOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">11</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_11_1" onblur="insertProtocolo(5,1,3,11,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-6">
                         <label for="">DEJAR AMBAS BOMBAS DE VACÍO FUNCIONANDO POR 5 [min], CONFIRMAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">12</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_12_1" onblur="insertProtocolo(5,1,3,12,2)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center bg-success">
                              
                              SECCIÓN INYECCIÓN: INFORMACIÓN DEL PROCESO DE INYECCIÓN
                         </div>
                         <br>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">PREPARAR 1500 [g] DE RESINA EN UN ENVASE DE PLÁSTICO</label>
                         <div class="input-group">
                              <span class="input-group-addon">13</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_13_1" onblur="insertProtocolo(5,1,3,13,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">AGREGAR  ______ [ml] DE CATALIZADOR CORRESPONDIENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">14</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_14_1" onblur="insertProtocolo(5,1,3,14,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">MEZCLAR RESINA Y CATALIZADOR HASTA OBTENER UNA MEZCLA HOMOGÉNEA</label>
                         <div class="input-group">
                              <span class="input-group-addon">15</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_15_1" onblur="insertProtocolo(5,1,3,15,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">VERIFICAR QUE TODO EL AIRE HAYA SALIDO</label>
                         <div class="input-group">
                              <span class="input-group-addon">16</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_16_1" onblur="insertProtocolo(5,1,3,16,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO DEL VACÍO DE CIERRE DE MOLDE: -0,7 A -0,8 [bar]; VACUÓMETRO DEL VACÍO DE CIERRE INTERIOR: -0,5 [bar]">REVISAR QUE LOS VACUÓMETROS SE ENCUENTREN ENTRE LOS SIGUIENTES RANGOS: VACUÓMETRO...</label>
                         <div class="input-group">
                              <span class="input-group-addon">17</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_17_1" onblur="insertProtocolo(5,1,3,17,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">GARANTÍA DE CALIDAD DEBE APROBAR LA PRUEBA DE VACÍO, MEDIANTE REALIZACIÓN DE PRUEBA DE VACÍO SEGÚN INSTRUCTIVO</label>
                         <div class="input-group">
                              <span class="input-group-addon">18</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_18_1" onblur="insertProtocolo(5,1,3,18,3)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">INICIAR INYECCIÓN UTILIZANDO SÓLO EL VACÍO INTERIOR DEL MOLDE</label>
                         <div class="input-group">
                              <span class="input-group-addon">19</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_19_1" onblur="insertProtocolo(5,1,3,19,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">TERMINADA LA INYECCIÓN, CERRAR LAS MANGUERAS DANDO DOS VUELTAS Y CERRANDO CON CINTA ADHESIVA DE PAPEL</label>
                         <div class="input-group">
                              <span class="input-group-addon">20</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_20_1" onblur="insertProtocolo(5,1,3,20,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">ESPERAR GELADO DE LA RESINA CHEQUEANDO QUE VUELVA A 40°C DESPUÉS DEL PEAK EXOTÉRMICO</label>
                         <div class="input-group">
                              <span class="input-group-addon">21</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_21_1" onblur="insertProtocolo(5,1,3,21,3)">
                         </div>
                    </div>
     
                    <div class="clearfix"></div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">DESCONECTAR MANGUERAS Y RETIRAR EL MOLDE MACHO</label>
                         <div class="input-group">
                              <span class="input-group-addon">22</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_22_1" onblur="insertProtocolo(5,1,3,22,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">DESMOLDAR LA PIEZA DESDE LOS BORDES CON AYUDA DE CUÑAS DE TEFLON</label>
                         <div class="input-group">
                              <span class="input-group-addon">23</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_23_1" onblur="insertProtocolo(5,1,3,23,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">INGRESAR MARCA DE IDENTFICACIÓN DE PIEZA: N° PIEZA INYECTADA Y NOMBRE PROYECTO</label>
                         <div class="input-group">
                              <span class="input-group-addon">24</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_24_1" onblur="insertProtocolo(5,1,3,24,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="" title="GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN SEGÚN CORRESPONDA: VERDE: APROBADO; AMARILLO: EN OBSERVACIÓN; ROJO: RECHAZADO.">GARANTÍA DE CALIDAD DEBE DAR SEGUIMEINTO A LA PIEZA PEGANDO TICKET DE COLOR CON LA INFORMACIÓN...</label>
                         <div class="input-group">
                              <span class="input-group-addon">25</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_25_1" onblur="insertProtocolo(5,1,3,25,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">TRASLADAR LA PIEZA JUNTO AL PRESENTE PROTOCOLO</label>
                         <div class="input-group">
                              <span class="input-group-addon">26</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_26_1" onblur="insertProtocolo(5,1,3,26,3)">
                         </div>
                    </div>
     
                    <div class="col-xs-12 col-lg-4">
                         <label for="">LIMPIEZA MOLDE HEMBRA Y MACHO CON DESMOLDANTE, PAÑO MOLETON LIMPIO, LAINA ACRILICA Y TALADRO EN PUNTOS DE INYECCION Y SUCCION</label>
                         <div class="input-group">
                              <span class="input-group-addon">27</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_27_1" onblur="insertProtocolo(5,1,3,27,3)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: grey; color: #FFF">
                              
                              SECCIÓN INYECCIÓN INFORMACIÓN FINAL GENERAL
                         </div>
                         <br>
                    </div>

                    <form action="" id="infogral_final_inyeccion_5">
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TÉRMINO INYECCIÓN</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_termino_inyeccion_final" id="hora_termino_inyeccion_final_5">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE DESMOLDE PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_desmolde_pieza_final" id="hora_desmolde_pieza_final_5">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">T° DESMOLDE PIEZA</label>
                              <div class="input-group">
                                   <input type="text" class="form-control clean" name="t_desmolde_pieza_final" id="t_desmolde_pieza_final_5">
                                   <span class="input-group-addon">ºC</span>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA DE LLENADO PIEZA</label>
                                   <input type="text" class="form-control timepicker clean" name="hora_llenado_pieza_final" id="hora_llenado_pieza_final_5">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" onclick="insertProtocolo(5, 1, 4)">Guardar</button>
                              </div>
                         </div>
                    </form>
     
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box box-warning">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO CORTE Y LIJADO - TIPO 5</h3>
     
         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                   title="Collapse">
             <i class="fa fa-minus"></i></button>
         </div>
       </div>
          <div class="box-body">
              <div class="row">

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              SECCIÓN CORTE Y LIJADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>
     
                    <form action="" id="cyl_infogral_5_2"> <!-- ID se construye (en este caso) nombre_tipoProtocolo_idProtocolo -->
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA INICIO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_inicio" id="fecha_inicio_5_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control clean pull- right datepicker" name="fecha_termino" id="fecha_termino_5_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_entrada" id="hora_entrada_5_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_salida" id="hora_salida_5_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO GEL COAT</label>
                              <input type="text" class="form-control clean" name="n_tarro_gel_coat" id="n_tarro_gel_coat_5_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">CATALIZADOR</label>
                              <div class="row">
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="M50" name="catalizador_1" id="catalizador1_5_cyl_2">
                                   </div>
                                   <div class="col-xs-6 col-lg-6">
                                        <input type="text" class="form-control clean"  placeholder="K12" name="catalizador_2" id="catalizador2_5_cyl_2">
                                   </div>
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N°TARRO RESINA</label>
                              <input type="text" class="form-control clean" name="n_tarro_resina" id="n_tarro_resina_5_cyl_2">
                          </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">% CATALIZADOR</label>
                              <input type="text" class="form-control clean" name="porcent_catalizador" id="porcent_catalizador_5_cyl_2">
                          </div>
                         
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_inicio" id="hora_inicio_5_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" class="form-control clean timepicker" name="hora_termino" id="hora_termino_5_cyl_2">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button type="button" class="btn btn-success" id="" onclick="insertProtocolo(5,2,5)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CON ESMERIL ANGULAR, DAR LAS DIMENSIONES GENERALES DESCRITAS EN EL PLANO DE LA PIEZA</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_1_2"  onblur="insertProtocolo(5, 2, 3, 1, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">CON ESMERIL ANGULAR Y DISCO DE LIJA GRANO 24, LIJAR EL PERÍMETRO DE LA PIEZA DANDO PLANITUD EN LOS ÁNGULOS VERTICAL Y HORIZONTAL</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_2_2"  onblur="insertProtocolo(5, 2, 3, 2, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-4">
                         <label for="">SELLAR BORDES LIJADOS CON RESINA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_3_2"  onblur="insertProtocolo(5, 2, 3, 3, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO: INSPECCIÓN VISUAL, CHEQUEO DE FALLAS
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br><br>
                         <div class="table-responsive">
                              <table class="table table-striped table-bordered table-condensed">
                                   <thead style="background: grey">
                                        <tr>
                                             <th colspan="2">FALLAS</th>
                                             <th>SI</th>
                                             <th>HORA INICIO</th>
                                             <th>HORA TERMINO</th>
                                             <th>TEMPERATURA</th>
                                             <th>% HUMEDAD</th>
                                             <th style="background: #f39c12 !important">CHEQUEO</th>
                                        </tr>
                                   </thead>
                         
                                   <tbody>
                                        <tr>
                                             <td><b>1</b></td>
                                             <td>ARRUGAS DE FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="1" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_5_horainicio_1_2" onblur="insertProtocolo(5,2,6,1,'',2)" disabled> <!-- ID: falla_tipoprot_nombre_nrofalla_idprotoc -->
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_5_horatermino_1_2" onblur="insertProtocolo(5,2,6,1,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" id="falla_5_temp_1_2" onblur="insertProtocolo(5,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_5_porchumedad_1_2" onblur="insertProtocolo(5,2,6,1,'',2)" disabled></td>
                                             <td><input type="text" class="clean" id="falla_5_chequeo_1_2" onblur="insertProtocolo(5,2,6,1,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>2</b></td>
                                             <td>SIN DUREZA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="2" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_5_horainicio_2_2" onblur="insertProtocolo(5,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_5_horatermino_2_2" onblur="insertProtocolo(5,2,6,2,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,2,'',2)" id="falla_5_temp_2_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,2,'',2)" id="falla_5_porchumedad_2_2" disabled></td>
                                             <td><input type="text" class="clean" id="falla_5_chequeo_2_2" onblur="insertProtocolo(5,2,6,2,'',1)" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>3</b></td>
                                             <td>FIBRA SIN HUMECTAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="3" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_5_horainicio_3_2" onblur="insertProtocolo(5,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_5_horatermino_3_2" onblur="insertProtocolo(5,2,6,3,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,3,'',2)" id="falla_5_temp_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,3,'',2)" id="falla_5_porchumedad_3_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,3,'',1)" id="falla_5_chequeo_3_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>4</b></td>
                                             <td>FIBRA SIN GELAR</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="4" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_5_horainicio_4_2" onblur="insertProtocolo(5,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" name="" id="falla_5_horatermino_4_2" onblur="insertProtocolo(5,2,6,4,'',2)" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,4,'',2)" id="falla_5_temp_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,4,'',2)" id="falla_5_porchumedad_4_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,4,'',1)" id="falla_5_chequeo_4_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>5</b></td>
                                             <td>FIBRA EXPUESTA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="5" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,5,'',2)" name="" id="falla_5_horainicio_5_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,5,'',2)" name="" id="falla_5_horatermino_5_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,5,'',2)" id="falla_5_temp_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,5,'',2)" id="falla_5_porchumedad_5_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,5,'',1)" id="falla_5_chequeo_5_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>6</b></td>
                                             <td>BORDES SIN FIBRA</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="6" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,6,'',2)" name="" id="falla_5_horainicio_6_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,6,'',2)" name="" id="falla_5_horatermino_6_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,6,'',2)" id="falla_5_temp_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,6,'',2)" id="falla_5_porchumedad_6_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,6,'',1)" id="falla_5_chequeo_6_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>7</b></td>
                                             <td>POROSIDAD</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="7" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,7,'',2)" name="" id="falla_5_horainicio_7_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,7,'',2)" name="" id="falla_5_horatermino_7_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,7,'',2)" id="falla_5_temp_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,7,'',2)" id="falla_5_porchumedad_7_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,7,'',1)" id="falla_5_chequeo_7_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>8</b></td>
                                             <td>BURBUJAS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="8" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,8,'',2)" name="" id="falla_5_horainicio_8_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,8,'',2)" name="" id="falla_5_horatermino_8_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,8,'',2)" id="falla_5_temp_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,8,'',2)" id="falla_5_porchumedad_8_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,8,'',1)" id="falla_5_chequeo_8_2" disabled></td>
                                        </tr>
                                        <tr>
                                             <td><b>9</b></td>
                                             <td>OTROS</td>
                                             <td><input type="checkbox" class="asig_falla" data-falla="9" data-protocolo="2"></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,9,'',2)" name="" id="falla_5_horainicio_9_2" disabled>
                                        </div></td>
                                             <td><div class="bootstrap-timepicker">
                                             <input type="text" class="form-control timepicker clean" onblur="insertProtocolo(5,2,6,9,'',2)" name="" id="falla_5_horatermino_9_2" disabled>
                                        </div></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,9,'',2)" id="falla_5_temp_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,9,'',2)" id="falla_5_porchumedad_9_2" disabled></td>
                                             <td><input type="text" class="clean" onblur="insertProtocolo(5,2,6,9,'',1)" id="falla_5_chequeo_9_2" disabled></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #f39c12">
                              
                              CORTE Y LIJADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-3">
                         <label for="">REPARAR FALLA SEGÚN SEA EL CASO EN FUNCIÓN DE PROCEDIMIENTO DE REPARACIONES</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_4_2"  onblur="insertProtocolo(5, 2, 3, 4, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">LIJAR REPARACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_5_2"  onblur="insertProtocolo(5, 2, 3, 5, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">SELLAR REPARACIÓN CON RESINA CATALIZADA</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_6_2"  onblur="insertProtocolo(5, 2, 3, 6, 2)">
                         </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                         <label for="">APROBACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" id="proceso_5_7_2"  onblur="insertProtocolo(5, 2, 3, 7, 2)">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_5_2" rows="5" class="form-control clean" onblur="insertProtocolo(5,2,7)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>
</div>