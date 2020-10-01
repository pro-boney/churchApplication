@extends('layouts.portallayout')

@section('content')
	 <h1 style="display:inline;" >Dashboard</h1>
			 <span style="float:right; margin-right:15px;">
				<?php 
					  echo "<small>";
					  echo date('d/M/Y');
					  echo "</small>";
				?>
			</span>
	<div class="row">
			<div class="col-sm-6 col-md-3 text-light  my-3">
				<div style="height:120px;  background-color:red">
					<h4 class="ml-3"><i>MEMBERS</i></h4>
					<center><h1><b>1256</b></h1></center>

					<i class="nav-icon fas fa-tachometer-alt ml-3"></i>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 text-light  my-3">
				<div style="height:120px;  background-color:mediumblue;">
					<h4 class="ml-3"><i>GROUPS</i></h4>
					<center><h1><b>15</b></h1></center>

					<i class="nav-icon fas fa-tachometer-alt ml-3"></i>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 text-light  my-3">
				<div style="height:120px;  background-color:gold;">
					<h4 class="ml-3"><i>WORKERS</i></h4>
					<center><h1><b>257</b></h1></center>

					<i class="nav-icon fas fa-tachometer-alt ml-3"></i>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 text-light  my-3">
				<div style="height:120px;  background-color:darkgreen;">
					<h4 class="ml-3"><i>PASTORS</i></h4>
					<center><h1><b>57</b></h1></center>

					<i class="nav-icon fas fa-tachometer-alt ml-3"></i>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-7 my-3 border">
				<small class="">
				<b class="mb-5"><span><i class="nav-icon fas fa-tachometer-alt"></i></span> List of church members  </b>
				</small>
				<table class="table table-striped table-bordered table-responsive-sm ">
					<tr class="bg-primary">
						<th>ID</th>
						<th>NAME</th>
						<th>ADDRESS</th>
						<th>CONTACT</th>
					</tr>

					<tr>
						<td>01</td>
						<td>Dominic Bonney</td>
						<td>Logan Town</td>
						<td>0776657791</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Dominic Bonney</td>
						<td>Logan Town</td>
						<td>0776657791</td>
					</tr>

					<tr>
						<td>01</td>
						<td>Dominic Bonney</td>
						<td>Logan Town</td>
						<td>0776657791</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Dominic Bonney</td>
						<td>Logan Town</td>
						<td>0776657791</td>
					</tr>

					<tr>
						<td>01</td>
						<td>Dominic Bonney</td>
						<td>Logan Town</td>
						<td>0776657791</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Dominic Bonney</td>
						<td>Logan Town</td>
						<td>0776657791</td>
					</tr>

					<tr>
						<td>01</td>
						<td>Dominic Bonney</td>
						<td>Logan Town</td>
						<td>0776657791</td>
					</tr>
					<tr>
						<td>01</td>
						<td>Dominic Bonney</td>
						<td>Logan Town</td>
						<td>0776657791</td>
					</tr>
				</table>
			</div>
			<div class="col-md-5 mt-5 border">
				<small class="">
				<b class="mb-5"><span><i class="nav-icon fas fa-tachometer-alt"></i></span>  church services  </b>
				</small>
				<div class="media">
					<img src="{{asset('/image/db1.jpg')}}" style="height:100px;" class="media-img-top w-25">
					<div class="media-body ml-4">
						<h3>sunday service</h3>
						<p>The quick brown fox jump over the lazy dog</p>
					</div>
				</div>

				<div class="media">
					<img src="{{asset('/image/db1.jpg')}}" style="height:100px;" class="media-img-top w-25">
					<div class="media-body ml-4">
						<h3>sunday service</h3>
						<p>The quick brown fox jump over the lazy dog</p>
					</div>
				</div>

				<div class="media">
					<img src="{{asset('/image/db1.jpg')}}" style="height:100px;" class="media-img-top w-25">
					<div class="media-body ml-4">
						<h3>sunday service</h3>
						<p>The quick brown fox jump over the lazy dog</p>
					</div>
				</div>

				<div class="media">
					<img src="{{asset('/image/db1.jpg')}}" style="height:100px;" class="media-img-top w-25">
					<div class="media-body ml-4">
						<h3>sunday service</h3>
						<p>The quick brown fox jump over the lazy dog</p>
					</div>
				</div>
			</div>
		</div> 
@endsection