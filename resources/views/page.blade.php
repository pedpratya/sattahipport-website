<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <title>SATTAHIP WEB APPLICATION<</title>
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

		<nav id="sidebar">		
			<ul id="main-nav" class="open-active" data-id="{{ asset($manu['leftManu'][0]['url']) }}">
                            @foreach($manu['leftManu'] as $key => $value)
                            
                            <?php  if (!isset($value['child'])) { ?>
                               <li class="" onclick="changePage('{!! asset($value["url"]) !!}');">				
                                     <a>
                                        <i class='fa fa-indent'></i>
                                        {{ $value['name'] }}
                                     </a>   				
                               </li>
                                
                            <?php } else { ?>
                                <li class="dropdown">
                                            <a href="javascript:;">
                                                    <i class="fa fa-caret-square-o-down"></i>
                                                     {{ $value['name'] }}
                                                    <span class="caret"></span>
                                            </a>				

                                            <ul class="sub-nav">
                                                @foreach($value['child'] as $val)
                                                
                                                    <li onclick="changePage('{!! asset($val["url"]) !!}');">
                                                            <a >
                                                                    <i class="fa fa-angle-double-right"></i> 
                                                                    {{ $val['name'] }}
                                                            </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                </li>
                            <?php } ?>
                           @endforeach
                        </ul>				
		</nav> <!-- #sidebar -->

	</div> <!-- /#sidebar-wrapper -->


	
	<div id="content-modal">		
		
            <div id="content">		

                    <div id="content-header">
                    </div> <!-- #content-header -->	


                    <div id="content-container">	
                    </div> <!-- /#content-container -->			

            </div> <!-- #content -->		
		
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

<!--div id="id-modal-script"></div-->

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

<script>
    
    //*--Loadpage--*//
    var textLoading = "<div id='content'><div id='content-header'></div><div id='content-container'><center><img src='{{ asset('img/loaders/ajax-loader.gif') }}'/></center></div></div>";
    
    $(document).ready(function() {
        changePage($('#main-nav').attr('data-id'));
    });

    function changePage (urlLoad) {

        if(urlLoad!="#"){
        $("#content-modal").html(textLoading).load(urlLoad, function(responseTxt, statusTxt, xhr){

            if ( statusTxt == "error" ) {
                var msg = "Sorry but there was an error: ";
                $( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
            }
         });
        }
    }
    //*--Loadpage--*//
</script>
</body>

</html>