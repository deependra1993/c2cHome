<!Doctype html>

<html>
<head> 
    <!-- Search -->
	<title>Search Product</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/.12.0/jquery.min.js">
	</script>
	</head>
<body>
<div class="container" align="top-right">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3> Product Information </h3> 
			</div>
			    <div class="panel-body">
				<div class="form-group">
				<form action="/search" method="POST" role="search">
                {{ csrf_field() }}
				<div class="input-group" align="top-right">
                <input type="text" class="form-control" name="q"
                   placeholder="Search Products"> <span class="span 4">
                  <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            	</button>
        		</span>
    			</div>
				</form> <br>
		
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
   @if(isset($details)) 
   <!-- Displaying the Ouput on search page -->   
    <h2>Product details</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
              
            </tr>
        </thead>
        <body>
      		$products=DB::table('products')->get();
            @foreach($products as $product)
            <tr>
              <!--   <td>{{$product->id}}</td> -->
                <td>{{$product->pname}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->details}}</td>
                <td>{{$product->image}}</td>
            </tr>
            @endforeach
             <button><a href="{{route('search')}}">Search Product</a></button>
        </tbody>
    </table>
   @endif 
</div>
</body>
</html>