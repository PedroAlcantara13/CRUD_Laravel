<?php
use App\clientes;
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


Route::get('/clientes', 'clientesController@index');



Route::group(['middleware' => 'web'], function () {

	Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes/novo', 'clientesController@novo');
Route::post('/clientes/salvar', 'clientesController@salvar');
Route::get('/clientes/{cliente}/edicao', 'clientesController@editar');
//Route::patch('/clientes/{cliente}', 'clientesController@atualizar');
//Route::post('/clientes/{cliente}/edicao', 'clientesController@editar');
//Route::post('/clientes/update/{cliente}', 'clientesController@atualizar')->name('update_data_category');
Route::get('/clientes/{cliente}/delete', 'clientesController@delete');
	//Route::get('/category/{cliente}/update', 'clientesController@editar');
Route::post('/clientes/{cliente}/edicaos', 'clientesController@atualizar');



});
