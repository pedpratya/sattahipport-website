@extends('layout.master')
@section('breadcrumbs', Breadcrumbs::render('system-admin'))
@section('content')

<!-- header -->
<div class="col-lg-12 col-md-12">
  <div class="col-lg-10 col-md-10">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd"> 1</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd"> 2</button>
  </div>
  <div class="col-lg-2 col-md-2">
    <label>พิมพ์ข้อมูลทั้งหมด <button type="button" class="btn btn-default glyphicon glyphicon-print"></button></label>
  </div>
</div><!-- End header -->

<!-- body -->
<div class="panel-body">
<div class="hr-topic"></div>
  <form class="form-horizontal">
    <div class="col-lg-12 col-md-12">                
      <div class="form-group">  
        <div class="col-lg-2 col-md-2"><label>Code</label></div>
        <div class="col-lg-10 col-md-10"> <p class="form-control-static">-- -- --</p></div>
      </div>
      <div class="form-group">  
        <div class="col-lg-2 col-md-2"><label>แปลงหมายเลข</label></div>
        <div class="col-lg-10 col-md-10"><input class="form-control" type="text" ></div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">
          <div class="col-lg-4 col-md-4"><label>ระยะเวลาเช่า</label></div>
          <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
        </div>
        <div class="col-lg-6 col-md-6 bfh-datepicker">
          <label class="col-lg-4 col-md-4">วันเริ่มสัญญา</label>
          <div class="col-lg-8 col-md-8 input-group date">          
            <input type="text" class="form-control" placeholder="">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
          </div>
        </div>
      </div>
        <div class="form-group">
          <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label>อัตราค่าเช่า</label></div>
            <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
          </div>
          <div class="col-lg-6 col-md-6 bfh-datepicker">
            <label class="col-lg-4 col-md-4">วันสิ้นสุดสัญญา</label>
            <div class="col-lg-8 col-md-8 input-group date">          
              <input type="text" class="form-control" placeholder="">
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="form-group">
            <div class="col-lg-12 col-md-12">
              <label class="col-lg-4 col-md-4">ข้อมูลสัญญาเช่า</label>
              <div class="col-lg-7 col-md-7 right-inner-addon">          
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  <input type="search" class="form-control" placeholder="Search" />
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-4 col-md-4"><label>ขนาดพื้นที่</label></div>
                <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-12 col-md-12 bfh-datepicker">
              <label class="col-lg-4 col-md-4">วงรอบ/พิกัด</label>
              <div class="col-lg-7 col-md-7 right-inner-addon">          
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                  <input type="search" class="form-control" placeholder="Search" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <fieldset class="scheduler-border">
            <legend class="scheduler-border">ตำแหน่งบนแผนที่</legend>
            <div class="col-lg-12 col-md-12 text-center">
              <img src="{{ asset('images/map.png') }}" alt="..." class="img-rounded" width="auto">      
            </div>
          </fieldset>
        </div>
    </div>       
  </form>
</div><!-- End body -->

@stop