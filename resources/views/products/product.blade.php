@extends('company.master')

@section('content')


    <div class="row">
        <div class="alert alert-primary col-md-12 margin-top-20">
            My Products

            <button class="btn btn-outline-primary btn-sm float-right" data-toggle="modal"
                    data-target="#create-company"> Add New Product
            </button>
        </div>
    </div>

    <div class="row">
        <table class="table table-bordered table-sm">
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>
                {{--<th class="text-center">Status</th>--}}
                
                <th class="text-center">Price</th>
                <th class="text-center">Is Used</th>
                <th class="text-center">Register Date</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Delete</th>
            </tr>
            @foreach($product as $products)
                <tr>
                    <td class="text-center">{{$products->id}}</td>
                    <td class="text-center">{{$products->name}}</td>         
                    <td class="text-center">{{$products->price}} af</td>
                    <td class="text-center">{{$products->is_used}}</td>
                    <td class="text-center">{{$products->created_at}}</td>
                   
                    <td class="text-center text-primary">
                        <a href="" onclick="">
                            Edit
                        </a>
                    </td>
                    <td class="text-center text-danger">
                        <a href="" class="text-danger" onclick="">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $product->links() }}
    </div>

   
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