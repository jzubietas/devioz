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

<center><h1 class="page-header">Software y Hardware</h1></center>



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
		<img class="card-img-top" src="{{ asset('img/portada/software_empresas.png') }}" alt="" />
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

				<img class="card-img-top" width="100px" height="130px" src="{{ asset('img/gallery/IBM.jpg') }}" alt="IBM" />
				<div class="card-body">
					<h4 class="card-title">IMB</h4>
					<p class="card-text">Think.</p>
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
				<img class="card-img-top" width="100px" height="130px" src="{{ asset('img/gallery/osiptel.png') }}" alt="Osiptel" />
				<div class="card-body">
					<h4 class="card-title">OSIPTEL</h4>
					<p class="card-text">El Organismo Supervisor de Inversión Privada en Telecomunicaciones.</p>
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
				<img class="card-img-top" width="100px" height="130px" src="{{ asset('img/gallery/cosapi.png') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">Cosapi</h4>
					<p class="card-text">"Ser la empresa de ingeniería y construcción, sólida, innovadora y de clase mundial, reconocida como la mejor en los proyectos, mercados y emprendimientos donde participemos."</p>
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
				<img class="card-img-top" width="100px" height="130px" src="{{ asset('img/gallery/kyndryl.jpg') }}" alt="Card image cap" />
				<div class="card-body">
					<h4 class="card-title">KYNDRYL</h4>
					<p class="card-text">Apoyamos un progreso que transforme la sociedad a largo plazo.</p>
					<!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
				</div>
			</div>

		</div>

	</div>

</div>

@endsection
