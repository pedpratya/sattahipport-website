@extends('layout.master-module')


@section('content')
<div class="container container-center text-center">    
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/news-icon.png') }}">
        <div class="box-menu-text-m">ข่าวสาร</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/event-icon.png') }}">
        <div class="box-menu-text-m">EVENT</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/info-icon.png') }}">
        <div class="box-menu-text-m">ข้อมูลทั่วไป</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/services-icon.png') }}">
        <div class="box-menu-text-m">บริการ ทพส.ทร.</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/userInfo-icon.png') }}">
        <div class="box-menu-text-m">Customer Info</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/downloadForm-icon.png') }}">
        <div class="box-menu-text-m">Download<p>แบบฟอร์ม</p></div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/serviceRate-icon.png') }}">
        <div class="box-menu-text-m">อัตราค่าบริการ</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/requestServ-icon.png') }}">
        <div class="box-menu-text-m">ขอใช้บริการ</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/serviceLog-icon.png') }}">
        <div class="box-menu-text-m">ข้อมูลการใช้บริการ</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('images/icon-customermenu/portSCH-icon.png') }}">
        <div class="box-menu-text-m">Port Schedule</div>
    </div>
</div>    
@stop
@stop