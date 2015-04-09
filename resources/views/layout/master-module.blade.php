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
	<link rel="stylesheet" href="{!! asset('js/plugins/magnific/magnific-popup.css') !!}" type="text/css" />
        
	<link rel="stylesheet" href="{!! asset('js/plugins/icheck/skins/minimal/blue.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('js/plugins/datepicker/datepicker.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('js/plugins/select2/select2.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('js/plugins/simplecolorpicker/jquery.simplecolorpicker.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('js/plugins/timepicker/bootstrap-timepicker.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('js/plugins/fileupload/bootstrap-fileupload.css') !!}" type="text/css" />        
        
	<link rel="stylesheet" href="{!! asset('css/App.css') !!}" type="text/css" />

	<link rel="stylesheet" href="{!! asset('css/custom.css') !!}" type="text/css" />
</head>
<body>
<div id="wrapper">
	
	<header id="header">
		 @include('inc.header')
	</header> <!-- header -->


	<nav id="top-bar" class="collapse top-bar-collapse">
             @include('inc.menu_header')
	</nav> <!-- /#top-bar -->


	<div id="sidebar-wrapper" class="collapse sidebar-collapse">
	
		<div id="search">
			<form>
				<input class="form-control input-sm" type="text" name="search" placeholder="Search..." />

				<button type="submit" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
			</form>		
		</div> <!-- #search -->
	
		<nav id="sidebar">		
			
			<ul id="main-nav" class="open-active">			
                            @include('inc.menu_left')
			</ul>
					
		</nav> <!-- #sidebar -->

	</div> <!-- /#sidebar-wrapper -->


	
	<div id="content">		
		
		<div id="content-header">
			<h1>@yield('breadcrumbs')</h1>
		</div> <!-- #content-header -->	


		<div id="content-container">
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

<!-- #modal html -->
@yield('modalhtml')

<script src="{{ asset('js/libs/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/plugins/icheck/jquery.icheck.js') }}"></script>
<script src="{{ asset('js/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/plugins/timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('js/plugins/simplecolorpicker/jquery.simplecolorpicker.js') }}"></script>
<script src="{{ asset('js/plugins/select2/select2.js') }}"></script>
<script src="{{ asset('js/plugins/autosize/jquery.autosize.min.js') }}"></script>
<script src="{{ asset('js/plugins/textarea-counter/jquery.textarea-counter.js') }}"></script>
<script src="{{ asset('js/plugins/fileupload/bootstrap-fileupload.js') }}"></script>
<!--modal popup-->
<script src="{{ asset('js/plugins/magnific/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/plugins/howl/howl.js') }}"></script>

<script src="{{ asset('js/App-tamplate.js') }}"></script>
<script src="{{ asset('js/form/datepicker-class.js') }}"></script>

@yield('bottomscript')
</body>

</html>