@extends('layouts.portallayout')

@section('content')
<h1 style="display:inline; margin-bottom:5px;">Church Member</h1>
			 <span style="float:right; margin-right:15px;">
				<?php 
					  echo "<small>";
					  echo date('d/M/Y');
					  echo "</small>";
				?>
			</span>

<ul class="nav nav-tabs bg-secondary navtab ">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle='tab' href="#memberlist">Current Members</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle='tab' href="#createmember">New Members</a>
			  </li>
			</ul>

		<div class="tab-content" id="">
			<div id="memberlist" class="tab-pane fadein active" style="background-color:white;">	
				<table class="table table-resposive table-striped">
					<tr style="border:1px solid black; background-color:purple;">
						<th>NO.</th>
						<th>NAME</th>
						<th>CONTACT</th>
						<th>ADDRESS</th>
						<th>EMAIL</th>
						<th>DETAIL INFO</th>
						<th></th>
					</tr>

					@foreach($members as $member)
						<tr>
						<td>{{ $member->id }}</td>
						<td>{{$member->firstName}}</td>
						<td>{{$member->contact}}</td>
						<td>{{$member->address}}</td>
						<td>{{$member->email}}</td>
						<td>
							<a href="/detail/{{ $member->id }}">More Info</a>
							<!-- <form class="info">
								<input type="text" value="{{ $member->id }}" name="type"  class="hiddenId">
								<button class="btn btn-info btn-sm detail" )" data-toggle="modal" data-target="#moreInfo">
									More Info
								</button>
							</form> -->
						</td>
						<td>
							<a href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
					@endforeach

					
				</table>
			</div>


			<div class="modal" id="moreInfo" data-backdrop="static">
				<div class="modal-dialog modal-lg">
					<div class="modal-content modal-content-lg">
						<div class="modal-header">
						<h3>Member Information</h3>
						<button class="close" data-dismiss="modal">
							<span aria-hidden>&times</span>
						</button>
						</div>

						<div class="modal-body">

							<img src="{{asset('/image/db1.jpg')}}" style="width:20%; height:90px; border-radius:5%; border:2px solid gold;">
							<h6><b><i>Dominic K. Bonney</i></b></h6>

							<table class="text-left w-100">
								<tr>
									<td>
										<h6>ADDRESS :</h6>
										<p>Sayon Town, Monrovia Liberia</p>
									</td>
									<td>
										<h6>Email</h6>
										<p>dominicbonney5@gmail.com</p>
									</td>
									<td>
										<h6>Contact</h6>
										<p>0776657791/0888141624</p>
									</td>
								</tr>

								<tr>
									<td>
										<h6>FATHER NAME :</h6>
										<p>Joseph Bonney</p>
									</td>
									<td colspan="2">
										<h6>MOTHER NAME</h6>
										<p>Sophia Daye</p>
									</td>
									<!-- <td>
										<h6>Contact</h6>
										<p>0776657791/0888141624</p>
									</td> -->
								</tr>

								<tr>
									<td>
										<h6>DATE OF BIRTH :</h6>
										<p>December 19, 2020</p>
									</td>
									<td>
										<h6>MIRATAL STATUS</h6>
										<p>dominicbonney5@gmail.com</p>
									</td>
									<td>
										<h6>EDUCATION LEVEL</h6>
										<p>Collage</p>
									</td>
								</tr>

								<tr>
									<td>
										<h6>BAPTISE :</h6>
										<p>Yes</p>
									</td>
									<td colspan="2">
										<h6>NUMBER OF CHILDREN</h6>
										<p>0</p>
									</td>
								</tr>

								<tr>
									<td>
										
									</td>
									<td>
										
									</td>
								</tr>
							</table>


							<!-- <div>
								<p>ADDRESS : <span>Sayon Town</span></p>	
								
								
								<div class="row">
									<div class="col-sm-5">
										<p>DATE OF BIRTH : <span>December 19, 2020</span></p>
									</div>
									<div class="col-sm-7">
										<p>EMAIL : <span>dominicbonney5@gmail.com</span></p>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-4">
										<p>MIRATAL STATUS : <span>Sayon Town</span></p>
									</div>
									<div class="col-sm-8">
										<p>EDUCATION LEVEL : <span>Sayon Town</span></p>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-4">
										<p>MIRATAL STATUS : <span>Sayon </span></p>
									</div>
									<div class="col-sm-7">
										<p>MIRATAL STATUS : <span> Town</span></p>
									</div>
								</div>
							</div> -->
							<!-- <table class="table border table-resposive">
								<tr>
									<td class="border">
										<p><b>First Name :</b></p>
										<small class="ml-2"><i>Dominic</i></small>
									</td>
									<td class="border">
										<p class="text-nowrap"><b>Middle Name :</b></p>
										<small class="ml-2"><i>Kweku</i></small>
									</td>
									<td class="border">
										<p><b>Last Name :</b></p>
										<small class="ml-2"><i>Bonney</i></small>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="border">
										<p><b>Address :</b></p>
										<small class="ml-2"><i>13 Street Sinkor</i></small>
									</td>
									<td class="border">
										<p><b>Contact:</b></p>
										<small class="ml-2"><i>0776657791</i></small>
									</td>
								</tr>
								<tr>
									<td class="border">
										<p><b>No. Of Children :</b></p>
										<small class="ml-2"><i>5</i></small>
									</td>
									<td colspan="2" class="border">
										<p><b>Date Of Birth :</b></p>
										<small class="ml-2"><i>Dec 19, 2020</i></small>
									</td>
								</tr>
								<tr>
									<td class="border">
										<p><b>Email:</b></p>
										<small class="ml-2"><i>dominicbonney5@gmail.com</i></small>
									</td>
									<td class="border">
										<p><b>Father Name :</b></p>
										<small class="ml-2"><i>Joseph Bonney</i></small>
									</td>
									<td class="border">
										<p class="text-nowrap"><b>Mother Name :</b></p>
										<small class="ml-2"><i>Sophia Daye</i></small>
									</td>
								</tr>
							</table> -->
							<a href="/editmember/3" class="btn btn-success btn-lg">Edit</a>
						
						</div>
					</div>
				</div>
			</div>


			<div id="createmember" class="tab-pane fadein" style="background-color:white;">
				<div class="row">
					<div class="col-md-5 p-4 mt-4  text-center border" style="background-color:#f1f1f1;">
						<h3>CREATE NEW MEMBER</h3>
					</div>
					<div class="col-md-5 p-4 mt-4  text-center ">
						<h3 class="text-center text-danger"><i>Fire 4 Fire Application</i></h3>
					</div>
				</div>
				<div class="container-fliud border">
					<form action="{{route('saveMember')}}" method="Post" enctype="multipart/form-data">
						@csrf
						<div>
							<h3 class="bg-secondary">BASIC INFORMATIO</h3>
							<div class="form-group row">
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="First Name" name="fname">
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Middle Name" name="mname">
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Last Name" name="lname">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<input type="Address" class="form-control" name="address" placeholder="Address">
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email" placeholder="Email">
								</div>
							</div>

							<div class="form-group row" >
								<div class="col-md-4">
									<input type="number" class="form-control" placeholder="Contact" name="contact">
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Father Name" name="fatherName">
								</div>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Mother Name" name="motherName">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-4">
									<select class="form-control" name="education">
										<option>Education Level</option>
										<option value="Primary">Primary</option>
										<option value="Secondary">Secondary</option>
										<option value="Collage">Collage</option>
										<option value="vocation">Vocation</option>
										<option value="Uneducate">Uneducate</option>
									</select>
								</div>
								<div class="col-md-4">
									<select class="form-control" name="miratal">
										<option value="">Miratal Status</option>
										<option value="Sigle">Single</option>
										<option value="Mirrage">Mirrage</option>
										<option value=Widow"">Widow</option>
										<option value="Divorced">Divorced</option>
									</select>
								</div>
								<div class="col-md-4">
									<select class="form-control" name="baptise">
										<option value="">Baptise</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-4">
									<input type="date" class="form-control" placeholder="Date Of Birth" name="dob">
								</div>
								<div class="col-md-4">
									<input type="number" class="form-control" placeholder="Number of Children" name="child">
								</div>
							</div>
						</div>

						<div class="container-fliud">

							<div class="row">
								<div class="col-md-6 ">
									<h3 class="bg-secondary">FELLOWSHIP</h3>
									<div class="form-group">
										<select class="form-control" name="fellowship">
											<option value="">Select Fellowship</option>
											@foreach($fellowships as $fellowship)
											<option value=" {{$fellowship->id}} ">{{$fellowship->fellowshipName}}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<input type="text" class="form-control w-75" placeholder="Position" name="fellowPosition">
									</div>
								</div>

								<div class="col-md-6 ">
									<h3 class="bg-secondary">DEPARTMENT</h3>
										<div class="form-group">
											<select class="form-control" name="department">
												<option value="">Select Department</option>
												@foreach($departments as $department)
											<option value=" {{$department->id}} ">{{$department->departmentName}}</option>
											@endforeach
											</select>
										</div>

										<div class="form-group">
											<input type="text" class="form-control w-75" placeholder="Position" name="departPosition">
										</div>
								</div>
							</div>
								
							</div>
						</div>

						<div class="container-fliud">
							<div class="row">
								<!--  -->

								<div class="col-md-12">
									<h3 class="bg-secondary">Role</h3>
										<div class="form-group">
											<select class="form-control w-25" name="role">
												<option value="">Select Member Role</option>
												<option value="superAdmin">Super Admin</option>
												<option value="admin">Admin</option>
												<option value="head">Head</option>
												<option value="staff">Staff</option>
											</select>
										</div>

										<div class="form-group">
											<input type="file"  name="memPicture">
										</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-success btn-lg " role="" type="submit">CREATE</button>
						</div><br>
					</form>
				</div>
			</div>
			<!-- <div id="editmember" class="tab-pane fade in" style="background-color:white; height:600px;">
				
			</div>
			<div id="stories" class="tab-pane fadein" style="background-color:white; height:600px;">
				
			</div> -->
		</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		$(".info").on('click', function(){

			alert (123);
		})
		// $(".detail").click( function(e){
		// 	 e.preventDefault();

		// 	var info = $(this).prev().val();


		// 	// $memberId = $(this).children(".hiddenId").val();
		// 	 alert($info);
		// 	//alert("Hello World");
		// 	// $.ajax({
		// 	// 	type: "post";
		// 	// 	url: ""
		// 	// 	data:
		// 	// })
		// })
		// //console.log('ready');
	})
</script>

@endsection