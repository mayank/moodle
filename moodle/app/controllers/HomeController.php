<?php

class HomeController extends \BaseController
{
	public function showDashboard()
	{
		return View::make('moodle.dashboard');
	}

}