@extends('layouts.app')

@section('content')
<div class="container ">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default product-update">
	                <div class="panel-heading ">
						<div class="head">
								Edit your Product
						</div>
						<div class="panel-body ad-bod">

								@if ($errors->any())
								    <div class="alert alert-danger">
								        <ul>
								            @foreach ($errors->all() as $error)
								                <li>{{ $error }}</li>
								            @endforeach
								        </ul>
								    </div>
								@endif
		
		
								{!! Form::model($product, ['method' => 'put','files'=> true,'route' => ['product.update', $product->pid]]) !!}
									<div>
										{!! Form::label('pname', 'Name', []) !!}
										{!! Form::text('pname') !!}	
										
										
									</div>
									<div>
										{!! Form::label('details', 'Details', []) !!}
										{!! Form::textarea('details') !!}
										
										
									</div>
									<div>
										{!! Form::label('price', 'Price', []) !!}
										{!! Form::text('price') !!}
										
										
									</div>
									<div>
										{!! Form::label('image', 'Image', []) !!}
										{!! Form::file('image') !!}s
									</div>
									<div>
										{!! Form::label('cid', 'Category', []) !!}
										{!! Form::select('cid',$categories, ['placeholder'=>'Select Categories']) !!}
									</div>
									<div>
										
										{!! Form::text('id', Auth::user()->id, ['hidden']) !!}
									</div>
								
									<div>
										{!! Form::submit('Update', ['class' => 'create shadow']) !!}
									</div>

								{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	   </div>
	</div>
</div>

@endsection
