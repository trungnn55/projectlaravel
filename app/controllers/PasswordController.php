<?PHP

class PasswordController extends BaseController{

	public function getChangePassword(){

		return View::make('password');
	}


	public function postChangePassword(){

		$change = array('newPassword'=>'required|min:5',
						'confirmPassword'=>'required|same:newPassword');
		$user = Auth::user();
		$validation = Validator::make(Input::all(), $change);

		if($validation->fails()){
			return Redirect::to('changepassword')->WithErrors($validation);
		} else{
			$user->password = Hash::make(Input::get('newPassword'));

			$user->save();
			return Redirect::to('demo');
		} 
	}
}