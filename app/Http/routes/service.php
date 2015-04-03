<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'service'), function() {

    Route::get('note', array(
        'as' => 'note',
        function() {
            return View::make('service.note');
    }));
 
    Route::get('boat-data', array(
        'as' => 'boat-data',
        function() {
            return View::make('service.boat-data');
    }));
    
    Route::get('passenger', array(
        'as' => 'passenger',
        function() {
            return View::make('service.passenger');
    }));
    
    Route::get('money', array(
        'as' => 'money',
        function() {
            return View::make('service.money');
    }));

    Route::get('product-detail', array(
        'as' => 'product-detail',
        function() {
            return View::make('service.product-detail');
    }));

    Route::get('document', array(
        'as' => 'document',
        function() {
            return View::make('service.document');
    }));
    
    Route::get('no_unit/no5_1', array(
        'as' => 'no_unit/no5_1',
        function() {
            return View::make('service.no5_1');
    }));
    
    Route::get('no_unit/no5_2', array(
        'as' => 'no_unit/no5_2',
        function() {
            return View::make('service.no5_2');
    }));
    
    Route::get('request', array(
        'as' => 'request',
        function() {
            return View::make('service.request');
    }));
});

