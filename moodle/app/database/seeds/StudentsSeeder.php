<?php

class StudentsSeeder extends Seeder {

	public function run()
	{
		DB::table('students')->delete();

		DB::table('students')->insert( array(
			'first_name' => 'Mayank',
			'last_name' => 'Mishra',
			'scholar_no' => '101112058',
			'branch_id' => 1,
			'section' => 1,
			'semester' => 8,
			'year' => 2010,
			'residence_type' => 1
		) );
	}

}