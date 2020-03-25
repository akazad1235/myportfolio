<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
	

</head>
<body>

	@include('layout.menu')
	@yield('content')

	<script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
</body>
</html>