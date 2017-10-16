@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading ">
                    <span class="user-name" >
                         Welcome {{Auth::user()->name}}
                    </span>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     <div>
                    <a href="{{ route('productlist') }}" class="prodLink">
                        <div class="prodList first"> 
                            PRODUCT-LIST
                        </div>

                    </a>
                    <a href="{{route('addProduct')}}" class="badge-pill right prodLink" >
                        <div class="prodList"> 
                            Add Product!
                        </div>
                    </a>

                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
