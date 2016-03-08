@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="btn-new"><a href="form/layout">Add news</a></div>
					Hello, @{{ $name }}.				
									
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
					@if(isset($listUsers) && count($listUsers) > 0)
						<table border="1px" width="100%">
							<tr>
								<th>STT</th>
								<th>Name</th>
								<th>email</th>
								<th>Delete</th>
							</tr>
							@foreach($listUsers as $l_user)
							<tr>
								<td><?php echo e($l_user['id']) ?></td>
								<td> <a href="show/{{$l_user['id']}}">{{$l_user['name']}}</a> </td>
								<td><?php echo e($l_user['email']) ?></td>
								<td><a href="delete/{{$l_user['id']}}">Delete</a></td>
							</tr>
							@endforeach
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