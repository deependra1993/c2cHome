@include('header')
<nav>
	
		<div class="nav-container">
			<span id="admin-logo" class="common">admin</span>
			<ul class="menu">
				<li>
					<label>FLAGS</label><br/>
					<label class="no">0 </label>
				</li>
				<li>
					<label>PRODUCTS</label><br/>
					<label class="no">{{$productTotal}} </label>
				</li>
				<li>
					<label>USERS</label><br/>
					<label class="no">{{$userTotal}} </label>
				</li>
				<li id="logout">
					<label >LOGOUT</label>
				</li>
			</ul>	
		</div>
</nav>