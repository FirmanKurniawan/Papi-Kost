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
Route::prefix('kamar')->group(function()
{
	Route::post('/save', 'KamarController@save');
	Route::get('/all', 'KamarController@all');
	Route::post('/update', 'KamarController@update');
	Route::get('/edit/{id}', 'KamarController@edit');
	Route::get('/delete/{id}', 'KamarController@delete');
});

Route::prefix('kost')->group(function()
{
	Route::post('/save', 'KostController@save');
	Route::get('/all', 'KostController@all');
	Route::post('/update', 'KostController@update');
	Route::get('/edit/{id}', 'KostController@edit');
	Route::get('/delete/{id}', 'KostController@delete');
});

Route::prefix('penginap')->group(function()
{
	Route::post('/save', 'PenginapController@save');
	Route::get('/all', 'PenginapController@all');
	Route::post('/update', 'PenginapController@update');
	Route::get('/edit/{id}', 'PenginapController@edit');
	Route::get('/delete/{id}', 'PenginapController@delete');
});

Route::prefix('pesanan')->group(function()
{
	Route::post('/save', 'PesananController@save');
	Route::get('/all', 'PesananController@all');
	Route::post('/update', 'PesananController@update');
	Route::get('/edit/{id}', 'PesananController@edit');
	Route::get('/delete/{id}', 'PesananController@delete');
});
Auth::routes();

Route::prefix('saran')->group(function()
{
	Route::post('/save', 'SaranController@save');
	Route::get('/all', 'SaranController@all');
	Route::post('/update', 'SaranController@update');
	Route::get('/edit/{id}', 'SaranController@edit');
	Route::get('/delete/{id}', 'SaranController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
