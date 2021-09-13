<?php

use Illuminate\Support\Facades\Route;



Route::get('/admin', function ()
    {
           return view('admin/index'); 
    });




Route::prefix('/admin')->namespace ('App\Http\Controllers\Admin')-> group (function(){
    //All the admin roles will be defined here

    Route::get('index', 'AdminController@index');
    Route::get('login', 'AdminController@login');
    Route::get('tables', 'AdminController@tables');
    Route::get('charts', 'AdminController@charts');
    Route::get('password', 'AdminController@password');
    Route::get('logout', 'AdminController@logout');
    Route::get('register', 'AdminController@register');
    Route::get('form', 'AdminController@form');

});