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

Route::get('/', 'HomeController@welcome');

Route::prefix('kamar')->group(function()
{
	Route::get('/add', 'KamarController@add');
	Route::post('/save', 'KamarController@save');
	Route::get('/all', 'KamarController@all');
	Route::post('/update', 'KamarController@update');
	Route::get('/edit/{id}', 'KamarController@edit');
	Route::get('/delete/{id}', 'KamarController@delete');
});

Route::prefix('kost')->group(function()
{
	Route::get('/save', 'KostController@save');
	Route::get('/all', 'KostController@all');
	Route::get('/update', 'KostController@update');
	Route::get('/edit/{id}', 'KostController@edit');
	Route::get('/delete/{id}', 'KostController@delete');
});

Route::prefix('penginap')->group(function()
{
	Route::get('/save', 'PenginapController@save');
	Route::get('/all', 'PenginapController@all');
	Route::get('/update', 'PenginapController@update');
	Route::get('/edit/{id}', 'PenginapController@edit');
	Route::get('/delete/{id}', 'PenginapController@delete');
});

Route::prefix('pesanan')->group(function()
{
	Route::get('/save', 'PesananController@save');
	Route::get('/all', 'PesananController@all');
	Route::get('/update', 'PesananController@update');
	Route::get('/edit/{id}', 'PesananController@edit');
	Route::get('/delete/{id}', 'PesananController@delete');
});
Auth::routes();

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin'] , function(){
	Route::group(['middleware' => 'admin'], function(){
		Route::get('/', 'AdminController@index');
		Route::get('/verifikasi', 'AdminController@verifikasi');
		Route::get('/kamar/all', 'KamarController@all');
		Route::get('/datauser', 'AdminController@datauser');
		Route::get('/datauser/add', 'AdminController@adduser');
		Route::post('/datauser/save', 'AdminController@saveuser');
		Route::get('/datauser/edit/{id}','AdminController@edituser');
		Route::post('/datauser/update/{id}','AdminController@updateuser');
		Route::get('/datauser/delete/{id}','AdminController@deleteuser');
	});
});

Route::group(['prefix' => 'user'] , function(){
	Route::group(['middleware' => 'user'], function(){
		Route::get('/', 'UserController@index');
		Route::get('/penginap/all', 'PenginapController@all');
		Route::get('/verifikasi', 'AdminController@verifikasi');
	});
});
		Route::get('/kost/all', 'KostController@all');