<div class="menu-item has-sub active">
	<a href="javascript:;" class="menu-link">
		<div class="menu-icon">
			<i class="fa fa-hdd"></i>
		</div>
		<div class="menu-text">Rubros</div>
		<div class="menu-caret"></div>
	</a>
	<div class="menu-submenu">
		<div class="menu-item {{ Request::is('alimentario') ? 'active' : '' }}">
			<a href="{{ route('alimentario') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs1.png') }}" alt="{{ asset('img/logo/logo-bs1.png') }}" />
                </div>
				<div class="menu-text">Alimentario</div>
			</a>
		</div>
		<div class="menu-item {{ Request::is('callcenter') ? 'active' : '' }}">
			<a href="{{ route('callcenter') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-cc.png') }}" alt="{{ asset('img/logo/logo-cc.png') }}" />
                </div>
				<div class="menu-text">Call Center</div>
			</a>
		</div>
		<div class="menu-item {{ Request::is('comercio') ? 'active' : '' }}">
			<a href="{{ route('comercio') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs2.png') }}" alt="{{ asset('img/logo/logo-bs2.png') }}" />
                </div>
				<div class="menu-text">Comercio</div>
			</a>
		</div>
		<div class="menu-item {{ Request::is('consultoras') ? 'active' : '' }}">
			<a href="{{ route('consultoras') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-consultoras.png') }}" alt="{{ asset('img/logo/logo-consultoras.png') }}" />
                </div>
				<div class="menu-text">Consultoras</div>
			</a>
		</div>
		<div class="menu-item {{ Request::is('desarrollorural') ? 'active' : '' }}">
			<a href="{{ route('desarrollorural') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs3.png') }}" alt="{{ asset('img/logo/logo-bs3.png') }}" />
                </div>
				<div class="menu-text">Desarrollo Rural</div>
			</a>
		</div>
		<div class="menu-item {{ Request::is('educacion') ? 'active' : '' }}">
			<a href="{{ route('educacion') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs4.png') }}" alt="{{ asset('img/logo/logo-bs4.png') }}" />
                </div>
				<div class="menu-text">Educación</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs5.png') }}" alt="{{ asset('img/logo/logo-bs5.png') }}" />
                </div>
				<div class="menu-text">Energía</div>
			</a>
		</div>
		<div class="menu-item {{ Request::is('entretenimiento') ? 'active' : '' }}">
			<a href="{{ route('entretenimiento') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs6.png') }}" alt="{{ asset('img/logo/logo-bs6.png') }}" />
                </div>
				<div class="menu-text">Entretenimiento</div>
			</a>
		</div>
		<div class="menu-item {{ Request::is('financiero') ? 'active' : '' }}">
			<a href="{{ route('financiero') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs7.png') }}" alt="{{ asset('img/logo/logo-bs7.png') }}" />
                </div>
				<div class="menu-text">Financiero</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs8.png') }}" alt="{{ asset('img/logo/logo-bs8.png') }}" />
                </div>
				<div class="menu-text">Hotelería y Turismo</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs9.png') }}" alt="{{ asset('img/logo/logo-bs9.png') }}" />
                </div>
				<div class="menu-text">Legal y Asesoría</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs10.png') }}" alt="{{ asset('img/logo/logo-bs10.png') }}" />
                </div>
				<div class="menu-text">Logística</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs11.png') }}" alt="{{ asset('img/logo/logo-bs11.png') }}" />
                </div>
				<div class="menu-text">Medicina y Salud</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs12.png') }}" alt="{{ asset('img/logo/logo-bs12.png') }}" />
                </div>
				<div class="menu-text">Minería</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs13.png') }}" alt="{{ asset('img/logo/logo-bs13.png') }}" />
                </div>
				<div class="menu-text">Redes Sociales</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs14.png') }}" alt="{{ asset('img/logo/logo-bs14.png') }}" />
                </div>
				<div class="menu-text">RRHH / Personal</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs15.png') }}" alt="{{ asset('img/logo/logo-bs15.png') }}" />
                </div>
				<div class="menu-text">Refinería</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs16.png') }}" alt="{{ asset('img/logo/logo-bs16.png') }}" />
                </div>
				<div class="menu-text">Seguridad</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs17.png') }}" alt="{{ asset('img/logo/logo-bs17.png') }}" />
                </div>
				<div class="menu-text">Servicios Públicos</div>
			</a>
		</div>
		<div class="menu-item {{ Request::is('software') ? 'active' : '' }}">
			<a href="{{ route('software') }}" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs1.png') }}" alt="{{ asset('img/logo/logo-bs1.png') }}" />
                </div>
				<div class="menu-text">Software y Hardware</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                        <img src="{{ asset('img/logo/logo-bs18.png') }}" alt="{{ asset('img/logo/logo-bs18.png') }}" />
                </div>
				<div class="menu-text">Supermercados</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs19.png') }}" alt="{{ asset('img/logo/logo-bs19.png') }}" />
                </div>
				<div class="menu-text">Telecomunicaciones</div>
			</a>
		</div>
		<div class="menu-item">
			<a href="email_detail.html" class="menu-link">
			    <div class="menu-icon-img">
                    <img src="{{ asset('img/logo/logo-bs20.png') }}" alt="{{ asset('img/logo/logo-bs20.png') }}" />
                </div>
				<div class="menu-text">Transporte</div>
			</a>
		</div>


	</div>
</div>
