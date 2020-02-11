<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>List of names</h1>
	<ul>
		@foreach($dash as $dashs)
				{{$dashs->name}}
				{{$dashs->image}}
			@endif		
		@endforeach
	</ul>
</body>
</html>