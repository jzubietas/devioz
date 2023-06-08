@extends('layouts.app')

@section('content')

    <ol class="breadcrumb float-xl-end">

        <li class="breadcrumb-item active">Portada</li>
    </ol>

    <h1 class="page-header">DevioZ <small> Desarrollo de Software.</small></h1>

    <div class="col-xl-12">
        <div class="mb-10px fs-10px mt-10px"><b class="text-dark">Portada</b></div>

        <div class="card border-0">
            <div class="panel panel-inverse">
                <div class="panel-heading ui-sortable-handle">
                    <div class="panel-heading-btn">
                        <a class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditFrontPageBannerModal"><i class="fa fa-pen"></i></a>
                        <a href="javascript:" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </div>

            <img id="home_banner_img" class="card-img-top" src="{{ $homeBanner }}" alt="" />
            <div class="card-body">
                <div class="panel panel-inverse">
                    <div class="panel-heading ui-sortable-handle">
                        <div class="panel-heading-btn">
                            <a class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditNosotrosModal"><i class="fa fa-pen"></i></a>
                            <a href="javascript:" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <h4 id="txtusTitle" class="card-title mb-3px">{{ $usTitle }}</h4>
                <p id="txtusText" class="card-text">{{ $usText }}Somos una empresa dedicada al desarrollo de Software, gestión y administración de bases de datos, big data, automatización, arquitectura devops, gestión de procesos para toda innovación TI.</p>
                <a href="javascript:" class="btn btn-sm btn-default">Quiero saber más</a>
            </div>
        </div>

        @include('home.change_banner_portada')
        @include('home.edit_nosotros')
        {{--@include('profile.edit_profile')--}}
        @include('profile.view_profile')


        <div class="container">
            <div class="row">

                <div class="mb-10px fs-10px mt-10px">
                    <b class="text-dark">Nuestro Pensamiento</b>
                    @can('crear-pensamiento')
                        <a class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditFrontPageBannerModal"><i class="fa fa-pen"></i></a>
                    @endcan
                </div>

                @foreach($thoughts as $thought)

                <div class="col-sm card text-white border-0 {{ $thought->background_color }} text-center mb-2">

                    <div class="panel panel-inverse">
                        <div class="panel-heading ui-sortable-handle">
                            <div class="panel-heading-btn">
                                @can('editar-pensamiento')
                                    <a id="thought_edit_{{ $thought->id }}" class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditThoughtModal" data-thought="{{ $thought->id }}" data-description="{{ $thought->description }}" data-author="{{ $thought->author }}"><i class="fa fa-pen"></i></a>
                                @endcan
                                <a href="javascript:" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                @can('borrar-pensamiento')
                                    <a href="javascript:" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <blockquote class="blockquote">
                            <p id="tuDescription_{{ $thought->id }}">{{ $thought->description }}</p>
                        </blockquote>
                        <figcaption class="blockquote-footer mt-n2 mb-1 {{ $thought->text_color }} text-opacity-75">
                            Autor <cite title="Source Title" id="tuAuthor_{{ $thought->id }}">{{ $thought->author }}</cite>
                        </figcaption>
                    </div>
                </div>

                @endforeach

            </div>
        </div>

        @include('home.edit_thought')

        <div class="mb-10px fs-10px mt-20px"><b class="text-dark">Accesos Rápidos</b></div>

        <div class="card text-center border-0">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#card-pill-1">Desarrollo Web</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#card-pill-2">Desarrollo Movil</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#card-pill-3">Bases de Datos</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#card-pill-4">Visualización de Datos</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#card-pill-5">Gestión de Procesos</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#card-pill-6">Arquitectura DevOps</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#card-pill-7">Automatización RPA</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#card-pill-8">Big Data</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#card-pill-9">Soporte Técnico</a></li>
                    <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#card-pill-10">Seguridad</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content p-0 m-0">

                    <div class="tab-pane fade active show" id="card-pill-1">
                        <h4 class="card-title">Deseo solicitar un desarrollo web</h4>
                        <p class="card-text">Si te encuentras interesado en innovar tu empresa de forma web ingresa aqui.</p>

                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Desarrollo Web">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-2">
                        <h4 class="card-title">Deseo solicitar un desarrollo móvil</h4>
                        <p class="card-text">Si tu propósito es ingresar en las plataformas IOS y Android, solicita tu aplicación multiplataforma.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Desarrollo Movil">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-3">
                        <h4 class="card-title">Deseo solicitar un normalización de BBDD</h4>
                        <p class="card-text">Si desear administrar tu data a otro nivel, solicita nuestros servicios de estandarización, normalización y automatización de Datos.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Normalizacion BBDD">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-4">
                        <h4 class="card-title">Deseo solicitar un Dashboard Corporativo</h4>
                        <p class="card-text">Si deseas visualizar tus KPI's de forma definitiva para la toma de desiciones, solicita nuestros servicios de visualizadores y Dashboard.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Dashboard Corporativo">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-5">
                        <h4 class="card-title">Deseo solicitar mejorar los procesos de mi empresa</h4>
                        <p class="card-text">Si deseas documentar, relacionar, ordenar y mejorar los procesos de tu compañia, solicita nuestros servicios de mejora de procesos TI.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Mejorar Procesos">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-6">
                        <h4 class="card-title">Deseo implementar la cultura DevOps en mi empresa</h4>
                        <p class="card-text">Si deseas implementar una arquitectura de negocio nueva para mejorar los procesos de desarrollo y gestión en tu empresa, solicita aqui.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Cultura DevOps">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-7">
                        <h4 class="card-title">Deseo implementar Automatización Robótica de Procesos</h4>
                        <p class="card-text">Se deseas utilizar automatizaciones para tareas repetitivas y manuales de un proceso de negocio, solicitalo ahora mismo.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Automatizacion Robotica">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-8">
                        <h4 class="card-title">Deseo innovar con procesos de gestión Big Data</h4>
                        <p class="card-text">Si deseas gestionar y analizar grandes volúmenes de datos, que son demasiado grandes y complejos para ser procesados por herramientas y tecnologías tradicionales. Solicítalo ahora.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Gestion Big Data">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-9">
                        <h4 class="card-title">Deseo solicitar soporte técnico de asistencia</h4>
                        <p class="card-text">Si solicitas asistencia técnica para resolver problemas con el hardware o software de una empresa. Hazlo aquí.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Soporte Tecnico Asistencia">Solicitar</a>
                    </div>

                    <div class="tab-pane fade" id="card-pill-10">
                        <h4 class="card-title">Deseo solicitar mejorar la seguridad de mis aplicaciones y datos</h4>
                        <p class="card-text">Si deseas protección de sistemas de la información y los datos que se almacenan, procesan y transmiten. Solicitalo ahora mismo.</p>
                        <a
                            class="btn btn-sm btn-success"
                            data-bs-toggle="modal"
                            data-bs-target="#SendApplicationModal"
                            data-service="Mejorar Seguridad Aplicaciones Datos">Solicitar</a>
                    </div>


                </div>
            </div>
        </div>

        @include('home.send_application')

        <div class="col-xl-12">
            <div class="mb-10px fs-10px mt-20px">
                <b class="text-dark">Nuestros Servicios</b>
                @can('crear-servicio')
                <a id="service_edit_" class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#CreateServiceModal" data-service="" data-title="" data-text=""><i class="fa fa-pen"></i></a>
                @endcan
            </div>

            <div class="card-group">

                @foreach($services as $service)
                    <div class="card">
                        <div class="panel panel-inverse">
                            <div class="panel-heading ui-sortable-handle">
                                <div class="panel-heading-btn">
                                    @can('editar-servicio')
                                        <a id="service_edit_" class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditServiceModal" data-service="{{ $service->id }}" data-title="{{ $service->title }}" data-text="{{ $service->text }}"><i class="fa fa-pen"></i></a>
                                    @endcan
                                    <a href="javascript:" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                    @can('borrar-servicio')
                                        <a href="javascript:" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                        <img id="serviceImg_{{ $service->id }}" class="card-img-top" src="{{ asset($service->photo) }}" alt="Card image cap" />
                        <div class="card-body">
                            <h4 id="serviceTitle_{{ $service->id }}" class="card-title">{{ $service->title }}</h4>
                            <p id="serviceText_{{ $service->id }}" class="card-text">{{ $service->text }}</p>
                            <!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
                        </div>
                    </div>
                @endforeach

            </div>

        </div>



        <div class="col-xl-12">
            <div class="mb-10px fs-10px mt-20px">
                <b class="text-dark">Nuestras Herramientas</b>
                @can('crear-herramienta')
                <a id="tool_edit_" class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#CreateToolModal" data-tool="" data-title="" data-text=""><i class="fa fa-pen"></i></a>
                @endcan
            </div>

            <div class="card-group">

                @foreach($tools as $tool)
                    <div class="card">
                        <div class="panel panel-inverse">
                            <div class="panel-heading ui-sortable-handle">
                                <div class="panel-heading-btn">
                                    @can('editar-herramienta')
                                    <a id="tool_edit_" class="btn btn-xs btn-icon btn-success" data-bs-toggle="modal" data-bs-target="#EditToolModal" data-tool="{{ $tool->id }}" data-title="{{ $tool->title }}" data-text="{{ $tool->text }}"><i class="fa fa-pen"></i></a>
                                    @endcan
                                    <a href="javascript:" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                                    @can('borrar-herramienta')
                                    <a href="javascript:" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                        <img id="toolImg_{{ $tool->id }}" class="card-img-top" src="{{ asset($tool->photo) }}" alt="Card image cap" />
                        <div class="card-body">
                            <h4 id="toolTitle_{{ $tool->id }}" class="card-title">{{ $tool->title }}</h4>
                            <p id="toolText_{{ $tool->id }}" class="card-text">{{ $tool->text }}</p>
                            <!--<p class="card-text text-gray">Last updated 3 mins ago</p>-->
                        </div>
                    </div>
                @endforeach


            </div>

        </div>

        @include('home.edit_service')
        @include('home.edit_tool')


    </div>

@endsection


