<?php namespace App\Http\Controllers;

class LoginController extends Controller {

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
		return view('login');
	}

	public function handleLogin(Request $request)
	{
		$data = $request->only('username', 'password')
		    if (Auth::attempt($userdata)) {
            	 return "Login Berhasil";
                  } else {               
                   return Redirect::to('login');
                  }
                  return back()->withInput();

	}

	public function get_form($user)
	{
		return view('form_login', ['user' => $user]);
	}
	// public function get_login(){
	// 	$rules = array(
 //                        'username'    => 'required|username',
 //                        'password' => 'required|alphaNum|min:5'
 //        );
 //        $validator = Validator::make(Input::all(), $rules);
 //        if ($validator->fails()) {
 //                        return Redirect::to('login')
 //                                        ->withErrors($validator)
 //                                        ->withInput(Input::except('password'));
 //        } else {
 //                        $userdata = array(
 //                                        'username'   => Input::get('username'),
 //                                        'password'          => Input::get('password')
 //                        );
 //                        if (Auth::attempt($userdata)) {
 //                                        return Redirect::to('/');
 //                        } else {               
 //                                        return Redirect::to('login');
 //                        }
 //        }
//    }
	
//}
