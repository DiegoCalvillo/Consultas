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

//Rutas del controlador FronController
Route::get('/inicio', 'FronController@index');
Route::get('/tablas', 'FronController@tables');
Route::get('/panel', 'FronController@panel');
Route::get('/graficas', 'FronController@graficas');
Route::get('/blank', 'FronController@blank');
Route::get('/icons', 'FronController@icons');
Route::get('/notificaciones', 'FronController@notificaciones');

//Rutas del controlador UsuariosController
Route::resource('/usuarios', 'UsuariosController');
Route::post('usuarios/store', 'UsuariosController@store'); //Ruta para guardar registros
Route::post('usuarios/search', ['as' => 'usuarios/search', 'uses' => 'UsuariosController@search']); //Ruta para buscar los registros en la tabla
Route::get('usuarios/create', ['as' => 'usuarios/create', 'uses' => 'UsuariosController@create']); //Ruta para crear nuevos registros
Route::get('usuarios/{id}/edit', ['as' => 'usuarios/edit', 'uses' => 'UsuariosController@edit']); //Ruta para hacer cambios en los registros
Route::put('usuarios/update', ['as' => 'usuarios/update', 'uses' => 'UsuariosController@update']); //Ruta para actualizar los cambios en los registros

//Rutas del controlador EquiposController
Route::resource('/equipos', 'EquipoController');
Route::post('equipos/store', 'EquipoController@store');
Route::post('equipos/search', 'EquipoController@search');
Route::get('equipos/create', ['as' => 'equipos/create', 'uses' => 'EquipoController@create']);
Route::get('equipos/{id}/edit', ['as' => 'equipos/edit', 'uses' => 'EquipoController@edit']);
Route::get('equipos/destroy/{id}', ['as' => 'equipos/destroy', 'uses' => 'EquipoController@destroy']);
Route::put('equipos/update', ['as' => 'equipos/update', 'uses' => 'EquipoController@update']);

//Rutas del controlador AplicativosController
Route::resource('/aplicativos', 'AplicativosController');
Route::post('aplicativos/store', 'AplicativosController@store');
Route::post('aplicativos/search', 'AplicativosController@search');
Route::get('aplicativos/destroy/{id}', ['as' => 'aplicativos/destroy', 'uses' => 'AplicativosController@destroy']);
Route::get('aplicativos/create', ['as', 'aplicativos/create', 'uses' => 'AplicativosController@create']);
Route::get('aplicativos/{id}/edit', ['as' => 'aplicativos/edit', 'uses' => 'AplicativosController@edit']);
Route::put('aplicativos/update', ['as' => 'aplicativos/update', 'uses' => 'AplicativosController@update']);

//Rutas del controlador PuestoController
Route::resource('/puestos', 'PuestoController');
Route::post('puestos/store', 'PuestoController@store');
Route::post('puestos/search', 'PuestoController@search');
Route::get('puestos/create', ['as' => 'puestos/create', 'uses' => 'PuestoController@create']);
Route::get('puestos/{id}/edit', ['as' => 'puestos/edit', 'uses' => 'PuestoController@edit']);
Route::put('puestos/update', ['as' => 'puestos/update', 'uses' => 'PuestoController@update']);

//Rutas del controlador TiposController
Route::resource('/tiposequipos', 'TiposController');
Route::post('tiposequipos/store', 'TiposController@store');
Route::post('tiposequipos/search', 'TiposController@search');
Route::get('tiposequipos/create', ['as' => 'tiposequipos/create', 'uses' => 'TiposController@create']);
Route::get('tiposequipos/{id}/edit', ['as' => 'tiposequipos/edit', 'uses' => 'TiposController@edit']);
Route::get('tiposequipos/destroy/{id}', ['as' => 'tiposequipos/destroy', 'uses' => 'TiposController@destroy']);
Route::put('tiposequipos/update', ['as' => 'tiposequipos/update', 'uses' => 'TiposController@update']);

//Rutas del Controlador CentrosController
Route::resource('/centros', 'CentrosController');
Route::post('centros/store', 'CentrosController@store');
Route::post('centros/search', 'CentrosController@search');
Route::get('centros/create', ['as' => 'centros/create', 'uses' => 'CentrosController@create']);
Route::get('centros/destroy/{id}', ['as' => 'centros/destroy', 'uses' => 'CentrosController@destroy']);

//Rutas del Controlador SistemController
Route::resource('/sistemas', 'SistemController');
Route::post('sistemas/store', 'SistemController@store');
Route::post('sistemas/search', 'SistemController@search');
Route::get('sistemas/create', ['as' => 'sistemas/create', 'uses' => 'SistemController@create']);
Route::get('sistemas/{id}/edit', ['as' => 'sistemas/edit', 'uses' => 'SistemController@edit']);
Route::get('sistemas/destroy/{id}', ['as' => 'sistemas/destroy', 'uses' => 'SistemController@destroy']);
Route::put('sistemas/update', ['as' => 'sistemas/update', 'uses' => 'SistemController@update']);

//Rutas de ExcelController
Route::resource('excel', 'ExcelController');
Route::get('/excel_aplicativos', 'ExcelController@aplicativos');

//Rutas para la Autenticación del Login
Route::resource('/login', 'LogController');
Route::post('login/store', 'LogController@store');
Route::get('logout', 'LogController@logout');

//Rutas de MensajeController
Route::resource('mensajes', 'MensajeController');
Route::post('mensajes/store', 'MensajeController@store');

//Ruta que verifica que se haya iniciado sesión para poder acceder a las demas rutas
Auth::routes();
