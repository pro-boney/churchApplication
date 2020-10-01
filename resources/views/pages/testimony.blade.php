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
</head>
<body>
		<div style="width:100%; height:60px; background-color:black; position:;" class="fixed-top">
        <nav class="navbar navbar-expand-md navbar-dark  shadow-sm">
            <div class="container">
                 <a class="navbar-brand disabled" role="button" aria-disabled="true" href="#" >
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    Fir4Fire International Ministry
                </a> 
                <button class="navbar-toggler btn btn-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" style="background-color:;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link btn btn-outline-danger btn-sm ml-5" style="color:gold;"><i>Donation</i></a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Portal') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> -->
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                		 <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Portal') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

		<div class="jumbotron" style="background-image:url('{{asset('/image/red.jfif')}}'); background-repeat:no-repeat; background-size:cover; color:white; width:100%; margin-top:60px;">
			<center>
				<h1>
					"WE OVER COME THE LAND BY THE WORDS OF OUR TESTISMONIES"
				</h1>
			</center>
		</div>

		<div class="container-fluid " style="padding:20px; margin-top:-25px; position:absolute;">
			
		<div class="row">

			<!-- <div class="col-md-2">b</div> -->
			<div class="col-md-6" style="box-shadow:-2px 1px 8px 4px black; padding:20px; margin-left:80px;">

				

				<div class="row" style="background-color:lightgray; padding:20px; margin-bottom:20px;">
					<p><b>1</b></p>
					<div class="col-md-3">
						<center><img src="{{asset('/image/db1.jpg')}}" style="width:98%; height:100px;">
						</center>
					</div>
					<div class="col-md-8">
						<p style="width:90%; margin-left:15px;">
						This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me...
						</p>
						<a href="{{route('testimonyDetail', 'Detail')}}" class="btn btn-success btn-sm">View</a>
					</div>
					
				</div>

				<div class="row" style="background-color:lightgray; padding:20px; margin-bottom:20px;">
					<p><b>2</b></p>
					<div class="col-md-3">
						<center><img src="{{asset('/image/db1.jpg')}}" style="width:98%; height:100px;">
						</center>
					</div>
					<div class="col-md-8">
						<p style="width:90%; margin-left:15px;">
						This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me...
						</p>
						<a href="{{route('testimonyDetail', 'Detail')}}" class="btn btn-success btn-sm">View</a>
					</div>
					
				</div>

				<div class="row" style="background-color:lightgray; padding:20px; margin-bottom:20px;">
					<p><b>3</b></p>
					<div class="col-md-3">
						<center><img src="{{asset('/image/db1.jpg')}}" style="width:98%; height:100px;">
						</center>
					</div>
					<div class="col-md-8">
						<p style="width:90%; margin-left:15px;">
						This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me...
						</p>
						<a href="{{route('testimonyDetail', 'Detail')}}" class="btn btn-success btn-sm">View</a>
					</div>
					
				</div>


				<div class="row" style="background-color:lightgray; padding:20px; margin-bottom:20px;">
					<p><b>4</b></p>
					<div class="col-md-3">
						<center><img src="{{asset('/image/db1.jpg')}}" style="width:98%; height:100px;">
						</center>
					</div>
					<div class="col-md-8">
						<p style="width:90%; margin-left:15px;">
						This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me...
						</p>
						<a href="{{route('testimonyDetail', 'Detail')}}" class="btn btn-success btn-sm">View</a>
					</div>
					
				</div>

				<div class="row" style="background-color:lightgray; padding:20px; margin-bottom:20px;">
					<p><b>5</b></p>
					<div class="col-md-3">
						<center><img src="{{asset('/image/db1.jpg')}}" style="width:98%; height:100px;">
						</center>
					</div>
					<div class="col-md-8">
						<p style="width:90%; margin-left:15px;">
						This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me...
						</p>
						<a href="{{route('testimonyDetail', 'Detail')}}" class="btn btn-success btn-sm">View</a>
					</div>
					
				</div>

			</div>
			<div class="col-md-4" style="margin-left:70px; border-left:1px solid gray; background-color:darkred; height:720px;">

				<div>
					<h1><i>
						PRAYER LINES
					</i></h1>
					<p style="color:white;">Do you need a prayer?  Kindly call any of the following number.</p>
				</div>

				<div class="row" style="background-color:#f1f1f1; padding-top:30px;">

					<div class="col-sm-6" style="background-color:ghostwhite; margin-bottom:20px; border-right:3px solid white;">
						<div class="cart">
							<div class="cart-header">
								<p>Pastor Emmanuel Brown</p>
							</div>
							<center><img src="{{asset('/image/smart.jpg')}}" style="width:80%; height:80px; border-radius:50%;"></center>
							<div class="cart-body">
								<div class="cart-title" style="margin-top:15px;">
									<center>
										<p>0776657791</p>
									</center>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6" style="background-color:ghostwhite; margin-bottom:20px; border-left:3px solid white;">
						<div class="cart">
							<div class="cart-header">
								<p>Pastor John Brown</p>
							</div>
							<center><img src="{{asset('/image/smart.jpg')}}" style="width:80%; height:80px; border-radius:50%;"></center>
							<div class="cart-body">
								<div class="cart-title" style="margin-top:15px;">
									<center>
										<p>0776657791</p>
									</center>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6" style="background-color:ghostwhite; margin-bottom:20px; border-right:3px solid white;">
						<div class="cart">
							<div class="cart-header">
								<p>Pastor John Brown</p>
							</div>
							<center><img src="{{asset('/image/smart.jpg')}}" style="width:80%; height:80px; border-radius:50%;"></center>
							<div class="cart-body">
								<div class="cart-title" style="margin-top:15px;">
									<center>
										<p>0776657791</p>
									</center>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6" style="background-color:ghostwhite; margin-bottom:20px; border-left:3px solid white;">
						<div class="cart">
							<div class="cart-header">
								<p>Pastor John Brown</p>
							</div>
							<center><img src="{{asset('/image/smart.jpg')}}" style="width:80%; height:80px; border-radius:50%;"></center>
							<div class="cart-body">
								<div class="cart-title" style="margin-top:15px;">
									<center>
										<p>0776657791</p>
									</center>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6" style="background-color:ghostwhite; margin-bottom:;">
						<div class="cart">
							<div class="cart-header">
								<p>Pastor John Brown</p>
							</div>
							<center><img src="{{asset('/image/smart.jpg')}}" style="width:80%; height:80px; border-radius:50%;"></center>
							<div class="cart-body">
								<div class="cart-title" style="margin-top:15px;">
									<center>
										<p>0776657791</p>
									</center>
								</div>
							</div>
						</div>
					</div>
					
				</div>

			</div>
		</div>
		</div>
		
	
</body>
</html>