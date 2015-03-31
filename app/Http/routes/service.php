<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'service'), function() {

    Route::get('service-request-note', array(
        'as' => 'service-request-note',
        function() {
            return View::make('service.service-request-note');
    }));
 
    Route::get('service-request-data', array(
        'as' => 'service-request-data',
        function() {
            return View::make('service.service-request-data');
    }));
    
    Route::get('service-request-passenger', array(
        'as' => 'service-request-passenger',
        function() {
            return View::make('service.service-request-passenger');
    }));
    
    Route::get('service-request-money', array(
        'as' => 'service-request-money',
        function() {
            return View::make('service.service-request-money');
    }));

    Route::get('service-request-product', array(
        'as' => 'service-requst-product',
        function() {
            return View::make('service.service-request-product');
    }));

    Route::get('service-request-document', array(
        'as' => 'service-request-document',
        function() {
            return View::make('service.service-request-document');
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
});
