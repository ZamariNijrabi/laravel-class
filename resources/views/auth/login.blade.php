<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('standard/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/admin/pages/css/login-soft.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('standard/global/css/components.css')}}" id="style_components" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/global/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('standard/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="{{asset('standard/admin/layout/css/themes/darkblue.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('standard/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>

    <style>
        body{
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            background: no-repeat;
            background: url(/img/bg-masthead.jpg) no-repeat;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            background-size:cover;
        }
    </style>
</head>

<body class="login">

<div class="logo">
    <h2 style="color: white">Welcome to online shoping</h2>
</div>

<div class="menu-toggler sidebar-toggler">
</div>
<div class="content">
    <form class="login-form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h4 class="form-title">Login to your account.</h4>
        <div class="alert alert-danger display-hide">
            <span>Please enter your email and password.</span>
            <button class="close" data-close="alert"></button>

        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" autofocus
                       placeholder={{@trans('email')}} name="email" value="{{ old('email') }}"/>

                @if ($errors->has('email'))
                    <span class="help-block" style="color:red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                       placeholder={{@trans('password')}}
                               name="password"/>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn blue btn-block">
                Login
            </button>
        </div>
    </form>
</div>

<div class="copyright"><b style="color: grey">

        20{{date('y')}} &copy; Softbazar - Kabul</b>
</div>


<script src="{{asset('standard/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

<script src="{{asset('standard/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('standard/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>

<script src="{{asset('standard/admin/pages/scripts/login-soft.js')}}" type="text/javascript"></script>


<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>

</body>
</html>
