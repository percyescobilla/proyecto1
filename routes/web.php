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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

Route::get('/registro', function () {
    return view('/vendor/adminlte/registro');
});



});


Route::resource('sede', 'sedeController');
Route::resource('sede', 'sedeController');
Route::resource('ojurisdiccional', 'ojurisdiccionalController');
Route::resource('ojudicial', 'ojudicialController');
Route::resource('taudiencia', 'taudienciaController');
Route::resource('texpediente', 'texpedienteController');
Route::resource('asistentejudicial', 'asistentejudicialController');
Route::resource('ecausa', 'ecausaController');
Route::resource('eaudiencia', 'eaudienciaController');
Route::resource('raudiencia', 'raudienciaController');
Route::resource('registrolp', 'registrolpController');
Route::resource('ejemplo', 'ejemploController');

Route::get('listado_graficas','GraficasController@index');
Route::get('grafica_registros/{anio}/{mes}','GraficasController@registros_mes');
Route::get('graficas_publicaciones','GraficasController@total_audiencias');