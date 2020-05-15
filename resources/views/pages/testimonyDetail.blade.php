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
		<div style="width:100%; height:60px; background-color:black; position:;"></div>
		<div class="jumbotron" style="background-image:url('{{asset('/image/red.jfif')}}'); background-repeat:no-repeat; background-size:cover; color:white; width:100%;">
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