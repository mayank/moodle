@extends('layouts.home')

@section('top')
	@include('menus.topmenu')
@stop

@section('content')
	<div class="container">
		<h4>{{ $details->assignment_name }}</h4>
		<hr>

		<div class="col-md-8">
			<p>{{ $details->details }}</p>

			<br>
			<h5>Attachments</h5>
			
			<div class="well col-sm-9">
				@foreach( $attachments as $file )
					
					<p>
						<a target="_blank" href="{{ url('attach/'.$file) }}">
							<span class="glyphicon glyphicon-download-alt"></span>
						</a>
						{{ $file }} 
					</p>

				@endforeach
			</div>
		</div>


		<div class="col-md-4">
			<p class="text-right">{{ $details->datediff - $details->daterem }} days remaining</p>
			
			<div class="progress">
				<div class="progress-bar progress-bar-warning" style="width:{{ $details->daterem/$details->datediff*100 }}%"></div>
			</div>

			<hr>

			<h5>Important Dates</h5>
			<div class="row well">
				<div class="col-sm-6">Assignment Issued on</div> 
				<div class="col-sm-6">
					<strong>
						{{ date('D, d<\\s\\up>S</\\s\\up> M, Y', strtotime($details->issue_date)) }}
					</strong>
				</div>
				
				<div class="col-sm-6">Last Submission Date</div> 
				<div class="col-sm-6">
					<strong>
						{{ date('D, d<\\s\\up>S</\\s\\up> M, Y', strtotime($details->expiry_date)) }}
					</strong>
				</div>
			</div>

			<p class="text-right">
				<button class="btn btn-success btn-sm">Submit Your Assignment</button>
			</p>
		</div>

	</div>
@stop