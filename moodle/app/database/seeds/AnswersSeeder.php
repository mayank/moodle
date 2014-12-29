<?php

class AnswersSeeder extends Seeder
{
	public function run()
	{
		DB::table('answers')->delete();
		
		DB::table('answers')->insert( array(
			'user_id' => 1,
			'question_id' => 1,
			'details' => 'Nikhil Garg
Nikhil Garg, BTech CS, IIT Delhi (2008-2012)
123 Votes by Spandan Pathak, Jacob Jensen, Abhiram Jagarlapudi, and 120 more.
Fast Fourier Transform is certainly the most fascinating algorithm. Union-find is probably the data-structure that is astonishingly simple for the performance it delivers. 

However my favorite is the naive way (Ford-Fullkerson algorithm) of finding max-flow (or min cut) in graph. It is just a smart backtrack, if you look at it. Scope and applicability of flow algorithms have always fancied me, almost everything worthwhile in this world can be modeled in a flow problem. I just find the mathematical abstraction beautiful. 

PS : I\'ve been told that after I get reasonably high, I tell people how flow algorithm is the most beautiful thing in this world.'
		) );
	}
}	