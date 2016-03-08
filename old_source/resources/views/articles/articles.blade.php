<html>
<head>
	<title>View articles</title>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Roles</th>
			<th>Date</th>
		</tr>
		@foreach($articles as $article)
			<tr>
				<td>{{$article->name}}</td>
				<td>{{$article->author}}</td>
				<td>{{$article->created_at}}</td>
			</tr>		
		@endforeach
	</table>
</body>
</html>