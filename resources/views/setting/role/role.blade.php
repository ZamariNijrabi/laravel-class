@extends('setting.master')

@section('page-level-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('standard/global/plugins/select2/select2.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('standard/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('standard/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ asset('standard/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}"/>
@endsection

@section('page-title', 'Roles')

@section('page-breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-user"></i>
            <a href="customers">Role List</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" data-toggle="modal" data-target="#new-role-modal"
                    class="btn btn-primary btn-fit-height">New Role
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- User list table --}}
    <div class="portlet box blue-hoki">
        <div class="portlet-title">
            <div class="caption">

            </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_1">
                <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Permissions</th>
                    <th class="text-center">Users</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td class="text-center"> {{ $role->id }} </td>
                        <td class="text-center"> {{ $role->name }} </td>
                        <td class="text-center">
                            <a href="{{ url('/roles/'.$role->id) }}">
                                <i class="icon icon-eye"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ url('/roles/'.$role->id.'/user') }}">
                                <i class="icon icon-users"></i>
                            </a>
                        </td>

                        <td class="text-center"><a href="" onclick="editRole({{ $role->id }},'{{ $role->name }}', event)">
                                <i class="icon icon-pencil"></i></a></td>
                        <td class="text-center"><a href="" onclick="deleteRole({{ $role->id}},event)">
                                <i class="icon icon-trash text-danger"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- End user list table --}}

    @include('setting.role.modal')
    @include('helpers.delete-modal')

@endsection

@section('page-level-js')
    <script type="text/javascript" src="{{ asset('standard/global/plugins/select2/select2.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('standard/global/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('standard/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('standard/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('standard/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('standard/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('standard/admin/pages/scripts/table-advanced.js') }}"></script>
@endsection

@section('validator')
    {!! JsValidator::formRequest('App\Http\Requests\RoleRequest','#create-role-form') !!}
@endsection

@section('init-js')
    TableAdvanced.init();
@endsection
