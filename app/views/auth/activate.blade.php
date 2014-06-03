<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
	<div class="panel panel-info">
	  <div class="panel-body">
	  	<h3 class="text-center">Activate</h3>
	  </div><!-- /pane-body -->
	  <div class="panel-footer">
	  	{{	Form::open(array('url' => '/activate', 'method' => 'post', 'role' => 'form')) }}
	  		{{	Form::label('email') }}
	  		{{	Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'you@email.com')) }}
	  		{{	Form::label('activation code') }}
	  		{{	Form::text('activation_code', null, array('class' => 'form-control', 'placeholder' => 'Activation code')) }}<br>
	  		{{	Form::submit('activate', array('class' => 'btn btn-success btn-block')) }}
	  	{{	Form::token() . Form::close() }}
	  </div><!-- /panel-footer -->
	</div><!-- /panel -->
</div><!-- loginbox -->