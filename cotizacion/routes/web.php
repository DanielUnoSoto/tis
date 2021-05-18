<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
});

// rutas de login
Route::get('login', 'LoginController@show')->name('login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//
Route::get('administracion', 'AdminController@index')->name('admin');
Route::get('unidad-gastos', 'UgController@index')->name('ug');
Route::get('unidad-admin', 'UaController@index')->name('ua');

Route::get('unidad/{name}', 'UnitController@index')->name('unit.index');
Route::get('unidades', 'UnitController@units')->name('units.all');
Route::get('unidades/crear', 'UnitController@create')->name('unit.create');
Route::post('unidades', 'UnitController@store')->name('unit.store');

Route::get('facultades', 'SchoolController@index')->name('school.index');
Route::get('facultades/crear', 'SchoolController@create')->name('school.create');
Route::post('facultades', 'SchoolController@store')->name('school.store');

//rutas de registrar
Route::get('registrar/crear', 'RegisterController@create')->name('register.create');
Route::post('registrar', 'RegisterController@store')->name('register.store');


//Route::get('user', 'UserController@index');
//rutas de cotizacion ==  quotation
//Route::get('cotizaciones', 'QuotationController@index')->name('quotation');

//rutas de solicitudes == requisition
//Route::get('solicitudes', 'RequisitionController@index')->name('requisition');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
