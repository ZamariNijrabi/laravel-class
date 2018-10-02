@extends('company.master')

@section('content')


    <div class="row">
        <div class="alert alert-primary col-md-12 margin-top-20">
            My Companies

            <button class="btn btn-outline-primary btn-sm float-right" data-toggle="modal"
                    data-target="#create-company"> Create New Company
            </button>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered table-sm">
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
                            Edit
                        </a>
                    </td>
                    <td class="text-center text-danger">
                        <a href="" class="text-danger" onclick="deleteCompany({{$company->id}}, event)">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $companies }}
    </div>

    @include('company.modal')
    @include('helpers.delete-modal')
@endsection
@section('validation')
    {!! JsValidator::formRequest('App\Http\Requests\CompanyRequest','#create-company-form') !!}
@endsection

@section('page-level-js')
    <script>
        function deleteCompany(id, event) {
            event.preventDefault();
            $('#delete-form').attr('action', '/companies/' + id);
            $('#delete-modal').modal('show');
        }
    </script>
@endsection