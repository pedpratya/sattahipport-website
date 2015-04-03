@extends('layout.master-module')
@section('content')
<!-- header -->
    <div class="col-lg-12 col-md-12">
        <div class="col-lg-9 col-md-9">
                <label>คำร้องขอนำเรือเข้า/ออก จากท่า [Berth/Sailing Application]</label>
        </div>
        <div class="col-lg-3 col-md-3 text-right">
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
    </form>
        <div class="col-lg-12 col-md-12">
            <ul class="nav nav-tabs navbar-inverse-blue" id="step" role="tablist">
                <li role="presentation"  class="active"><a class="a-tab" href="#step1" data-toggle="tab">ข้อมูลเรือ O</a></li>
                <li role="presentation"><a class="a-tab" href="#step2" data-toggle="tab">ข้อมูลสินค้า</a></li>
                <li role="presentation"><a class="a-tab" href="#step3" data-toggle="tab">ผู้โดยสาร</a></li>
                <li role="presentation"><a class="a-tab" href="#step4" data-toggle="tab">เอกสารแนบ</a></li>
                <li role="presentation"><a class="a-tab" href="#step5" data-toggle="tab">เงินมัดจำ</a></li>
                <li role="presentation"><a class="a-tab" href="#step6" data-toggle="tab">หมายเหตุ</a></li>
                <li role="presentation"><a class="a-tab" href="#" data-toggle="tab">แบบฟอร์มขออนุญาต</a></li>
                <li role="presentation"><a class="a-tab" href="#" data-toggle="tab">แก้ไขหมายกำหนดการ</a></li>
                <li role="presentation"><a class="a-tab" href="#" data-toggle="tab">สถานะ</a></li>
            </ul>
        </div>   
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="step1">
            <form class="form-horizontal" id="frm-step-1">
            <div class="col-lg-12 col-md-12"> 
                <div class="col-lg-4 col-md-4">
                     <p>VESSEL CODE : XXX XXXX XXX</p>
                </div>
                <div class="col-lg-8 col-md-8 text-right">
                     <button type="button" class="btn btn-default" >ลงทะเบียนเรือ</button>
                     <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mdSearch">ค้นหาเรือ</button>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 hr-topic"></div>
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6">                
                        <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ชื่อเรือ</label><label>NAME OF VESSEL</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                    <div class="col-lg-6 col-md-6">  
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3"><label  class="col-lg-12">สัญชาติ </label><label>NATIONALITY</label></div>
                        <div class="col-lg-8 col-md-8">
                            <select class="form-control">
                                <option>---Select---</option>
                                <option>ไทย</option>
                                <option>ไทย2</option>
                                <option>ไทย3</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6">                 
                        <div class="col-lg-4 col-md-4"><label>เจ้าของ/จัดการโดย</label><label>OWNER/OPERATED BY</label></div>
                        <div class="col-lg-8 col-md-8 right-inner-addon ">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6"> 
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ที่อยู่ </label><label>ADDRESS</label></div>
                        <div class="col-lg-8 col-md-8 right-inner-addon ">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            <input type="search" class="form-control" data-toggle="modal" data-target="#mdAddress" placeholder="Search">
                        </div>
                    </div> 
                </div> 
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6">                 
                        <div class="col-lg-4 col-md-4"><label class="col-lg-12">เนตตัน </label><label>NET TONNAGE</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                     <div class="col-lg-6 col-md-6">  
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3"><label  class="col-lg-12">กรอสตัน </label><label>GROSS TONNAGE</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6">                 
                        <div class="col-lg-4 col-md-4"><label>เดทเวทตัน</label><label>DEADWEIGHT TONNAGE</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                    <div class="col-lg-6 col-md-6">  
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3"><label  class="col-lg-12">กินน้ำลึกเต็มที่</label><label>DRAFT (MAX)</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                </div> 
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6">                
                        <div class="col-lg-4 col-md-4"><label  class="col-lg-12">กว้าง</label><label>BEAM</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                    <div class="col-lg-6 col-md-6">  
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ยาว</label><label>LENGTH</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6">               
                        <div class="col-lg-4 col-md-4"><label  class="col-lg-12">หัว</label><label>BOW</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ท้าย</label><label>ASTERN</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 col-md-6">               
                        <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตั้งแต่วันที่</label><label>FOR THE PERIOD FROM DATE</label></div>
                        <div class="col-lg-8 col-md-8 input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-btn">
                              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6"> 
                        <div class="col-lg-1 col-md-1"></div>                    
                        <div class="col-lg-3 col-md-3">
                            <label  class="col-lg-12">เวลา</label>
                            <label>TIME</label>
                        </div>                   
                        <div class="col-lg-4 col-md-4">
                            <div class="col-lg-11 col-md-11"><input class="form-control" type="text" ></div>
                        </div>
                        <div class="col-lg-1 col-md-1">
                                <div class="col-lg-3 col-md-3"><label>ท่า</label><label>PORT</label></div>                                
                        </div>
                        <div class="col-lg-3 col-md-3"><input class="form-control" type="text" ></div>
                     </div>  
                </div>
            </form>
        </div>
        
        <div role="tabpanel" class="tab-pane" id="step2">
            <form class="form-horizontal" id="frm-step-2">
            <div class="col-lg-12 col-md-12">     
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">                
                        <div class="col-lg-4 col-md-4"><label  class="col-lg-12">จำนวนสินค้าเข้า</label><label>AMOUNT OF CARGO TO BE DISCHARGED</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>                
                    <div class="form-group">                
                        <div class="col-lg-4 col-md-4"><label  class="col-lg-12">จำนวนสินค้าออก</label><label>AMOUNT OF CARGO TO BE LOADED</label></div>
                        <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group"> 
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3"><label  class="col-lg-12">รายการสินค้า </label><label>DISCRIPTION OF CARGO</label></div>
                        <div class="col-lg-8 col-md-8 right-inner-addon ">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                        </div>
                    </div> 
                    <div class="form-group"> 
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3"><label  class="col-lg-12">รายการสินค้า </label><label>DISCRIPTION OF CARGO</label></div>
                        <div class="col-lg-8 col-md-8 right-inner-addon ">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                        </div>
                    </div>
                </div>
            </div>
            </form>    
        </div>
         <div role="tabpanel" class="tab-pane" id="step3">
            <form class="form-horizontal" id="frm-step-3">
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
                            <table class="table">
                                <th width="70%" class="active">Name</th>
                                <th class="active">Type</th>
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
                            <table class="table">
                                <th width="70%" class="active">Name</th>
                                <th class="active">Type</th>
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
                <div class="col-lg-12" align="center">
                    <p><font color="red">**หมายเหตุ** ทำงานตามที่เลือก เข้า หรือ ออก จากท่า </font></p>
                </div>
            </form> 
         </div>     
        <div role="tabpanel" class="tab-pane" id="step4">
            <form class="form-horizontal" id="frm-step-4">
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
            </form> 
        </div>    
        
        <div role="tabpanel" class="tab-pane" id="step5">
            <form class="form-horizontal" id="frm-step-5">
                <div class="col-lg-11 col-md-11">
                    <div class="form-group row">
                        <div class="col-lg-4 col-md-4">
                            <div class="col-lg-2 col-md-2"><label>ผู้รับเงิน</label></div>
                            <div class="col-lg-9 col-md-9 right-inner-addon ">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="col-lg-3 col-md-3" ><label>จำนวนเงิน</label></div>
                            <div class="col-lg-9 col-md-9"><input class="form-control" type="text" ></div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="col-lg-1 col-md-1"></div>
                            <div class="col-lg-2 col-md-2"><label>วันที่</label></div>
                            <div class="col-lg-9 col-md-9 input-group">
                                <input type="text" class="form-control">
                                <div class="input-group-btn">
                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2"><label>จำนวนเงินวางมัดจำ</label></div>
                        <div class="col-lg-10 col-md-10"><input class="form-control" type="text" ></div>
                    </div>
                    <div class="col-lg-12 col-md-12 text-right">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div> 
                </div>
            </form>    
        </div>
        
        <div role="tabpanel" class="tab-pane" id="step6">
            <form class="form-horizontal" id="frm-step-6">
                <div class="col-lg-11 col-md-11">     
                    <div class="form-group">
                        <div class="col-lg-1 col-md-">
                            <label>หมายเหตุ</label>
                        </div>
                        <div class="col-lg-11 col-md-11">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>                    
                    </div> 
                    <div class="col-lg-12 col-md-12 text-right">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>   
                </div>
            </form> 
        </div>
            
        </div>
        
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="col-lg-12 col-md-12">
             <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้าพเจ้ารับจะปฎิบัติตาม ประกาศระเบียบ และ ข้อบังคับ ว่าด้วยการใช้ท่าเรือ การบริการ และสิ่งอำนวยความสะดวกของกิจการ
                ท่าเรือ ซึ่งออกโดยการท่าเรือสัตหีบ และจะชำระค่าทำเนียมตามอัตราค่าภาระ การใช้ท่าเรือ ค่าบริการตามที่ การท่าเรือสัตหีบ จะเรียกเก็บ
                และข้าพเจ้ายอมรับผลผิดในผลแห่งการละเมิด ซึ่งเรือที่นำเข้าได้เกิดความเสียหายแก่การท่าเรือสัตหีบ
             </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;APPLICATION ACKNOWLEDGES RECEIPT OF THE RATES RULES. REGULATIONS AND CHARGES APPLYING AT SATTAHIP ISSUED
                BY THE PORT OF SATTAHIP AND AGREE TO COMPLY WITH ALL TERMS THEREOF AND TO BE RESPONSIBLE FOR ALL DAMAGES BY THE
                PORT OF SATTAHIP AS A CONSEQUENCE OF ANY VIOLATION OF THE TERMS THEROF BY THE ABOVE VESSEL
            </p>
        </div> 
        
        <form class="form-horizontal">
        <div class="col-lg-12 col-md-12">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ลงนาม</label><label>SIGNATURE OF APPLICATION</label></div>
                    <div class="col-lg-8 col-md-8 right-inner-addon ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument">
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
                        <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument">
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
    
<!-- modal Address -->           
<div id="mdAddress" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- modal Address header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h4 class="modal-title">ตำแหน่งบริหารงาน</h4>
      </div>
    <!-- modal Address body -->
      <div class="modal-body">
        <form class="form-horizontal">
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>เลขที่ :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>อาคาร :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>หมู่/ซอย :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>ถนน :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>จังหวัด :</label></div>
              <div class="col-md-8 col-md-8-offset-1">
                <select class="form-control">
                  <option value="1">กรุงเทพ</option>
                  <option value="2">พะเยา</option>
                  <option value="3">กรุงเทพ</option>
                  <option value="4">เชียงราย</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>อำเภอ :</label></div>
              <div class="col-md-8 col-md-8-offset-1">
                <select class="form-control">
                  <option value="1">แม่สาย</option>
                  <option value="1">เมือง</option>
                  <option value="1">ห้วยขว้าง</option>
                  <option value="1">ฝาง</option>
                </select>
              </div>
              </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>ตำบล :</label></div>
              <div class="col-md-8 col-md-8-offset-1">
                <select class="form-control">
                  <option value="1">เวียงพางคำ</option>
                  <option value="1">แม่ต๋ำ</option>
                  <option value="1">ปากเกร็ด</option>
                  <option value="1">แม่สาย</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-md-3-offset-1" style="text-align: right; margin-right: 0.5cm;"><label>รหัสไปรษณีย์ :</label></div>
              <div class="col-md-8 col-md-8-offset-1"><input class="form-control" type="text" ></div>
            </div>
        </form>           
      </div>
    <!-- modal Address footer -->
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>      
    </div>
    </div>
  </div>
</div><!-- End modal Address -->     

<!-- modal boat search -->           
<div id="mdSearch" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
    <!-- modal boat search header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
        <h4 class="modal-title">ค้นหาเรือ</h4>
      </div>
    <!-- modal boat search body -->
      <div class="modal-body">
        <form class="form-horizontal">
            <div class="row">
                <label for="inputSearch1" class="col-sm-2 control-label text-center">Search : </label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputSearch1" placeholder="Search">
                </div>
                <div class="col-sm-3 col-md-offset-1">
                        <select class="form-control" name="Name"  placeholder="Select">
                          <option>Name</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                </div>
                <div class="col-sm-2 text-center">
                        <button type="button" class="btn btn-primary btn-sm btn-save" data-loading-text="Loading" data-toggle="modal" data-target="#mdConfirm" >
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </button>
                </div>
            </div>
            <div class="hr-topic"></div>
            <div class="row form-group">
                    <label class="col-md-4 text-right">VESSEL CODE : </label>
                    <div class="col-md-7 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="VESSEL CODE">
                    </div>
            </div>
            <div class="row form-group">
                    <label class="col-md-4 text-right">ชื่อเรือ <br>NAME OF VESSEL : </label>
                    <div class="col-md-7 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="NAME OF VESSEL">
                    </div>
            </div>
            <div class="row form-group">
                    <label class="col-md-4 text-right">สัญชาติ <br>NATIONALTY : </label>
                    <div class="col-md-7 col-md-offset-1">
                            <select class="form-control" name="Name"  placeholder="Select">
                              <option>Thai</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                            </select>
                    </div>
            </div>
            <div class="row form-group">
                    <label class="col-md-4 text-right">เจ้าของ/จัดการโดย OWNER/OPERATED : </label>
                    <div class="col-md-7 col-md-offset-1">				
                            <div class="right-inner-addon">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target=".modal-owner"/>
                            </div>
                    </div>
            </div>
            <div class="row form-group">
                <label class="col-md-4 text-right">ที่อยู่ <br> ADDRESS : </label>
                <div class="col-md-7 col-md-offset-1">					
                    <div class="right-inner-addon ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input type="text" class="form-control" id="inputForm1" placeholder="ADDRESS">
                    </div>
                </div>
            </div>
            <div class="row form-group">
                    <label class="col-md-4 text-right">เนตตัน  : </label>
                    <div class="col-md-7 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="NET TONNAGE">
                    </div>
            </div>
            <div class="row form-group">
                    <label class="col-md-4 text-right">กรอสตัน : </label>
                    <div class="col-md-7 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="GROSS TONNAGE">
                    </div>
            </div>
            <div class="row form-group">
                    <label class="col-md-4 text-right">เดทเวทตัน : </label>
                    <div class="col-md-7 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="DEADWEIGHT TONNAGE">
                    </div>
            </div>
            <div class="row form-group">
                    <label class="col-md-4 text-right">กว้าง <br>BEAM : </label>
                    <div class="col-md-2 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="BEAM">
                    </div>
                    <label class="col-md-2 text-right">ยาว<br> LEIGHT : </label>
                    <div class="col-md-2 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="LEIGHT">
                    </div>
            </div>

            <div class="row form-group">
                    <label class="col-md-4 text-right">เกินน้ำลึกเต็มที่ <br>RAFT (MAX) : </label>
                    <div class="col-md-7 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="RAFT (MAX)">
                    </div>
            </div>

            <div class="row form-group">
                    <label class="col-md-4 text-right">หัว <br>BOW : </label>
                    <div class="col-md-2 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="BOW">
                    </div>
                    <label class="col-md-2 text-right">ท้าย <br>ASTER : </label>
                    <div class="col-md-2 col-md-offset-1">
                            <input type="text" class="form-control" id="inputForm1" placeholder="ASTER">
                    </div>
            </div>
        </form>           
      </div>
    <!-- modal boat search footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">ADD</button>
        <button type="button" class="btn btn-primary">Select</button>     
    </div>
    </div>
  </div>
</div><!-- End modal search -->    

<!-- popup Add passenger-->
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
                        <label for="inputEmail3" class="col-sm-3 control-label" style=" margin-right: 0.5cm;">ชื่อ<br><font size="2">NAME</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label" style=" margin-right: 0.5cm;">สัญชาติ<br><font size="2">NATIONALLITY</font></label>
                            <div class="col-lg-8 col-md-8">
                              <select class="form-control" id="sel1">
                                <option>--เลือก--</option>
                              </select>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label" style=" margin-right: 0.5cm;">เลขที่เอกสาร<br><font size="2">ID No.</font></label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label" style=" margin-right: 0.5cm;">ชนิดเอกสาร<br><font size="2">Type ID.</font></label>
                           <div class="col-lg-8 col-md-8">
                              <select class="form-control" id="sel1">
                                <option>--เลือก--</option>
                              </select>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label" style=" margin-right: 0.5cm;">ประเภทผู้โดยสาร<br><font size="2">Passengers Type.</font></label>
                            <div class="col-lg-8 col-md-8">
                              <select class="form-control" id="sel1">
                                <option>--เลือก--</option>
                              </select>
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
<!-- End modal passenger -->  

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
                      <div class="col-xs-2 col-sm-2"></div>
                      <div class="col-xs-7 col-sm-7">
                        <select class="form-control" id="sel1">
                          <option>Doc Type</option>
                        </select>
                      </div>
                      <div class="col-xs-1 col-sm-1"></div>
                      <div class="col-lg-2 col-md-2"> 
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
<!-- End modal document -->
@stop