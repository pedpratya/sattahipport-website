<!-- LEFT MENU -->
<div class="nav-collapse sidebar-nav">
        <ul class="nav nav-sidebar">
                <li class="nav-mainmenu hidden-tablet" data-toggle="collapse" data-target="#organization" class="collapsed active">องค์กร</li>
               <ul class="nav nav-sidebar nav-stacked collapse " id="organization">
                <li>
                  <a href="{{ URL::to('admin/organization')}}">
                          <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 1
                 </a>
                </li>
                <li>
                  <a href="{{ URL::to('admin/organization-create-or-edit')}}">
                          <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 2
                  </a>
                </li>
                </ul>

                <li class="nav-mainmenu hidden-tablet" data-toggle="collapse" data-target="#system-admin" class="collapsed active">ระบบงาน</li>
                    <ul class="nav nav-sidebar nav-stacked collapse " id="system-admin">
                <li>
                  <a href="{{ URL::to('admin/system-admin')}}">
                          <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 1
                 </a>
                </li>
                <li>
                  <a href="{{ URL::to('admin/system-admin-create-or-edit')}}">
                          <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 2
                  </a>
                </li>
                    </ul>

                <li class="nav-mainmenu hidden-tablet" data-toggle="collapse" data-target="#usermanagement" class="collapsed active">User Management</li>
                    <ul class="nav nav-sidebar nav-stacked collapse " id="usermanagement">
                <li class="active">
                  <a href="{{ URL::to('admin/usermanagement')}}">
                          <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 1
                 </a>
                </li>
                <li>
                  <a href="{{ URL::to('admin/usermanagement-create-or-edit')}}">
                          <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 2
                  </a>
                </li>
                <li>
                  <a href="{{ URL::to('admin/usermanagement-userlog')}}">
                          <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 3
                  </a>
                </li>
                    </ul>
                <li class="nav-mainmenu hidden-tablet" data-toggle="collapse" data-target="#report" class="collapsed active">รายงาน</li>
                    <ul class="nav nav-sidebar nav-stacked collapse " id="report">
                <li>
                  <a href="#">
                          <span class="glyphicon glyphicon-tasks"></span> เมนูย่อย 1
                 </a>
                </li>
                    </ul>
        </ul>
</div><!--/.LEFT MENU -->
