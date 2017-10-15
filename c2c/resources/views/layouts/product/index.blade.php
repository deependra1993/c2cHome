@extends('layouts.app')

@section('content')
	<div class="container ">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default product-update">
	                <div class="panel-heading ">
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif
						<a href="{{route('addProduct')}}" class="addLink text">
							<div class="addList shadow">
								Ad-Post!
							</div>
						</a>
					</div>
					<div class="panel-body ad-bod">
	   					@foreach ($products as $product)
	   						<div class="prod-bod"> 
	   							<a href="{{ '/product/'.$product->pid.'/edit'  }}" class="prod-up text">
	   								<div class="prod-up-bod shadow"> 
	   									Update
	   								</div>
	   								
	   							</a>
								<span>
									{{ $product->pname }}
								</span>
								<span>
									{{ $product->details }}
								</span>
								<span>
									${{ $product->price }}
								</span>
								
								{!! Form::open(['method' => 'delete','route' => ['product.destroy', $product->pid]]) !!}

								<a>{!! Form::submit('Delete', ['class' => 'ad-del shadow']) !!}</a>

								{!! Form::close() !!}
							</div>		
						@endforeach
					</div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection