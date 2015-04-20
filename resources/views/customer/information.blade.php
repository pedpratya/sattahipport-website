@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('customer-information'))

@section('content')

<!-- form -->

<div class="portlet">
  <div class="portlet-content">
<form class="form-horizontal" >
  <div class="col-lg-8 col-md-8">
      <div class="form-group">  
        <div class="col-lg-2 col-md-2"><label>Code :</label></div>
        <div class="col-lg-10 col-md-10"> <p class="form-control-static">-- -- --</p></div>
      </div>
      <div class="form-group">                
        <div class="col-lg-2 col-md-2"><label>ชื่อบริษัท :</label></div>
        <div class="col-lg-10 col-md-10"><input class="form-control" type="text" ></div>
      </div>
      <div class="form-group">     
        <div class="bfh-datepicker">
          <label class="col-lg-2 col-md-2">สถานที่ตั้ง :</label>
          <div class="col-lg-10 col-md-10 right-inner-addon ">
            <div class="right-inner-addon ">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              <input type="search" class="form-control" data-toggle="modal" data-target="#mdLocation" placeholder="Search" />
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
         <div class="bfh-datepicker">
          <label class="col-lg-2 col-md-2">สถานที่ส่งเอกสาร :</label>
          <div class="col-lg-10 col-md-10 right-inner-addon ">
            <div class="right-inner-addon ">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              <input type="search" class="form-control" data-toggle="modal" data-target="#mdDocument" placeholder="Search" />
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-md-6-offset-1">    
          <label class="col-md-4">เลขผู้เสียภาษี :</label>
          <div class="col-md-7 col-md-7-offset-1">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-6 col-md-6-offset-1"> 
          <div class="col-md-5 col-md-5-offset-1"><label>เอกสารสำคัญ :</label></div>
          <div class="col-md-7 col-md-7-offset-1">
            <div class="right-inner-addon ">
              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
              <input type="search" class="form-control" data-toggle="modal" data-target="#mdAddress" placeholder="Search" />
            </div>    
          </div>                                  
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">
          <label class="col-md-4">Comp Phone :</label>
          <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="col-lg-5 col-md-5"><label>Email :</label></div>
          <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
        </div>
      </div> 
  </div> 
  <div class="col-lg-4 col-md-4">
      <div class="col-lg-1 col-md-1"></div>
      <div class="col-lg-11 col-md-11">
        <fieldset class="scheduler-border">
          <legend class="scheduler-border">ตราประทับ</legend>
            <div class="col-lg-12 col-md-12 text-center">
                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9IjcwIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTQweDE0MDwvdGV4dD48L2c+PC9zdmc+" alt="..." class="img-rounded" width="170">      
            </div>
            <div class="text-center"><button class="btn btn-primary col-lg-12 col-md-12" type="button">Update</button></div>
        </fieldset>
      </div>   
  </div>

  <div class="col-lg-12 col-md-12">
    <div class="form-group">
      <div class="col-lg-4 col-md-4">
        <div class="col-md-4 col-md-4-offset-1"><label>เจ้าหน้าที่ #1:</label></div>
        <div class="col-md-7 col-md-7-offset-1">
          <div class="right-inner-addon ">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="search" class="form-control" data-toggle="modal" data-target="#mdOfficer" placeholder="Search" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-5 col-md-5"><label>Phone No :</label></div>
        <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-5 col-md-5"><label>Email :</label></div>
        <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-4 col-md-4">
        <div class="col-md-4 col-md-4-offset-1"><label>เจ้าหน้าที่ #2:</label></div>
        <div class="col-md-7 col-md-7-offset-1">
          <div class="right-inner-addon ">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="search" class="form-control" data-toggle="modal" data-target="#mdOfficer" placeholder="Search" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-5 col-md-5"><label>Phone No :</label></div>
        <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-5 col-md-5"><label>Email :</label></div>
        <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-4 col-md-4">
        <div class="col-md-4 col-md-4-offset-1"><label>เจ้าหน้าที่ #3:</label></div>
        <div class="col-md-7 col-md-7-offset-1">
          <div class="right-inner-addon ">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="search" class="form-control" data-toggle="modal" data-target="#mdOfficer" placeholder="Search" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-5 col-md-5"><label>Phone No :</label></div>
        <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-5 col-md-5"><label>Email :</label></div>
        <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-4 col-md-4">
        <div class="col-md-4 col-md-4-offset-1"><label>เจ้าหน้าที่ #4:</label></div>
        <div class="col-md-7 col-md-7-offset-1">
          <div class="right-inner-addon ">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="search" class="form-control" data-toggle="modal" data-target="#mdOfficer" placeholder="Search" />
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-5 col-md-5"><label>Phone No :</label></div>
        <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-5 col-md-5"><label>Email :</label></div>
        <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-4 col-md-4"></div>
      <div class="col-lg-4 col-md-4"></div>
      <div class="col-lg-4 col-md-4">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-12 col-md-12">
          <a href="service-log">
            <button class="btn btn-primary btn-lg col-lg-12 col-md-12" type="button">Service Log</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</form><!-- End form -->
</div>
</div>
@stop



@section('modalhtml')
<!-- mdLocation -->
<div class="modal fade" id="mdLocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
    <!-- header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h3 class="modal-title">สถานที่ตั้ง</h3>
      </div>
    <!-- body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-lg-12">
              <div class="col-xs-2 col-sm-2"><label>ชื่อ :</label></div>
              <div class="col-xs-10 col-sm-10"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>เลขที่ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>หมู่ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12">
              <div class="col-xs-2 col-sm-2"><label>หมู่บ้าน :</label></div>
              <div class="col-xs-10 col-sm-10"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ถนน :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>แขวง/ตำบล :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>เขต/อำเภอ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>จังหวัด :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ประเทศ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ZIP :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Phone 1 :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Phone 2 :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Fax :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Email :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Lattude :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Longltude :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
        </form>
      </div>
      <!-- footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
        <button type="submit" class="btn btn-default" data-dismiss="modal" id="btnSave">Cancel</button>
      </div>
    </div>
  </div>
</div><!-- End mdLocation -->

<!-- mdOfficer -->
<div class="modal fade" id="mdOfficer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <!-- header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h3 class="modal-title">ข้อมูลเจ้าหน้าที่</h3>
      </div>
    <!-- body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="col-lg-9 col-md-9">
            <div class="form-group">
              <div class="col-lg-6 col-md-6"> 
                <div class="col-xs-4 col-sm-4"><label>ชื่อ :</label></div>
                <div class="col-xs-8 col-sm-8"><input class="form-control" type="text" ></div>
              </div>
              <div class="col-lg-6 col-md-6"> 
                <div class="col-xs-4 col-sm-4"><label>นามสกุล :</label></div>
                <div class="col-xs-8 col-sm-8"><input class="form-control" type="text" ></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-6 col-md-6"> 
                <div class="col-xs-4 col-sm-4"><label>Login Name :</label></div>
                <div class="col-xs-8 col-sm-8"><input class="form-control" type="text" ></div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="col-xs-4 col-sm-4"><label>Password :</label></div>
                <div class="col-xs-8 col-sm-8"><input class="form-control" type="text" ></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-6 col-md-6"> 
                <div class="col-xs-4 col-sm-4"><label>Phone No :</label></div>
                <div class="col-xs-8 col-sm-8"><input class="form-control" type="text" ></div>
              </div>
              <div class="col-lg-6 col-md-6"> 
                <div class="col-xs-4 col-sm-4"><label>Email :</label></div>
                <div class="col-xs-8 col-sm-8"><input class="form-control" type="text" ></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">ลายเซ็น</legend>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </fieldset>
          </div>
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">ความสามารถในการดำเนินการ</legend>
            <div class="col-lg-12 col-md-12" align="center">
              <div class="form-group">
                <div class="col-lg-3 col-md-3"><label><input type="checkbox">&nbsp;&nbsp;ลงนามเอกสาร</label></div>
                <div class="col-lg-3 col-md-3"><label><input type="checkbox">&nbsp;&nbsp;Shipping</label></div>
                <div class="col-lg-3 col-md-3"><label><input type="checkbox">&nbsp;&nbsp;เจ้าหน้าที่ประสานงาน</label></div>
                <div class="col-lg-3 col-md-3"><label><input type="checkbox">&nbsp;&nbsp;คนขับรถ</label></div>
              </div>
            </div>
          </fieldset>  
        </form>
      </div>
    </div>
  </div>
</div><!-- End mdOfficer -->

<!-- mdDocument -->
<div class="modal fade" id="mdDocument" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
    <!-- header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h3 class="modal-title">สถานที่ส่งเอกสาร</h3>
      </div>
      <!-- body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-lg-6">        
              <div class="col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox"> ตามที่อยู่บริษัท</label>
                </div>
              </div>
            </div>
            <div class="col-lg-6"></div>
          </div>
          <div class="form-group">
            <div class="col-lg-12">
              <div class="col-xs-2 col-sm-2"><label>ชื่อ :</label></div>
              <div class="col-xs-10 col-sm-10"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>เลขที่ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>หมู่ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12">
              <div class="col-xs-2 col-sm-2"><label>หมู่บ้าน :</label></div>
              <div class="col-xs-10 col-sm-10"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ถนน :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>แขวง/ตำบล :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>เขต/อำเภอ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>จังหวัด :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ประเทศ :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>ZIP :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Phone 1 :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Phone 2 :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Fax :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Email :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Lattude :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
            <div class="col-lg-6">
              <div class="col-xs-4 col-sm-4"><label>Longltude :</label></div>
              <div class="col-xs-8 col-sm-8"><input class="form-control " type="text" ></div>
            </div>
          </div>
        </form>
      </div>
      <!-- footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
        <button type="submit" class="btn btn-default" data-dismiss="modal" id="btnSave">Cancel</button>
      </div>
    </div>
  </div>
</div><!-- End mdDocument -->

<!-- mdAddress -->
<div class="modal fade" id="mdAddress" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <!-- heder -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h3 class="modal-title">เอกสารสำคัญ</h3>

      </div>
      <div class="portlet">
        <div class="portlet-header"> 
          <h3>
            <i class="fa fa-tasks"></i>
            รายการเอกสาร
          </h3>
        </div> <!-- /.portlet-header -->
        <div class="portlet-content">
          <form class="form-horizontal">
            <div class="form-group">
              <div class="col-lg-10 col-md-10"></div>
              <div class="col-lg-1 col-md-1">
                <button type="button" class="btn btn-primary">Add</button>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12 col-md-12">
                <div class="col-lg-3 col-md-3"><label>ชื่อและเอกสาร :</label></div>
                <div class="col-lg-9 col-md-9"><input class="form-control" type="text" ></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-12 col-md-12">
                <div class="col-lg-3 col-md-3"><label>ไฟล์ :</label></div>
                <div class="col-lg-9 col-md-9">
                  <div class="chosefile">
                    <input type="file" name="file" class="filestyle"  required/>
                  </div>
                </div>
              </div>
            </div>
           
            <table class="table table-bordered table-hover">
              <tr class="active">
                <th class="text-center">No</th>
                <th class="text-center" style="width:70%;">ชื่อเอกสาร</th>
                <th class="text-center">ลบ</th>
              </tr>
              <tr>
                <td>1</td>
                <td></td>
                <td><button type="button" class="btn btn-danger">DELETE</button></td>
              </tr>
              <tr>
                <td>2</td>
                <td></td>
                <td><button type="button" class="btn btn-danger">DELETE</button></td>
              </tr>
            </table>  
          </form>
        </div>
      </div>
    </div>
  </div>
</div>  
@stop

@section('modal-content')

@stop

@section('javascript')

@stop