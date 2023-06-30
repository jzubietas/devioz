@auth
    @role('Administrador')
        <div class="menu-item has-sub">
            <a href="javascript:;" class="menu-link">
                <div class="menu-icon">
                    <i class="fa fa-sitemap"></i>
                </div>
                <div class="menu-text">Configuracion</div>
                <div class="menu-caret"></div>
            </a>
            <div class="menu-submenu">
                <div class="menu-item">
                    <a href="{{ route('usuarios.index') }}" class="menu-link"><div class="menu-text">Administrar Usuarios</div></a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('roles.index') }}" class="menu-link"><div class="menu-text">Administrar Roles</div></a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('posts.index') }}" class="menu-link"><div class="menu-text">Administrar Cargos</div></a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('jobsfunction.index') }}" class="menu-link"><div class="menu-text">Administrar Funciones</div></a>
                </div>
                <div class="menu-item">
                    <a href="{{ route('permissions.index') }}" class="menu-link"><div class="menu-text">Permisos</div></a>
                </div>

                <div class="menu-item">
                    <a href="{{ route('usuarios.showSessions') }}" class="menu-link"><div class="menu-text">Actividad de usuario</div></a>
                </div>

                {{--<div class="menu-item">
                    <a href="{{ route('products.index') }}" class="menu-link"><div class="menu-text">Administrar Items</div></a>
                </div>--}}
                {{--<div class="menu-item">
                    <a href="{{ route('posts.index') }}" class="menu-link"><div class="menu-text">Posts</div></a>
                </div>--}}
            </div>
        </div>
    @endrole


@endauth

