@extends('layouts.home')

@section('content')
	<div class="container">
		<h3>
			{{ $topic->topic_title }} - 
			<small>{{ $topic->details }}</small>
		</h3>
		<hr>
		
		<div class="row">
			<div class="col-md-8">
				@foreach( $questions as $question )
					<blockquote>
						<a href="{{ url('question/'.$question->id) }}"><p>{{ $question->question_title }} ?</p></a>
						<small>{{ $question->details }}</small>
					</blockquote>
				@endforeach
			</div>
		</div>
	</div>
@stop