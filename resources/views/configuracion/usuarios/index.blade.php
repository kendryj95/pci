@extends('layouts.app')

@push('meta')

<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush

@section('title', 'Usuarios')

@section('breadcrumb')

  @component('components.bread')

  @slot('title', 'Usuarios')
  @slot('last_page', 'Dashboard')

  @endcomponent

@endsection

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12">
      <div class="card">
          <div class="card-body">
              <a href="javascript:void(0)" onclick="crear()" class="btn btn-primary" title="Agregar"><i class="mdi mdi-plus-box mdi-18px"></i></a>&nbsp;
              <a href="javascript:void(0)" onclick="editar()" class="btn btn-success" title="Editar"><i class="mdi mdi-pencil-box mdi-18px"></i></a>&nbsp;
              <a href="javascript:void(0)" onclick="deleteUsuario()" class="btn btn-danger" title="Eliminar"><i class="mdi mdi-delete mdi-18px"></i></a>
              <a href="javascript:void(0)" onclick="editarPass()" class="btn btn-info" title="Editar contraseña"><i class="mdi mdi-key mdi-18px"></i></a>
              <a href="javascript:void(0)" onclick="asigPerfil()" class="btn btn-secondary" title="Perfiles, Permisos y Acessos"><i class="mdi mdi-security mdi-18px"></i></a>
              <br><br>
              <div class="table-responsive">
                <table id="tableUsuarios" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th></th>
                    <th>No.</th>
                    <th>USUARIO</th>
                    <th>ÁREA</th>
                    <th>PUESTO</th>
                    <th>CORREO</th>
                    <th>ACTIVO</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($usuarios as $i => $usuario)
                    <tr>
                      <td><input type="checkbox" class="usuarios" value="{{ $usuario->id }}" id="id_{{ $usuario->id }}" name="ali[]"><label for="id_{{ $usuario->id }}"></label></td>
                      <td>{{ $i+1 }}</td>
                      <td>{{ $usuario->usuario }}</td>
                      <td>{{ $usuario->area }}</td>
                      <td>{{ $usuario->puesto }}</td>
                      <td>{{ $usuario->correo }}</td>
                      <td>{{ $usuario->estatus }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalCrearUsuarios" tabindex="-1" role="dialog" aria-labelledby="modalCrearUsuariosTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCrearUsuariosTitle">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="usuarios/crear" method="post" id="form_create_usuario">
             {{ csrf_field() }}

             <div class="form-group">
               <label for="alianza">Alianza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <select name="alianza" id="alianza" class="form-control" onchange="getInfo(1, this.value)">
                  <option value="">Seleccionar...</option>
                  @foreach ($alianzas as $alianza)
                   <option value="{{$alianza->id}}">{{$alianza->nombre}}</option>
                  @endforeach
                 </select>
               </div>
               @if ($errors->has('alianza'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('alianza')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
               <label for="plaza">Plaza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                 <select name="plaza" id="plaza" class="form-control">
                  <option value="">Seleccionar...</option>
                 </select>
               </div>
               @if ($errors->has('plaza'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('plaza')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
              <label for="area">Área</label>
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                 <select name="area" id="area" class="form-control" onchange="getInfo(2, this.value)">
                  <option value="">Seleccionar...</option>
                   @foreach ($areas as $area):
                    <option value="{{$area->id}}">{{$area->area}}</option>
                   @endforeach
                 </select>
              </div>
              @if ($errors->has('area'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('area')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
              <label for="puesto">Puesto</label>
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                 <select name="puesto" id="puesto" class="form-control">
                   <option value="">Seleccionar...</option>
                 </select>
              </div>
              @if ($errors->has('puesto'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('puesto')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group @if ($errors->has('usuario')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                 <input type="text" class="form-control" name="usuario" placeholder="Nombre usuario (*)">
              </div>
                 @if ($errors->has('usuario'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('usuario')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group @if ($errors->has('correo')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-at"></i></span>
                 <input type="text" class="form-control" name="correo" placeholder="Correo (*)">
              </div>
                 @if ($errors->has('correo'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('correo')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group @if ($errors->has('pass')) has-error @endif">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                 <input type="password" class="form-control" name="pass" placeholder="Contraseña (*)">
              </div>
                 @if ($errors->has('pass'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('pass')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
               <label for="estatus">Usuario activo</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-power-off"></i></span>
                 <select name="estatus" id="estatus" class="form-control">
                   <option value="1">Sí</option>
                   <option value="0">NO</option>
                 </select>
               </div>
             </div>
            
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="crearUsuario()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditUsuarios" tabindex="-1" role="dialog" aria-labelledby="modalEditUsuariosTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditUsuariosTitle">Editar Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="usuarios/editar" method="post" id="form_edit_usuario">
             {{ csrf_field() }}
             <input type="hidden" id="id_usuario" name="id_usuario">

             <div class="form-group">
               <label for="alianza">Alianza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                 <select name="e_alianza" id="e_alianza" class="form-control" onchange="getInfo(1, this.value)">
                  <option value="">Seleccionar...</option>
                  @foreach ($alianzas as $alianza)
                   <option value="{{$alianza->id}}">{{$alianza->nombre}}</option>
                  @endforeach
                 </select>
               </div>
               @if ($errors->has('e_alianza'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_alianza')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
               <label for="plaza">Plaza</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                 <select name="e_plaza" id="e_plaza" class="form-control">
                  <option value="">Seleccionar...</option>
                 </select>
               </div>
               @if ($errors->has('e_plaza'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_plaza')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
              <label for="area">Área</label>
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                 <select name="e_area" id="e_area" class="form-control" onchange="getInfo(2, this.value)">
                  <option value="">Seleccionar...</option>
                   @foreach ($areas as $area):
                    <option value="{{$area->id}}">{{$area->area}}</option>
                   @endforeach
                 </select>
              </div>
              @if ($errors->has('e_area'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_area')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
              <label for="puesto">Puesto</label>
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                 <select name="e_puesto" id="e_puesto" class="form-control">
                   <option value="">Seleccionar...</option>
                 </select>
              </div>
              @if ($errors->has('e_puesto'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_puesto')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                 <input type="text" class="form-control" name="e_usuario" id="e_usuario" placeholder="Nombre usuario (*)">
              </div>
                 @if ($errors->has('e_usuario'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_usuario')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-at"></i></span>
                 <input type="text" class="form-control" name="e_correo" id="e_correo" placeholder="Correo (*)">
              </div>
                 @if ($errors->has('e_correo'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_correo')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                 <input type="password" class="form-control" name="e_pass" id="e_pass" placeholder="Contraseña (*)">
              </div>
                 @if ($errors->has('e_pass'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('e_pass')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
               <label for="estatus">Usuario activo</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-power-off"></i></span>
                 <select name="estatus" id="e_estatus" class="form-control">
                   <option value="1">Sí</option>
                   <option value="0">NO</option>
                 </select>
               </div>
             </div>
            
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="editUsuario()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditPassUsuarios" tabindex="-1" role="dialog" aria-labelledby="modalEditPassUsuariosTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditPassUsuariosTitle">Editar contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

           <form action="usuarios/editarPass" method="post" id="form_editpass_usuario">
             {{ csrf_field() }}
             <input type="hidden" id="id_usuario_pass" name="id_usuario_pass">

             <div class="form-group">
               <label for="pass_new">Nueva contraseña</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-key"></i></span>
                 <input type="password" class="form-control" name="pass_new" id="pass_new" placeholder="***********">
               </div>
               @if ($errors->has('pass_new'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('pass_new')[0] }}
                 </span>
                 @endif
             </div>

             <div class="form-group">
               <label for="pass_new_conf">Confirmar nueva contraseña</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-key"></i></span>
                 <input type="password" class="form-control" name="pass_new_conf" id="pass_new_conf" placeholder="***********">
               </div>
               @if ($errors->has('pass_new_conf'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('pass_new_conf')[0] }}
                 </span>
                 @endif
             </div>
            
           </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" onclick="editPassUsuario()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAsigPerfilUsuarios" tabindex="-1" role="dialog" aria-labelledby="modalAsigPerfilUsuariosTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAsigPerfilUsuariosTitle">Asignar perfil de usuario, Clonar permisos y Accesos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
           <form action="permisos/clonePermits" method="post">
           {{ csrf_field() }}
           <input type="hidden" class="id_usuario" name="id_usuario">
            <div class="form-group">
              <label for="pass_new">Usuario</label>
              <div class="input-group">
                <span class="input-group-addon"><i class="mdi mdi-security-network mdi-18px"></i></span>
                <select name="user_perm" id="users_perm" class="form-control">
                  <option value="">Selecciona un usuario</option>
                </select>
              </div>
              @if ($errors->has('user_perm'))
                <span class="help-block" style="color: #FC718B">
                 <i class="fa fa-times-circle-o"></i> {{ $errors->get('user_perm')[0] }}
                </span>
                @endif
            </div>
          
            <button type="submit" class="btn btn-info">Clonar permisos</button><br>
          </form>
        </div>

         <div class="form-group">
           <form action="accesos/cloneAccess" method="post">
            {{ csrf_field() }}
            <input type="hidden" class="id_usuario" name="id_usuario">
             <div class="form-group">
               <label for="pass_new_conf">Usuario</label>
               <div class="input-group">
                 <span class="input-group-addon"><i class="mdi mdi-account-key mdi-18px"></i></span>
                 <select name="user_acce" id="users_acce" class="form-control">
                   <option value="">Selecciona un usuario</option>
                 </select>
               </div>
               @if ($errors->has('user_acce'))
                 <span class="help-block" style="color: #FC718B">
                  <i class="fa fa-times-circle-o"></i> {{ $errors->get('user_acce')[0] }}
                 </span>
                 @endif
             </div>
           
             <button type="submit" class="btn btn-info">Clonar accesos</button><br>
           </form>
         </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


@endsection

@push('scripts')

<script>
  const id_usuario = {{session()->get('user_id')}};
  $(document).ready(function(){
    var $tableUsuarios = jQuery("#tableUsuarios");
    var tableUsuarios = $tableUsuarios.DataTable( {
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
      // "ajax": "/gcapp/trabajadores/listar"
    } );

    @if ($errors->has('alianza') || $errors->has('plaza') || $errors->has('area') || $errors->has('puesto') || $errors->has('usuario') || $errors->has('correo') || $errors->has('pass'))

    $('#modalCrearUsuarios').modal('show');

    @elseif ($errors->has('e_alianza') || $errors->has('e_plaza') || $errors->has('e_area') || $errors->has('e_puesto') || $errors->has('e_usuario') || $errors->has('e_correo') || $errors->has('e_pass'))

    $('#modalEditUsuarios').modal('show');

    @elseif ($errors->has('pass_act') || $errors->has('pass_new') || $errors->has('pass_new_conf'))

    $('#modalEditPassUsuarios').modal('show');

    @endif
  });

  function crear()
  {
    const id_accion = 16;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {
          $('#modalCrearUsuarios').modal('show');
        } else {
          swal(
            'Permiso',
            'No tienes permiso para realizar esta accion.',
            'error'
            );
        }
      }
    });


  }

  function crearUsuario()
  {
    $('#form_create_usuario').submit();
  }

  function editUsuario()
  {
    $('#form_edit_usuario').submit();
  }

  function editPassUsuario()
  {
    $('#form_editpass_usuario').submit();    
  }

  function editar()
  {
    var count = $('.usuarios:checked').length;
    var param = '';

    const id_accion = 17;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {

          if (count != 0 && count == 1) {
            param = $('.usuarios:checked').val();

            $.ajax({
              url: 'usuarios/edit/'+param,
              type: 'GET',
              dataType: 'json',
              success: function(response){

                if (response.status == 200) {

                  let html_plazas = '<option value="">Seleccionar</option>';

                  response.plazas.forEach(function(p){
                    let selected = response.data.plaza == p.id ? 'selected' : '';
                    html_plazas += '<option value="'+p.id+'" '+selected+'>'+p.nombre+'</option>';
                  });

                  $('#e_plaza').html(html_plazas);

                  let html_puestos = '<option value="">Seleccionar</option>';

                  response.puestos.forEach(function(p){
                    let selected = response.data.puesto == p.id ? 'selected' : '';
                    html_puestos += '<option value="'+p.id+'" '+selected+'>'+p.puesto+'</option>';
                  });

                  $('#e_puesto').html(html_puestos);

                  $('#e_usuario').val(response.data.usuario);
                  $('#e_correo').val(response.data.correo);
                  $('#e_alianza').val(response.data.alianza);
                  $('#e_area').val(response.data.area);
                  $('#estatus').val(response.data.estatus);

                  $('#id_usuario').val(response.data.id);

                  $('#e_estatus').val(response.data.estatus);

                  $('#modalEditUsuarios').modal('show');
                } else {
                  console.log('Error');
                }
              },
              error: function (error) {
                console.log('Error');
              }
            });
            
          } else if (count == 0) {
            swal('Vacío', 'No has seleccionado ninguna usuario para editar', 'info');
          } else {
            swal('Warning','No puedes seleccionar más de 1 usuario para editar', 'warning');
          }
          
        } else {
          swal(
            'Permiso',
            'No tienes permiso para realizar esta accion.',
            'error'
            );
        }
      }
    });
  }

  function editarPass()
  {
    var count = $('.usuarios:checked').length;
    var param = '';

    const id_accion = 19;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {

          if (count != 0 && count == 1) {
            param = $('.usuarios:checked').val();

            $('#id_usuario_pass').val(param);

            $('#modalEditPassUsuarios').modal('show');
            
          } else if (count == 0) {
            swal('Vacío', 'No has seleccionado ninguna usuario para editar', 'info');
          } else {
            swal('Warning','No puedes seleccionar más de 1 usuario para editar', 'warning');
          }
          
        } else {
          swal(
            'Permiso',
            'No tienes permiso para realizar esta accion.',
            'error'
            );
        }
      }
    });
  }

  function asigPerfil()
  {
    var count = $('.usuarios:checked').length;
    var param = '';

    const id_accion = 20;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {

          if (count != 0 && count == 1) {
            param = $('.usuarios:checked').val();

            $('.id_usuario').val(param);

            $.ajax({
              url: 'permisos/usersWithPermAndAccess/'+param,
              type: 'GET',
              dataType: 'json',
              success: function (response) {
                let html1 = '<option value="">Seleccionar...</option>',
                    html2 = '<option value="">Seleccionar...</option>';

                response.users_perm.forEach(function(up){
                  html1 += '<option value="'+up.id+'">'+up.usuario+'</option>';
                });

                response.users_acce.forEach(function(ua){
                  html2 += '<option value="'+ua.id+'">'+ua.usuario+'</option>';
                });

                $('#users_perm').html(html1);
                $('#users_acce').html(html2);
              },
              error: function (error) {
                console.dir(error);
              }
            });
            

            $('#modalAsigPerfilUsuarios').modal('show');
            
          } else if (count == 0) {
            swal('Vacío', 'No has seleccionado ninguna usuario para editar', 'info');
          } else {
            swal('Warning','No puedes seleccionar más de 1 usuario para editar', 'warning');
          }
          
        } else {
          swal(
            'Permiso',
            'No tienes permiso para realizar esta accion.',
            'error'
            );
        }
      }
    });
  }

  function deleteUsuario()
  {
    var count = $('.usuarios:checked').length;
    var values = [];

    const id_accion = 18;

    $.ajax({
      url: "permisos/validarPerm/"+id_accion+"/"+id_usuario,
      type: 'GET',
      dataType: 'json',
      success:function (response) {
        if (response.permiso) {

          if (count > 0) {
            $('.usuarios:checked').each(function (){
              values.push($(this).val());
            });

            swal({
              title: 'Estás seguro?',
              text: "Se eliminarán las usuarios seleccionadas.",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Sí, borrar!',
              cancelButtonText: 'Cancelar'
            }).then((result) => {
              
              if (result) {

                $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                $.ajax({
                  url: 'usuarios/delete',
                  type: 'POST',
                  dataType: 'json',
                  data: {values: values},
                  success: function(response) {
                    if (response.status == 200) {
                      swal(
                        'Exito!',
                        'Han sido eliminadas las usuarios correctamente',
                        'success'
                      );
                      setTimeout(function(){
                        window.location.reload();
                      }, 2000);
                    } else {
                      swal(
                        'Error!',
                        'Lo sentimos, ha ocurrido un error inesperado.',
                        'error'
                      );
                    }
                  },
                  error: function(error) {
                      console.dir(error);
                      swal(
                        'Error!',
                        'Lo sentimos, ha ocurrido un error inesperado.',
                        'error'
                      );
                  }
                });
                
              }
            });
          } else {
            swal(
              'Vacío',
              'No has seleccionado ninguna usuario para eliminar',
              'info'
            );
          }
          
        } else {
          swal(
            'Permiso',
            'No tienes permiso para realizar esta accion.',
            'error'
            );
        }
      }
    });
  }

  function getInfo(accion, id)
  {
    if (id != "") {
      $.ajax({
        url: 'usuarios/getInfo/'+accion+'/'+id,
        type: 'GET',
        dataType: 'json',
        data: {},
        beforeSend: function () {
          if (accion == 1) {
            $('#plaza').prop('disabled', true);
          } else {
            $('#puesto').prop('disabled', true);
          }
        },
        success: function(response) {
          if (response.status == 200) {
            let html = '<option value="">Seleccionar...</option>';
            response.data.forEach(function (d){
              if (accion == 1) {
                html += '<option value="'+d.id+'">'+d.nombre+'</option>';
              } else {
                html += '<option value="'+d.id+'">'+d.puesto+'</option>';
              }
            });

            if (accion == 1) {
              $('#plaza').html(html);
            } else {
              $('#puesto').html(html);
            }
          } else {
            swal(
              'Error',
              'Ha ocurrido un error inesperado. Por favor vuelva a intentarlo.',
              'error'
              );
          }
        },
        error: function (error) {
          swal(
            'Error',
            'Ha ocurrido un error inesperado. Por favor vuelva a intentarlo.',
            'error'
            );
        },
        complete: function () {
          if (accion == 1) {
            $('#plaza').prop('disabled', false);
          } else {
            $('#puesto').prop('disabled', false);
          }
        }
      });
      
    } else {
      if (accion == 1) {
        $('#plaza').html('<option value="">Seleccionar...</option>');
      } else {
        $('#puesto').html('<option value="">Seleccionar...</option>');
      }
    }
  }

</script>

@endpush