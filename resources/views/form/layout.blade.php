@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
				<?php //dd($news) ?>
									
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
					
					{{-- comment here--}}

					<form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ url('form/addNews') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
						
						<div class="form-group">
							<label class="col-md-4 control-label">Tiêu đề</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
															
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Mô tả ngắn</label>
							<div class="col-md-6">
								<textarea name="description" rows="10" cols="54" >
									{{ old('description') }}
								</textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Nội dung</label>
							<div class="col-md-6">
								<textarea name="content" rows="10" cols="54" >
									{{ old('content') }}
								</textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Image</label>
							<div class="col-md-6">
								<input type="file" class="form-control" name="image">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Add News
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection