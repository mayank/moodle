@extends('layouts.home')

@section('css')
	<style type="text/css">
	a .panel-body { color: #333 }
	</style>
@stop

@section('content')
	<div class="container">
		<h2>
			Syllabus - <small>{{ $user->semester }} Semester</small>
		</h2>
		<hr>
		
		@foreach( $subjects as $subject )
			<a href="{{ url('courses/'.$subject->subject_code) }}">
				<div class="col-md-4">
					<div class="panel panel-success">
						<div class="panel-heading">
							<strong>{{ $subject->subject_code }}</strong>
							&nbsp;&nbsp;
							 {{ $subject->subject_name }}
							<span class="pull-right label label-success">{{ $subject->credits }} credits</span>
						</div>
						<div class="panel-body">{{ substr($subject->details,0,130) }}...</div>
					</div>
				</div>
			</a>
		@endforeach
		
	</div>
@stop