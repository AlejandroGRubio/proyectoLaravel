<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome', ['nombre'=>'Carlos',
        'apellidos'=>'Gabriel',
        'parametros'=>[
            'tiempo'=>25,
            'carga'=>'lazy']
    ]);
});


//Peticion GET de todas las pistas.
Route::get('/pista', "PistaController@index");
Route::get('/pista/{id}', "PistaController@show");
Route::post('/pista', "PistaController@store");

Route::put('/pista', "PistaController@update");
Route::patch('/pista', "PistaController@update");

Route::delete('/pista', "PistaController@destroy");

Route::get('/crear-pista', "PistaController@create");

Route::get('/modificar-pista', "PistaController@edit");


