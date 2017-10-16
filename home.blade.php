

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                Dashboard
<!-- Home Page for the System where option for adding a product and viewing the ProductList -->
                <a href="{{route('addProduct')}}" class="badge-pill right">
                    add Product
                </a>




<!-- Rohits search -->
         <div> 
             <a href="{{route('search')}}" class="badge-pill right">
                    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   

<div class="container">
    <div class="row">
        <!-- <div class="panel panel-default">
            <div class="panel-heading">
                
            </div>
                <div class="panel-body">
                <div class="form-group">
                <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                <input type="text" class="form-control" name="q"
                   placeholder="Search Products"> <!-- <span class="input-group-btn"> -->
                 <button type="submit" class="btn btn-default">
                 <span class="glyphicon glyphicon-search"></span> 
             </button>
        </span>
    Search Products </div>
                </a>
                </div> 
<!-- Endo of Search -->
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


<!-- <title>Search Product</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/.12.0/jquery.min.js">
    </script>
    </head>
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3> Product Information </h3> 
            </div>
                <div class="panel-body">
                <div class="form-group">
                <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                <input type="text" class="form-control" name="q"
                   placeholder="Search Products"> <span class="input-group-btn">
                  <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>

 -->