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
/*
Route::get('/', 'WelcomeController@index');
*/
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//*/
Route::get('/', 'HomeController@index');
Route::get('/kontak','KontakController@index');
Route::get('/upload','UploadController@index');
Route::get('/login','LoginController@index');
Route::get('/login/{user}','LoginController@get_form');
Route::get('/register','RegisterController@index');
Route::get('/register/{user}','RegisterController@get_form');
Route::get('/terbaru','KategoriController@get_terbaru');
Route::get('/pertahun','KategoriController@get_pertahun');
//Route::get('/berkas/{berkas}')
Route::get('/kategori/{kategori}','KategoriController@index');
