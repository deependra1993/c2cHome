@include('header')
<nav>
	
		<div class="nav-container">
			<span id="admin-logo" class="common">admin</span>
			<ul class="menu">
				<a href="#">
					<li>
					
						<label>FLAGS</label><br/>
						<label class="no">0 </label>
				
					</li>
				</a>
				<a href="{{route('product')}}">
					<li>
						
							<label>PRODUCTS</label><br/>
							<label class="no">
								{{$productTotal}}
							</label>
						
					</li>
				</a>
				<a href="{{route('admin')}}">
					<li>
					
						<label>USERS</label><br/>
						<label class="no">
							{{$userTotal}} 
						</label>
			
					</li>
				</a>
				<li id="logout">
					<label >LOGOUT</label>
				</li>
			</ul>	
		</div>
</nav>