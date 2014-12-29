<?php

class AssignmentsSeeder extends Seeder
{
	public function run()
	{
		DB::table('assignments')->delete();

		DB::table('assignments')->insert( array(
			'assignment_name' => 'Network Security - Module 1',
			'details' => 'Check the Attachments for more details...',
			'teacher_id' => 1,
			'moderator_id' => 0,
			'issue_date' => '2014-03-21',
			'expiry_date' => '2014-04-13',
			'subject_id' => 1,
			'branch_id' => 1,
			'attachments' => 'details.pdf;mark.png'
		));
	}
}