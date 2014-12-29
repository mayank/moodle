<?php

class AttendanceSeeder extends Seeder {

	public function run()
	{
		DB::table('attendance')->delete();

		DB::table('attendance')->insert( array(
			'user_id' => 1,
			'total' => 120,
			'count' => 98
		) );
	}

}