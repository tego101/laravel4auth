<div id="regbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
	<div class="panel panel-default">
	  <div class="panel-body">
	  <h3 class="text-center">Register<br><small><a href="/login">Already have and account? sign in</a></small></h3><!-- /header -->
	  {{	Form::open(array('url' => '/register', 'method' => 'post', 'role' => 'form'))	}}
	  </div><!-- /pane-body -->
	  <div class="panel-footer">
		<div class="form-group">
		  	{{	Form::label('company_name') }}
			{{	Form::text('company_name', null, array('class' => 'form-control', 'placeholder' => 'Company', 'autofocus' => true)) }}
			@if($errors->first('company_name'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('company_name') }}</strong>
				</div>
			@endif
		</div>
		<hr>
		<div class="form-group">
		  	{{	Form::label('first_name') }}
			{{	Form::text('first_name', null, array('class' => 'form-control', 'placeholder' => 'John', 'autofocus' => true)) }}
			@if($errors->first('first_name'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('first_name') }}</strong>
				</div>
			@endif
		</div>
		<div class="form-group">
		  	{{	Form::label('email') }}
			{{	Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'email@domain.com', 'autofocus' => true)) }}
			@if($errors->first('email'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('email') }}</strong>
				</div>
			@endif
		</div>
		<div class="form-group">
			{{	Form::label('password') }}
			{{	Form::password('password', array('class' => 'form-control')) }}
			@if($errors->first('password'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('password') }}</strong>
				</div>
			@endif			
		</div>
		<div class="form-group">
			{{	Form::label('password_confirmation') }}
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