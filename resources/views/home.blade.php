@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-2">
            <a href="{{ url('/companies') }}">
                <div class="tile">
                    <i class="fa fa-home"></i>
                </div>
                <p class="text-center">Company</p>
            </a>
        </div>
        <div class="col-md-2 offset-1">
            <a href="{{ url('/users') }}">
                <div class="tile">
                    <i class="fa fa-user"></i>
                </div>
                <p class="text-center">Users</p>
            </a>

        </div>
        </div>
    </div>

@endsection
