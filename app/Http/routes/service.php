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
    
});
