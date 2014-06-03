<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
	<div class="panel panel-info">
	  <div class="panel-body">
	  <h3 class="text-center"><span><span class="glyphicon glyphicon-lock"></span></span></h3>
	  {{	Form::open(array('url' => '/login', 'method' => 'post', 'role' => 'form'))	}}
		
	  </div><!-- /pane-body -->
	  <div class="panel-footer">
		<div class="form-group">
		  	{{	Form::label('phone_number') }}
			{{	Form::text('phone_number', null, array('class' => 'form-control', 'placeholder' => '999-888-6666/9995551234', 'autofocus' => true)) }}
			@if($errors->first('phone_number'))
				<div class="alert alert-warning fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('email') }}</strong>
				</div>
			@endif			
		</div>
		<div class="form-group">
			{{	Form::label('passcode') }}
			{{	Form::password('password', array('class' => 'form-control')) }}
			@if($errors->first('password'))
				<div class="alert alert-warning fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('password') }}</strong>
				</div>
			@endif			
		</div>
		<div class="form-group text-center">
			<a href="/register" class="btn btn-link">Create an account</a>
		</div>
		<hr>
	  	{{ Form::submit('login', array('class' => 'btn btn-success btn-block')) }}
	  </div><!-- /panel-footer -->
	  {{	Form::token() . Form::close() }}
	</div><!-- /panel -->
</div><!-- loginbox -->