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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@hora')->name('home');

Route::resource('home', 'HomeController');


Route::resource('colors', 'colorController');



Route::resource('modelos', 'ModeloController');


Route::resource('lineaDeProduccions', 'Linea_de_produccionController');

Route::resource('ordenDeProduccions', 'Orden_de_produccionController');

Route::resource('defectos', 'DefectoController');

Route::resource('supervisorDeCalidads', 'Supervisor_de_calidadController');

Route::resource('turnos', 'TurnoController');

Route::resource('supervisorDeCalidads', 'Supervisor_de_calidadController');

Route::resource('parDeSegundas', 'Par_de_segundaController');

Route::resource('logins', 'LoginController');

Route::resource('parDeSegundas', 'Par_de_segundaController');

Route::resource('parHermanados', 'par_hermanadoController');

Route::resource('parDePrimeras', 'par_de_primeraController');

Route::resource('inspecciones', 'inspeccioneController');

Route::resource('revisions', 'revisionController');