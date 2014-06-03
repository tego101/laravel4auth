<?php


Route::get('/', function()
{
	return View::make('hello');
});

#	Account routes.
Route::group(array('before' => 'auth'), function() {
	Route::get('me', 'AuthController@showMe');
	Route::get('me/update', 'AuthController@showUpdate');
});
#	Login, Register, Reset routes.
	Route::get('login', 'AuthController@showLogin');
	Route::post('login', 'AuthController@postLogin');
	Route::get('register', 'AuthController@showRegister');
	Route::post('register', 'AuthController@postRegister');

Route::get('activate', 'AuthController@showActivate');
Route::post('activate', 'AuthController@postActivate');


#	Logout.
Route::get('bye', function()
{
		#	Logout user.
		Auth::logout();
		#	Then redirect to login page.
		return Redirect::to('login')->with('info', User::$messages['logout']['success']);
});

Route::get('suspended', 'AuthController@showSuspended');

Route::get('list/{list_id?}', 'ListController@showList');