@extends('layouts.app')

@section('content')

<h1>Edit your Product</h1>
		<div style="padding-left: 12px;">
		
		{!! Form::model($product, ['method' => 'put','files'=> true,'route' => ['product.update', $product->pid]]) !!}
			<div>
				{!! Form::label('pname', 'Name', []) !!}
				{!! Form::text('pname') !!}	
			</div>
			<div>
				{!! Form::label('details', 'Details', []) !!}
				{!! Form::text('details') !!}
			</div>
			<div>
				{!! Form::label('price', 'Price', []) !!}
				{!! Form::text('price') !!}
			</div>
			<div>
				{!! Form::label('image', 'Image', []) !!}
				{!! Form::file('image',[]) !!}
			</div>
			<div>
				{!! Form::label('cid', 'Category', []) !!}
				{!! Form::select('cid',$categories, ['placeholder'=>'Select Categories']) !!}
			</div>
			<div>
				
				{!! Form::text('id', Auth::user()->id, ['hidden']) !!}
			</div>
			<div>
				
			</div>
			<div>
				{!! Form::submit('Update', []) !!}
			</div>

		{!! Form::close() !!}
		</div>

@endsection
