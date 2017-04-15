<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('inicio');
// });
Route::get('/', 'MainController@index');

Route::get('galerias', 'MainController@galerias');

Route::get('inicio', 'MainController@index');

// Route::get('gracias', 'ContactoController@index');

Route::resource('mail', 'MailController');

Route::resource('search', 'ProyectoController@show');

Route::resource('tipos', 'TipoEntregaController');

Route::resource('oficinas', 'OficinaController');

Route::resource('ficha_tecnica', 'FichaTecnicaController');

Route::resource('/gracias', 'ContactoController'
	// , 
	// ['only' => ['store', 'destroy']
	// ]
	);

Route::resource('/graciass', 'ContactoController@index');