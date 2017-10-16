@extends('layouts.app')

@section('content')
<div class="container ">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default product-update">
	                <div class="panel-heading ">
						<div class="head">
							add all the products here
						</div>
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
						
						
						{!! Form::open(['url' => '/product', 'files'=> true , 'class' => 'form-ad']) !!}
							<div>
								
								{!! Form::text('pname', null, ['class' => 'txt']) !!}
								{!! Form::label('pname', 'Name', []) !!}	
							</div>
							<div>
								
								{!! Form::text('details', null, ['class' => 'txt']) !!}
								{!! Form::label('details', 'Details', []) !!}
							</div>
							<div>
								
								{!! Form::text('price', null, ['class' => 'txt']) !!}
								{!! Form::label('price', 'Price', []) !!}
							</div>
							<div>
								{!! Form::label('image', 'Image', []) !!}
								{!! Form::file('image', ['class' => 'imag']) !!}
							</div>
							<div>
								{!! Form::label('cid', 'Category', []) !!}
								{!! Form::select('cid', $categories, null, ['placeholder'=>'Select Categories','class' => 'cat' ]) !!}
							</div>
							<div>
								
								{!! Form::text('id', Auth::user()->id, ['hidden']) !!}
							</div>
							<div>
								{!! Form::submit('Create', ['class' => 'create shadow']) !!}
							</div>
	
						{!! Form::close() !!}
					</div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
