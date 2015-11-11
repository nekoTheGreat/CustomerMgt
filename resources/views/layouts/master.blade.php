<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="/libs/materialize/css/materialdesignsicon.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/libs/materialize/css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
	<div class="container-fluid">
		@include('layouts.nav')

		@yield('content')
	</div>
	<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/libs/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>