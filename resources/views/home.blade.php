<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

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
  <body>
        <div class="container-middle">
            <div class="row">
               <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 
                    <div class="text-center"><img src="images/logo.png" width="123px" ></div>
                    <div class="text-center">SATTAHIPPORT SYSTEM</div>
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
                   </div>
               </div>
            </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>