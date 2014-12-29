<?php

class QuestionsSeeder extends Seeder 
{
	public function run()
	{
		DB::table('questions')->delete();
		
		DB::table('questions')->insert( array(
			'topic_id' => 1,
			'question_title' => 'What are some most ingenious algorithms in Computer Science',
			'details' => 'added bonus if the algorithm runs in constant time',
			'user_id' => 1
		) );
		
		DB::table('questions')->insert( array(
			'topic_id' => 1,
			'question_title' => 'What advice would you give to a Computer Science Major Student that you wish you were given when you started Computer Science',
			'details' => 'All advice is welcome!',
			'user_id' => 2
		) );
		
		DB::table('questions')->insert( array(
			'topic_id' => 1,
			'question_title' => 'What are good ways to insult a Computer Scientist',
			'details' => 'Follow-up on http://www.cs.purdue.edu/homes/dec/essay.criticize.html',
			'user_id' => 2
		) );
		
	}
}