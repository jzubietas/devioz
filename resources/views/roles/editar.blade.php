@extends('layouts.app')

@section('content')
    <ol class="breadcrumb float-xl-end">
        <li class="breadcrumb-item"><a href="javascript:">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:">Roles Management</a></li>
        <li class="breadcrumb-item"><a href="javascript:">Tables</a></li>
        <li class="breadcrumb-item active">Buttons</li>
    </ol>

    <h1 class="page-header">Roles  <small>Administracion</small></h1>

    <input type="hidden" id="rol_id" name="rol_id" value="{{ $role->id }}">

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
                                    <th>Item</th>
                                    <th >Action</th>
                                    <th>Nombre</th>
                                    {{--<th>Permiso</th>--}}
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

            var userSelected = [];
            var userUnselected = [];
            var rowsToSelect = [];
            var rowsToDeselect = [];
            var selectAll = false;

            var table = $("#permissions").DataTable({
                    dom: 'Bfrtip',
                    //dom:'<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
                    responsive: true,
                    "bPaginate":true,
                    "bFilter":true,
                    "bInfo":true,
                    //processing: true,
                    //serverSide: true,
                    columnDefs: [{
                        'targets': [0], /* column index */
                        'orderable': false, /* true or false */
                    }],
                    ajax: {
                        url: "{{ route('permissions.index.user') }}",
                        data: function (query) {
                            query.rol_id = $("#rol_id").val()
                        }
                    },
                    //ajax: "{{ route('permissions.index') }}",
                    columns: [
                        {
                            "data": "id",
                            'targets': [0],
                            'checkboxes': {
                                'selectRow': true
                            },
                            defaultContent: '',
                            orderable: false,
                        },
                        {data: 'action', name: 'action', orderable: false, searchable: false},

                        {data: 'name', name: 'name'},
                    ],
                    buttons:[
                        {extend:'copy',className:'btn-sm'},
                        {extend:'csv',className:'btn-sm'},
                        {extend:'excel',className:'btn-sm'},
                        {extend:'pdf',className:'btn-sm'},
                        {extend:'print',className:'btn-sm'},
                        {
                            text: 'Todos',
                            action: function ( e, dt, node, config ) {
                                selectAll = true;

                                // Clear all user selections
                                userSelected = [];
                                userUnselected = [];
                                dt.draw( false );
                            }
                        },
                        {
                            text: 'Ninguno',
                            action: function ( e, dt, node, config ) {
                                selectAll = false;

                                // Clear all user selections
                                userSelected = [];
                                userUnselected = [];
                                dt.draw( false );
                            }
                        }
                    ],
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                        buttons: {
                            selectAll: "Select all items",
                            selectNone: "Select none"
                        }
                    },
                    columnDefs: [
                        {
                            orderable: false,
                            className: 'select-checkbox',
                            targets: ["id"]
                        }
                    ],
                    select: {
                        style: 'multi',
                        //info:false
                        selector: 'td:first-child'
                    },
                    order: [[0, 'desc']],
                });

            table.on('draw', function () {


                if ( selectAll === true) {

                    // Select all rows on page unless it is user unselected
                    rowsToSelect = table.rows().ids().toArray()
                        .reduce(function (result, value) {
                            value = '#' + value;
                            if ( userUnselected.indexOf(value) === -1 ) {
                                result.push(value);
                            }
                            return result;
                        }, []);

                    // Clear deselect all id's
                    rowsToDeselect = [];

                } else if ( selectAll === false ) {

                    // deselect all rows on page unless its user selected
                    rowsToDeselect = table.rows().ids().toArray()
                        .reduce(function (result, value) {
                            value = '#' + value;
                            if ( userSelected.indexOf(value) === -1 ) {
                                result.push(value);
                            }
                            return result;
                        }, []);

                    // Clear select all id's
                    rowsToSelect = [];

                }

                console.log('draw');
                console.log(rowsToSelect,  userSelected );
                console.log(rowsToDeselect,  userUnselected );

                table.rows( rowsToSelect.concat( userSelected ) ).select();

                // Delay row deselctions to allow for DOM update of row().select()
                setTimeout( function ()  {
                    table.rows( rowsToDeselect.concat( userUnselected ) ).deselect();
                }, 0);


                // Datatables removes our custom element if 0 records are displayed due to filtering
                if ( table.page.info().recordsDisplay === 0 ) {
                    var selected = 0;

                    if ( selectAll ) {
                        selected = table.page.info().recordsTotal - userUnselected.length;
                    } else {
                        selected = userSelected.length;
                    }

                    if ( selected === 0) {
                        $('.select-info').remove();
                    } else {
                        var rowsSelected = '1 row selected';
                        if ( selected > 1 ) {
                            rowsSelected = selected + ' rows selected';
                        }
                        var span = '<span class="select-info">' +
                            '<span class="select-item">' + rowsSelected + '</span>' +
                            '</span>';
                        $('.select-info').remove();
                        $('#example_info').append( $(span) );
                    }
                }
            });

            table.on('select deselect', function (e, dt, type, indexes) {


                var selected = 0;

                if ( selectAll ) {
                    selected = table.page.info().recordsTotal - userUnselected.length;
                } else {
                    selected = userSelected.length;
                }

                if ( selected === 0) {
                    $('.select-info').remove();
                } else {
                    var rowsSelected = '1 row selected';
                    if ( selected > 1 ) {
                        rowsSelected = selected + ' rows selected';
                    }
                    var span = '<span class="select-info">' +
                        '<span class="select-item">' + rowsSelected + '</span>' +
                        '</span>';
                    $('.select-info').remove();
                    $('#example_info').append( $(span) );
                }

            });

            table.on('user-select', function (e, dt, type, cell, originalEvent) {


                var id = '#' + table.row(cell.index().row).id();
                var selectedIndex = userSelected.indexOf( id );
                var unselectedIndex = userUnselected.indexOf( id );

                if ( selectAll ) {

                    // Toggle user unselected
                    if ( unselectedIndex !== -1 ) {
                        userUnselected.splice( unselectedIndex, 1 );
                    } else {
                        userUnselected.push( id );
                    }

                    // Remove from user selected
                    if ( selectedIndex !== -1 ) {
                        userSelected.splice( selectedIndex, 1 );
                    }
                } else {

                    // Toggle user selected
                    if ( selectedIndex !== -1 ) {
                        userSelected.splice( selectedIndex, 1 );
                    } else {
                        userSelected.push( id );
                    }

                    // Remove from unselected
                    if ( unselectedIndex !== -1 ) {
                        userUnselected.splice( unselectedIndex, 1 );
                    }

                }

                console.log('user-select');
                console.log(userSelected);
                console.log(userUnselected);

            });

            $(document).on('click','button[type=submit]',function(e){
                e.preventDefault()

                var table = $('#permissions').DataTable();
                var rows = table.rows({selected: true}).data();
                console.log(rows.length);
                /*$.each(rows, function(index, rowId) {
                    var data = rows.data();
                    console.log(data);
                    console.log(data[1]);
                });*/

                //return true;
            })

        });
    </script>

@stop
