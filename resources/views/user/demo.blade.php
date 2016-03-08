@if (Session::has('message'))
	<div class="alert alert-{{ Session::get('level') }}">
		{{ Session::get('message') }}
	</div>
@endif
