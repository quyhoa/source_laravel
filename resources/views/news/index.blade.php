@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
				<?php //echo "<pre>";
					echo e('<b>foo</b>');
				 ?>

									
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if(isset($listNews) && count($listNews) > 0)
						<table border="1px" width="100%">
							<tr>
								<th>STT</th>
								<th>Name</th>
								<th>Delete</th>
							</tr>
							@foreach($listNews as $ln)
							<tr>
								<td>{{$ln['id']}}</td>								
								<td> <a href="{{ URL::to('view/' . $ln['id']) }}">{{$ln['name']}}</a> </td>
								<td><a href="{{ URL::to('delete/' . $ln['id']) }}">Delete</a></td>								
							</tr>								
								@endforeach()
						</table>
					@else
						Thong tin dang cap nhat
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection