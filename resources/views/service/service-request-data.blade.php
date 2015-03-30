@extends('layout.master-top')
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
            <ul class="nav nav-tabs navbar-default">
                <li role="presentation"><a class="atab" href="#">ข้อมูลเรือ O</a></li>
                <li role="presentation"><a class="atab" href="#">ข้อมูลสินค้า</a></li>
                <li role="presentation"><a class="atab" href="#">ผู้โดยสาร</a></li>
                <li role="presentation"><a class="atab" href="#">เอกสารแนบ</a></li>
                <li role="presentation"><a class="atab" href="#">เงินมัดจำ</a></li>
                <li role="presentation"><a class="atab" href="#">หมายเหตุ</a></li>
                <li role="presentation"><a class="atab" href="#">แบบฟอร์มขออนุญาต</a></li>
                <li role="presentation"><a class="atab" href="#">แก้ไขหมายกำหนดการ</a></li>
                <li role="presentation"><a class="atab" href="#">สถานะ</a></li>
            </ul>
        </div>   
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="col-lg-12 col-md-12"> 
            <p>VESSEL CODE : XXX XXXX XXX</p>
        </div>
        <div class="col-lg-12 col-md-12 hr-topic"></div>
        <div class="col-lg-12 col-md-12">     
            <div class="col-lg-6 col-md-6">
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ชื่อเรือ</label><label>NAME OF VESSEL</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>                
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label>เจ้าของ/จัดการโดย</label><label>OWNER/OPERATED BY</label></div>
                    <div class="col-lg-8 col-md-8 right-inner-addon ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                    </div>
                </div>
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label class="col-lg-12">เนตตัน </label><label>NET TONNAGE</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label>เดทเวทตัน</label><label>DEADWEIGHT TONNAGE</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div> 
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">กว้าง</label><label>BEAM</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div> 
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">หัว</label><label>BOW</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>
                <div class="form-group">                
                    <div class="col-lg-4 col-md-4"><label  class="col-lg-12">ตั้งแต่วันที่</label><label>FOR THE PERIOD FROM DATE</label></div>
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
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ที่อยู่ </label><label>ADDRESS</label></div>
                    <div class="col-lg-8 col-md-8 right-inner-addon ">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
                    </div>
                </div> 
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">กรอสตัน </label><label>GROSS TONNAGE</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">กินน้ำลึกเต็มที่</label><label>DRAFT (MAX)</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ยาว</label><label>LENGTH</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>
                <div class="form-group"> 
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-3 col-md-3"><label  class="col-lg-12">ท้าย</label><label>ASTERN</label></div>
                    <div class="col-lg-8 col-md-8"><input class="form-control" type="text" ></div>
                </div>
                <div class="form-group"> 
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
@stop