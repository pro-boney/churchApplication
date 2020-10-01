<!DOCTYPE html>
<html>
<head>
	<title>Church App</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script type="text/javascript" src="{{asset('/js/newJquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/mystylesheet.css')}}">
	</style>

	<style type="text/css">
	body{
		background-color:#f1f1f1;
	}
		#shows{
			background-image:url(' {{asset('/image/main.jpg')}}'); 
			background-repeat:no-repeat;
			background-size:cover;
			//background-attachment:fixed;
			background-position:100% 40%;
			height:550px;
			margin-top:60px;
			padding:0px;
		}
		.showChild{
			background-color:purple;
			opacity:0.5;
			width:100%;
			height:100%;
			margin:0px;
			padding:0px;
		}
		.portal{
			margin-top:60px;
			//margin-right:40px;
		}
		#logo{
			width:100px;
			height:100px;
			border-radius:50%;
			margin:40px;
			//margin-left:100px;
		}
		.showChild h1{
			margin-left:40px;
			margin-top:-20px;
			font-weight:bold;
			color:white;
			font-family:Algerian;
			//margin-left:40px;
		}
		.navtab a:hover{
			background-color:red;
		}
		#contentBody{
			min-height:400px;
			background-color:white;
			border-radius:20px 20px 0px 0px;
		}
		#announ{
			min-height:500px; 
			background-color:white;
		}
		#cardDiv{
			/*height:500px;
			overflow:auto;*/
			padding:20px;
		}
		.groupCard{
			width:100%; 
			min-height:300px; 
			background-color:ghostwhite;
			box-shadow:-2px 2px 4px 2px black;
			margin-bottom:40px;
		}
		.cardImg{
			background-color:red;
			height:150px;
		}
		.card-title{
			text-align:center;
			color:red;
		}
	</style>
</head>
<body>
	<div style="width:100%; height:60px; background-color:black;" class="fixed-top">
		<nav class="navbar navbar-expand-md navbar-dark  shadow-sm">
            <div class="container">
                 <a class="navbar-brand disabled" role="button" aria-disabled="true" href="#" >
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    Fir4Fire International Ministry
                </a> 
                <button class="navbar-toggler btn btn-primary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" style="background-color:;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color:black;">
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
                    		<a href="" class="nav-link btn btn-outline-danger btn-sm ml-md-5" style="color:gold;"><i>Donation</i></a>
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
	<div class="container-fluid" id="shows">
		<div class="row showChild">
				<div class="col-sm-6">
							<img src="{{asset('/image/fire.png')}}" id="logo">
						
							<h1>
								FIRE 4 FIRE <br> WE ARE THE OVERCOMER <br> WE ARE MOVING HIGHER
							</h1>
				</div>
				
		</div>
	</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9">

			<ul class="nav nav-tabs nav-justified navtab">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle='tab' href="#try">HOME</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle='tab' href="#try1">CHURCH HISTORY</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle='tab' href="#try2">EVENTS</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle='tab' href="#try3">GROUP</a>
			  </li>
			</ul>

		<div class="tab-content" id="contentBody">
			<div id="try" class="tab-pane fadein active">	
				<div class="row" style="padding:25px; background-color:#f1f1f1;">
					<div class="col-sm-8" style="background-color:white;">
						<center>
							<h1 style="padding: 20px; color:red;">
								GENERAL OVERSEER MESSAGE
							</h1>
						</center>

						<p>
								Jesus Christ is all that man needs. The whole purpose of God sending Jesus Christ was to restore the fallen man, through Him, to his (man's) original position and relationship with God. Amen.<br><br>

								When you partner with our evangelistic ministry through your donations, personal involvements, and spiritual support, you make yourself one of the instruments of the restoration agenda of God in your generation. Wherever you are in the world, join hands with us in cash, in kind, and in prayers, and become a member of our soul winning team, globally. You can reach me personally today by writing to me through the following addresses. You can even phone me directly or send an e-mail. You can also surf our website for details about us. God bless you now, as you do so, in Jesus' Name. Amen.<br><br>

								Please believe that the supreme task for all Christians is soul winning through evangelism and church planting, as directed by Jesus Christ Himself in the Great Commission of Acts 1:8. 
						</p>
					</div>
					<div class="col-sm-4">
						<img src="{{asset('/image/p5.jpg')}}" class="img-thumbnail" style="width:100%; height:380px;">
						<center>
							<h6>
								ENOCH BAFFOUR ANNOR
							</h6>
							<p><i>General overseer</i></p>
						</center>
					</div>
				</div>

				<div class="container" style="padding-top:20px; padding-bottom:0px;">
					<center>
						<h1 style="padding-bottom:10px;">
							THE CHURCH MESSION 
						</h1>
					</center>

					<div class="row" style=" background-color:#f1f1f1; padding-top:30px; padding-bottom:60px;">
						<div class="col-sm-4">
							<div class="card">
								<div class="card-header">
									<center>
										<h4>SPEAK THE WORDS</h4>
									</center>
								</div>
								<div class="card-img-top">
								   <img src="{{asset('/image/bible.jpg')}}" class="img-thumbnail" style="width:100%; height:150px;">
								</div>
								<div class="card-body">
									Please believe that the supreme task for all Christians is soul winning through evangelism and church planting, as directed by Jesus Christ Himself in the Great Commission of Acts 1:8.
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-header">
									<center>
										<h4>EVANGELIZE</h4>
									</center>
								</div>
								<div class="card-img-top">
								   <img src="{{asset('/image/evangelize.jpeg')}}" class="img-thumbnail" style="width:100%; height:150px;">
								</div>
								<div class="card-body">
									Please believe that the supreme task for all Christians is soul winning through evangelism and church planting, as directed by Jesus Christ Himself in the Great Commission of Acts 1:8.
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card">
								<div class="card-header">
									<center>
										<h4>PRAYER</h4>
									</center>
								</div>
								<div class="card-img-top">
								   <img src="{{asset('/image/prayer.jpg')}}" class="img-thumbnail" style="width:100%; height:150px;">
								</div>
								<div class="card-body">
									Please believe that the supreme task for all Christians is soul winning through evangelism and church planting, as directed by Jesus Christ Himself in the Great Commission of Acts 1:8.
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<div class="container-fluid">
						<div class="row">
							<div class="col-sm-8" style="padding-top:10px;">
								<center>
									<h1 style="padding-bottom:10px;">CHURCH ACTIVITIES</h1>
								</center>

								<div class="row" style="background-color:#f1f1f1;">
									<div class="col-sm-6" style="padding:20px; background-color:;">
										<div class="media" style="padding-top:20px; box-shadow:-2px 1px 8px 4px black; background-color:;">
											<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-1 mt-4 rounded-circle" style="width:20%; border:1px solid black; height:90px;">
											<div class="media-body">
												<center>
													<h4>SUNDAY</h4>
												</center>
												<p style="font-size:16px;"><b><center>Devin Worship Service</center></b>
													Bringing the undiluted word of God to you. 
												</p>
												<!-- <p> Bringing the undiluted word of God to you, the food for the soul </p> -->
												<p><b>Time 10:00 AM</b></p>
											</div>
										</div>
									</div>

								<div class="col-sm-6" style="padding:20px; background-color:;">
										<div class="media" style="padding-top:20px; box-shadow:-2px 1px 8px 4px black; background-color:;">
											<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-1 mt-4 rounded-circle" style="width:20%; height:90px;">
											<div class="media-body">
												<center>
													<h4>SUNDAY</h4>
												</center>
												<p style="font-size:16px;"><b><center>Devin Worship Service</center></b>
													Bringing the undiluted word of God to you. 
												</p>
												<!-- <p> Bringing the undiluted word of God to you, the food for the soul </p> -->
												<p><b>Time 10:00 AM</b></p>
											</div>
										</div>
									</div>

									<div class="col-sm-6" style="padding:20px; background-color:;">
										<div class="media" style="padding-top:20px; box-shadow:-2px 1px 8px 4px black; background-color:;">
											<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-1 mt-4 rounded-circle" style="width:20%; height:90px;">
											<div class="media-body">
												<center>
													<h4>SUNDAY</h4>
												</center>
												<p style="font-size:16px;"><b><center>Devin Worship Service</center></b>
													Bringing the undiluted word of God to you. 
												</p>
												<!-- <p> Bringing the undiluted word of God to you, the food for the soul </p> -->
												<p><b>Time 10:00 AM</b></p>
											</div>
										</div>
									</div>

									<div class="col-sm-6" style="padding:20px; background-color:;">
										<div class="media" style="padding-top:20px; box-shadow:-2px 1px 8px 4px black; background-color:;">
											<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-1 mt-4 rounded-circle" style="width:20%; height:90px;">
											<div class="media-body">
												<center>
													<h4>SUNDAY</h4>
												</center>
												<p style="font-size:16px;"><b><center>Devin Worship Service</center></b>
													Bringing the undiluted word of God to you. 
												</p>
												<!-- <p> Bringing the undiluted word of God to you, the food for the soul </p> -->
												<p><b>Time 10:00 AM</b></p>
											</div>
										</div>
									</div>

									<div class="col-sm-6" style="padding:20px; background-color:;">
										<div class="media" style="padding-top:20px; box-shadow:-2px 1px 8px 4px black; background-color:;">
											<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-1 mt-4 rounded-circle" style="width:20%; height:90px;">
											<div class="media-body">
												<center>
													<h4>SUNDAY</h4>
												</center>
												<p style="font-size:16px;"><b><center>Devin Worship Service</center></b>
													Bringing the undiluted word of God to you. 
												</p>
												<!-- <p> Bringing the undiluted word of God to you, the food for the soul </p> -->
												<p><b>Time 10:00 AM</b></p>
											</div>
										</div>
									</div>

									<div class="col-sm-6" style="padding:20px; background-color:;">
										<div class="media" style="padding-top:20px; box-shadow:-2px 1px 8px 4px black; background-color:;">
											<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-1 mt-4 rounded-circle" style="width:20%; height:90px;">
											<div class="media-body">
												<center>
													<h4>SUNDAY</h4>
												</center>
												<p style="font-size:16px;"><b><center>Devin Worship Service</center></b>
													Bringing the undiluted word of God to you. 
												</p>
												<!-- <p> Bringing the undiluted word of God to you, the food for the soul </p> -->
												<p><b>Time 10:00 AM</b></p>
											</div>
										</div>
									</div>
									
								</div>
							</div>

							<div class="col-sm-4">
							 
								<center>
									<h1 style="background-color:; padding:5px;">
										CHURCH LOCATION
									</h1>
								</center>
								<div  style="background-color:#f1f1f1; padding-top:20px; padding-bottom:20px;">
								<div>
									<img src="{{asset('/image/googlemap.jpg')}}" class="" style="width:100%; height:200px;">
								</div>

								<div style="background-color:white; width:96%; margin:1px auto; ">
								<div class="row"  style="background-color:white; margin:30px 1px 5px 1px;">
									<div class="col-sm-3" style="padding:10px;">
										<i class="fa fa-3x fa-map-marker" style="color:darkred; border-radius:50%;">
										</i>
									</div>
									<div class="col-sm-9">The quick brown fo jumb over the lazy dog</div><br><br><br>
								</div>
								<div class="row"  style="background-color:white; margin:20px 1px 5px 1px;">
									<div class="col-sm-3">
										<i class="fas fa-2x fa-phone" style="color:darkgreen; border-radius:50%;">
										</i>
									</div>
									<div class="col-sm-9">The quick brown fo jumb over the lazy dog</div><br><br><br>
								</div>
								<div class="row"  style="background-color:white; margin:20px 1px 5px 1px;">
									<div class="col-sm-3">
										<i class="fab fa-3x fa-facebook-f" style="color:mediumblue; border-radius:50%;">
										</i>
									</div>
									<div class="col-sm-9">The quick brown fo jumb over the lazy dog</div>
								</div><br>
							</div>
							</div>
							</div>
	
						</div>
					</div>
			</div>
			<div id="try1" class="tab-pane fadein ">WELCOME TO CHURCH HISTORY TAB</div>
			<div id="try2" class="tab-pane fade in">
				<div class="container"><br>
					<div class="media border" style="background-color:white; margin-bottom:20px;">
						<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-3 mb-3 mt-3 img-thumbnail" style="width:30%; height:150px;">
						<div class="media-body">
							<h3>YOUTH DAY PROGRAME</h3>
							<p class="lead">August 18, 2020</p>
							<p><b>
								This is an annual programe held to selebrat the working of the youth in the church.  Come in your number to selebrate with you as they joyfully celebrate in the Lord.
							</b></p>
						</div>
					</div>

					<div class="media border" style="background-color:white; margin-bottom:20px;">
						<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-3 mb-3 mt-3 img-thumbnail" style="width:30%; height:150px;">
						<div class="media-body">
							<h3>MOTHER DAY PROGRAME</h3>
							<p class="lead">MAY 11, 2020</p>
							<p><b>
								This is an annual programe held to selebrat the working of the youth in the church.  Come in your number to selebrate with you as they joyfully celebrate in the Lord.
							</b></p>
						</div>
					</div>

					<div class="media border" style="background-color:white; margin-bottom:20px;">
						<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-3 mb-3 mt-3 img-thumbnail" style="width:30%; height:150px;">
						<div class="media-body">
							<h3>FATHER DAY PROGRAME</h3>
							<p class="lead">JUNE 24, 2020</p>
							<p><b>
								This is an annual programe held to selebrat the working of the youth in the church.  Come in your number to selebrate with you as they joyfully celebrate in the Lord.
							</b></p>
						</div>
					</div>

					<div class="media border" style="background-color:white; margin-bottom:20px;">
						<img src="{{asset('/image/church.jpg')}}" class="mr-3 ml-3 mb-3 mt-3 img-thumbnail" style="width:30%; height:150px;">
						<div class="media-body">
							<h3>YOUTH DAY PROGRAME</h3>
							<p class="lead">August 18, 2020</p>
							<p><b>
								This is an annual programe held to selebrat the working of the youth in the church.  Come in your number to selebrate with you as they joyfully celebrate in the Lord.
							</b></p>
						</div>
					</div>


				</div>
			</div>
			<div id="try3" class="tab-pane fadein">
				<div class="row" id="cardDiv"">
					<div class="col-md-4">
						<a href="{{route('group', 12)}}">
							<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/peace.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									PEACE FELLOWSHIP
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
						</a>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/love.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									LOVE FELLOWSHIP
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/fireF.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									FIRE FELLOWSHIP
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/overcome.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									OVERCOMER FELLOWSHIP
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/choir.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									CHOIR 
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/protocol.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									PROTOCOL 
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/smart.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									SMART USHER
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/inner.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									INNER USHER
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/pastor.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									PASTORS
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/mightyMen.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									MIGHTY MEN
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								<img src="{{asset('/image/children.jpg')}}" style="width:100%; height:100%;">
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									CHILDREN DEPARTMENT
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="groupCard">
							<div class="cardImg">
								
							</div>
							<div class="card-body">
								<p class="card-title"><b>
									PEACE FELLOWSHIP
								</b></p>
								<p><b>
									The mega fellowship for success and long life.
								</b></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		</div>
		<div class="col-md-3" id="announ">
			<div style="min-height:600px; border:1px solid gray; background-color:; margin:20px 0px;">
				<center>
				<h1 style="color:red; padding:20px;">
					TESTIMONY
					<hr><hr>
				</h1>
			</center>

			<div class="row" style="border-bottom:3px;">
				<div class="col-md-4">
					<img src="{{asset('/image/d1.jpg')}}" class="mt-3 ml-2" style="width:98%; height:90px;">
				</div>
				<div class="col-md-8">
					<p><b>
						A man with was held from  spiritual problem when he encounter the prophet last week sunday.
					</b></p>
					<a href="/testimonyDetail/{{'man'}}" class="btn btn-primary btn-sm mr-3" style="float:right;">Read More</a>
				</div>
			</div><hr>

			<div class="row" style="border-bottom:3px;">
				<div class="col-md-4">
					<img src="{{asset('/image/d1.jpg')}}" class="mt-3 ml-2" style="width:98%; height:90px;">
				</div>
				<div class="col-md-8">
					<p><b>
						A man with was held from  spiritual problem when he encounter the prophet last week sunday.
					</b></p>
					<a href="#" class="btn btn-primary btn-sm mr-3" style="float:right;">Read More</a>
				</div>
			</div><hr>

			<div class="row" style="border-bottom:3px;">
				<div class="col-md-4">
					<img src="{{asset('/image/d1.jpg')}}" class="mt-3 ml-2" style="width:98%; height:90px;">
				</div>
				<div class="col-md-8">
					<p><b>
						A man with was held from  spiritual problem when he encounter the prophet last week sunday.
					</b></p>
					<a href="#" class="btn btn-primary btn-sm mr-3" style="float:right;">Read More</a>
				</div>
			</div><hr>

			<div class="row" style="border-bottom:3px;">
				<div class="col-md-4">
					<img src="{{asset('/image/d1.jpg')}}" class="mt-3 ml-2" style="width:98%; height:90px;">
				</div>
				<div class="col-md-8">
					<p><b>
						A man with was held from  spiritual problem when he encounter the prophet last week sunday.
					</b></p>
					<a href="#" class="btn btn-primary btn-sm mr-3" style="float:right;">Read More</a>
				</div>
			</div><hr>

			<center>
				<a href="{{route('testimony')}}" class="btn btn-success btn-lg" style="margin-bottom:10px;">View All</a>
			</center>
			</div>

			<div>
				<center>
					<h2 style="color:red; padding:20px 0px;">
						ANNOUNCEMENT
						<hr><hr>
					</h2>
				</center>

				<ul>
					<li style="padding-top:0px;">
						A Peace Fellowship member are kindly ask to pay the sum amount of 500 LD for their contribution.

						<a href="" class="btn btn-link btn-sm" style="float:right;">Read More</a>
					</li>
					<li style="padding-top:60px;">
						A Peace Fellowship member are kindly ask to pay the sum amount of 500 LD for their contribution.

						<a href="#" class="btn btn-link btn-sm" style="float:right;">Read More</a>
					</li>
					<li style="padding-top:60px;">
						A Peace Fellowship member are kindly ask to pay the sum amount of 500 LD for their contribution.
					</li>
					<li style="padding-top:60px;">
						A Peace Fellowship member are kindly ask to pay the sum amount of 500 LD for their contribution.

						<a href="#" class="btn btn-link btn-sm" style="float:right;">Read More</a>
					</li>
					<li style="padding-top:60px;">
						A Peace Fellowship member are kindly ask to pay the sum amount of 500 LD for their contribution.

						<a href="#" class="btn btn-link btn-sm" style="float:right;">Read More</a>
					</li>
				</ul>

					<a href="" class="btn btn-success btn-lg" style="margin:15px;">View All</a>

			</div>
		</div>
	</div>
</div>
</body>
</html>