<div style="margin-top: 20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
@if (Session::get("info"))
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>{{ Session::get("info") }}</strong>
	</div>	
@endif
@if (Session::get("success"))
	<div class="alert alert-success fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>{{ Session::get("success") }}</strong>
	</div>	
@endif
@if (Session::get("error"))
	<div class="alert alert-danger fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>{{ Session::get("error") }}</strong>
	</div>	
@endif
@if (Session::get("warning"))
	<div class="alert alert-warning fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>{{ Session::get("warning") }}</strong>
	</div>	
@endif
@if (Auth::check() && Auth::user()->group == 100)
	<div class="alert alert-warning fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h3 class="text-center">Account unactivated</h3>
		<p class="text-center">Please activate your account.</p>
		<hr>
		<a href="/activate/resend" class="btn btn-info btn-block"><strong>Resend activation</strong></a>
	</div>	
@endif
</div>