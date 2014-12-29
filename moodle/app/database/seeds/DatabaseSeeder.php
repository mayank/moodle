<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersSeeder');
		$this->call('StudentsSeeder');
		$this->call('SubjectSeeder');
		$this->call('SubjectsChoosenSeeder');
		$this->call('AssignmentsSeeder');
		$this->call('AttendanceSeeder');
	}

}