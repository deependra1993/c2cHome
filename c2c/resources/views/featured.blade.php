<div class="display-prod">
@for($i = 0; $i< 6; $i++)
	<div class="flip-container">
		<div class="flip">
			
			<figure class="front">
				<img src="image/dog.jpg" alt="img">
			</figure>
		    <figure class="back">
		    	@for($j=$i;$j<=$i;$j++)
					<h4>{{$arrPname[$j]}}</h4>
					<h4>{{$arrPprice[$j]}}</h4>
					<h4>{{$arrPdetail[$j]}}</h4>

				@endfor
			    

		    </figure>
	    </div>		
	</div>
@endfor
</div>
