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

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-7 offset-sm-1">
					<div class="row" style="box-shadow:-2px 1px 8px 4px gray; padding:20px; margin-bottom:8px; background-color:white;">
						<div class="col-sm-1">
							{{$idl}}
						</div>
						<div class="col-sm-10" style="padding:10px; background-color:; margin-top:5px;">
							<div class="cart">
								<img src="{{asset('/image/db1.jpg')}}" class="img-thumbnail" style="width:100%; height:250px;">
								
								<p class="lead mt-3"><i>
									June 25, 2019
								</i></p>

								<div class="cart-title" style=" padding:5px;">
									<h3><i><center>
										A MAN HEAL FROM SPIRITUAL PROBLEM
									</center></i></h3>
								</div>

								<div class="cart-body">
								This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me
								This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me
								This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me
								This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me
								This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me
								This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me
								This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me
								This is what the Lord had done for me This is what the Lord had done for me This is what the Lord had done for me
								</div>
							</div>
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>

				<div class="col-sm-3 offset-sm-1">
					<div style="background-color:black; color:white; padding:15px;">
						<center>
							<h2>TESTIMONIES</h2>
						</center>
					</div>
					<div  style="border:1px solid gray;">
						<ul>
							<li style="padding:10px;"><a href="{{route('testimonyDetail', 2)}}">A man heal from spiritual problem</a></li>
							<li style="padding:10px;"><a href="{{route('testimonyDetail', 3)}}">A man heal from spiritual problem</a></li>
							<li style="padding:10px;"><a href="{{route('testimonyDetail', 4)}}">A man heal from spiritual problem</a></li>
							<li style="padding:10px;"><a href="{{route('testimonyDetail', 5)}}">A man heal from spiritual problem</a></li>
							<li style="padding:10px;"><a href="{{route('testimonyDetail', 6)}}">A man heal from spiritual problem</a></li>
							<li style="padding:10px;"><a href="{{route('testimonyDetail', 7)}}">A man heal from spiritual problem</a></li>
							<li style="padding:10px;"><a href="{{route('testimonyDetail', 8)}}">A man heal from spiritual problem</a></li>
							<li style="padding:10px;"><a href="{{route('testimonyDetail', 9)}}">A man heal from spiritual problem</a></li>
							
						</ul>
							<a href="{{route('testimony')}}" class="btn btn-primary btn-block">View More</a>
					</div>
				</div>
			</div>
		</div>







<!-- 
		<div class="container-fluid " style="padding:20px; margin-top:-25px; position:absolute;">
			<a href="/">
				<i class="fas fa-1x fa-phone" style="color:black; border-radius:50%;"></i>
			</a>
		<div class="row">

			  <div class="col-md-2">b</div> 
			<div class="col-md-6" style="box-shadow:-2px 1px 8px 4px black; padding:20px; margin-left:80px;">

aa -->

		<!-- 	</div>
			<div class="col-md-4" style="margin-left:70px; border-left:1px solid gray; background-color:darkred; height:720px;">

bb
			</div>
		</div> -->
		<!-- </div>  -->
		
	
</body>
</html>