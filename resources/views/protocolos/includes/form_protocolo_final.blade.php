<div class="alert alert-info select_protocolo" id="tipo_protocolo_0">
     <p><b>Selecciona una pieza para llenar tu protocolo final</b></p>
</div>

<div id="tipo_protocolo_1" class="select_protocolo" style="display: none;" data-tipoProtocolo="1">
     <div class="box" style="border-top-color: #EBC028 !important">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO PEGADO</h3>

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
                         <div class="text-center" style="background: #EBC028; color: #FFF">
                              
                              SECCIÓN PEGADO: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>

                    <form action="" id="pegado_infgral_8">
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA ENTRADA</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_entrada" id="fecha_entrada_peg_8" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA SALIDA</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_salida" id="fecha_salida_peg_8" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA ENTRADA</label>
                                   <input type="text" name="hora_entrada" id="hora_entrada_peg_8" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA SALIDA</label>
                                   <input type="text" name="hora_salida" id="hora_salida_peg_8" class="form-control clean timepicker">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: grey; color: #FFF">
                                   
                                   Nº PIEZAS
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-4">
                              <label for="">EME</label>
                              <select name="pieza_eme" id="pieza_eme_8" class="form-control clean nro_pieza">
                                   <option value="0">Selecciona</option>
                              </select>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">BASE</label>
                              <select name="pieza_base" id="pieza_base_8" class="form-control clean nro_pieza">
                                   <option value="0">Selecciona</option>
                              </select>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <label for="pieza_lin_agua">LINEA DE AGUA</label>
                                   <select name="pieza_lin_agua" id="pieza_lin_agua_8" class="form-control clean nro_pieza">
                                        <option value="0">Selecciona</option>
                                   </select>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <label for="">TAPA</label>
                                   <select name="pieza_tapa" id="pieza_tapa_8" class="form-control clean nro_pieza">
                                        <option value="0">Selecciona</option>
                                   </select>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <label for="">TAPAS INT</label>
                                   <select name="pieza_tapas_int" id="pieza_tapas_int_8" class="form-control clean nro_pieza">
                                        <option value="0">Selecciona</option>
                                   </select>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                                   <label for="">TAPAS CIERRE</label>
                                   <select name="pieza_tapas_cierre" id="pieza_tapas_cierre_8" class="form-control clean nro_pieza">
                                        <option value="0">Selecciona</option>
                                   </select>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: grey; color: #FFF">
                                   
                                   PEGADO LINEA DE AGUA
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" name="hora_inicio_linagua" id="hora_inicio_peg_linagua_8" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" name="hora_termino_linagua" id="hora_termino_peg_linagua_8" class="form-control clean timepicker">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: grey; color: #FFF">
                                   
                                   PEGADO EME
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" name="hora_inicio_eme" id="hora_inicio_eme_8" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" name="hora_termino_eme" id="hora_termino_eme_8" class="form-control clean timepicker">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: grey; color: #FFF">
                                   
                                   PEGADO TAPA
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INICIO</label>
                                   <input type="text" name="hora_inicio_tapa" id="hora_inicio_tapa_8" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" name="hora_termino_tapa" id="hora_termino_tapa_8" class="form-control clean timepicker">
                              </div>
                         </div>


                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button class="btn btn-success" type="button" onclick="insertProtocoloFinal(8,1)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #EBC028; color: #FFF">
                              
                              PEGADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">LIMPIAR CON HUAIPE BLANCO Y ACETONA TODAS LAS SUPERFICIES A PEGAR DE LA BASE</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,1,1)" id="proceso_1_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">LIMPIAR CON HUAIPE Y ACETONA LAS SUPERFICIES A PEGAR DE LAS LINEAS DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,2,1)" id="proceso_2_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">APLICAR DOS CORDONES DE MMA. A LO LARGO DE LA SUPERFICIE DE PEGADO DE LA LINEA DE AGUA EN LA BASE. REPETIR PARA LA OTRA LINEA DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,3,1)" id="proceso_3_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">POSICIONAR AMBAS LINEAS DE AGUA Y PRESIONAR CUIDADOSAMENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,4,1)" id="proceso_4_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR PLETINAS METÁLICAS SOBRE LINEAS Y ESPERAR A QUE CURE EL MMA.</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,5,1)" id="proceso_5_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">CON EXCEDENTE DE MMA SELLAR EL PERÍMETRO DE LAS LINEAS DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,6,1)" id="proceso_6_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PEGAR TAPAS INTERIORES DEL LADO DEL CONO DE AIRE A 390 [mm] DEL BORDE DE LA BASE Y SELLAR CON MMA.</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,7,1)" id="proceso_7_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PEGAR TAPAS INTERIORES DEL LADO DEL CONO DE AGUA A 240 [mm] DEL BORDE DE LA BASE Y SELLAR CON MMA.</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,8,1)" id="proceso_8_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR TERMINAL DEL PIPING EN LINEAS DE AGUA Y SELLAR CON MMA. ESPERAR A QUE CURE</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,9,1)" id="proceso_9_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PONER PIPING A TRAVÉS DE TAPA INTERIOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">10</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,10,1)" id="proceso_10_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR PRUEBA DE AGUA SEGÚN LOS SIGUIENTES PARÁMETROS: PRESIÓN DE 4 [bar] CON CAUDAL DE 150 [l/min]</label>
                         <div class="input-group">
                              <span class="input-group-addon">11</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,11,1)" id="proceso_11_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">EN CASO DE FUGA, IDENTIFICAR Y VOLVER A SELLAR CON MMA.</label>
                         <div class="input-group">
                              <span class="input-group-addon">12</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,12,1)" id="proceso_12_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">TRASLADAR PIEZA A MESA DE PEGADO DE EME Y CERRAR SISTEMAS DE FIJACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">13</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,13,1)" id="proceso_13_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">LIMPIAR CON HUAIPE Y ACETONA ZONAS DE PEGADO</label>
                         <div class="input-group">
                              <span class="input-group-addon">14</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,14,1)" id="proceso_14_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">EN PIEZA BASE APLICAR DOS CORDONES DE MMA EN AMBAS ZONAS DE PEGADO EN PIEZA EME</label>
                         <div class="input-group">
                              <span class="input-group-addon">15</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,15,1)" id="proceso_15_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">POSICIONAR LA PIEZA EME SOBRE LA BASE CON MESA DE PEGADO, PONER TACOS AMARILLOS PARA CERRAR MESA Y CONECTAR LÍNEA DE AIRE HASTA ALCANZAR LOS 0,2 [bar] DE PRESIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">16</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,16,1)" id="proceso_16_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UNA VEZ CURADO EL ADHESIVO, TRASLADAR LA PIEZA A LA MESA DE PEGADO DE TAPA</label>
                         <div class="input-group">
                              <span class="input-group-addon">17</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,17,1)" id="proceso_17_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">LIMPIAR CON HUAIPE Y ACETONA ZONAS DE PEGADO EN PIEZA EME Y TAPA</label>
                         <div class="input-group">
                              <span class="input-group-addon">18</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,18,1)" id="proceso_18_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR PERFORACIÓN CON BROCA DE 3 [mm] EN LÍNEA DE AGUA A TRAVÉS DE LA PERFORACIÓN DE 27 [mm]</label>
                         <div class="input-group">
                              <span class="input-group-addon">19</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,19,1)" id="proceso_19_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">POSTURA SOPORTE DE PLACA EN SECTOR TAPA TRASERA</label>
                         <div class="input-group">
                              <span class="input-group-addon">20</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,20,1)" id="proceso_20_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REVISIÓN Y APROBACIÓN POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">21</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,21,1)" id="proceso_21_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">APLICAR DOS CORDONES DE MMA. EN LAS ZONAS DE PEGADO A LO LARGO DE LOS COSTADOS Y UN SOLO CORDÓN DE MMA. EN LOS EXTREMOS DE LA PIEZA EME</label>
                         <div class="input-group">
                              <span class="input-group-addon">22</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,22,1)" id="proceso_22_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">POSICIONAR LA TAPA SOBRE LA EME Y PRESIONAR PROCURANDO QUE LOS SOPORTES DE PLACA COINCIDAN CON LAS PERFORACIONES</label>
                         <div class="input-group">
                              <span class="input-group-addon">23</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,23,1)" id="proceso_23_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">CERRAR MESA Y CONECTAR LÍNEA DE AIRE HASTA ALCANZAR LOS 0,2 [bar] DE PRESIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">24</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,24,1)" id="proceso_24_5">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">ESPERAR QUE EL ADHESIVO TERMINE DE CURAR</label>
                         <div class="input-group">
                              <span class="input-group-addon">25</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,25,1)" id="proceso_25_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">APROBACIÓN Y LIBERACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">26</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,26,1)" id="proceso_26_4">
                         </div>
                    </div>

                    

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_4" rows="5" class="form-control clean" onblur="insertProtocoloFinal(4,3)"></textarea>
                    </div>
              </div>
          </div>
       <!-- /.box-body -->
       <div class="box-footer">
         Footer
       </div>
       <!-- /.box-footer-->
     </div>

     <div class="box" style="border-top-color: #5ECB09 !important">
       <div class="box-header with-border">
         <h3 class="box-title">PROTOCOLO TERMINACIONES</h3>

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
                         <div class="text-center" style="background: #5ecb09; color: #FFF">
                              
                              SECCIÓN TERMINACIONES: INFORMACIÓN GENERAL
                         </div>
                         <br>
                    </div>

                    <form action="" id="terminaciones_infgral_9">
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA INGRESO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_ingreso" id="fecha_ingreso_term_9" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <label for="">FECHA TERMINO</label>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="fecha_termino" id="fecha_termino_term_9" class="form-control clean pull-right datepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA INGRESO</label>
                                   <input type="text" name="hora_ingreso" id="hora_ingreso_term_9" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-6">
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA TERMINO</label>
                                   <input type="text" name="hora_termino" id="hora_termino_term_9" class="form-control clean timepicker">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-3">
                              <label for="">TARRO RESINA</label>
                              <input type="text" name="tarro_resina" id="tarro_resina_term_9" class="form-control clean">
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">TARRO GEL COAT</label>
                              <input type="text" name="tarro_gel_coat" id="tarro_gel_coat_term_9" class="form-control clean">
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="pieza_lin_agua">N° LOTE ADHESIVO MMA</label>
                              <input type="text" name="nro_lote_adhesivo" id="nro_lote_adhesivo_term_9" class="form-control clean">
                         </div>
                         <div class="col-xs-12 col-lg-3">
                              <label for="">N° LOTE ENDURECEDOR MMA</label>
                              <input type="text" name="nro_lote_endurecedor" id="nro_lote_endurecedor_term_9" class="form-control clean">
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: grey; color: #FFF">
                                   
                                   RESINA
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-4">
                              <label for="">% COBALTO</label>
                              <input type="text" name="porcent_cobalto_res" id="porcent_cobalto_res_term_9" class="form-control clean">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">% DMA</label>
                              <input type="text" name="porcent_dma_res" id="porcent_dma_res_term_9" class="form-control clean">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="pieza_lin_agua">% CATALIZADOR</label>
                              <input type="text" name="porcent_catalizador_res" id="porcent_catalizador_res_term_9" class="form-control clean">
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="text-center" style="background: grey; color: #FFF">
                                   
                                   GET COAT
                              </div>
                              <br>
                         </div>

                         <div class="col-xs-12 col-lg-4">
                              <label for="">% COBALTO</label>
                              <input type="text" name="porcent_cobalto_gel" id="porcent_cobalto_gel_term_9" class="form-control clean">
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <label for="">% DMA</label>
                              <input type="text" name="porcent_dma_gel" id="porcent_dma_gel_term_9" class="form-control clean">
                         </div>
                         <div class="col-xs-12 col-lg-4"">
                              <label for="pieza_lin_agua">% CATALIZADOR</label>
                              <input type="text" name="porcent_catalizador_gel" id="porcent_catalizador_gel_term_9" class="form-control clean">
                         </div>

                         <div class="col-xs-12 col-lg-4">
                              <br>
                              <label for="">N° LOTE SIKAFLEX UTILIZADO</label>
                              <input type="text" name="nro_lote_sika_util" id="nro_lote_sika_util_term_9" class="form-control clean">
                         </div>

                         <div class="col-xs-12 col-lg-4">
                              <br>
                              <div class="bootstrap-timepicker">
                                   <label for="">HORA APLICACIÓN SIKAPLEX</label>
                                   <input type="text" name="hora_aplic_sikaplex" id="hora_aplic_sikaplex_term_9" class="form-control clean timepicker">
                              </div>
                         </div>
                         <div class="col-xs-12 col-lg-4">
                              <br>
                              <div class="bootstrap-timepicker">
                                   <label for="">CURADO SIKAFLEX</label>
                                   <input type="text" name="curado_sikaplex" id="curado_sikaplex_term_9" class="form-control clean timepicker">
                              </div>
                         </div>

                         <div class="col-xs-12 col-lg-12">
                              <br>
                              <div class="pull-right">
                                   <button class="btn btn-success" type="button" onclick="insertProtocoloFinal(9,4)">
                                        Guardar
                                   </button>
                              </div>
                         </div>
                    </form>

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <div class="text-center" style="background: #5ecb09; color: #FFF">
                              
                              PEGADO
                         </div>
                         <br>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">LIMPIAR CON HUAIPE BLANCO Y ACETONA TODAS LAS SUPERFICIES A PEGAR DE LA BASE</label>
                         <div class="input-group">
                              <span class="input-group-addon">1</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,1,1)" id="proceso_1_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">LIMPIAR CON HUAIPE Y ACETONA LAS SUPERFICIES A PEGAR DE LAS LINEAS DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">2</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,2,1)" id="proceso_2_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">APLICAR DOS CORDONES DE MMA. A LO LARGO DE LA SUPERFICIE DE PEGADO DE LA LINEA DE AGUA EN LA BASE. REPETIR PARA LA OTRA LINEA DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">3</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,3,1)" id="proceso_3_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">POSICIONAR AMBAS LINEAS DE AGUA Y PRESIONAR CUIDADOSAMENTE</label>
                         <div class="input-group">
                              <span class="input-group-addon">4</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,4,1)" id="proceso_4_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR PLETINAS METÁLICAS SOBRE LINEAS Y ESPERAR A QUE CURE EL MMA.</label>
                         <div class="input-group">
                              <span class="input-group-addon">5</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,5,1)" id="proceso_5_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">CON EXCEDENTE DE MMA SELLAR EL PERÍMETRO DE LAS LINEAS DE AGUA</label>
                         <div class="input-group">
                              <span class="input-group-addon">6</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,6,1)" id="proceso_6_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PEGAR TAPAS INTERIORES DEL LADO DEL CONO DE AIRE A 390 [mm] DEL BORDE DE LA BASE Y SELLAR CON MMA.</label>
                         <div class="input-group">
                              <span class="input-group-addon">7</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,7,1)" id="proceso_7_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PEGAR TAPAS INTERIORES DEL LADO DEL CONO DE AGUA A 240 [mm] DEL BORDE DE LA BASE Y SELLAR CON MMA.</label>
                         <div class="input-group">
                              <span class="input-group-addon">8</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,8,1)" id="proceso_8_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UBICAR TERMINAL DEL PIPING EN LINEAS DE AGUA Y SELLAR CON MMA. ESPERAR A QUE CURE</label>
                         <div class="input-group">
                              <span class="input-group-addon">9</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,9,1)" id="proceso_9_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">PONER PIPING A TRAVÉS DE TAPA INTERIOR</label>
                         <div class="input-group">
                              <span class="input-group-addon">10</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,10,1)" id="proceso_10_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR PRUEBA DE AGUA SEGÚN LOS SIGUIENTES PARÁMETROS: PRESIÓN DE 4 [bar] CON CAUDAL DE 150 [l/min]</label>
                         <div class="input-group">
                              <span class="input-group-addon">11</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,11,1)" id="proceso_11_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">EN CASO DE FUGA, IDENTIFICAR Y VOLVER A SELLAR CON MMA.</label>
                         <div class="input-group">
                              <span class="input-group-addon">12</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,12,1)" id="proceso_12_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">TRASLADAR PIEZA A MESA DE PEGADO DE EME Y CERRAR SISTEMAS DE FIJACIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">13</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,13,1)" id="proceso_13_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">LIMPIAR CON HUAIPE Y ACETONA ZONAS DE PEGADO</label>
                         <div class="input-group">
                              <span class="input-group-addon">14</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,14,1)" id="proceso_14_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">EN PIEZA BASE APLICAR DOS CORDONES DE MMA EN AMBAS ZONAS DE PEGADO EN PIEZA EME</label>
                         <div class="input-group">
                              <span class="input-group-addon">15</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,15,1)" id="proceso_15_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">POSICIONAR LA PIEZA EME SOBRE LA BASE CON MESA DE PEGADO, PONER TACOS AMARILLOS PARA CERRAR MESA Y CONECTAR LÍNEA DE AIRE HASTA ALCANZAR LOS 0,2 [bar] DE PRESIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">16</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,16,1)" id="proceso_16_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">UNA VEZ CURADO EL ADHESIVO, TRASLADAR LA PIEZA A LA MESA DE PEGADO DE TAPA</label>
                         <div class="input-group">
                              <span class="input-group-addon">17</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,17,1)" id="proceso_17_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">LIMPIAR CON HUAIPE Y ACETONA ZONAS DE PEGADO EN PIEZA EME Y TAPA</label>
                         <div class="input-group">
                              <span class="input-group-addon">18</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,18,1)" id="proceso_18_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REALIZAR PERFORACIÓN CON BROCA DE 3 [mm] EN LÍNEA DE AGUA A TRAVÉS DE LA PERFORACIÓN DE 27 [mm]</label>
                         <div class="input-group">
                              <span class="input-group-addon">19</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,19,1)" id="proceso_19_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">POSTURA SOPORTE DE PLACA EN SECTOR TAPA TRASERA</label>
                         <div class="input-group">
                              <span class="input-group-addon">20</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,20,1)" id="proceso_20_4">
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">REVISIÓN Y APROBACIÓN POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">21</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,21,1)" id="proceso_21_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">APLICAR DOS CORDONES DE MMA. EN LAS ZONAS DE PEGADO A LO LARGO DE LOS COSTADOS Y UN SOLO CORDÓN DE MMA. EN LOS EXTREMOS DE LA PIEZA EME</label>
                         <div class="input-group">
                              <span class="input-group-addon">22</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,22,1)" id="proceso_22_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">POSICIONAR LA TAPA SOBRE LA EME Y PRESIONAR PROCURANDO QUE LOS SOPORTES DE PLACA COINCIDAN CON LAS PERFORACIONES</label>
                         <div class="input-group">
                              <span class="input-group-addon">23</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,23,1)" id="proceso_23_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">CERRAR MESA Y CONECTAR LÍNEA DE AIRE HASTA ALCANZAR LOS 0,2 [bar] DE PRESIÓN</label>
                         <div class="input-group">
                              <span class="input-group-addon">24</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,24,1)" id="proceso_24_5">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">ESPERAR QUE EL ADHESIVO TERMINE DE CURAR</label>
                         <div class="input-group">
                              <span class="input-group-addon">25</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,25,1)" id="proceso_25_4">
                         </div>
                    </div>

                    <div class="col-xs-12 col-lg-6">
                         <label for="">APROBACIÓN Y LIBERACIÓN DE PIEZA POR PARTE DE GARANTÍA DE CALIDAD</label>
                         <div class="input-group">
                              <span class="input-group-addon">26</span>
                              <input type="text" class="form-control clean" placeholder="CHEQUEO" onblur="insertProtocoloFinal(4,2,26,1)" id="proceso_26_4">
                         </div>
                    </div>

                    

                    <div class="col-xs-12 col-lg-12">
                         <br>
                         <label for="">OBSERVACIONES</label>
                         <textarea name="" id="observacion_4" rows="5" class="form-control clean" onblur="insertProtocoloFinal(4,3)"></textarea>
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