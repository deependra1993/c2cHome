
	@include('admin.nav')


<div class="user-container">
	
			<ul class="user">
				<li>
					
					<span>
							name
					</span>
					<span >
							price
					</span>
					<span>
							details
					</span>
					<span>
							created at
					</span>
					<span class="delete">
						delete
					</span>
					
				</li>
				@foreach($flagDetail as $product)
				<li>
					
					<span>
							{{$product->pname}}
					</span>
					<span >
							{{$product->price}}
					</span>
					<span>
							{{$product->details}}
					</span>
					<span>
							{{$product->created_at}}
					</span>
					<span class="delete">
						delete
					</span>
					
				</li>
				@endforeach

	</ul>
	
	<h1>no flagged items</h1>
	
</div>