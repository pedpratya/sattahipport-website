@extends('layout.master-module')


@section('content')
    <div class="container text-center">    
        <div class="box-menu">
            <div class="box-menu-text-m">ข่าวสาร</div>
            <img src="{{ asset('images/icon-customermenu/news-icon.png') }}">
        </div>
        <div class="box-menu">
            <div class="box-menu-text-m">EVENT</div>
            <img src="{{ asset('images/icon-customermenu/event-icon.png') }}">
        </div>
        <div class="box-menu">
            <div class="box-menu-text-m">ข้อมูลทั่วไป</div>
            <img src="{{ asset('images/icon-customermenu/info-icon.png') }}">
        </div>
        <div class="box-menu">
            <div class="box-menu-text-m">บริการ ทพส.ทร.</div>
            <img src="{{ asset('images/icon-customermenu/services-icon.png') }}">
        </div>
        <div class="box-menu">
            <div class="box-menu-text-m">Registration</div>
            <img src="{{ asset('images/icon-customermenu/userInfo-icon.png') }}">
        </div>
        {!! Form::open(['route' => 'sign-in', 'class' => 'form-horizontal']) !!}
        <div class="row">
           <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 
                <div class="panel panel-default panel-info">
                    
                  <div class="panel-heading">
                    <h3 class="panel-title">เข้าสู่ระบบ</h3>
                  </div>                
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
               {!! Form::close() !!}  
                   </div>
                    @if ($error)
                        <div class="alert alert-danger">
                            <strong>!</strong> ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง!<br><br>
                                <ul>
                                        @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                        @endforeach
                                </ul>
                        </div>
                    @endif
               </div>
            </div>
        </div>
@stop