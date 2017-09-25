@extends('layouts.app')

@section('content')
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif
	<button><a href="{{route('addProduct')}}" class="badge-pill right">add Product</a></button>
	<br><br>
                   
                
	<div class= "display-prod" style="padding-left: 12px;">
		@foreach ($products as $product)
		<p>{{ $product->pname }}</p>
		<p>{{ $product->details }}</p>
		<p>{{ $product->price }}</p>
		<p><a href="{{ '/product/'.$product->pid.'/edit'  }}">Update</a></p>
		{!! Form::open(['method' => 'delete','route' => ['product.destroy', $product->pid]]) !!}

		<p><a>{!! Form::submit('Delete', []) !!}</a></p>

		{!! Form::close() !!}		
		@endforeach
		
	</div>

@endsection