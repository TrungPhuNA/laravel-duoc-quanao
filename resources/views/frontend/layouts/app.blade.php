<!DOCTYPE html>
<html>
	<!-- header s -->
	@include('backend.layouts.header')
	<!-- header end -->
	<body>
		<header class="header">
			<!-- nav s -->
			@include('backend.layouts.nav')
			<!-- nav e -->
			<!-- menu s -->
			@include('backend.layouts.menu')
			<!-- menu e -->
			<!-- Content s -->
			@yield('content')
			<!-- Content e -->
			<!-- footer s -->
			@include('backend.layouts.footer')
			<!-- footer e -->
		<!-- script s -->
		@include('backend.layouts.script')
		<!-- script e -->
		</header>
	</body>
</html>