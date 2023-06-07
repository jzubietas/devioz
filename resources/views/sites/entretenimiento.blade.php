@extends('layouts.app')

@section('content')

<ol class="breadcrumb float-xl-end">

    <li class="breadcrumb-item active">Portada</li>
</ol>

<h1 class="page-header">DevioZ <small> Desarrollo de Software.</small></h1>



<div class="col-xl-12">
    <div class="mb-10px fs-10px mt-10px"><b class="text-dark">Portada</b></div>

    <div class="card border-0">
        <img class="card-img-top" src="{{ asset('img/gallery/gallery-1__1.jpg') }}" alt="" />
        <div class="card-body">
            <h4 class="card-title mb-3px">Nosotros</h4>
            <p class="card-text">Somos una empresa dedicada al desarrollo de Software, gestión y administración de bases de datos, big data, automatización, arquitectura devops, gestión de procesos para toda innovación TI.</p>
            <a href="javascript:;" class="btn btn-sm btn-default">Quiero saber más</a>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="mb-10px fs-10px mt-10px"><b class="text-dark">Nuestro Pensamiento</b></div>

            <div class="col-sm card text-white border-0 bg-teal text-center mb-2">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p> El software es <br />una gran combinación<br /> entre arte e ingeniería.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-n2 mb-1 text-white text-opacity-75">
                        Autor <cite title="Source Title">Bill Gates</cite>
                    </figcaption>
                </div>
            </div>


            <div class="col-sm card text-white border-0 bg-blue text-center mb-2">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-2">El diseño no es<br />lo que se ve y lo que se siente.<br /> El diseño es cómo funciona.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-n2 mb-1 text-white text-opacity-75">
                        Autor <cite title="Source Title">Steve jobs</cite>
                    </figcaption>
                </div>
            </div>


            <div class="col-sm card text-white border-0 bg-indigo text-center mb-2">
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p class="mb-2">Especialmente en la tecnología,<br />necesitamos cambios revolucionarios,<br /> no cambios incrementales.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer mt-n2 mb-1 text-white text-opacity-75">
                        Autor <cite title="Source Title">Larry Page</cite>
                    </figcaption>
                </div>
            </div>


        </div>
    </div>


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

                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-2">
                    <h4 class="card-title">Deseo solicitar un desarrollo móvil</h4>
                    <p class="card-text">Si tu propósito es ingresar en las plataformas IOS y Android, solicita tu aplicación multiplataforma.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-3">
                    <h4 class="card-title">Deseo solicitar un normalización de BBDD</h4>
                    <p class="card-text">Si desear administrar tu data a otro nivel, solicita nuestros servicios de estandarización, normalización y automatización de Datos.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-4">
                    <h4 class="card-title">Deseo solicitar un Dashboard Corporativo</h4>
                    <p class="card-text">Si deseas visualizar tus KPI's de forma definitiva para la toma de desiciones, solicita nuestros servicios de visualizadores y Dashboard.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-5">
                    <h4 class="card-title">Deseo solicitar mejorar los procesos de mi empresa</h4>
                    <p class="card-text">Si deseas documentar, relacionar, ordenar y mejorar los procesos de tu compañia, solicita nuestros servicios de mejora de procesos TI.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-6">
                    <h4 class="card-title">Deseo implementar la cultura DevOps en mi empresa</h4>
                    <p class="card-text">Si deseas implementar una arquitectura de negocio nueva para mejorar los procesos de desarrollo y gestión en tu empresa, solicita aqui.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-7">
                    <h4 class="card-title">Deseo implementar Automatización Robótica de Procesos</h4>
                    <p class="card-text">Se deseas utilizar automatizaciones para tareas repetitivas y manuales de un proceso de negocio, solicitalo ahora mismo.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-8">
                    <h4 class="card-title">Deseo innovar con procesos de gestión Big Data</h4>
                    <p class="card-text">Si deseas gestionar y analizar grandes volúmenes de datos, que son demasiado grandes y complejos para ser procesados por herramientas y tecnologías tradicionales. Solicítalo ahora.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-9">
                    <h4 class="card-title">Deseo solicitar soporte técnico de asistencia</h4>
                    <p class="card-text">Si solicitas asistencia técnica para resolver problemas con el hardware o software de una empresa. Hazlo aquí.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>

                <div class="tab-pane fade" id="card-pill-10">
                    <h4 class="card-title">Deseo solicitar mejorar la seguridad de mis aplicaciones y datos</h4>
                    <p class="card-text">Si deseas protección de sistemas de la información y los datos que se almacenan, procesan y transmiten. Solicitalo ahora mismo.</p>
                    <a href="javascript:;" class="btn btn-sm btn-success">Solicitar</a>
                </div>


            </div>
        </div>
    </div>



    <div class="col-xl-12">
        <div class="mb-10px fs-10px mt-20px"><b class="text-dark">Nuestros Servicios</b></div>

        <div class="card-group">

            <div class="card">
                <img class="card-img-top" src="{{ asset('img/gallery/gallery-6.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                    <h4 class="card-title">Gestión de Procesos</h4>
                    <p class="card-text">Un gestor realiza y coordina el trabajo en un proceso o procesos y gestiona el rendimiento de los procesos del proceso.</p>
                    <p class="card-text text-gray">Last updated 3 mins ago</p>
                </div>
            </div>


            <div class="card">
                <img class="card-img-top" src="{{ asset('img/gallery/gallery-7.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                    <h4 class="card-title">DevOps</h4>
                    <p class="card-text">DevOps es un método de desarrollo de software que se centra en la colaboración, comunicación e integración entre los ingenieros de sistemas y los desarrolladores de software. Para eso se designa Un ingeniero DevOps que es un ingeniero de sistemas o de software, con habilidades específicas para formar y dirigir equipos DevOps. </p>
                    <p class="card-text text-gray">Last updated 3 mins ago</p>
                </div>
            </div>


            <div class="card">
                <img class="card-img-top" src="{{ asset('img/gallery/gallery-8.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                    <h4 class="card-title">Desarrollo</h4>
                    <p class="card-text">Nuestros experimentados y capacitados expertos en TI ayudan a las empresas a mantenerse en contacto con desarrollos recientes, innovaciones y tecnología disruptiva.</p>
                    <p class="card-text text-gray">Last updated 3 mins ago</p>
                </div>
            </div>


            <div class="card">
                <img class="card-img-top" src="{{ asset('img/gallery/gallery-9.jpg') }}" alt="Card image cap" />
                <div class="card-body">
                    <h4 class="card-title">Bases de Datos</h4>
                    <p class="card-text">Se encarga no solo de almacenar datos, sino también de conectarlos entre sí en una unidad lógica. En términos generales, una base de datos es un conjunto de datos estructurados que pertenecen a un mismo contexto y, en cuanto a su función, se utiliza para administrar de forma electrónica grandes cantidades de información.</p>
                    <p class="card-text text-gray">Last updated 3 mins ago</p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection