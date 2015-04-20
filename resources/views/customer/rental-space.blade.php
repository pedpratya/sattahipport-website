@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('customer-rental-space'))

@section('content')

<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd" style="width: 10%"> 1</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd" style="width: 10%"> 2</button>
  </div>
  <div class="col-md-4 col-sm-4">
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-6 col-sm-6">
      <label>พิมพ์ข้อมูลทั้งหมด</label>
    </div>
    <div class="col-md-1 col-sm-1">
      <button type="button" class="btn btn-default btn-sm glyphicon glyphicon-print"></button> 
    </div>
  </div>
</div><!--End header -->





<div class="portlet">
  <div class="portlet-content">
    <form class="form-horizontal">               
      <div class="form-group">  
        <div class="col-lg-2 col-md-2"><label>Code :</label></div>
        <div class="col-lg-10 col-md-10"> <p class="form-control-static">-- -- --</p></div>
      </div>
      <div class="form-group">  
        <div class="col-lg-2 col-md-2"><label>แปลงหมายเลข :</label></div>
        <div class="col-lg-10 col-md-10"><input class="form-control" type="text" ></div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">
          <div class="col-lg-4 col-md-4"><label>ระยะเวลาเช่า :</label></div>
          <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
        </div>
        <div class="col-lg-6 col-md-6 bfh-datepicker">
          <label class="col-lg-4 col-md-4">วันเริ่มสัญญา :</label>
          <div class="col-lg-8 col-md-8 input-group date">          
            <input type="text" class="form-control" placeholder="">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">
          <div class="col-lg-4 col-md-4"><label>อัตราค่าเช่า :</label></div>
          <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
        </div>
        <div class="col-lg-6 col-md-6 bfh-datepicker">
          <label class="col-lg-4 col-md-4">วันสิ้นสุดสัญญา :</label>
          <div class="col-lg-8 col-md-8 input-group date">          
            <input type="text" class="form-control" placeholder="">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6">
        <div class="form-group">
          <div class="col-lg-12 col-md-12">
            <div class="col-lg-4 col-md-4"><label>ข้อมูลสัญญาเช่า :</label></div>
            <div class="col-lg-8 col-md-8">
              <div class="right-inner-addon">         
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                <input type="search" class="form-control" placeholder="Search" />
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12 col-md-12">
              <div class="col-lg-4 col-md-4"><label>ขนาดพื้นที่ :</label></div>
              <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-12 col-md-12 bfh-datepicker">
            <label class="col-lg-4 col-md-4">วงรอบ/พิกัด :</label>
            <div class="col-lg-8 col-md-8">          
              <div class="right-inner-addon">         
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                <input type="search" class="form-control" placeholder="Search" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <fieldset class="scheduler-border">
          <legend class="scheduler-border">ตำแหน่งบนแผนที่</legend>
          <div class="col-lg-12 col-md-12 text-center">
            <img src="{{ asset('img/map.png') }}" alt="..." class="img-rounded" width="auto">      
          </div>
        </fieldset>
      </div>     
    </form>
  </div>
</div>

@stop

@section('modal-content')

@stop

@section('javascript')

@stop