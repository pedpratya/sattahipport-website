<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <title>SATTAHIP Web Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
	<meta name="author" content="" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}" type="text/css" />		
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" type="text/css" />	
	<link rel="stylesheet" href="{!! asset('js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css') !!}" type="text/css" />		

	<link rel="stylesheet" href="{!! asset('css/App.css') !!}" type="text/css" />

	<link rel="stylesheet" href="{!! asset('css/login.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('css/custom.css') !!}" type="text/css" />
</head>
<body>
<div id="wrapper">
	
	<header id="header">
		 @include('inc.header')
	</header> <!-- header -->

	
	<div id="content-not-manu">		


		<div id="content-container-not-manu">
			@yield('content')		
		</div> <!-- /#content-container -->			
		
	</div> <!-- #content -->
	
	
</div> <!-- #wrapper -->

<footer id="footer">
	<ul class="nav pull-right">
		<li>
			Copyright &copy; 2015, Sattahip E-Port.
		</li>
	</ul>
</footer>
	
<script src="{{ asset('js/libs/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/App-tamplate.js') }}"></script>
</body>

</html>