@extends('company.master')
@section('title','Companies')

@section('page-title', 'Companies')

@section('page-breadcrumb')
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-user"></i>
            <a href="customers">Companies List</a>
        </li>
    </ul>

    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" data-toggle="modal" data-target="#create-company"
                    class="btn btn-primary btn-fit-height">New Company
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
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    {{--<th class="text-center">Status</th>--}}
                    <th class="text-center">Register Date</th>
                    <th class="text-center">Established Date</th>
                    <th class="text-center">License Number</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td class="text-center">{{$company->id}}</td>
                        <td class="text-center">{{$company->name}}</td>
                        <td class="text-center">{{$company->created_at}}</td>
                        <td class="text-center">{{$company->established_date}}</td>
                        <td class="text-center">{{$company->license_number}}</td>
                        <td class="text-center">{{$company->phone}}</td>
                        <td class="text-center text-primary">
                            <a href="" onclick="editCompany({{ $company->id }}, event)">
                                <i class="icon icon-pencil"></i>
                            </a>
                        </td>
                        <td class="text-center text-danger">
                            <a href="" class="text-danger" onclick="deleteCompany({{$company->id}}, event)">
                                <i class="icon icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $companies }}


    @include('company.modal')
    @include('helpers.delete-modal')
@endsection

@section('page-level-js')
    <script>

        /**
         * Delete modal
         *
         * @param id
         * @param event
         */
        function deleteCompany(id, event) {
            event.preventDefault();
            // $('#delete-form').attr('action', '/companies/' + id);
            $('#delete-modal').modal('show');
        }
    </script>
@endsection

@section('validator')
    {!! JsValidator::formRequest('App\Http\Requests\CompanyRequest','#create-company-form') !!}
@endsection
