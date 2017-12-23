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
Route::get('/admin/kategori/form/{kategori}','AdminController@get_form_kategori');
Route::post('/admin/kategori/form/{kategori}','AdminController@post_form_kategori');
Route::put('/admin/kategori/form/{kategori}','AdminController@put_form_kategori');
Route::get('/admin/user/form/{user}','AdminController@get_form_user');
Route::post('/admin/user/form/{user}','AdminController@post_form_user');
Route::put('/admin/user/form/{user}','AdminController@put_form_user');
Route::get('/admin/user/password/{user}','AdminController@get_form_user_pass');
Route::put('/admin/user/password/{user}','AdminController@put_form_user_pass');
Route::get('/admin/dokumen/form/{dokumen}','AdminController@get_form_dokumen');
Route::post('/admin/dokumen/form/{dokumen}','AdminController@post_form_dokumen');
Route::put('/admin/dokumen/form/{dokumen}','AdminController@put_form_dokumen');

// Route::post('/admin/user{page?}','AdminController@get_user');

//LAnding Page
Route::get('/', 'UserController@index');
Route::get('/dokumen','UserController@get_dokumen');
Route::get('/dokumen/{kategori}','UserController@get_perkategori');
Route::get('/berkas/{berkas}','UserController@get_berkas');
Route::get('/register','UserController@get_register');
Route::get('/register/{user}','UserController@get_form_register');
Route::post('/register/{user}','UserController@post_register');
Route::get('/login','UserController@get_login');
Route::get('/login/{user}','UserController@get_form_login');
