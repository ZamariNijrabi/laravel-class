<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200">

            <li class="sidebar-toggler-wrapper">
                <div class="sidebar-toggler"></div>
            </li>

            @can('View Medicine')
                {{-- Medicine --}}
                <li class="
                @if(str_contains(Route::current()->uri, ['medicines','medicine']))
                        active open
@endif
                        margin-top-15">
                    <a href="{{ url('/medicines') }}">
                        <i class="fa fa-medkit"></i>
                        <span class="title">Medicines</span>
                        <span class="open selected"></span>
                    </a>
                </li>
            @endcan


            {{-- Customers --}}

            @can('View Customer')
            <li class="
                @if(str_contains(Route::current()->uri, ['customers','custormer']))
                    active open
@endif
                    ">
                <a href="{{url('/customers')}}">
                    <i class="fa fa-users"></i>
                    <span class="title">Customers</span>
                    <span class="open selected"></span>
                </a>
            </li>
            @endcan

            {{-- Order --}}
            @can('View Order')
            <li class="
                @if(str_contains(Route::current()->uri, ['order','orders']))
                    active open
@endif
                    ">
                <a href="{{ url('/orders') }}">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="title">Orders</span>
                    <span class="open selected"></span>
                </a>
            </li>
            @endcan

            {{--payments--}}

            @can('View Payment')
            <li class="
                @if(str_contains(Route::current()->uri, ['payment','payments']))
                    active open
@endif
                    ">
                <a href="{{ url('/payments') }}">
                    <i class="fa fa-dollar"></i>
                    <span class="title">Payments</span>
                    <span class="open seleted"></span>
                </a>
            </li>
            @endcan

            {{-- Daily Reports --}}
            @can('View Daily Report')
            <li class="
                @if(str_contains(Route::current()->uri, ['daily-reports','daily-report']))
                    active open
@endif
                    ">
                <a href="{{ url('/daily-reports') }}">
                    <i class="fa fa-bar-chart"></i>
                    <span class="title">Daily Reports</span>
                    <span class="open selected"></span>
                </a>
            </li>
            @endcan

            {{--settings--}}
            @can('View Settings')
            <li class="
                @if(str_contains(Route::current()->uri, ['settings','settting']))
                    active open
@endif
                    ">
                <a href="{{ url('/users') }}">
                    <i class="fa fa-cog"></i>
                    <span class="title">Settings</span>
                    <span class="open selected"></span>
                </a>
            </li>
            @endcan

            {{-- User profile setting --}}
            <li class="
                @if(str_contains(Route::current()->uri, ['profile']))
                    active open
@endif
                    ">
                <a href="{{url('/profile')}}">
                    <i class="icon-user"></i>
                    <span class="title">Account</span>
                    <span class="open selected"></span>
                </a>
            </li>
        </ul>
    </div>
</div>
