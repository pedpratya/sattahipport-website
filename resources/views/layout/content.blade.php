<div id="content">		

        <div id="content-header">
                <h1>@yield('breadcrumbs')</h1>
        </div> <!-- #content-header -->	


        <div id="content-container">
                @yield('content')		
        </div> <!-- /#content-container -->			

</div> <!-- #content -->

<!-- #modal content -->
@yield('modal-content')

<!-- #javascript -->
@yield('javascript')