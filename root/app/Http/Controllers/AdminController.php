<?php namespace App\Http\Controllers;
use DB;
use Redirect;
use App\Kategori;
use App\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

//use App\Users;

class AdminController extends Controller {

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
	

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// log this day
		$downd =0;
		$upd = 0;
		$opd =0;
		$downd = DB::table('userberkas')
					->where('log','Download')
					->where('createDate',date('Y-m-d'))
					->count();
		$upd = DB::table('userberkas')
					->where('log','Upload')
					->where('createDate',date('Y-m-d'))
					->count();
		$opd = DB::table('userberkas')
					->where('log','Open')
					->where('createDate',date('Y-m-d'))
					->count();
		$chartdown = array();
		$chartup = array();
		$chartop = array();
		for($bulan=1;$bulan<=12;$bulan++){
			Array_push($chartdown,DB::table('userberkas')
					->where('log','Download')
					->whereYear('createDate','=',date('Y'))
					->whereMonth('createDate','=',$bulan)
					->count());
			Array_push($chartup,DB::table('userberkas')
					->where('log','Upload')
					->whereYear('createDate','=',date('Y'))
					->whereMonth('createDate','=',$bulan)
					->count());
			Array_push($chartop,DB::table('userberkas')
					->where('log','Open')
					->whereYear('createDate','=',date('Y'))
					->whereMonth('createDate','=',$bulan)
					->count());
		
		}
		return view('admin/index',compact('downd','upd','opd','chartdown','chartop','chartup'));
		
	}
	//user
	public function get_user()
	{
		$kota = DB::table('kota')->get();
		$kecamatan = DB::table('kecamatan')
					->orderBy('namaKecamatan', 'asc')
					->get();
		$result = DB::table('pengguna')
					->join('user','pengguna.idPengguna','=','user.idPengguna')
					->paginate();
		// $result->setPath(URL::to('admin/user'));
		return view('admin/user', compact('result','kota','kecamatan'));
	}
	public function post_user(){
		DB::table('user')->insert([
                'namaPengguna' => Input::get('inputNama'),
                'tanggalLahir' => Input::get('inputTahun').'-'.Input::get('inputBulan').'-'.Input::get('inputTanggal'),
                'jenisKelamin' => Input::get('inputJenKel'),
                'noHP' 		   => Input::get('inputNoTelepon'),
                'alamat'       => Input::get('inputAlamat'),
                'idKecamatan'  => Input::get('inputKecamatan'),
                'createDate'   => 6,
                'updateDate'   => 10.000
            ]);
		return Redirect::to('/admin/user')->with('message','Berhasil Menambah Data');
	}
	//dokumen
	public function get_dokumen()
	{
		$kategori = DB::table('kategori')->get();
		$result = DB::table('kategori')
					->join('berkas','kategori.idKategori','=','berkas.idKategori')
					->paginate(10);

		return view('admin/dokumen',compact('result','kategori'));
	}

	// kategori
	public function get_kategori()
	{
		$result = DB::table('kategori')->paginate(10);
		return view('admin/kategori',compact('result'));
	}
	
	public function post_kategori(Request $request){   
    	$kategori = App\Kategori::create($request->input());
    	return response()->json($kategori);
	}
}