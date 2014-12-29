<?php

class TopicsSeeder extends Seeder
{
	public function run()
	{
		DB::table('topics')->delete();
		
		DB::table('topics')->insert( array(
			'topic_title' => 'Computer Science',
			'details' => 'Programming, Data Structure, SQL, Web Search'
		) );
		
		DB::table('topics')->insert( array(
			'topic_title' => 'Mechanics',
			'details' => 'Fluids, Hardware, Machines, Engines'
		) );
		
		DB::table('topics')->insert( array(
			'topic_title' => 'Ubuntu',
			'details' => 'Kernels, Books, Shell Commands, Installs, Flavous'
		) );
		
	}
}