<div id="suspended" style="margin-top:50px;" class="mainbox col-md-5 col-md-offset-4 col-sm-8 col-sm-offset-2">                    
	<div class="panel panel-danger">
	  <div class="panel-body">
	  <h2 class="text-center"><span class="glyphicon glyphicon-asterisk"></span></h2>
	  <h2 class="text-center">Woah! Suspended</h2>
	  <p class="text-center">
	  	Your account has been suspended for the following reasons.
	  	<blockquote>{{ Auth::user()->notes }}</blockquote>
	  	<p><strong>Logged</strong>
	  		<ul>
	  			<li><strong>ip&nbsp;address&nbsp;</strong>{{ Auth::user()->last_ip }}</li>
	  		</ul>
	  	</p>
	  </p>
	  </div><!-- /pane-body -->
	 <div class="panel-footer">
	<p class="text-center"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;If you believe you have been suspended by mistake please email <i>admin@domain.com</i>.</p>
	<hr>
	  <a href="/bye" class="btn btn-danger btn-block">Logout</a>
	  </div><!-- /footer -->
	</div><!-- /panel -->
</div><!-- loginbox -->