@extends('layout.master-module')


@section('content')
    <div class="container text-center">    
        <div class="box-menu">
            <img src="{{ asset('images/icon-customermenu/news-icon.png') }}">
            <div class="box-menu-text-m">ข่าวสาร</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('images/icon-customermenu/event-icon.png') }}">
            <div class="box-menu-text-m">EVENT</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('images/icon-customermenu/info-icon.png') }}">
            <div class="box-menu-text-m">ข้อมูลทั่วไป</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('images/icon-customermenu/services-icon.png') }}">
            <div class="box-menu-text-m">บริการ ทพส.ทร.</div>
        </div>
        <div class="box-menu">
            <img src="{{ asset('images/icon-customermenu/userInfo-icon.png') }}">
            <div class="box-menu-text-m">Registration</div>
        </div>
        {!! Form::open(['route' => 'sign-in', 'class' => 'form-horizontal']) !!}

<!-- login -->
        <div class="row">
            <div class="col-md-2 col-md-2-offset-1"></div>
            <div class="panel-info col-md-8 col-md-8-offset-1" id="accordion" aria-multiselectable="true" role="tablist">
               <div class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h6 class="panel-title">
                     <label>เข้าสู่ระบบ</label> 
                  </h6>
              </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">                        
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-user"></span>
                    </span>
                    <input id="login-username" type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้งาน" >
                  </div>
                  <br> 
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-lock"></span>
                    </span>
                    <input id="login-password" type="password" class="form-control" name="password" placeholder="รหัสผ่าน" >
                  </div>
                  <br> 
                  <div class="row text-center">
                      <button type="submit" class="btn btn-primary" >ล็อกอิน</button>
                      <button type="reset" class="btn btn-default" >รีเซ็ต</button>
                      <!--button type="button" class="btn btn-default" aria-label="Left Align">SUBMIT
                        <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
                      </button-->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-md-2-offset-1"></div>
          <!-- </div> -->
               {!! Form::close() !!}  
          </div>
                    @if ($error)
                        <!-- <div class="alert alert-danger" style="ma">
                            <strong>!</strong> ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง!<br><br>
                                <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                        @endforeach
                                </ul>
                        </div> -->
                    @endif
        </div>
</div>
@stop