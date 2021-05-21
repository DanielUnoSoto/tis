<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
});

// rutas de login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//ruta al momento de hacer login
Route::get('/home', 'HomeController@index')->name('home');


// rutas para crear una unidad
Route::resource('unidades', 'UnitController');

Route::resource('registrar', 'RegisterController');

Route::resource('facultades', 'SchoolController');

Route::resource('empresas', 'CompanyController');

//Route::get('user', 'UserController@index');
//rutas de cotizacion ==  quotation
//Route::get('cotizaciones', 'QuotationController@index')->name('quotation');

//rutas de solicitudes == requisition
//Route::get('solicitudes', 'RequisitionController@index')->name('requisition');

//Auth::routes();