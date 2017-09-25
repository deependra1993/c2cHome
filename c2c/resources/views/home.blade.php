@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Dashboard

                <a href="{{route('addProduct')}}" class="badge-pill right">
                    add Product
                </a>
                
            
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div>
                    <p><a href="{{ route('productlist') }}">productlist</a></p>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
