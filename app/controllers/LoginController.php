<?php



class LoginController extends BaseController{

	public function postLogin() {
		$account = array(
			'username' =>Input::get('username'),
			'password' =>Input::get('pass')
		);
		if (Auth::attempt($account)){
     		return Redirect::route('actionDemo');

		} else {
			return Redirect::route('login')->with('message', 'Not correct username or password!');
		}
	}

	public function getLogin(){
		if(Auth::check()){
			return Redirect::to('demo');
		
		} else
			return View::make('login');

	}

	public function getLogout(){
		Auth::logout();
		return Redirect::to('login');
	}

	public function getDemo(){
			$user = User::all();
		 return View::make("demo")->with('user',$user);
	}
}