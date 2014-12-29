<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssignmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignments', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('assignment_name', 255);
			$table->text('details');
			$table->integer('teacher_id');
			$table->integer('moderator_id');
			$table->date('issue_date');
			$table->date('expiry_date');
			$table->integer('subject_id');
			$table->integer('branch_id');
			$table->text('attachments');

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
		Schema::drop('assignments');
	}

}
