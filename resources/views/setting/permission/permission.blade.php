@extends('setting.master')

@section('page-level-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('standard/global/plugins/select2/select2.css') }}"/>
@endsection

@section('page-title', 'Permissions')

@section('page-breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-user"></i>
            <a href="customers">Permission List</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" data-toggle="modal" data-target="#assign-role-modal"
                    class="btn btn-primary btn-fit-height">Assign to Role
            </button>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('/roles/assign-permissions') }}" id="assign-role-form" method="post">
                @csrf
                {{-- Permission list --}}
                @foreach($permissions as $permission)

                    <div class="col-md-3" style="padding: 14px 20px">

                        <div class="md-checkbox">
                            <input id="{{ $permission->id }}" class="md-check" type="checkbox"
                                   value="{{$permission->name}}" name="permissions[]">
                            <label for="{{ $permission->id }}">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span>
                                {{ $permission->name }}</label>
                        </div>

                    </div>
                @endforeach
            </form>
        </div>
    </div>

    @include('setting.permission.modal')

@endsection

@section('page-level-js')
    <script type="text/javascript" src="{{ asset('standard/global/plugins/select2/select2.min.js') }}"></script>
@endsection

@section('validator')
    {!! JsValidator::formRequest('App\Http\Requests\RoleRequest','#create-role-form') !!}
@endsection

@section('init-js')
    TableAdvanced.init();
@endsection