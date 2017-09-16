<div class="display-prod">
@for($i = 0; $i< 6; $i++)
	<div class="flip-container">
		<div class="flip">
			<figure class="front">
				<img src="image/dog.jpg" alt="img">
			</figure>
		    <figure class="back">
			    
				
			    	@foreach ($prD as $prDs)
							<h4>{{$prDs->pname}}</h4>
							<h4>{{$prDs->price}}</h4>
							<h4>{{$prDs->details}}</h4>
							<h4>{{$prDs->created_at}}</h4>
					@endforeach
				 
		    </figure>
	    </div>		
	</div>
@endfor
</div>
