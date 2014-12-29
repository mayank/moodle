<div class="container">

	<h4>Assignments</h4>
	<hr>

	@foreach($subjects as $tile)
	<a href="{{ url('assignments/'.$tile->subject_id) }}">
		<div class="col-sm-3 assign">
			<div class="panel panel-info">
				<div class="panel-heading">
			    	<h3 class="panel-title">
			    		{{ $tile->assignment_name }}
			    	</h3>
			  	</div>
			  	<div class="panel-body">

			  		<p>Subject : <strong>{{ $tile->subject_name }}</strong><p>

			  		<p>Issue Date :
			  			<strong>
							{{ date('D, d<\\s\\up>S</\\s\\up> M, Y', strtotime($tile->issue_date)) }}
						</strong>
					</p>
			  		
			  		<p>Last Date : 
			  			<strong>
							{{ date('D, d<\\s\\up>S</\\s\\up> M, Y', strtotime($tile->expiry_date)) }}
						</strong>
					</p>
			    </div>
			</div>
		</div>
	</a>
	@endforeach
</div