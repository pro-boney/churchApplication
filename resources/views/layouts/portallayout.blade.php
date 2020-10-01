<!DOCTYPE html>
<html>
<head>
	<title>Church App</title>
	<script type="text/javascript" src="{{asset('/js/newJquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/mystylesheet.css')}}">
	</style>
	<style type="text/css">
		input{
			border:1px solid black;
		}
	</style>
</head>
<body>
<div class="container-fluid" style="background-color:lightgray; min-height:;">
	<div class="d-flex justify-content-between py-3">
		<div class="">
			<a href="/home">
				<span><i class="fa fa-2x fa-home" aria-hidden="true"></i></span> 
				<p style="display:inline;"><!-- Modules --></p>
			</a> &nbsp &nbsp

			<a href="/" class="ml-md-3">
				<span><i class="fa fa-2x fa-globe" aria-hidden="true"></i></span> &nbsp
				<p style="display:inline;"><!-- Site --></p>
			</a>
		</div>

		<div>
			<a href="" title="notification">
				<span><i class="fas fa-2x fa-american-sign-language-interpreting "></i></span>
			</a>

			<a href="" title="notification" class="ml-4">
				<span><i class="fas fa-2x fa-american-sign-language-interpreting"></i></span>
			</a>
		</div>
		<div>
			<form>
				<div class="input-group">
					<select>
						<option>Find By</option>
						<option>Name</option>
						<option>Contact</option>
						<option>Location</option>
					</select>
					<input type="search" class="form-control" name="">
					<div class="input-group-append">
						<input type="submit" value="@" name="">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- contents -->

<div class="row ">
	<div class="col-md-3  bg-dark">
		<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	
			<button class="navbar-toggler" data-toggle="collapse" data-target="#sidebarMenu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="sidebarMenu" >
				
				<ul class="navbar-navm flex-column list-group  w-100" style="padding:0px; color:white; background-color:black;">
					<li class="nav-item list-group-item bg-danger">
						<div class="py-3 ">
							<center>
								<img src="{{asset('/image/db1.jpg')}}" style="width:20%; border-radius:50%;">
								<h3>Admin Panel</h3>
							</center>
						</div>
					</li>
					<li class="nav-item list-group-item bg-dark">
						<a href="{{'general'}}" class="nav-link text-light">
						<span class="mr-4">
							 <i class="nav-icon fas fa-2x fa-tachometer-alt"></i>
						</span>
							Dashboard
						</a>
					</li>
					<li class="nav-item list-group-item bg-dark">
						<a href="{{ route('members') }}" class="nav-link text-light">
						<span class="mr-4">
							 <i class="fa fa-2x fa-users" aria-hidden="true"></i>
						</span>
							Church Members
						</a>
					</li>
					<li class="nav-item list-group-item bg-dark">
						<a href="" class="nav-link text-light">
						<span class="mr-4">
							 <i class="nav-icon fas fa-2x fa-tachometer-alt"></i>
						</span>
							Testimonies
						</a>
					</li>
					<li class="nav-item list-group-item bg-dark">
						<a href="" class="nav-link text-light">
						<span class="mr-4">
							 <i class="fa fa-2x fa-bullhorn" aria-hidden="true"></i>
						</span>
							Announcement
						</a>
					</li>
					<li class="nav-item list-group-item bg-dark">
						<a href="" class="nav-link text-light">
						<span class="mr-4">
							 <i class="fa fa-2x fa-wrench" aria-hidden="true"></i>
						</span>
							Tools
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="col-md-9" style=" background-color:#f1f1f1; min-height:900px;">
		@yield('content')
	</div>
</div>
</body>
</html>