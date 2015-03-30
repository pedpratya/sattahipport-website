@extends('layout.master-module')
@section('content')
<!-- header -->
    <div class="col-lg-12 col-md-12">
        <div class="col-lg-9 col-md-9">
                <label>คำร้องขอนำเรือเข้า/ออก จากท่า [Berth/Sailing Application]</label>
        </div>
        <div class="col-lg-3 col-md-3">
            <label>Temperary Code : xxx xxx xxx</label>
        </div>
    </div><!-- End header -->
    <form class="form-horizontal">
    <div class="col-lg-12 col-md-12 hr-topic"></div>
    <div class="container">
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
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-11 col-md-11">
                        <div class="form-group">                
                            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">จำนวนคนโดยสารขาเข้า</label><label>ARRIVAL PASSENGERS</label></div>
                            <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                            <div class="col-lg-12 col-md-12 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>  
                        
                            <br>
                            <table class="table table-hover">
                                <th width="70%">Name</th>
                                <th>Type</th>
                                <tr>
                                    <td>Mr.</td>
                                    <td>ลูกเรือ</td>
                                </tr>
                                <tr>
                                    <td>Mr.</td>
                                    <td>ลูกเรือ</td>
                                </tr>
                                <tr>
                                    <td>Mr.</td>
                                    <td>ผู้โดยสาร</td>
                                </tr>
                            </table>				
                </div>    
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-11 col-md-11">
                        <div class="form-group">                
                            <div class="col-lg-4 col-md-4"><label  class="col-lg-12">จำนวนคนโดยสารขาออก</label><label>DEPARTTURE PASSENGERS</label></div>
                            <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                            <div class="col-lg-12 col-md-12 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>  
                        
                            <br>
                            <table class="table table-hover">
                                <th width="70%">Name</th>
                                <th>Type</th>
                                <tr>
                                    <td>Mr.</td>
                                    <td>ลูกเรือ</td>
                                </tr>
                                <tr>
                                    <td>Mr.</td>
                                    <td>ลูกเรือ</td>
                                </tr>
                                <tr>
                                    <td>Mr.</td>
                                    <td>ผู้โดยสาร</td>
                                </tr>
                            </table>				
                </div> 
            </div>
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
                        <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
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
                    <div class="col-lg-8 col-md-8 text-center"><label class="col-lg-12">สัญชาติ </label><label>GRANTED</label></div>
                </div> 
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">พลตรี </label><label>REAR ADMRAL</label></div>
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
    </div>
    </form> 
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Passengers</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">ชื่อ<br><font size="2">NAME</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">สัญชาติ<br><font size="2">NATIONALLITY</font></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control">
                                    </div>
                    </div>
                    <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">เลขที่เอกสาร<br><font size="2">ID No.</font></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control">
                                    </div>
                    </div>
                    <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">ชนิดเอกสาร<br><font size="2">Type ID.</font></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control">
                                    </div>
                    </div>
                    <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">ประเภทผู้โดยสาร<br><font size="2">Passengers Type.</font></label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control">
                                    </div>
                    </div>
                </form>		
            </div>	
            <div class="modal-footer">
                    <button type="Submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>	
</div>
@stop