<?php

class CourseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$syllabus = SubjectsChoosen::where('user_id','=',Auth::user()->id)
				->join('subject','subject.id','=','subjects_choosen.subject_id')
				->get();
				
		$user = Students::where('id','=',Auth::user()->id)->get();

		return View::make('moodle.syllabus')->withSubjects($syllabus)->withUser($user[0])->withSyllabus(0);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$subject = Subject::where('subject_code','=',$id)->get();
		
		return View::make('moodle.subject')->withSubject($subject[0])->withSyllabus(0);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}