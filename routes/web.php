<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tenants', 'TenantController@index');

Route::get('tenants/create', 'TenantController@create');

Route::post('/tenants', 'TenantController@store'); 

Route::get('tenants/{tenant}', 'TenantController@show');