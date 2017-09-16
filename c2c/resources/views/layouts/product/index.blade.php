<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		@foreach ($products as $product)
		<p>{{ $product->pname }}</p>
		<p>{{ $product->details }}</p>
		<p>{{ $product->price }}</p>
				
		@endforeach
		
	</div>

</body>
</html>