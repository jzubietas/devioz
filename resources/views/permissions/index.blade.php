@extends('layouts.app')

@section('content')

    <h1 class="mb-3"></h1>

    <div class="bg-light p-4 rounded">
        <h2>Permissions</h2>
        <div class="lead">
            Manage your permissions here.
            <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm float-right">Add permissions</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped data-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Guard</th>
                <th scope="col">Editar</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>

    </div>
@endsection
@section('js')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            let table = new DataTable('.data-table',
                {
                    dom:'<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('permissions.index') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'name', name: 'name'},
                        {data: 'guard_name', name: 'guard_name'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                    buttons:[{extend:'copy',className:'btn-sm'},{extend:'csv',className:'btn-sm'},{extend:'excel',className:'btn-sm'},{extend:'pdf',className:'btn-sm'},{extend:'print',className:'btn-sm'}],
                    responsive:true,
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                    }
                });
        });
    </script>
@endsection
