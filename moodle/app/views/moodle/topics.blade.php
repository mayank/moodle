@extends('layouts.home')

@section('content')
	<div class="container">
		<h3>Quora @ MANIT - <small>A Question Answer Forum</small>
			<small style="color: #333" class="pull-right"> Curious Enough ? &nbsp;
				<a class="btn btn-danger btn-sm" href=""><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Ask a Question</a>
			</small>
		</h3>
		<hr/>
		
		@foreach( $topics as $topic )
			<a href="{{ url('forums/'.strtolower(str_replace(" ","_",$topic->topic_title))) }}">
				<div class="col-md-3">
					<div class="panel panel-warning">
						<div class="panel-heading">
							{{ $topic->topic_title }}
						</div>
						<div class="panel-body">{{ $topic->details }}</div>
					</div>
				</div>
			</a>
		@endforeach
	</div>
@stop