<?php namespace App\Http\Controllers;

use DB;

class UserController extends Controller {

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
	public function index()
	{
		//terpopuler
		$terpopuler=DB::table('kategori')
					->join('berkas','kategori.idKategori','=','berkas.idKategori')
					->join('userberkas','berkas.idBerkas','=','userberkas.idBerkas')
					->select('*',DB::raw('count(*) as count'))
					->where('log','Open')
					->orWhere('log','Download')
					->orwhere('log','Upload')
					->groupBy('namaKategori')
					->orderBy('count', 'desc')
					->paginate(4);

		//most view
		$most_view =  DB::table('kategori')
					->join('berkas','kategori.idKategori','=','berkas.idKategori')
					->join('userberkas','berkas.idBerkas','=','userberkas.idBerkas')
					->select('*',DB::raw('count(*) as count'))
					->where('log','Open')
					->groupBy('namaBerkas')
					->orderBy('count', 'desc')
					->paginate(5);
		//recent view
		$recent_view =  DB::table('kategori')
						->join('berkas','kategori.idKategori','=','berkas.idKategori')
						->join('userberkas','berkas.idBerkas','=','userberkas.idBerkas')
						->where('log','Open')
						->orderBy('userberkas.createDate', 'asc')
						->paginate(5);

		return view('index',compact('recent_view','most_view','terpopuler'));
	}

	public function get_dokumen()
	{
		$result = DB::table('kategori')->get();
		return view('dokumen',compact('result'));
	}

	public function get_perkategori($kategori)
	{
		$berkas = DB::table('berkas')
					->where('idKategori',$kategori)
					->get();
		$result = DB::table('kategori')
					->where('idKategori',$kategori)
					->get();
		return view('perkategori',compact('result','kategori','berkas'));
	}
	public function get_berkas($berkas)
	{
		$result = DB::table('kategori')
					->join('berkas','kategori.idKategori','=','berkas.idKategori')
					->where('idBerkas',$berkas)
					->get();
		return view('berkas',compact('result','berkas'));
	}
	public function get_register()
	{
		return view('register');
	}
	public function get_form_register($user)
	{
		return view('form_register',compact('user'));
	}
	public function get_login()
	{
		return view('login');
	}
	public function get_form_login($user)
	{
		return view('form_login',compact('user'));
	}
}