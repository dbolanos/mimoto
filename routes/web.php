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

//Route::get('/', function () {
//    return view('mimoto/main');
//})->name('index');

Route::get('/',                     ['as' => 'index'                    , 'uses'  => 'HomeController@index']);
Route::get('/contactenos',          ['as' => 'contactenos'              , 'uses'  => 'HomeController@contactenos']);

Auth::routes();


// Crear Usuario y Cliente
Route::get('cliente-registro',          ['as' => 'cliente.registro'         , 'uses'  => 'CustomerController@customerRegister']);
Route::get('cambiar-contrasenna',       ['as' => 'change.password'          , 'uses'  => 'UserController@changePassword']);
Route::post('actualizar-contrasenna',   ['as' => 'update.password'          , 'uses'  => 'UserController@updatePassword']);

//Get Cantones and Districts by Province
Route::get('get-cantons-districts', ['as' => 'get-cantons-districts'    , 'uses'  => 'DistrictController@getCantonsDistricts']);


//Create Ad Motos
Route::get('/crear-anuncio',          ['as' => 'crear.anuncio'          , 'uses'  => 'AdMotoController@getCreateAdMoto']);
Route::post('/generar-anuncio',       ['as' => 'generar.anuncio'        , 'uses'  => 'AdMotoController@createAdMoto']);


Route::post('/images-save', 'UploadImagesController@store');
Route::post('/images-delete', 'UploadImagesController@destroy');
Route::get('/images-show', 'UploadImagesController@index');
