<div id="regbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
	<div class="panel panel-default">
	  <div class="panel-body">
	  <h3 class="text-center">Update account</h3><!-- /h3 header -->
	  @if($errors)
	  	@foreach($errors as $error)
	  		{{	$error->email }}
	  	@endforeach
	  @endif
	  {{	Form::open(array('url' => '/me/update', 'method' => 'post', 'autocomplete' => 'off', 'role' => 'form'))	}}
		<div class="form-group">
		  	{{	Form::label('name') }}
			{{	Form::text('name', null, array('class' => 'form-control', 'placeholder' => Auth::user()->name, 'autofocus' => true)) }}
			@if($errors->first('name'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('name') }}</strong>
				</div>
			@endif
		</div>
		<div class="form-group">
		  	{{	Form::label('email') }}
			{{	Form::text('email', null, array('class' => 'form-control', 'placeholder' => Auth::user()->email)) }}
			@if($errors->first('email'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('email') }}</strong>
				</div>
			@endif
		</div>
		<div class="form-group">
			{{	Form::label('current_password') }}
			{{	Form::password('current_password', array('class' => 'form-control')) }}
			@if($errors->first('current_password'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('password') }}</strong>
				</div>
			@endif			
		</div>
		<div class="form-group">
			{{	Form::label('new_password') }}
			{{	Form::password('new_password', array('class' => 'form-control')) }}
			@if($errors->first('new_password'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('password') }}</strong>
				</div>
			@endif			
		</div>
		<div class="form-group">
			{{	Form::label('new_password_confirmation') }}
			{{	Form::password('new_password_confirmation', array('class' => 'form-control')) }}
			@if($errors->first('new_password_confirmation'))
				<div class="alert alert-danger fade in">
				    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				    <strong>{{ $errors->first('password_confirmation') }}</strong>
				</div>
			@endif
		</div>
	  </div><!-- /pane-body -->
	  <div class="panel-footer">
	  	{{ Form::submit("Save", array('class' => 'btn btn-success btn-block')) }}
	  	<a href="/me" class="btn btn-danger btn-block">cancel</a>
	  </div><!-- /panel-footer -->
	  {{	Form::token() . Form::close() }}
	</div><!-- /panel -->
</div><!-- loginbox -->