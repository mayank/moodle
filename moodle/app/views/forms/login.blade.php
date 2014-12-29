<br>
<br>
<div class="col-md-4 col-md-offset-4 well">

	{{ Form::open( array('method' => 'POST', 'class' => 'form-horizontal', 'url' => 'login') ) }}

		<fieldset>
			
			<legend>Login</legend>

			<p>{{ $errors->first('email') }}</p>
			<p>{{ $errors->first('password') }}</p>
			<p>{{ isset($error) ? $error : '' }}</p>

			<div class="form-group">
				<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-10">
					<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
					<div class="checkbox">
						<label>
							<!--<input type="checkbox" name="remember"> Remember Me-->
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="submit" class="btn btn-primary pull-right">Login</button>
				</div>
			</div>

		</fieldset>
	
	{{ Form::close() }}

</div>