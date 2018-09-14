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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Crear Usuario y Cliente
Route::get('cliente-registro',      ['as' => 'cliente.registro'           , 'uses'  => 'CustomerController@customerRegister']);

//Get Cantones and Districts by Province
Route::get('get-cantons-districts',      ['as' => 'get-cantons-districts' , 'uses'  => 'DistrictController@getCantonsDistricts']);

//Route::get('get-cantons-districts',   function (){
//    return json_encode('hola');
//});

//Get Districts by Canton
