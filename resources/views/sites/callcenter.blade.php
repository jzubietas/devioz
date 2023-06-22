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

            @foreach($servicesrubro as $servicerubro)
                <div class="card">
                    <div class="panel panel-inverse">
                        <div class="panel-heading ui-sortable-handle">
                            <div class="panel-heading-btn">
                                @can('editar-callcenter-servicios')
                                    <a id="service_edit_" class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditServiceRubroModal" data-service="{{ $servicerubro->id }}" data-title="{{ $servicerubro->title }}" data-text="{{ $servicerubro->text }}"><i class="fa fa-pen"></i></a>
                                @endcan
                                <a href="javascript:" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                @can('borrar-callcenter-servicios')
                                    <a href="javascript:" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <img id="servicerubroImg_{{ $servicerubro->id }}" class="card-img-top" src="{{ asset($servicerubro->photo) }}" alt="Card image cap" />
                    <div class="card-body">
                        <h4 id="servicerubroTitle_{{ $servicerubro->id }}" class="card-title">{{ $servicerubro->title }}</h4>
                        <p id="servicerubroText_{{ $servicerubro->id }}" class="card-text">{{ $servicerubro->text }}</p>
                        <!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
                    </div>

                </div>
            @endforeach


		</div>

	</div>

</div>

@endsection
