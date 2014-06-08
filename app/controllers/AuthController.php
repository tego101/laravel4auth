<?php
/*
*/
class AuthController extends BaseController {
	#	Assign template.
	protected $layout = 'layouts.auth';

	#	Suspend.
	public function showSuspended()
	{
		$this->layout->title = "Account suspended";
		$this->layout->content = View::make('auth.suspended');		
	}
	#	show me.
	public function showMe()
	{
		$greetings = array('Hello!', 'Greetings!', 'Welcome back!', 'Welcome!', 'Hey there!');
		$this->layout->title = "Me";
		$this->layout->content = View::make('auth.me', $greetings);
	}
	#	Show Update account page.
	public function showUpdate()
	{
		$this->layout->content = View::make('me.update');
	}
	#	Update account.
	public function postUpdate()
	{

	}
	#	Show login form.
	public function showLogin()
	{
		$this->layout->title = "Login";
		$this->layout->content = View::make('auth.login');
	}

	#	Attempt login.
	public function postLogin()
	{
		#	Create login validator.
		$val = Validator::make(Input::all(), User::$rules['login']);

		#	if validation passes.
		if ($val->passes())
		{
			#	Email string.
			$email = Input::get('email');
			#	Password string.
			$password = Input::get('password');

			#	Attempt to login user.
			if (Auth::attempt(array('email' => $email, 'password' => $password)))
			{
				return Redirect::intended('/me')->with('success', User::$messages['login']['success']);
			}
			else
			{
				return Redirect::to('/login')->with('error', User::$messages['login']['error']);
			}
		}
		else
		{
			return Redirect::to('/login')->withErrors($val);
		}
	}
	#	Show register form.
	public function showRegister()
	{
		$this->layout->title = "Register";
		$this->layout->content = View::make('auth.register');
	}
	#	Attempt Register.
	public function postRegister()
	{
		#	Create validator.
		$val = Validator::make(Input::all(), User::$rules['register']);

		#	if validation passes create user.
		if ($val->passes())
		{
			$nuser = new User();
			$nuser->act_code = mt_rand(5,20).md5(Input::get('email').'1989');
			$nuser->company_name = Input::get('company_name');
			$nuser->first_name = Input::get('first_name');
			$nuser->email = Input::get('email');
			$nuser->password = Hash::make(Input::get('password'));

			if ($nuser->save())
			{
				return Redirect::to('/login')->with('success', User::$messages['register']['success']);
			}
			else
			{
				return Redirect::to('/register')->with('error', User::$messages['register']['error']);
			}
		}#	Else fail with errors.
		else
		{
			return Redirect::to('/register')->withErrors($val);
		}
	}
	#	Show activate.
	public function showActivate()
	{
		$this->layout->title = "Activate";
		$this->layout->content = View::make('auth.activate');
	}
	#	Post activate.
	public function postActivate()
	{
		#$act_usr = User::where(array('email' => Input::get('email'), 'act_code' => Input::get('activation_code')));

		if (!User::where(array('email' => Input::get('email'), 'act_code' => Input::get('activation_code')))->count() == 0)
		{
			$act_usr = User::where(array('email' => Input::get('email'), 'act_code' => Input::get('activation_code')))->get();
			$act_usr->group = '50';

			if ($act_usr->save())
			{
				return Redirect::to('/login')->with('success', User::$messages['activation']['success']);
			}
		}
		else
		{
			return Redirect::to('/activate')->with('error', User::$messages['activation']['error']);
		}

	}
}