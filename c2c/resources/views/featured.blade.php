<div class="display-prod">
@for($i = 0; $i< 4; $i++)
	<div class="flip-container">
		<div class="flip">
			
			<figure class="front">
			@for($j=$i;$j<=$i;$j++)
				<img src="image/{{ $arrPimage[$j] }}" alt="img">
			@endfor
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
