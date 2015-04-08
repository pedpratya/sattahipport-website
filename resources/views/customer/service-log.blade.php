@extends('layout.master-module')

@section('content')
<!-- header -->
<div class="row form-group">
  <div class="col-lg-4 col-md-4">
    <h4><b>Service Log</b></h4>
  </div>
  <div class="col-lg-4 col-md-4 bfh-datepicker pull-right">
    <label class="col-lg-5 col-md-5" style="text-align: right; margin-right: 0.5cm;">Start Date :</label>
    <div class="col-lg-6 col-md-6 input-group date">          
      <input type="text" class="form-control" placeholder="">
      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 bfh-datepicker pull-right" >
    <label class="col-lg-5 col-md-5" style="text-align: right; margin-right: 0.5cm;">End Date :</label>
    <div class="col-lg-6 col-md-6 input-group date">          
      <input type="text" class="form-control" placeholder="">
      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
  </div>
</div><!-- End header -->

<!-- table -->
<table class="table table-bordered table-hover">
  <tr class="active">
    <th>Wait</th>
    <th>In Process</th>
    <th>Finish</th>
    <th>Finish&Paid</th>
    <th>#</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  <tr class="active">
    <th>No</th>
    <th>Service Name</th>
    <th>Code</th>
    <th>Invoice</th>
    <th>Date</th>
    <th>Start</th>
    <th>Finish</th>
    <th>Paid</th>
  </tr>
  <tr>
    <td>5</td>
    <td>Berth Code</td>
    <td>04-12-57</td>
    <td>&nbsp;</td>
    <td>Work In Process</td>
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
    <td>04-12-57</td>
    <td>&nbsp;</td>
    <td>Work In Process</td>
  </tr>
</table><!--End table -->

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
</div>
@stop
