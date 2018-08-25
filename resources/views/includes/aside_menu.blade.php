<!-- Sidebar navigation-->
<nav class="sidebar-nav">
    <ul id="sidebarnav">
        <li class="nav-small-cap">MENÚ PRINCIPAL</li>
        @if (\Helper::countAccesoPerModulo(1, session()->get('user_id')) != 0 || session()->get('user_name') == 'admin') {{-- Modulo 1 es configuración / mostrar si es distinto a 0 --}}
        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Configuración </span></a>
            <ul aria-expanded="false" class="collapse">
                @if (\Helper::validarAcceso(1, 1, session()->get('user_id'))) 
                <li class=""><a href="alianzas">Alianzas</a></li> {{-- id: 1 --}}
                @endif
                @if (\Helper::validarAcceso(1, 2, session()->get('user_id')))
                <li class=""><a href="plazas">Plazas</a></li> {{-- id: 2 --}}
                @endif
                @if (\Helper::validarAcceso(1, 3, session()->get('user_id')))
                <li class=""><a href="oficinas">Oficinas</a></li> {{-- id: 3 --}}
                @endif
                @if (\Helper::validarAcceso(1, 4, session()->get('user_id')))
                <li class=""><a href="areas">Areas</a></li> {{-- id: 4 --}}
                @endif
                @if (\Helper::validarAcceso(1, 5, session()->get('user_id')))
                <li class=""><a href="puestos">Puestos</a></li> {{-- id: 5 --}}
                @endif
                @if (\Helper::validarAcceso(1, 6, session()->get('user_id')))
                <li class=""><a href="usuarios">Usuarios</a></li> {{-- id: 6 --}}
                @endif
                @if (\Helper::validarAcceso(1, 7, session()->get('user_id')))
                <li class=""><a href="permisos">Permisos</a></li> {{-- id: 7 --}}
                @endif
                @if (\Helper::validarAcceso(1, 8, session()->get('user_id')))
                <li class=""><a href="accesos">Accesos</a></li> {{-- id: 8 --}}
                @endif
            </ul>
        </li>
        @endif
    </ul>
</nav>
<!-- End Sidebar navigation