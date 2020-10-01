@extends('layouts.portallayout')

@section('content')
<h1 style="display:inline; margin-bottom:5px;">Edit Member</h1>
			 <span style="float:right; margin-right:15px;">
				<?php 
					  echo "<small>";
					  echo date('d/M/Y');
					  echo "</small>";
				?>
			</span>

<form class="border">
	<div>
		<img src="{{asset('/image/d1.jpg')}}" style="width:150px; height:100px; border-radius:10%; margin:5px">
	</div>
						<div>
							<h3 class="bg-secondary">BASIC INFORMATIO</h3>
							<div class="form-group row">
								<div class="col-md-4">
									<label><i class="text-danger">First Name :</i></label>
									<input type="text" class="form-control" placeholder="First Name" value="Dominic" name="fname">
								</div>
								<div class="col-md-4">
									<label><i class="text-danger">Middle Name :</i></label>
									<input type="text" class="form-control" placeholder="Middle Name" value="Kweku" name="mname">
								</div>
								<div class="col-md-4">
									<label><i class="text-danger">Last Name :</i></label>
									<input type="text" class="form-control" placeholder="Last Name" value="Bonney" name="lname">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<label><i class="text-danger">Address :</i></label>
									<input type="Address" class="form-control" name="address" value="Sayon Town" placeholder="Address">
								</div>
								<div class="col-md-6">
									<label><i class="text-danger">Email :</i></label>
									<input type="email" class="form-control" name="email" value="dominicbonney5@gmail.com" placeholder="Email">
								</div>
							</div>

							<div class="form-group row" >
								<div class="col-md-4">
									<label><i class="text-danger">Contact :</i></label>
									<input type="number" class="form-control" placeholder="Contact" value="0776657791" name="contact">
								</div>
								<div class="col-md-4">
									<label><i class="text-danger">Father Name :</i></label>
									<input type="text" class="form-control" placeholder="Father Name" value="Joseph Bonney" name="fatherName">
								</div>
								<div class="col-md-4">
									<label><i class="text-danger">Mother Name :</i></label>
									<input type="text" class="form-control" placeholder="Mother Name" value="Sophia Daye" name="motherName">
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-4">
									<label><i class="text-danger">Ecducation Level :</i></label>
									<select class="form-control">
										<option >Collage</option>
										<option>Primary</option>
										<option>Secondary</option>
										<option>Collage</option>
										<optgroup>Vocation</optgroup>
										<option>Uneducate</option>
									</select>
								</div>
								<div class="col-md-4">
									<label><i class="text-danger">Miratal Status : </i></label>
									<select class="form-control">
										<option>Single</option>
										<option>Single</option>
										<option>Mirrage</option>
										<option>Widow</option>
										<option>Divorced</option>
									</select>
								</div>
								<div class="col-md-4">
									<label><i class="text-danger">I you Baptise :</i></label>
									<select class="form-control">
										<option>Yes</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<div class="col-md-4">
									<label><i class="text-danger">Date Of Birth :</i></label>
									<input type="date" class="form-control" value="December 19, 2020" placeholder="Date Of Birth" name="dob">
								</div>
								<div class="col-md-4">
									<label><i class="text-danger">Number of Children :</i></label>
									<input type="number" class="form-control" placeholder="Number of Children" value="0" name="child">
								</div>
							</div>
						</div>

						<div class="container-fliud">

							<div class="row">
								<div class="col-md-6 ">
									<h3 class="bg-secondary">FELLOWSHIP</h3>
									<div class="form-group">
										<label><i class="text-danger">Fellowship :</i></label>
										<select class="form-control">
											<option>Peace Fellowship</option>
											<option>Fire Fellowship</option>
											<option>Peace Fellowship</option>
											<option>Love Fellowship</option>
											<option>Overcomer Fellowship</option>
										</select>
									</div>

									<div class="form-group">
										<label><i class="text-danger">Fellowship Position :</i></label>
										<input type="text" class="form-control w-75" placeholder="Position"  name="felloPosition">
									</div>
								</div>

								<div class="col-md-6 ">
									<h3 class="bg-secondary">DEPARTMENT</h3>
										<div class="form-group">
											<label><i class="text-danger">Department :</i></label>
											<select class="form-control">
												<option>Media</option>
												<option>Inner Usher</option>
												<option>Smart Usher</option>
												<option>Protocol</option>
												<option>Choir</option>
												<option>Security</option>
												<option>Media</option>
											</select>
										</div>

										<div class="form-group">
											<label><i class="text-danger">Department Position :</i></label>
											<input type="text" class="form-control w-75" placeholder="Position" value="Member" name="departPosition">
										</div>
								</div>
							</div>
								
							</div>
						<!-- </div> -->

						<div class="container-fliud">
							<div class="row">
								<div class="col-md-8">
									<h3 class="bg-secondary">Group</h3>
										<div class="form-group">
											<label><i class="text-danger">Select Group :</i></label>
											<select class="form-control">
												<option>Servent</option>
												<option>Pastor</option>
												<option>Servent</option>
												<option>Staff</option>
											</select>
										</div>

										<div class="form-group">
											<label><i class="text-danger">Group Position :</i></label>
											<input type="text" class="form-control w-75" placeholder="Position" value="Member" name="departPosition">
										</div>
								</div>

								<div class="col-md-4">
									<h3 class="bg-secondary">Role</h3>
										<div class="form-group">
											<label><i class="text-danger">Role :</i></label>
											<select class="form-control">
												<option>Staff</option>
												<option>Super Admin</option>
												<option>Admin</option>
												<option>Head</option>
												<option>Staff</option>
											</select>
										</div>

										<div class="form-group">
											<label><i class="text-danger">Change Picture :</i></label>
											<input type="file"  name="memPicture">
										</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-lg " role="" type="submit">SAVE</button>
						</div><br>
					</form>
	@endsection