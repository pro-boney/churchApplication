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
	<div class="container-fluid" style="margin-top:60px;">
		<div class="row" style="min-height:100px; box-shadow:-2px 1px 1px 4px lightgray; margin-top:5px;">
		
		<div class="col-sm-4">
			<img src="{{asset('/image/peace.jpg')}}" style="width:90px; height:90px;">
			<span style="margin-left:10px; font-size:28px;">PEACE FELLOWSHIP</span>
		</div>
		<div class="col-sm-5">
			
				<div style="padding:20px;">
				<a href="" class="mr-5"><i class="fa fa-3x fa-map-marker" style=""></i></a>
				<a href="" class="mr-5"><i class="fa fa-3x fa-map-marker" style=""></i></a>
				<a href="" class="mr-5"><i class="fa fa-3x fa-map-marker" style=""></i></a>
			</div>
			
		</div>
		<div class="col-sm-3" style="padding:20px;">
			<!-- <a href="{{route('login')}}" class="btn btn-warning btn-lg mb-1">Login</a> -->
		</div>

		</div>
	</div>
	<br><br>
	<div class="container-fluid" style="background-color:;">
		<div class="row">
			<div class="col-sm-7 offset-sm-1">
				<div style="width:100%; min-height:; box-shadow:-2px 1px 1px 4px lightgray; margin:5px;">
					<br><div style="width:98%; margin-top:20px;">
						<video width="100%" height="400" controls>
						<source src="{{asset('/image/afr.mp4')}}" type="video/mp4">
						</video>
						<h4 class="lead"><i>
								<center>
									DEPARTMENT GREETING
								</center>
							</i></h4><br>
					</div>
				</div>

				<center>
					<h1 style="padding:20px; margin-top:30px;">
						OUR WORK
						<hr style="width:50%; height:5px; background-color:gold;">
					</h1>
				</center>

				<p style="width:96%; margin:-20px auto;">
					Jesus Christ is all that man needs. The whole purpose of God sending Jesus Christ was to restore the fallen man, through Him, to his (man's) original position and relationship with God. Amen.<br><br>

					When you partner with our evangelistic ministry through your donations, personal involvements, and spiritual support, you make yourself one of the instruments of the restoration agenda of God in your generation. Wherever you are in the world, join hands with us in cash, in kind, and in prayers, and become a member of our soul winning team, globally. You can reach me personally today by writing to me through the following addresses. You can even phone me directly or send an e-mail. You can also surf our website for details about us. God bless you now, as you do so, in Jesus' Name. Amen.<br><br>

					Please believe that the supreme task for all Christians is soul winning through evangelism and church planting, as directed by Jesus Christ Himself in the Great Commission of Acts 1:8. 
				</p>
			</div>
			<div class="col-sm-3 offset-sm-1">
				<small style="float:right;" ><i><mark>
					45 Members
				</mark></i></small><br><br>

				<div class="cart">
					<div class="cart-header" style="padding:20px; background-color:black; color:white;"><center>
						<h5>
							The Important Of Becoming a Church Worker.
						</h5>
					</center></div>
					<div class="cart-body">
						<p class="lead">
							When every you find yourself working in the hourse of God you stand a chang to enjoy the following:
						</p>
						<ul>
							
							<li>Jesus Christ Himself in the Great Commission of Acts 1:8.</li>
							<li>Jesus Christ Himself in the Great Commission of Acts 1:8.</li>
							<li>Jesus Christ Himself in the Great Commission of Acts 1:8.</li>
							<li>Jesus Christ Himself in the Great Commission of Acts 1:8.</li>
							<li>Jesus Christ Himself in the Great Commission of Acts 1:8.</li>
						</ul>
					</div>
				</div><br><br>

				<div class="leader">
					<div class="row" style="background-color:#f1f1f1; border-right:2px solid white;">
						<div style="background-color:purple; color:white; width:100%; padding:20px;">
							<center>
								<h3>
									Group Leadership
								</h3>
							</center>
						</div>
						<div class="col-sm-6" style="margin-bottom:15px;">
							<center>
								<img src="{{asset('/image/bbg.jpeg')}}" class="rounded-circle" style="width:90%; border:3px solid gold; margin:10px; height:90px;">
								<p class="" style="font-style:8px;"><i> Dominic K. Bonney</i></p>
								<p style="margin-top:-12px;"><i>President Peace fellowship</i></p>
							</center>
						</div>
						
						<div class="col-sm-6" style="margin-bottom:15px;">
							<center>
								<img src="{{asset('/image/bbg.jpeg')}}" class="img-thumbnail" style="width:90%; margin:10px; height:90px;">
								<p class="" style="font-style:8px;"><i> Dominic K. Bonney</i></p>
								<p style="margin-top:-12px;"><i>President Peace fellowship</i></p>
							</center>
						</div>

						<div class="col-sm-6" style="margin-bottom:15px;">
							<center>
								<img src="{{asset('/image/bbg.jpeg')}}" class="img-thumbnail" style="width:90%; margin:10px; height:90px;">
								<p class="" style="font-style:8px;"><i> Dominic K. Bonney</i></p>
								<p style="margin-top:-12px;"><i>President Peace fellowship</i></p>
							</center>
						</div>

						<div class="col-sm-6" style="margin-bottom:15px;">
							<center>
								<img src="{{asset('/image/bbg.jpeg')}}" class="img-thumbnail" style="width:90%; margin:10px; height:90px;">
								<p class="" style="font-style:8px;"><i> Dominic K. Bonney</i></p>
								<p style="margin-top:-12px;"><i>President Peace fellowship</i></p>
							</center>
						</div>

						<div class="col-sm-6" style="margin-bottom:15px;">
							<center>
								<img src="{{asset('/image/bbg.jpeg')}}" class="img-thumbnail" style="width:90%; margin:10px; height:90px;">
								<p class="" style="font-style:8px;"><i> Dominic K. Bonney</i></p>
								<p style="margin-top:-12px;"><i>President Peace fellowship</i></p>
							</center>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div><br>


	<div class="jumbotron">
		lld
	</div>

</body>
</html>