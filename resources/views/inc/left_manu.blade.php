<!-- LEFT MENU -->
<ul class="nav nav-sidebar">
    <li class="nav-mainmenu hidden-tablet" data-toggle="collapse" data-target="#organization" class="collapsed active"><a href="{{ URL::to('admin/organization')}}">องค์กร</a></li>
       <ul class="nav nav-sidebar nav-stacked collapse " id="organization">
        </ul>

    <li class="nav-mainmenu hidden-tablet" data-toggle="collapse" data-target="#system-admin" class="collapsed active"><a href="{{ URL::to('admin/system-admin')}}">ระบบงาน</a></li>
            <ul class="nav nav-sidebar nav-stacked collapse " id="system-admin">
            </ul>

    <li class="nav-mainmenu hidden-tablet" data-toggle="collapse" data-target="#usermanagement" class="collapsed active"><a href="{{ URL::to('admin/usermanagement')}}">User Management</a></li>
            <ul class="nav nav-sidebar nav-stacked collapse " id="usermanagement">
            </ul>
    <li class="nav-mainmenu hidden-tablet" data-toggle="collapse" data-target="#report" class="collapsed active"><a href="#">รายงาน</a></li>
            <ul class="nav nav-sidebar nav-stacked collapse " id="report">
            </ul>
</ul>
<!--/.LEFT MENU -->
