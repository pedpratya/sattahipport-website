@extends('layout.master-top')
@section('content')
<!-- header -->
    <div class="col-lg-12 col-md-12">
        <h3 class="text-center"><b>แบบบันทึกการปฏิบัติงานเรือ ฐท.สส.23</b></h3>
        <h3 class="text-center"><b>JOB RECORD</b></h3>
        <form class="form-horizontal" >
            
        <div class="form-group">
            <div class="col-lg-8 col-md-8"></div>
            <div class="col-lg-4 col-md-4">
                <div class="bfh-datepicker">
                  <label class="col-lg-3 col-md-3">(DD/MM/YY)</label>
                  <div class="col-lg-6 col-md-6 input-group" >          
                      <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdOfficer"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col-lg-6 col-md-6">
                <label class="col-lg-3 col-md-3">ชื่อเรือ</label>
                    <div class="col-lg-8 col-md-8 input-group" >          
                        <input type="text" class="form-control">
                    </div>        
            </div>
            <div class="col-lg-6 col-md-6">
                    <div class="col-lg-1 col-md-1"><input type="checkbox" ></div>                       
                    <div class="col-lg-2 col-md-2"><label>ขาเข้า</label></div>
                    
                    <div class="col-lg-1 col-md-1"><input type="checkbox" ></div>                       
                    <div class="col-lg-2 col-md-2"><label>ขาออก</label></div>                                   
            </div>
        </div>
            
            <div class="row form-group">
                <div class="col-lg-6 col-md-6">
                      <label class="col-lg-2 col-md-2">Name of Vessel</label>
                      <div class="col-lg-9 col-md-9">          
                      </div>        
 
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-2 col-md-2"><label>Arrival</label></div>                       
                    <div class="col-lg-1 col-md-1"></div>                                                 
              
           
                    <div class="col-lg-2 col-md-2"><label>Departure</label></div>                       
                    <div class="col-lg-4 col-md-4"></div>    
            </div>
            </div>
            
            <div class="row form-group">
                <div class="col-lg-6 col-md-6">
                    <label class="col-lg-9 col-md-9">พื้นที่ปฏิบัติงาน</label>
                    <div class="col-lg-1 col-md-1"><input type="checkbox" ></div>                       
                    <div class="col-lg-2 col-md-2"><label>จุกเสม็ด</label></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-1 col-md-1"><input type="checkbox" ></div>                       
                    <div class="col-lg-2 col-md-2"><label>แหลมเทียน</label></div>
                    <div class="col-lg-1 col-md-1"><input type="checkbox" ></div>                       
                    <div class="col-lg-3 col-md-3"><label>ทุ่งโปรง</label></div>
                </div>          
            </div>
       
            
            <div class="row form-group">
                <div class="col-lg-6 col-md-6">
                    <label class="col-lg-9 col-md-9">Working Area</label>
                    <div class="col-lg-1 col-md-1"></div>                       
                    <div class="col-lg-2 col-md-2"><label>Chuk Samet</label></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="col-lg-1 col-md-1"></div>                       
                    <div class="col-lg-2 col-md-2"><label>Laem tien</label></div>
                    <div class="col-lg-1 col-md-1"></div>                       
                    <div class="col-lg-3 col-md-3"><label>Thung Prong</label></div>
                </div>          
            </div>
            
            
            <div class="row form-group">
                <div class="col-lg-6 col-md-6">
                    <label class="col-lg-3 col-md-3">เวลาออกจากท่า</label>
                        <div class="col-lg-5 col-md-5 input-group" >          
                             <input type="text" class="form-control">
                         <div class="input-group-btn">
                             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdOfficer">
                                 <span class="glyphicon glyphicon-calendar"></span>
                             </button> 
                         </div>
                       </div>            
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-lg-12 col-md-12">
                      <label class="col-lg-5 col-md-5">Tug Departure Time</label>        
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-lg-6 col-md-6">
                    <label class="col-lg-3 col-md-3">เวลาเข้าเทียบท่า</label>
                        <div class="col-lg-5 col-md-5 input-group" >          
                             <input type="text" class="form-control">
                         <div class="input-group-btn">
                             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdOfficer">
                                 <span class="glyphicon glyphicon-calendar"></span>
                             </button> 
                         </div>
                       </div>            
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-lg-12 col-md-12">
                      <label class="col-lg-5 col-md-5">Tug Arrival Time</label>        
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-lg-6 col-md-6">
                    <label class="col-lg-3 col-md-3">รวมเวลาการทำงาน</label>
                        <div class="col-lg-5 col-md-5 input-group" >          
                             <input type="text" class="form-control">
                         <div class="input-group-btn">
                             <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdOfficer">
                                 <span class="glyphicon glyphicon-calendar"></span>
                             </button> 
                         </div>
                       </div>            
                </div>
            </div>
            
            <div class="row form-group">
                <div class="col-lg-12 col-md-12">
                      <label class="col-lg-5 col-md-5">Total Hours</label>        
                </div>
            </div>
            
            
            <div class="form-group">
            <div class="col-lg-8 col-md-8"></div>
            <div class="col-lg-4 col-md-4">

                  <label class="col-lg-3 col-md-3">ลงชื่อ</label>
                  <div class="col-lg-6 col-md-6 input-group" >          
                      <input type="text" class="form-control">
                </div>
            </div>
        </div>
            
         <div class="form-group">
            <div class="col-lg-9 col-md-9"></div>
            <div class="col-lg-2 col-md-2">
                <label class="text-left">Tug 23 Operator</label>
            </div>
        </div>
            
        </form>
        
    </div><!-- End header -->
@stop