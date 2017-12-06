<?php namespace App\Http\Controllers;

class KategoriController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index($kategori)
	{
		return view('kategori', ['kategori' => $kategori]);
	}

	public function get_pertahun()
	{
		return view('doctahun');
	}

	public function get_terbaru()
	{
		return view('docterbaru');
	}
}
