@extends('layouts.home')

@section('content')
	<div class="container">
		<h3>
			<a href="" class="btn btn-success pull-right">
				<span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Add an Answer
			</a>
			
			<div style="width:80%">{{ $question->question_title }} ?</div>
		</h3>
		<p>
			- {{ $question->details }}
			<br><br>
			<span class="text-danger">Asked By - {{ $question->first_name }} {{ $question->last_name }}</span>
		</p>
		<hr>
		
		@foreach( $answers as $answer )
			<blockquote>
				<p>By - {{ $answer->first_name }} {{ $answer->last_name }}</p>
				<small class="text-info">{{ nl2br($answer->details) }}</small>
			</blockquote>
		@endforeach
	</div>
@stop