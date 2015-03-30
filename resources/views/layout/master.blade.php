<!-- Stored in app/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sattahip Port</title>
		
		<!-- Bootstrap -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">

		<link href="{{ asset('css/style.css') }}" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    <body> <!-- แบ่ง 3 ส่วน -->
		<div class="container"><!-- container -->
		<!-- ส่วนที่ 1 -->
		 @include('inc.topbar')
		<!-- Bread crumb -->
	      <div id="breadcrumb">
	      	<div class="row container-breadcrumb">
                @yield('breadcrumbs')
			</div>
	      </div><!-- End Bread crumb -->

		<!-- container Content-->
		  <div class="container-content">             
              	<div class="left-menu-box col-lg-2 col-md-2 col-sm-2">
                  <!-- ส่วนที่ 2 Left Manu-->
                    @include('inc.left_manu')
              	</div>
            	<div class="container-fluid container-content col-lg-10 col-md-10">
            	  <!-- ส่วนที่ 3 Content-->
                	@yield('content')
                </div>
		  </div><!-- End container Content-->
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>