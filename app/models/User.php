<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	public static $rules = array(
		"register" => array(
			'phone_number' => 'required|max:10|unique:users',
			'password' => 'required|confirmed|min:6',
			'password_confirmation' => 'required|min:6',
			'tos' => 'required|accepted',
		),
		"login" => array(
			'phone_number' => 'required|max:10',
			'password' => 'required|min:8'
		),
	);
	#	Errors.
	public static $messages = array(
		"login" => array(
			"success" => "Welcome, you have been logged in!",
			"error" => "Please check your email and password combination.",
		),
		"logout" => array(
			"success" => "Logged you out, I don't like to say goodbye but hope to see you soon!",
		),
		"register" => array(
			"success" => "You have registered, please sign in",
			"success_activate" => "You have been registered, please check your email to activate your account before login in!",
			"error" => "placeholder",
		),
		"activation" => array(
			"success" => "You have activated your account",
			"error" => "Please check your activation code",
			"resend" => "We have resent your activation code, check your email",
		),
	);

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the token value for the "remember me" session.
	 *
	 * @return string
	 */
	public function getRememberToken()
	{
		return $this->remember_token;
	}

	/**
	 * Set the token value for the "remember me" session.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setRememberToken($value)
	{
		$this->remember_token = $value;
	}

	/**
	 * Get the column name for the "remember me" token.
	 *
	 * @return string
	 */
	public function getRememberTokenName()
	{
		return 'remember_token';
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}
