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
Route::get('categoria-casas/{categoria_id}', 'MainController@categoria');

Route::get('galerias', 'MainController@galerias');

Route::get('videos', 'MainController@videos');

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
Route::auth();

//Controladores para admin
Route::group(['middleware' => 'auth'], function () {
	Route::resource('admin-proyectos', 'ProyectosAdminController');
	Route::resource('admin-contactos', 'ContactosAdminController');
	Route::resource('admin-tipos-entrega', 'TiposEntregaAdminController');
	Route::resource('admin-oficinas', 'OficinasAdminController');
	Route::resource('admin-ficha-tecnica', 'FichaTecnicaAdminController');
	Route::resource('admin-galerias', 'GaleriasAdminController');
	Route::resource('admin-imagenes-galerias', 'GaleriasImagenesAdminController');
	Route::resource('admin-detalles-proyectos', 'DetallesCasasAdminController');
	Route::resource('admin-categorias', 'CategoriasAdminController');
	Route::resource('admin-videos', 'VideosAdminController');
	Route::resource('admin-parametros', 'ParametroAdminController');
});

