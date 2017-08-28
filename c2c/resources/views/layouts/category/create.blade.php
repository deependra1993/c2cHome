<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	{!! Form::open(['url'=> '/category']) !!}
	<div>
		{!! Form::label('cname', 'Name', []) !!}
		{!! Form::text('cname', null, []) !!}
		
	</div>
	<div>
		{!! Form::submit('Create', []) !!}
		
	</div>
	{!! Form::close() !!}

</body>
</html>