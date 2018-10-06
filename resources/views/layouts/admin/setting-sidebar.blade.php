<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200">

            <li class="sidebar-toggler-wrapper">
                <div class="sidebar-toggler"></div>
            </li>


            {{-- Users --}}
            <li class=" @if(str_contains(Route::current()->uri, ['users']))active open @endif margin-top-15">
                <a href="{{ url('/users') }}">
                    <i class="fa fa-users"></i>
                    <span class="title">Users</span>
                    <span class="open selected"></span>
                </a>
            </li>

            {{-- Roles --}}
            <li class="
                @if(str_contains(Route::current()->uri, ['roles'])) active open @endif">
                <a href="{{url('/roles')}}">
                    <i class="fa fa-bars"></i>
                    <span class="title">Roles</span>
                    <span class="open selected"></span>
                </a>
            </li>


            {{-- Permissions --}}
            <li class="@if(str_contains(Route::current()->uri, ['permission','permissions','/roles/'])) active open @endif ">
                <a href="{{ url('/permissions') }}">
                    <i class="fa fa-certificate"></i>
                    <span class="title">Permissions</span>
                    <span class="open selected"></span>
                </a>
            </li>

            {{-- Back to desk --}}
            <li>
                <a href="{{ url('/home') }}">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title"> Back</span>
                </a>
            </li>
        </ul>
    </div>
</div>