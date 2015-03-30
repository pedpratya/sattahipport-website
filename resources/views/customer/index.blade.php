@extends('layout.master-top')


@section('content')
<div class="container container-center text-center">    
    <div class="box-menu">
        <div class="box-menu-text-m">ข่าวสาร</div>
        <img src="{{ asset('images/icon-customermenu/news-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m">EVENT</div>
        <img src="{{ asset('images/icon-customermenu/event-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m">ข้อมูลทั่วไป</div>
        <img src="{{ asset('images/icon-customermenu/info-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m">บริการ ทพส.ทร.</div>
        <img src="{{ asset('images/icon-customermenu/services-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m"></div>
        <img src="{{ asset('images/icon-customermenu/userInfo-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m">Download<p>แบบฟอร์ม</p></div>
        <img src="{{ asset('images/icon-customermenu/downloadForm-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m">อัตราค่าบริการ</div>
        <img src="{{ asset('images/icon-customermenu/serviceRate-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m">ขอใช้บริการ</div>
        <img src="{{ asset('images/icon-customermenu/requestServ-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m">ข้อมูลการใช้บริการ</div>
        <img src="{{ asset('images/icon-customermenu/serviceLog-icon.png') }}">
    </div>
    <div class="box-menu">
        <div class="box-menu-text-m">Port Schedule</div>
        <img src="{{ asset('images/icon-customermenu/portSCH-icon.png') }}">
    </div>
</div>    
@stop
@stop