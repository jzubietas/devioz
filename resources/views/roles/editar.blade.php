@extends('layouts.app')

@section('content')
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="javascript:">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:">Roles Management</a></li>
        <li class="breadcrumb-item"><a href="javascript:">Tables</a></li>
        <li class="breadcrumb-item active">Buttons</li>
    </ol>

    <h1 class="page-header">Roles  <small>Administracion</small></h1>

    <div class="row">
        <div class="col-lg-12 ">
            <div class="float-md-start">
                <h2>Administracion de Roles</h2>
            </div>
            <div class="float-md-end">
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Nuevo Rol</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <strong>¡Revise los campos!</strong>
                @foreach ($errors->all() as $error)
                    <span class="badge badge-danger">{{ $error }}</span>
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="col-xl-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Informacion de Roles</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>

                <div class="alert alert-warning alert-dismissible rounded-0 mb-0 fade show d-none">
                    <button type="button" class="btn-close" data-bs-dismiss="alert">
                    </button>
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                </div>

                <div class="panel-body">

                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="">Nombre del Rol:</label>
                                {!! Form::text('name', $role->name, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 d-none">
                            <div class="form-group">
                                <label for="">Permisos para este Rol:</label>
                                <br/>
                                @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                        {{ $value->name }}</label>
                                    <br/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-8 table-responsive">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>

                    {!! Form::close() !!}

                    <div class="clearfix">...</div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 table-responsive">
                            <table id="permissions" class="table table-bordered permissions">
                                <thead>
                                <tr>
                                    <th >Action</th>
                                    <th>No</th>
                                    <th>Permiso</th>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            let table = $("#permissions").DataTable({
                    dom:'<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
                    processing: true,
                    serverSide: true,
                    /*ajax: {
                        url: "{{ route('permissions.index.user') }}",
                        data: function (query) {
                            query.user = user
                        }
                    },*/
                    ajax: "{{ route('permissions.index') }}",
                    columns: [
                        {data: 'action', name: 'action', orderable: false, searchable: false},

                        {data: 'name', name: 'name'},
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        //{data: 'email', name: 'email'},
                        //{data: 'role', name: 'role'},
                    ],
                    buttons:[{extend:'copy',className:'btn-sm'},{extend:'csv',className:'btn-sm'},{extend:'excel',className:'btn-sm'},{extend:'pdf',className:'btn-sm'},{extend:'print',className:'btn-sm'}],
                    responsive:true,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                    },
                });
        });
    </script>
@stop
