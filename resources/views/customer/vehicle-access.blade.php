@extends('layout.content')
@section('breadcrumbs', Breadcrumbs::render('customer-vehicle-access'))

@section('content')

<!-- header -->
<div class="row">
  <div class="col-md-8 col-sm-8">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd" style="width: 10%">Add</button>
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
        <div class="col-lg-6 col-md-6">
          <div class="col-lg-4 col-md-4"><label>ทะเบียน :</label></div>
          <div class="col-lg-7 col-md-7"><input class="form-control" type="text" ></div>
        </div>
        <div class="col-lg-6 col-md-6">
          <label class="col-lg-4 col-md-4">ประเภทรถ :</label>
          <div class="col-lg-8 col-md-8">
            <select class="form-control" id="sel1">
              <option>--ประเภทรถ--</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6">
            <label class="col-lg-4 col-md-4">ยี่ห้อ :</label>
            <div class="col-lg-7 col-md-7">
              <select class="form-control" id="sel1">
                <option>--ยี่ห้อ--</option>
              </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="col-lg-4 col-md-4"><label>สี :</label></div>
          <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-md-6 bfh-datepicker">
          <label class="col-lg-4 col-md-4">วันที่ลงทะเบียน :</label>
          <div class="col-lg-7 col-md-7 ">  
            <div class="input-group date">        
              <input type="text" class="form-control" placeholder="">
              <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
          </div>
        </div>
          <div class="col-lg-6 col-md-6">
            <div class="col-lg-4 col-md-4"><label>เบอร์ติดต่อ :</label></div>
            <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
          </div>
      </div>
      <div class="form-group">  
        <div class="col-lg-2 col-md-2"><label>ข้อมูลเจ้าของรถ :</label></div>
        <div class=" col-lg-10 col-md-10 right-inner-addon ">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
          <input type="search" class="form-control" placeholder="Search" />
        </div>
      </div>
    </form>
  </div>
</div>

<div class="portlet">
  <div class="portlet-header">
    <h3>
      <i class="fa fa-tasks"></i>
      ตารางรถที่ลงทะเบียน
    </h3>
  </div><!-- /.portlet-header -->
    <!-- table -->
    <table class="table table-bordered table-hover">
      <tr  class="active">
        <th >No</th>
        <th>License Plate</th>
        <th>Start</th>
        <th>Last Access</th>
        <th>Type</th>
        <th class="text-center">Status</th>
      </tr>
      <tr>
        <td>4</td>
        <td>กก 7602</td>
        <td>04-01-57</td>
        <td>17-11-57</td>
        <td>รถบรรทุก 10 ล้อ</td>
        <td class="text-center">
            <button class="glyphicon glyphicon-search btn btn-default btn-xs"></button>
            <button class="glyphicon glyphicon-edit btn btn-default btn-xs"></button>
            <button class="glyphicon glyphicon-trash btn btn-default btn-xs"></button>
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>ญช 9999</td>
        <td>10-01-58</td>
        <td>10-11-59</td>
        <td>รถยนต์ 4 ล้อ</td>
        <td class="text-center">
          <button class="glyphicon glyphicon-search btn btn-default btn-xs"></button>
          <button class="glyphicon glyphicon-edit btn btn-default btn-xs"></button>
          <button class="glyphicon glyphicon-trash btn btn-default btn-xs"></button>
        </td>
      </tr>
    </table>
</div>


  <!-- pagin -->
    <ul class="pagination pull-left">
      <li><a href="#">&laquo;</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li><a href="#">7</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
       

@stop

@section('modal-content')

@stop

@section('javascript')

@stop