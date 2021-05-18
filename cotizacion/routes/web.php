<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
});

// rutas de login
Route::get('login', 'LoginController@show')->name('login');
Route::post('login', 'LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//ruta al momento de hacer login
Route::get('unidad/{name}', 'UnitController@index')->name('unit.index');

// rutas para crear una unidad
Route::get('unidades', 'UnitController@units')->name('units.all');
Route::get('unidades/crear', 'UnitController@create')->name('unit.create');
Route::post('unidades', 'UnitController@store')->name('unit.store');



Route::resource('facultades', 'SchoolController');

Route::resource('registrar', 'RegisterController');

// Route::get('administracion', 'AdminController@index')->name('admin');
// Route::get('unidad-gastos', 'UgController@index')->name('ug');
// Route::get('unidad-admin', 'UaController@index')->name('ua');


//Route::get('user', 'UserController@index');
//rutas de cotizacion ==  quotation
//Route::get('cotizaciones', 'QuotationController@index')->name('quotation');

//rutas de solicitudes == requisition
//Route::get('solicitudes', 'RequisitionController@index')->name('requisition');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
