<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::get("demo",array('as'=>'actionDemo','uses' => 'LoginController@getDemo'))->before('auth');

// Register
Route::get("register",'RegisterController@getRegister');
Route::post("register", 'RegisterController@register');//{


// Login
Route::get('login', array('as'=>'login', 'uses' =>'LoginController@getLogin'));
Route::post('login',array('uses' =>'LoginController@postLogin'));


// Change password
Route::get('changepassword', 'PasswordController@getChangePassword');
Route::post('changepassword', 'PasswordController@postChangePassword');


//Logout
Route::get('logout', 'LoginController@getLogout');


Route::get('selector', function(){
	$select = User::find(4);
	$other = User::find(1)->book;
	echo $select->username . "<br>";
	echo $select->passwd. "<br>";
	// var_dump($other);
	$post = User::has('book')->get();
	//var_dump($post);
	//echo $other->bookname;
	foreach ($other as $key => $value) {
		echo $value->bookname;
	}
	$select->save();

});

Route::get('insert', function(){
	$comment = new username(array('message' => 'A new comment.'));

	$user = User::find(1);

	$comment = $user->comments()->save($comment);
});

Route::resource('photo', 'PhotoController');


