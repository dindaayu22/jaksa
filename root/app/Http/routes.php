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
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/
//Admin PAge
Route::get('/admin/dashboard','AdminController@index');
Route::get('/admin/user','AdminController@get_user');
Route::get('/admin/dokumen','AdminController@get_dokumen');
Route::get('/admin/kategori','AdminController@get_kategori');
Route::get('/pimpinan/dashboard','AdminController@index');
Route::post('/admin/kategori','AdminController@post_kategori');

// Route::post('/admin/user{page?}','AdminController@get_user');

//LAnding Page
Route::get('/', 'UserController@index');
Route::get('/dokumen','UserController@get_dokumen');
Route::get('/dokumen/{kategori}','UserController@get_perkategori');
Route::get('/berkas/{berkas}','UserController@get_berkas');
Route::get('/register','UserController@get_register');
Route::get('/register/{user}','UserController@get_form_register');
Route::get('/login','UserController@get_login');
Route::get('/login/{user}','UserController@get_form_login');
