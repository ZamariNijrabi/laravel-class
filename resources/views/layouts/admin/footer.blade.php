<div class="page-footer">
    <div class="page-footer-inner">
        20{{date('y')}} &copy;  Rabia-e-Balkhi University - Kabul
    </div>
</div>

<script src="{{asset('standard/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('standard/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>

@yield('page-level-js')

<script src="{{asset('standard/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{asset('standard/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
{{-- <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.fa.js')}}"></script> --}}

{{--  Laraveljsvalidate scripts  --}}
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{{--  Custom scripts   --}}
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

@yield('validator')
<script>
    $(document).ready(function () {
        $(".datepicker").datepicker();
        $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        })
    });

    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Demo.init(); // init demo features
        @yield('init-js')
    });

</script>
</body>
</html>
