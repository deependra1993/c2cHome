<!DOCTYPE html>
<html>
<head>
	<title>
		
		allItemm
	</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}">
</head>
<body>
	@include('layouts.app')
	<div class="display-prod">
		@foreach($newArrayItems as $new)
			<div class="flip-container">
				<div class="flip">
					
						<figure class="front">
								<img src="image/{{$new->image }}" alt="img">
						</figure>
					    <figure class="back">
					    	{{$new->price }}<br/>
					    	{{$new->pname}}<br/>
					    	{{$new->details}}<br/>
							<a href="{{'allItems/' . $new->id }}">
									mail
							</a>
					    </figure>
					
				</div>
			</div>
		@endforeach
	</div>
</body>
</html>
