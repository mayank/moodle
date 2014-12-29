@extends('layouts.home')

@section('content')

	<div class="container">
		<h3>
			<strong>{{ $subject->subject_code }}</strong>
			&nbsp;&nbsp;{{ $subject->subject_name }}
			&nbsp;&nbsp;
			<span class="label label-success">{{ $subject->credits }} credits</span>
		</h3>
		<hr>
		
		<p class="col-md-8">{{ $subject->details }}</p>
	</div>

@stop