<?php

class LoginController extends \BaseController {

	
	public function show()
	{
		return View::make('moodle.login');
	}

	public function auth()
	{

		$rules = array(
			'email' => 'email|required',
			'password' => 'required'
		);

		$valid = Validator::make( Input::except('_token'), $rules );
		
		if( $valid->fails() )
		{
			return Redirect::to('login')->withErrors($valid);
		}
		else
		{
			if( Auth::attempt(Input::except('_token')) )
			{
				return Redirect::to('dashboard');
			}
			else
			{
				return Redirect::to('login');
			}
		}
	}

}