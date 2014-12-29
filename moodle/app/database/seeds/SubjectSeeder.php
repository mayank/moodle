<?php

class SubjectSeeder extends Seeder
{
	public function run()
	{
		DB::table('subject')->delete();

		DB::table('subject')->insert( array(
			'subject_name' => 'Network Security',
			'details' => 'Network security consists of the provisions and policies adopted by a network administrator to prevent and monitor unauthorized access, misuse, modification, or denial of a computer network and network-accessible resources. Network security involves the authorization of access to data in a network, which is controlled by the network administrator. Users choose or are assigned an ID and password or other authenticating information that allows them access to information and programs within their authority. Network security covers a variety of computer networks, both public and private, that are used in everyday jobs conducting transactions and communications among businesses, government agencies and individuals. Networks can be private, such as within a company, and others which might be open to public access. Network security is involved in organizations, enterprises, and other types of institutions. It does as its title explains: It secures the network, as well as protecting and overseeing operations being done. The most common and simple way of protecting a network resource is by assigning it a unique name and a corresponding password.',
			'branch_id' => 1,
			'semester' => 8,
			'subject_code' => 'CS-454',
			'credits' => '4'
		) );

		DB::table('subject')->insert( array(
			'subject_name' => 'Graph Theory',
			'details' => 'In mathematics and computer science, graph theory is the study of graphs, which are mathematical structures used to model pairwise relations between objects. A "graph" in this context is made up of "vertices" or "nodes" and lines called edges that connect them. A graph may be undirected, meaning that there is no distinction between the two vertices associated with each edge, or its edges may be directed from one vertex to another; see graph (mathematics) for more detailed definitions and for other variations in the types of graph that are commonly considered. Graphs are one of the prime objects of study in discrete mathematics.',
			'branch_id' => 1,
			'semester' => 8,
			'subject_code' => 'CS-450',
			'credits' => '4'
		) );
		
		DB::table('subject')->insert( array(
			'subject_name' => 'Wireless Networks',
			'details' => 'A wireless network is any type of computer network that uses wireless data connections for connecting network nodes.Wireless networking is a method by which homes, telecommunications networks and enterprise (business) installations avoid the costly process of introducing cables into a building, or as a connection between various equipment locations. Wireless telecommunications networks are generally implemented and administered using radio communication. This implementation takes place at the physical level (layer) of the OSI model network structure.',
			'branch_id' => 1,
			'semester' => 8,
			'subject_code' => 'CS-402',
			'credits' => '2'
		) );
		
		DB::table('subject')->insert( array(
			'subject_name' => 'Pattern Recognition',
			'details' => 'In machine learning, pattern recognition is the assignment of a label to a given input value. In statistics, discriminant analysis was introduced for this same purpose in 1936. An example of pattern recognition is classification, which attempts to assign each input value to one of a given set of classes (for example, determine whether a given email is "spam" or "non-spam"). However, pattern recognition is a more general problem that encompasses other types of output as well. Other examples are regression, which assigns a real-valued output to each input; sequence labeling, which assigns a class to each member of a sequence of values (for example, part of speech tagging, which assigns a part of speech to each word in an input sentence); and parsing, which assigns a parse tree to an input sentence, describing the syntactic structure of the sentence.',
			'branch_id' => 1,
			'semester' => 8,
			'subject_code' => 'CS-322',
			'credits' => '2'
		) );
		
		
		DB::table('subject')->insert( array(
			'subject_name' => 'Web Search and Mining',
			'details' => 'Web usage mining is the process of extracting useful information from server logs e.g. use Web usage mining is the process of finding out what users are looking for on the Internet. Some users might be looking at only textual data, whereas some others might be interested in multimedia data. Web Usage Mining is the application of data mining techniques to discover interesting usage patterns from Web data in order to understand and better serve the needs of Web-based applications. Usage data captures the identity or origin of Web users along with their browsing behavior at a Web site. ',
			'branch_id' => 1,
			'semester' => 8,
			'subject_code' => 'CS-451',
			'credits' => '4'
		) );
		
	}
}