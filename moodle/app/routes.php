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

Route::get('login', array('uses' => 'LoginController@show'));
Route::post('login', array('before' => 'csrf' ,'uses' => 'LoginController@auth'));

Route::group( array('before' => 'auth'), function(){

	Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));
	Route::get('results','HomeController@showResults');
	
	Route::resource('tutorials','TutorialController');
	Route::resource('assignments','AssignmentController');
	Route::resource('courses','CourseController');
	Route::resource('interviews','InterviewController');
	Route::resource('forums','ForumController');
	Route::resource('question', 'QuestionController');
	Route::resource('compiler','CompilerController');
		
});
