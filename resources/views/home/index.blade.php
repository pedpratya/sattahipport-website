@extends('layout.master-not-left-manu')


@section('content')
<div class="container container-center text-center">    
    <div class="box-menu">
        <img src="{{ asset('img/icon-mainmenu/news-icon.png') }}">
        <div class="box-menu-text-m">ข่าวสาร</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('img/icon-mainmenu/event-icon.png') }}">
        <div class="box-menu-text-m">EVENT</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('img/icon-mainmenu/info-icon.png') }}">
        <div class="box-menu-text-m">ข้อมูลทั่วไป</div>
    </div>
    
    <a href="{{ URL::to('/page/004') }}">
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/services-icon.png') }}">
            <div class="box-menu-text-m">บริการ ทพส.ทร.</div>
        </div>
    </a>
    <a href="{{ URL::to('/page/006') }}">
        <div class="box-menu">
            <img src="{{ asset('img/icon-mainmenu/userInfo-icon.png') }}">
            <div class="box-menu-text-m">Customer Info</div>
        </div>
    </a>
    <div class="box-menu">
        <img src="{{ asset('img/icon-mainmenu/downloadForm-icon.png') }}">
        <div class="box-menu-text-m">Download<p>แบบฟอร์ม</p></div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('img/icon-mainmenu/serviceRate-icon.png') }}">
        <div class="box-menu-text-m">อัตราค่าบริการ</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('img/icon-mainmenu/requestServ-icon.png') }}">
        <div class="box-menu-text-m">ขอใช้บริการ</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('img/icon-mainmenu/serviceLog-icon.png') }}">
        <div class="box-menu-text-m">ข้อมูลการใช้บริการ</div>
    </div>
    <div class="box-menu">
        <img src="{{ asset('img/icon-mainmenu/portSCH-icon.png') }}">
        <div class="box-menu-text-m">Port Schedule</div>
    </div>
</div>    
@stop
