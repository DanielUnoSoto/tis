<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
});

// // rutas de login
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//ruta al momento de hacer login
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('unidades', 'UnitController');

Route::resource('registrar', 'RegisterController');

Route::resource('facultades', 'SchoolController');

Route::resource('empresas', 'CompanyController');

Route::resource('inventarios', 'StockController');

Route::resource('articulos', 'ArticleController');

//rutas de cotizacion ==  quotation
//Route::resource('cotizaciones', 'QuotationController');

//rutas de solicitudes == requisition
//Route::resource('solicitudes', 'RequisitionController');

//Route::get('user', 'UserController@index');