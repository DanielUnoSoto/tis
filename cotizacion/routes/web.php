<?php

use Illuminate\Support\Facades\Route;

// Route::get('user', function(){
//     $user = new App\User;
//     $user->name = 'juan';
//     $user->last_name = 'perez';
//     $user->role_id = 3;
//     $user->phone = 123456;
//     $user->email = 'juan@gmail.com';
//     $user->password = bcrypt('123456');
//     $user->save();

//     $rol = new App\Role;
//     $rol->name = 'ua';
//     $rol->display_name = 'unidad de administracion';
//     $rol->save();

//     return 'listo';
// });

Route::get('/', function () {
    return view('layout');
});

Route::get('administracion', function () {
    return view('users.admin.index');
})->name('admin');

Route::get('unidad-gastos', function () {
    return view('users.ug.index');
})->name('ug');

Route::get('unidad-admin', function () {
    return view('users.ua.index');
})->name('ua');



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
