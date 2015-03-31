<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="{!! Request::is('admin/organization') ? 'menu-active' : '' !!}">
            <a href="{!! URL::to('admin/organization') !!}"><i class="fa fa-fw fa-dashboard"></i> องค์กร</a>
        </li>
        <li class="{!! Request::is('admin/system-admin') ? 'menu-active' : '' !!}">
            <a href="{!! URL::to('admin/system-admin') !!}"><i class="fa fa-fw fa-dashboard"></i> ระบบงาน</a>
        </li>
        <li class="{!! Request::is('admin/usermanagement') ? 'menu-active' : '' !!}">
            <a href="{!! URL::to('admin/usermanagement') !!}"><i class="fa fa-fw fa-bar-chart-o"></i> User Management2</a>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> รายงาน</a>
        </li>
    </ul>
</div>