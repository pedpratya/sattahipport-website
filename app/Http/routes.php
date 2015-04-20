<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@signIn');

Route::get('home-manu', array( 'as' => 'home-manu',
    function() {
        return View::make('home.index');
    }
));
    
Route::get('page/{id}', 'MainController@getPage');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('module-list', array(
    'as' => 'module-lis-post',
    'uses' => 'MainController@create'
));

post('sign-in',array(
    'as'  => 'sign-in',
    'uses' => 'MainController@signIn'
));

require __DIR__.'/routes/customer.php';
require __DIR__.'/routes/service.php';
require __DIR__.'/routes/regis.php';