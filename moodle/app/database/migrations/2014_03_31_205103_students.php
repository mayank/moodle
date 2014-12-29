<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->string('scholar_no', 20);
			
			$table->integer('branch_id');
			$table->integer('section');
			$table->integer('semester');
			$table->integer('year');

			$table->tinyInteger('residence_type');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
