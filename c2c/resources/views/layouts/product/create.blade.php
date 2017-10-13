@extends('layouts.app')

@section('content')

<h1>add all the products here</h1>


		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		
		<div style="padding-left: 12px;">
		{!! Form::open(['url' => '/product', 'files'=> true]) !!}
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
		

@endsection
