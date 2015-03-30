<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sattahipport</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('css/sb-admin.css') !!}" rel="stylesheet">
    <!-- <link href="{!! asset('css/style.css') !!}" rel="stylesheet"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="no-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top navbar-inverse-blue" role="navigation">
            <!-- Top Menu Items -->
            @include('inc.topbar')
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div style="margin-top:50px;"></div>

                <div class="row">
                    <div class="col-lg-2">
                        @yield('inc.left_menu')
                    </div>
                    <div class="col-lg-10">
                        @yield('content')
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            var height_document = $( document ).height(),
                height_content  = $('#content').height();
            
            if (height_document > height_content) {
                $('#content').height(height_document - 140);
            }
        });
    </script>
</body>

</html>
