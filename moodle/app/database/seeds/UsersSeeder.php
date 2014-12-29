<?php

class UsersSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		DB::table('users')->insert( 
			array(
				'email' => 'mayank2103@gmail.com',
				'password' => Hash::make('helloworld'),
				'mobile' => '7723004268'
			) 
		);

		DB::table('users')->insert(
			array(
				'email' => 'aayush.jain04@yahoo.com',
				'password' => Hash::make('11@aayush@04'),
				'mobile' => '9407413469'
			)
		 );

		DB::table('users')->insert(
			array(
				'email' => 'nitb.harshit@gmail.com',
				'password' => Hash::make('helloworld'),
				'mobile' => '7869720490'
			)
		);
	}

}