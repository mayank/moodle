<?php

// controller needed to be checked !

class AssignmentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subjects = SubjectsChoosen::where('user_id','=',Auth::user()->id)
							->join('subject','subject.id','=','subjects_choosen.subject_id')
							->join('assignments','assignments.subject_id','=','subjects_choosen.subject_id')
							->get();

		return View::make('moodle.assignments')
		
				->withSubjects($subjects)
				->withAssignments(0);
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
		$assignment = Assignments::select(
							'assignments.*',
							DB::raw("DATEDIFF(assignments.expiry_date,assignments.issue_date) datediff"),
							DB::raw("DATEDIFF(CURDATE(),assignments.issue_date) daterem")
						)
						->where('subject_id','=',$id)
						->join('subject','subject.id','=','assignments.subject_id')
						->get();

		return View::make('moodle.assignment')
					->withDetails($assignment[0])
					->withAttachments(explode(";", $assignment[0]->attachments))
					->withAssignments(0);
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