<div id="regbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
	<div class="panel panel-default">
	  <div class="panel-body">
	  <h3 class="text-center">Register<br><small><a href="/login">Already have and account? sign in</a></small></h3><!-- /header -->
	  {{	Form::open(array('url' => '/register', 'method' => 'post', 'role' => 'form'))	}}
	  </div><!-- /pane-body -->
	  <div class="panel-footer">  
		<div class="form-group">
		  	{{	Form::label('phone_number') }}
			{{	Form::text('phone_number', null, array('class' => 'form-control', 'placeholder' => '999-888-6666/9995551234', 'autofocus' => true)) }}
			@if($errors->first('phone_number'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('phone_number') }}</strong>
				</div>
			@endif
		</div>
		<div class="form-group">
			{{	Form::label('passcode') }}
			{{	Form::password('password', array('class' => 'form-control')) }}
			@if($errors->first('password'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('password') }}</strong>
				</div>
			@endif			
		</div>
		<div class="form-group">
			{{	Form::label('passcode_confirmation') }}
			{{	Form::password('password_confirmation', array('class' => 'form-control')) }}
			@if($errors->first('password_confirmation'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('password_confirmation') }}</strong>
				</div>
			@endif
		</div>
		<div class="form-group">
			<label id="tos">I accept the <a href="#">Terms of service</a></label>
			{{	Form::checkbox('tos') }}
			@if($errors->first('tos'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('tos') }}</strong>
				</div>
			@endif			
		</div>	  
	  	{{ Form::submit('register', array('class' => 'btn btn-success btn-block')) }}
	  </div><!-- /panel-footer -->
	  {{	Form::token() . Form::close() }}
	</div><!-- /panel -->
</div><!-- loginbox -->