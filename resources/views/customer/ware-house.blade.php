@extends('layout.master-module')
@section('content')

<!-- header -->
<div class="row">
  <div class="col-lg-3 col-md-3">
    <button type="button" class="btn btn-primary">ขอใช้บริการ</button>
  </div>
  <div class="col-lg-3 col-md-3">
    <div class="form-group"> 
      <div class="col-lg-4 col-md-4"><label>ค้นหา :</label></div>
      <div class="col-lg-8 col-md-8" ><input type="text" class="form-control"></div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3">
    <label class="col-lg-4 col-md-4">Type :</label>
    <div class="col-lg-8 col-md-8">
      <select class="form-control" id="sel1">
        <option>--Select--</option>
      </select>
    </div>
  </div>
  <div class="col-lg-3 col-md-3">
    <div class="form-group"> 
      <div class="col-lg-4 col-md-4"><label>ว-ด-ป :</label></div>
        <div class="col-lg-8 col-md-8 input-group date"> 
          <div class="input-group date">         
          <input type="text" class="form-control" placeholder="mm/dd/yyyy">
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
    </div>
  </div>
</div><!--End header -->

<!-- body -->

<table class="table table-bordered table-hover">
  <tr  class="active">
    <th >No</th>
    <th>Name</th>
    <th>Start</th>
    <th>Finish</th>
    <th>Status</th>
  </tr>
  <tr>
    <td>5</td>
    <td>Berth Code</td>
    <td>04-12-57</td>
    <td>&nbsp;</td>
    <td>Work In Process</td>
  </tr>
  <tr>
    <td>4</td>
    <td>ขอใช้ชั่วคราว</td>
    <td>21-08-57</td>
    <td>21-09-57</td>
    <td>Done</td>
  </tr>
</table>


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
