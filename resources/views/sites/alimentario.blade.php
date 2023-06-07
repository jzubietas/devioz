@extends('layouts.app')

@push('css')
<link href="{{ asset('plugins/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet" />
@endpush

@push('jss')
<script src="{{ asset('plugins/dropzone/dist/min/dropzone.min.js') }}"></script>
@endpush

@section('content')

<ol class="breadcrumb float-xl-end">

	<li class="breadcrumb-item active">Portada</li>
</ol>

<center><h1 class="page-header">Rubro Alimentario</h1></center>  



<div class="col-xl-12">

	<div class="card border-0">
	    @can('editar-alimentario-banner')
	    <div class="panel panel-inverse">
	        <div class="panel-heading ui-sortable-handle">
    	        <div class="panel-heading-btn">
    	            <a class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-pen"></i></a>
                    {{--<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-pen"></i></a>--}}
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                </div>
    	    </div>
	    </div>
	    @endcan
		<img class="card-img-top" src="{{ asset('img/portada/Alimentario.jpg') }}" alt="" />
		<div class="card-body">
			<h4 class="card-title mb-3px">Nosotros</h4>
			<p class="card-text">Somos una empresa dedicada al desarrollo de Software, gestión y administración de bases de datos, big data, automatización, arquitectura devops, gestión de procesos para toda innovación TI.</p>
			<a href="javascript:;" class="btn btn-sm btn-default">Quiero saber más</a>
		</div>
	</div>
	
	
    
    
    <!-- #modal-dialog -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal Title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <p>Modal content goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

	<div class="col-xl-12">
		<div class="mb-10px fs-10px mt-20px"><b class="text-dark">Nuestros Servicios</b></div>

		<div class="card-group">

			<div class="card">
			    
			    @can('editar-alimentario-servicios')
			    <div class="panel panel-inverse">
        	        <div class="panel-heading ui-sortable-handle">
            	        <div class="panel-heading-btn">
            	            <!-- toggler -->
            	            <a href="#modal-alert" class="btn btn-xs btn-icon btn-success" data-toggle="panel-modal"><i class="fa fa-pen"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
            	    </div>
        	    </div>
        	    @endcan
        	    
				<img class="card-img-top" src="{{ asset('img/gallery/Bembos.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Bembos</h4>
					<p class="card-text">La mejor hamburguesa a la parrilla por su sabor único y sus creativas combinaciones a partir de insumos de la más alta calidad ofrecida en nuestros atractivos locales. Nuestro espíritu innovador y expresivo se manifiesta en nuestros productos, pero también en nuestros locales, la música, nuestro ambiente y servicios.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>


			<div class="card">
			    @can('editar-alimentario-servicios')
			    <div class="panel panel-inverse">
        	        <div class="panel-heading ui-sortable-handle">
            	        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-pen"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
            	    </div>
        	    </div>
        	    @endcan
				<img class="card-img-top" src="{{ asset('img/gallery/KFC.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">KFC</h4>
					<p class="card-text">Nuestra misión es satisfacer las necesidades del sector alimentario, mediante la elaboración y comercialización de productos y servicios de óptima calidad, que se ajusten a las necesidades de nuestros clientes, al generar economía, desarrollo y crecimiento para el sector productos, para empleados y accionistas».</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>


			<div class="card">
			    @can('editar-alimentario-servicios')
			    <div class="panel panel-inverse">
        	        <div class="panel-heading ui-sortable-handle">
            	        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-pen"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
            	    </div>
        	    </div>
        	    @endcan
				<img class="card-img-top" src="{{ asset('img/gallery/Papa-Johns.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Papa Johns</h4>
					<p class="card-text">Hacemos lo que decimos, cuando decimos que lo haremos.
					Nos hemos ganado el derecho de llevar a otros a un nivel de responsabilidad superior ya que somos responsables ante nosotros mismos, nuestros clientes y nuestros socios comerciales.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>

			<div class="card">
			    @can('editar-alimentario-servicios')
			    <div class="panel panel-inverse">
        	        <div class="panel-heading ui-sortable-handle">
            	        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-pen"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
            	    </div>
        	    </div>
        	    @endcan
				<img class="card-img-top" src="{{ asset('img/gallery/Johnny-Rockets.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Johnny Rockets</h4>
					<p class="card-text">No se limita a una década o época, Johnny Rockets combina los mejores elementos de un siglo de historia culinaria Americana, para crear una experiencia y un menú que son relevantes hoy en día y lo serán, en las próximas décadas.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>

		</div>

	</div>

</div>

@endsection