@extends('layouts.app')

@section('content')
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="javascript:">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:">Users Management</a></li>
        <li class="breadcrumb-item"><a href="javascript:">Tables</a></li>
        <li class="breadcrumb-item active">Buttons</li>
    </ol>

    <h1 class="page-header d-none">Users  <small>Management</small></h1>

    <div class="row">
        <div class="col-lg-12 ">
            <div class="float-md-start">
                <h2>Usuasrios Gestion</h2>
            </div>
            <div class="float-md-end">
                <a class="btn btn-success" href="{{ route('usuarios.create') }}"> Crear nuevo usuario</a>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="panel panel-inverse">
                <div class="panel-heading d-none">
                    <h4 class="panel-title">DataTable - Buttons</h4>
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
                    <table id="users" class="table table-bordered users">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <p class="text-center text-primary d-none"><small>DevIoz.com</small></p>
@endsection

@section('js')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            let table = new DataTable('#users',
                {
                    dom:'<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('usuarios.index') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'role', name: 'role'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
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
