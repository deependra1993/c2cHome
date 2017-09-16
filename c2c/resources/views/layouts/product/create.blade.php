

<h1>add all the products here</h1>
		<div>
		{!! Form::open(['url' => '/product']) !!}
			<div>
				{!! Form::label('pname', 'Name', []) !!}
				{!! Form::text('pname', null, []) !!}	
			</div>
			<div>
				{!! Form::label('details', 'Details', []) !!}
				{!! Form::text('details', null, []) !!}
			</div>
			<div>
				{!! Form::label('price', 'Price', []) !!}
				{!! Form::text('price', null, []) !!}
			</div>
			<div>
				{!! Form::label('image', 'Image', []) !!}
				{!! Form::file('image', []) !!}
			</div>
			<div>
				{!! Form::label('cid', 'Category', []) !!}
				{!! Form::select('cid', $categories, null, ['placeholder'=>'Select Categories']) !!}
			</div>
			<div>
				
				{!! Form::text('id', Auth::user()->id, ['hidden']) !!}
			</div>
			<div>
				
			</div>
			<div>
				{!! Form::submit('Create', []) !!}
			</div>

		{!! Form::close() !!}
		</div>


