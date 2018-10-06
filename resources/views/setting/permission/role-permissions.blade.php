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
@endsection

@section('content')

    <div class="alert alert-info"> The <strong class="text-danger">{{ $role->name }} </strong> role last <strong> permissions </strong> will be lost if you grant new list of permissions.</div>

    <form action="{{ url('/roles/'.$role->id.'/sync-permissions') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                {{-- Permission list --}}
                @foreach($permissions as $permission)

                    <div class="col-md-3" style="padding: 10px 20px">

                        <div class="md-checkbox">
                            <input id="{{ $permission->id }}" class="md-check" type="checkbox"
                                   value="{{$permission->name}}"
                                   @foreach($role->permissions as $rolePermission)
                                   @if($permission->id == $rolePermission->id)
                                   checked
                                   @endif
                                   @endforeach
                                   name="permissions[]">
                            <label for="{{ $permission->id }}">
                                <span class="inc"></span>
                                <span class="check"></span>
                                <span class="box"></span>
                                {{ $permission->name }}</label>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Grant Permissions</button>
            </div>
        </div>
    </form>
    @include('setting.role.modal')

@endsection

@section('page-level-js')
    <script type="text/javascript" src="{{ asset('standard/global/plugins/select2/select2.min.js') }}"></script>
@endsection