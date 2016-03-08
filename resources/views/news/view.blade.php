@extends('app')
@section('content')

<div style="margin-left:5%">
	<table width="60%">
		<tr>
			<td>{{$detail['name']}}</td>
			<td><img src="{{URL::to('public/files/images')}}/{{$detail['images']}}" style="width:268px"></td>
			<td>{{$detail['description']}}</td>
			<td>{{$detail['content']}}</td>
		</tr>
	</table>
</div>	
{{dd($detail)}}
@endsection
