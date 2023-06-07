<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
    <div class="menu">
        <div class="menu-profile">
            <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
                <div class="menu-profile-cover with-shadow"></div>
                <div class="menu-profile-image">
                    <img src="{{ asset('img/user/user-13.jpg') }}" alt />
                </div>
                <div class="menu-profile-info">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="menu-caret ms-auto"></div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @else
                        {{--<div class="alert alert-danger" role="alert">
                            {{ __('No status') }}
                        </div>--}}
                    @endif
                    <small>{{ Auth::user()->roles->pluck("name")->first() }}</small>
                    <small>{{ Auth::user()->cargo }}</small>
                    <small>Cargo</small>
                </div>
            </a>
        </div>
        <div id="appSidebarProfileMenu" class="collapse">
            <div class="menu-item pt-5px">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-cog"></i></div>
                    <div class="menu-text">Configuraciones</div>
                </a>
            </div>
            <div class="menu-item">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                    <div class="menu-text"> Enviar comentarios</div>
                </a>
            </div>
            <div class="menu-item pb-5px">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                    <div class="menu-text"> Ayuda</div>
                </a>
            </div>
            <div class="menu-divider m-0"></div>
        </div>
        <div class="menu-header">Navegacion</div>

        <div class="menu-item">
            <a href="{{ route('home') }}" class="menu-link">
                <div class="menu-icon">
                    <i class="fa fa-sitemap"></i>
                </div>
                <div class="menu-text">Inicio</div>
            </a>
        </div>

        @include('layouts.menu')
        @include('layouts.links')

        <div class="menu-item d-flex">
            <a href="javascript:;" class="app-sidebar-minify-btn ms-auto d-flex align-items-center text-decoration-none" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
        </div>




    </div>

</div>

<aside id="sidebar-wrapper d-none">
    <div class="sidebar-brand">
        <img class="navbar-brand-full app-header-logo" src="{{ asset('img/logo/logo-admin-apple.png') }}" width="65"
             alt="Infyom Logo">
        <a href="{{ url('/') }}"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}" class="small-sidebar-text">
            <img class="navbar-brand-full" src="{{ asset('img/logo/logo-admin-apple.png') }}" width="45px" alt=""/>
        </a>
    </div>
    <ul class="sidebar-menu">
        @include('layouts.menu')
    </ul>
</aside>
