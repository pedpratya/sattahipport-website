@extends('layout.master-module')
@section('content')
<!-- header -->
    <div class="col-lg-12 col-md-12">
        <div class="col-lg-9 col-md-9">
                <label>คำร้องขอนำเรือเข้า/ออก จากท่า [Berth/Sailing Application]</label>
        </div>
        <div class="col-lg-3 col-md-3 pull-right">
            <label>Temperary Code : xxx xxx xxx</label>
        </div>
    </div><!-- End header -->
    <form class="form-horizontal">
    <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <p>ข้าพเจ้าขอยื่นคำร้องขอนำเรือดังต่อไปนี้ &nbsp;&nbsp;
                <label>
                   เข้า <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 
                </label>
                <label>
                   ออก <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 
                </label>
                &nbsp;&nbsp; จากท่า</p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <ul class="nav nav-tabs navbar-inverse-blue">
                <li role="presentation"><a class="a-tab" href="#">ข้อมูลเรือ O</a></li>
                <li role="presentation"><a class="a-tab" href="#">ข้อมูลสินค้า</a></li>
                <li role="presentation"><a class="a-tab" href="#">ผู้โดยสาร</a></li>
                <li role="presentation"><a class="a-tab" href="#">เอกสารแนบ</a></li>
                <li role="presentation"><a class="a-tab" href="#">เงินมัดจำ</a></li>
                <li role="presentation"><a class="a-tab" href="#">หมายเหตุ</a></li>
                <li role="presentation"><a class="a-tab" href="#">แบบฟอร์มขออนุญาต</a></li>
                <li role="presentation"><a class="a-tab" href="#">แก้ไขหมายกำหนดการ</a></li>
                <li role="presentation"><a class="a-tab" href="#">สถานะ</a></li>
            </ul>
        </div>   
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="col-lg-12 col-md-12"> 
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">        
                    <div class="checkbox">
                      <label><input type="checkbox" value="" checked="checked">SHIP PARTICULARS</label>
                      <!-- <button type="button" class="btn btn-default btn-xs glyphicon glyphicon-pencil data-toggle="modal" data-target="#mddocument""></button> -->
                      <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#mddocument"><span class="glyphicon glyphicon-pencil"></span></button>
                    </div>

                </div>
            </div>   
            <div class="col-lg-3 col-md-3">
                <div class="form-group">        
                    <div class="checkbox">
                      <label><input type="checkbox" value="">CARGO MANAFEST</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">        
                    <div class="checkbox">
                      <label><input type="checkbox" value="">CUSTOMER DOCUMENT</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
        <div class="col-lg-12 col-md-12"> 
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">        
                    <div class="checkbox">
                      <label><input type="checkbox" value="">PACKING LIST</label>
                    </div>
                </div>
            </div>   
            <div class="col-lg-3 col-md-3">
                <div class="form-group">        
                    <div class="checkbox">
                      <label><input type="checkbox" value="">CREW LIST</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="form-group">        
                    <div class="checkbox">
                      <label><input type="checkbox" value="">OTHERS</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
        </div>
                
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="container-fluid">
             <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้ารับจะปฎิบัติตาม ประกาศระเบียบ และ ข้อบังคับ ว่าด้วยการใช้ท่าเรือ การบริการ และสิ่งอำนวยความสะดวกของกิจการ
                ท่าเรือ ซึ่งออกโดยการท่าเรือสัตหีบ และจะชำระค่าทำเนียมตามอัตราค่าภาระ การใช้ท่าเรือ ค่าบริการตามที่ การท่าเรือสัตหีบ จะเรียกเก็บ
                และข้าพเจ้ายอมรับผลผิดในผลแห่งการละเมิด ซึ่งเรือที่นำเข้าได้เกิดความเสียหายแก่การท่าเรือสัตหีบ
             </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPLICATION ACKNOWLEDGES RECEIPT OF THE RATES RULES. REGULATIONS AND CHARGES APPLYING AT SATTAHIP ISSUED
                BY THE PORT OF SATTAHIP AND AGREE TO COMPLY WITH ALL TERMS THEREOF AND TO BE RESPONSIBLE FOR ALL DAMAGES BY THE
                PORT OF SATTAHIP AS A CONSEQUENCE OF ANY VIOLATION OF THE TERMS THEROF BY THE ABOVE VESSEL
            </p>
        </div>  
        <div class="col-lg-12 col-md-12">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ลงนาม</label><label>SIGNATURE OF APPLICATION</label></div>
                    <div class="col-lg-8 col-md-8 right-inner-addon ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input type="search" class="form-control" placeholder="Search"/>
                    </div>
                </div> 
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ชื่อตัวบรรจง</label><label>PRINTED NAME</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตำแหน่ง</label><label>TITLE</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">วันที่</label><label>DATE</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-8 col-md-8 text-center"><label class="col-lg-12">อนุมัติ</label><label>GRANTED</label></div>
                </div> 
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">พลเรือตรี</label><label>REAR ADMRAL</label></div>
                    <div class="col-lg-8 col-md-8 right-inner-addon ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                    </div>
                </div> 
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-8 col-md-8 text-center">
                        <label class="col-lg-12">ผู้อำนวยการ การท่าเรือสัตหีบ ฐานทับเรือสัตหีบ</label>
                        <label>DIRECTOR PORT SATTAHIP SATTAHIP NAVAL BASE</label>
                    </div>
                </div> 
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">วันที่</label><label>DATE</label></div>
                    <div class="col-lg-8 col-md-8 input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-lg-12 col-md-12 text-center"><button type="button" class="btn btn-primary ">Submit</button></div>
    </form> 

<!-- popup รายการเอกสารที่แนบ -->
<div class="modal fade" id="mddocument" tabindex="-1" role="dialog" aria-labelledby="mddocument" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
              <h3 class="modal-title">รายการเอกสารที่แนบ</h3>
            </div>
            <div class="modal-body">
              <form class="form-horizontal">
                <div class="col-lg-7 col-md-7">
                  <div class="form-group">
                    <div class="col-lg-7 col-md-7"> 
                      <div class="col-xs-4 col-sm-4" style="text-align: right; margin-right: 0.5cm;"><label>นำเข้าเอกสาร</label></div>
                      <div class="col-xs-7 col-sm-7"><input class="form-control" type="text" ></div>
                    </div>
                    <div class="col-lg-5 col-md-5"> 
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd">Browse</button> -->
                    <div class="col-lg-2 col-md-2"></div>
                            <div class="chosefile">
                            <input type="file" name="file" class="filestyle"  required/>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-md-5">
                  <div class="form-group">
                      <div style="text-align: right; margin-right: 0.5cm;"></div>
                      <div class="col-xs-7 col-sm-7">
                        <select class="form-control" id="sel1">
                          <option>Doc Type</option>
                        </select>
                      </div>
                      <div class="col-lg-5 col-md-5"> 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdAdd">Add</button>
                      </div>
                  </div>
                </div>

                <table class="table">
                    <tr class="active">
                        <th>No</th>
                        <th>Doc Type</th>
                        <th>Date</th>
                        <th>Edit</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>SHIP PARTICULARS</td>
                        <td>21-11-2557</td>
                        <td><button type="button" class="btn btn-default btn-xs glyphicon glyphicon-pencil"></button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table> 
             
              </form>
            </div>
        </div>
    </div>
</div>
@stop