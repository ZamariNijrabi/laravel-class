@include('layouts.admin.head')
@include('layouts.admin.header')

<div class="page-container">
    @include('layouts.admin.setting-sidebar')
    <div class="page-content-wrapper">
        <div class="page-content">
            <h3 class="page-title">
                @yield('page-title')
            </h3>
            <div class="page-bar">
                @yield('page-breadcrumb')
            </div>

            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.admin.footer')

