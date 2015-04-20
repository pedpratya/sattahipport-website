<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Route::group(array('prefix' => 'customer'), function() {

    Route::get('information', array(
        'as' => 'information',
        function() {
            return View::make('customer.information');
    }));

    Route::get('rental-space', array(
        'as' => 'rental-space',
        function() {
            return View::make('customer.rental-space');
    }));

    Route::get('service-log', array(
        'as' => 'service-log',
        function() {
            return View::make('customer.service-log');
    }));

    Route::get('vehicle-access', array(
        'as' => 'vehicle-access',
        function() {
            return View::make('customer.vehicle-access');
    }));

    Route::get('ware-house', array(
        'as' => 'ware-house',
        function() {
            return View::make('customer.ware-house');
    }));
    
    Route::get('port-service', array(
        'as' => 'port-service',
        function() {
            return View::make('customer.port-service');
    }));



});
