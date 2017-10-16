<div class="user-container">
	<ul class="user">
		<li>
			<span class="name">
					name
			</span>
			<span class="email">
					email
			</span>
			<span class="created">
					created at
			</span>
			<span class="delete">
				delete
			</span>
			
		</li>
		@foreach($user as $newUser)
		<li>
			<span class="name">
					{{$newUser->name}}
			</span>
			<span class="email">
					{{$newUser->email}}
			</span>
			<span class="created">
					{{$newUser->created_at}}
			</span>
			<span class="delete">
				<a href= "{{ '/admin/delete/'.$newUser->id }}"> delete </a>
			</span>
			
		</li>
		@endforeach
	</ul>
</div>


