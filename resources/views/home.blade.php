<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>@lang('welcome.appName') - @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="{!! csrf_token() !!}" name="csrf_token"/>


    <link href="{{asset('standard/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/global/css/components.css')}}" id="style_components" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('standard/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    @yield('page-level-css')
    <link id="style_color" href="{{asset('standard/admin/layout/css/themes/darkblue.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>


    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>


</head>
<body class="page-header-fixed">

@include('layouts.admin.header')
<div class="page-container">
    <div class="page-content-wrapper">
        <div class="container dashboard">

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3 col-xs-offset-1 col-sm-offset-2  text-center">
                    <h3>AppName</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 margin-top-100">

                    {{-- medicines --}}
                    <div class="col-md-2 col-sm-4 col-xs-6 margin-top-10">
                        <a href="{{ url('/companies') }}" class="text-center">
                            <div class="col-md-4 col-xs-6">
                                <div class="tiles">
                                    <i class="fa fa-car"></i>
                                    <p>Companies</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Customers --}}
                    <div class="col-md-2 col-sm-4 col-xs-6 margin-top-10">
                        <a href="cu" class="text-center">
                            <div class="col-md-2 text-center">
                                <div class="tiles">
                                    <i class="fa fa-user"></i>
                                    <p>Products</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Daily Report --}}
                    <div class="col-md-2 col-sm-4 col-xs-6 margin-top-10">
                        <a href="/daily-reports" class="text-center">
                            <div class="col-md-2 text-center">
                                <div class="tiles">
                                    <i class="fa fa-bar-chart"></i>
                                    <p>Daily Report</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Settings --}}
                    <div class="col-md-2 col-sm-4 col-xs-6 margin-top-10">
                        <a href="/medicine" class="text-center">
                            <div class="col-md-2 text-center">
                                <div class="tiles">
                                    <i class="fa fa-cog"></i>
                                    <p>settings</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Users --}}
                    <div class="col-md-2 col-sm-4 col-xs-6 margin-top-10">
                        <a href="/medicine" class="text-center">
                            <div class="col-md-2 text-center">
                                <div class="tiles">
                                    <i class="fa fa-users"></i>
                                    <p>users</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{-- Finance --}}
                    <div class="col-md-2 col-sm-2 col-xs-6 margin-top-10">
                        <a href="/medicine" class="text-center">
                            <div class="col-md-2 text-center">
                                <div class="tiles">
                                    <i class="fa fa-dollar"></i>
                                    <p>Payments</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('standard/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('standard/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>

<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
    });
</script>
</body>
</html>
