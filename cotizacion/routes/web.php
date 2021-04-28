<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
});

Route::get('administracion', 'AdminController@index')->name('admin');

Route::get('unidad-gastos', 'UgController@index')->name('ug');

Route::get('unidad-admin', 'UaController@index')->name('ua');

Route::get('user', 'UserController@index');

// rutas de login
Route::get('login', 'LoginController@show')->name('login');
Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout')->name('logout');

//rutas de registrar
Route::get('registrar/crear', 'RegisterController@create')->name('register.create');
Route::post('registrar', 'RegisterController@store')->name('register.store');

//rutas de cotizacion ==  quotation
//Route::get('cotizaciones', 'QuotationController@index')->name('quotation');

//rutas de solicitudes == requisition
//Route::get('solicitudes', 'RequisitionController@index')->name('requisition');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
