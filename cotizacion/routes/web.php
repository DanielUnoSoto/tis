<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
});

// rutas de login usuarios
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//ruta al momento de hacer login de los usuarios
Route::get('/home', 'HomeController@index')->name('home');

// rutas de login emrpesas
Route::get('empresa/login', 'CompanyLoginController@showLoginForm')->name('empresa.login');
Route::post('empresa/login', 'CompanyLoginController@login')->name('empresa.form');
Route::get('empresa/logout', 'CompanyLoginController@logout')->name('empresa.logout');
//ruta al momento de hacer login de las empresas
Route::get('empresa/home', 'CompanyLoginController@home')->name('empresa.home');


Route::resource('unidades', 'UnitController');

Route::resource('registrar', 'RegisterController');

Route::resource('facultades', 'SchoolController');

Route::resource('empresas', 'CompanyController');

Route::resource('inventarios', 'StockController');

Route::resource('articulos', 'ArticleController');

Route::resource('solicitudes', 'PetitionController');

Route::resource('prodcutos', 'ProductController');
