<!DOCTYPE html>
<html>
<head>
	<title>Moodle | A Virtual Learning System</title>
	
	@yield('meta')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/ubuntu.min.css') }}">
	@yield('css')
	<style type="text/css">
	.navbar { border-radius: 0 }
	</style>

	@yield('initjs')
</head>
<body>
	@include('menus.topmenu')

	@yield('content')
	@yield('bottom')
	@yield('js')
	@yield('stop')
</body>
</html>