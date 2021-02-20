@if(Session::has('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	{{ Session::get('success') }}
</div>
@endif

@if(Session::has('danger'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	{{ Session::get('danger') }}
</div>
@endif