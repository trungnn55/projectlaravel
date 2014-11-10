<?php


class RegisterController extends BaseController{


	public function postRegister(){
		$roles = array(
			'username' => 'required|min:5|unique:users',
			'passwd' => 'required|min:3',
			'confirmpasswd' => 'same:passwd',
			'email' => 'required|email|unique:users'
			
		);

		$validation = Validator::make(Input::all(),$roles);

		if($validation ->fails()){

			return Redirect::to("register")->withErrors($validation);
		}else {
			$user = new User();
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('passwd'));
			$user->email = Input::get('email');
			$user->save();
		}
	}

	public function getRegister(){
		return Redirect::to('register');
	}
}
