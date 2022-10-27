@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pusaka | Politap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	
	<link rel="shortcut icon" href="{{ url('public') }}/politap.png">
	
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/materialize.min.css">
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/slick.css">
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/slick-theme.css">
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/owl.theme.css">
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/owl.transitions.css">
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/lightbox.min.css">
	<link rel="stylesheet" href="{{ url('public/alumni') }}/css/style.css">
	
</head>
<body>

	<!-- navbar -->
	@include('layout.alumni.header')
	<!-- end panel control -->
	
	@yield('content')

	
	
	<!-- footer -->
	@include('layout.alumni.footer')
	<!-- end footer -->
	
	<!-- script -->
	<script src="{{ url('public/alumni') }}/js/jquery.min.js"></script>
	<script src="{{ url('public/alumni') }}/js/materialize.min.js"></script>
	<script src="{{ url('public/alumni') }}/js/slick.min.js"></script>
	<script src="{{ url('public/alumni') }}/js/owl.carousel.min.js"></script>
	<script src="{{ url('public/alumni') }}/js/custom.js"></script>
</body>
</html>
