@extends('layouts.portallayout')

@section('content')



			 
				<div class="modal-dialog modal-lg">
					<div>
						<div >
						<h3>Member Information</h3>
						
						</div>

						<div class="modal-body">

							@foreach($members as $member)

								{{$member->id}}

							@endforeach


							

							<img src="{{asset('/image/db1.jpg')}}" style="width:20%; height:90px; border-radius:5%; border:2px solid gold;">
							<h6><b><i></i></b></h6>

							<table class="text-left w-100">
								<tr>
									<td>
										<h6>ADDRESS :</h6>
										<p></p>
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


							<div>
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
							</div>
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
			

@endsection