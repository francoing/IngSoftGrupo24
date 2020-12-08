<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();

// });

Route::post('inicio', 'ApiController@InicioApp');
Route::post('pardesegunda', 'ApiController@pareDeSegunda');
Route::post('parhermanado', 'ApiController@parHermanado');
Route::post('pardeprimera', 'ApiController@parDePrimera');
Route::post('inspeccion', 'ApiController@comenzarInspeccion');
Route::post('enviarrevision', 'ApiController@enviarRevision');

Route::get('lineasdeproduccion', 'ApiController@obtenerLineas');

Route::get('ordenesdeproduccion', 'ApiController@ObtenerOP');
Route::get('horaactual', 'ApiController@horaServer');
Route::get('obtenerdefectos', 'ApiController@obtenerDefectos');




