<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
	<div class="panel panel-info">
	  <div class="panel-body">
	  <h3 class="text-center">
 
	  {{ Auth::user()->phone_number }}</h3>
	  <ul class="nav nav-pills">
	  @if(Auth::user()->group == 1989)
	  		<li><a href="/admin">Admin Panel</a></li>
	  @endif
	  		<li><a href="/me/update">Update account</a></li>
	  		<li><a href="/me/settings"><span class="glyphicon glyphicon-wrench"></span>&nbsp;Account settings</a></li>
  			<li class="disabled"><a href="#">Disabled link</a></li>
	   </ul>
	   <hr>
	  </div><!-- /pane-body -->
	  <div class="panel-footer">
	  	<a href="/bye" class="btn btn-danger btn-block ">Logout</a>
	  </div><!-- /panel-footer -->
	</div><!-- /panel -->
</div><!-- loginbox -->