@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-2">
            <a href="{{ url('/companies') }}">
                <div class="tile">
                    <i class="fa fa-home"></i>
                </>div
                <p class="text-center">Company</p>
            </a>

        </div>
    </div>
@endsection
