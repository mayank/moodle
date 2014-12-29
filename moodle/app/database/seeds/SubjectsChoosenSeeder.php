<?php

class SubjectsChoosenSeeder extends Seeder
{
	public function run()
	{
		DB::table('subjects_choosen')->delete();

		DB::table('subjects_choosen')->insert( array(
			'user_id' => 1,
			'subject_id' => 1
		) );
		
		DB::table('subjects_choosen')->insert( array(
			'user_id' => 1,
			'subject_id' => 2
		) );
		
		DB::table('subjects_choosen')->insert( array(
			'user_id' => 1,
			'subject_id' => 3
		) );
		
		DB::table('subjects_choosen')->insert( array(
			'user_id' => 1,
			'subject_id' => 4
		) );
		
		DB::table('subjects_choosen')->insert( array(
			'user_id' => 1,
			'subject_id' => 5
		) );
		
		
	}
}