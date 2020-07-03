<!-- jQuery -->
<script src="{{ asset('backend_asset/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('backend_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src=" {{ asset('backend_asset/js/adminlte.js') }}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src=" {{ asset('backend_asset/js/main.js') }}"></script>

@yield('js-custom.lib')
@yield('js-custom.script')
