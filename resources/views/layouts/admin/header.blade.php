<div class="page-header -i navbar navbar-fixed-top">

    <div class="page-header-inner">
        <div class="page-logo">
            <a href="{{ url('/home') }}"> Online Shoping</a>
            <div class="menu-toggler sidebar-toggler hide">

            </div>
        </div>

        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse"> </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">

                        <span class="username username-hide-on-mobile">
                            @if(Auth::check())
                                {{Auth::user()->name}}
                            @endif
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="{{url('/profile')}}">
                                <i class="icon-user"></i> Profile </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="icon-key"></i>Logout</a>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>

<div class="clearfix">
</div>
