
	@extends('templates.master') 
	@section('content')
	<h1>Them Bai Viet Moi</h1>
	{!! Form::open(['url'=>'demo']) !!}
	 	{!! Form::label('name','Name:') !!}
	  	{!! Form::text('name') !!}</br>

	  	{!! Form::label('author','Author:') !!}
		{!! Form::text('author') !!} </br>
 
		{!! Form::submit('Them moi')!!}
	{!! Form::close() !!}
	@stop
