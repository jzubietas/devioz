@extends('layouts.app')

@section('content')

<ol class="breadcrumb float-xl-end">

	<li class="breadcrumb-item active">Portada</li>
</ol>

<center><h1 class="page-header">Rubro Comercio</h1></center>  



<div class="col-xl-12">

	<div class="card border-0">
		@can('editar-comercio-banner')
		<div class="panel panel-inverse">
			<div class="panel-heading ui-sortable-handle">
				<div class="panel-heading-btn">
					<a class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditSiteBannerModal" data-bs-rubro="Comercio" data-rubro="Comercio"><i class="fa fa-pen"></i></a>
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

	<div class="col-xl-12">
		<div class="mb-10px fs-10px mt-20px"><b class="text-dark">Nuestros Servicios</b></div>

		<div class="card-group">

			<div class="card">
				<img class="card-img-top" src="{{ asset('img/gallery/Linio.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Linio</h4>
					<p class="card-text">En Linio, nuestra misión es brindar a nuestros clientes una experiencia de compra en línea excepcional al ofrecerles una amplia selección de productos de calidad, precios competitivos y un servicio al cliente superior. Nos esforzamos por ser la plataforma en línea preferida de los consumidores, conectándolos de manera conveniente con las marcas y productos que aman.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>


			<div class="card">
				<img class="card-img-top" src="{{ asset('img/gallery/Mercado-Libre.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Mercado Libre</h4>
					<p class="card-text">Nuestra misión en Mercado Libre es democratizar el comercio y los pagos en línea en América Latina, brindando a millones de personas la posibilidad de comprar, vender, pagar y enviar productos de manera segura y eficiente. Buscamos impulsar el crecimiento del comercio electrónico en la región, promoviendo la inclusión financiera y generando oportunidades para emprendedores y pequeñas empresas.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>


			<div class="card">
				<img class="card-img-top" src="{{ asset('img/gallery/Amazon.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Amazon</h4>
					<p class="card-text">Nuestra misión es ser la empresa más centrada en el cliente del mundo, donde los clientes pueden encontrar y descubrir cualquier cosa que deseen comprar en línea. Nos esforzamos por ofrecer la mejor experiencia de compra posible, ofreciendo selecciones amplias, precios competitivos y envío rápido y confiable. Al mismo tiempo, buscamos brindar una plataforma para que los vendedores puedan alcanzar a clientes de todo el mundo.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>


			<div class="card">
				<img class="card-img-top" src="{{ asset('img/gallery/AliExpress.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">AliExpress</h4>
					<p class="card-text">Nuestra misión es hacer que el comercio sea accesible y asequible para todos, conectando a compradores de todo el mundo con vendedores de calidad. Nos esforzamos por brindar una experiencia de compra en línea segura, confiable y conveniente, ofreciendo una amplia selección de productos y servicios, y promoviendo la satisfacción del cliente y el crecimiento de los negocios de nuestros vendedores asociados</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>

		</div>

	</div>


</div>

@endsection