@extends('layouts.app')

@section('content')

<ol class="breadcrumb float-xl-end">

	<li class="breadcrumb-item active">Portada</li>
</ol>

<center><h1 class="page-header">Rubro Call Center</h1></center>  



<div class="col-xl-12">

	<div class="card border-0">
		@can('editar-callcenter-banner')
		<div class="panel panel-inverse">
			<div class="panel-heading ui-sortable-handle">
				<div class="panel-heading-btn">
					<a class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditSiteBannerModal" data-bs-rubro="CallCenter" data-rubro="CallCenter"><i class="fa fa-pen"></i></a>
					{{--<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-pen"></i></a>--}}
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
	    </div>
		@endcan
		<img class="card-img-top site_banner_img" src="{{ $site_banner_img }}" alt="" />
		<div class="card-body">
			<h4 class="card-title mb-3px">Nosotros</h4>
			<p class="card-text">Somos una empresa dedicada al desarrollo de Software, gestión y administración de bases de datos, big data, automatización, arquitectura devops, gestión de procesos para toda innovación TI.</p>
			<a href="javascript:;" class="btn btn-sm btn-default">Quiero saber más</a>
		</div>
	</div>

	@include('sites.modal.change_banner_site')
	@include('sites.modal.edit_service_rubro')

	<div class="col-xl-12">
		<div class="mb-10px fs-10px mt-20px"><b class="text-dark">Nuestros Servicios</b></div>

		<div class="card-group">

			<div class="card">
				<img class="card-img-top" src="{{ asset('img/gallery/Atento.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Atento</h4>
					<p class="card-text">Brindar soluciones de atención al cliente y servicios de relación con los consumidores para ayudar a las empresas a lograr sus objetivos comerciales, mediante la aplicación de tecnología y procesos eficientes, y garantizando la satisfacción de los clientes.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>


			<div class="card">
				<img class="card-img-top" src="{{ asset('img/gallery/Konecta.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Konecta</h4>
					<p class="card-text">Ser reconocidos como el principal socio estratégico para la gestión de la relación con los clientes y la externalización de procesos de negocio en el Perú, mediante la innovación constante, la excelencia operativa y el compromiso con la creación de valor sostenible para todas las partes interesadas</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>


			<div class="card">
				<img class="card-img-top" src="{{ asset('img/gallery/Dynamicall.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Dynamicall</h4>
					<p class="card-text">Brindar una solución rápida y precisa a nuestros usuarios finales, logrando un alto nivel de satisfacción de nuestros clientes. Ser el mejor Contact Center en innovación, productividad y calidad de servicio para nuestros clientes y usuarios finales.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>


			<div class="card">
				<img class="card-img-top" src="{{ asset('img/gallery/SCC.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">SCC</h4>
					<p class="card-text">Implementar procesos integrales y de calidad permanentemente adaptados a la realidad cambiante, con un equipo de personas  de enfoque flexible y orientado a lograr satisfacción, eficiencia sostenible y mejora continua.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>

		</div>

	</div>

</div>

@endsection