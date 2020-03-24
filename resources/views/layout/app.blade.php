<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	

</head>
<body>

	<div class="btn btn-info">button</div>
	@yield('content')

	<script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
</body>
</html>