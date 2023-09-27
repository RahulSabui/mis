@extends('layouts.app')
@section('title', 'CreateUser')
@section('content')
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-sm-flex align-items-center">

					<div class="ps-sm-1">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item" aria-current="page"><a href="{{url('/settings')}}">Settings
									</a></li>
								<li class="breadcrumb-item" aria-current="page"><a href="{{url('/manageUser')}}">Manage User
									</a></li>
								<li class="breadcrumb-item active" aria-current="page">Create User</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->


				<!--start stepper-->
				<div class="card">
					<div class="card-body">
						<div id="stepper3" class="bs-stepper gap-4 vertical">
							<div class="bs-stepper-header" role="tablist">
								<div class="step" data-target="#test-vl-1">
									<div class="step-trigger" role="tab" id="stepper3trigger1" aria-controls="test-vl-1">
										<div class="bs-stepper-circle"><i class='lni lni-information fs-5'></i></div>
										<div class="">
											<h5 class="mb-0 steper-title">Basic Information</h5>
											<p class="mb-0 steper-sub-title">User's Demographics</p>
										</div>
									</div>
								</div>

								<div class="step" data-target="#test-vl-2">
									<div class="step-trigger" role="tab" id="stepper3trigger2" aria-controls="test-vl-2">
										<div class="bs-stepper-circle"><i class="lni lni-lock-alt fs-4"></i></div>
										<div class="">
											<h5 class="mb-0 steper-title">Permissions</h5>
											<p class="mb-0 steper-sub-title">Create User's Permissions</p>
										</div>
									</div>
								</div>


							</div>

							<div class="bs-stepper-content w-100">
								<form id="myform" onSubmit="return false">
									<!-- Card of Create User's Basic Information -->
									<div id="test-vl-1" role="tabpane3" class="bs-stepper-pane content fade"
										aria-labelledby="stepper3trigger1">
										<h5 class="mb-4">Basic Information</h5>
										<div class="row g-3">
											<div class="col-sm-6 col-md-4 col-lg-6">
												<label for="input1" class="form-label">First Name<span class="requir-field">*</span></label>
												<input type="text" class="form-control" id="input1">
											</div>
											<div class="col-sm-6 col-md-4 col-lg-6">
												<label for="input1" class="form-label">Last Name<span class="requir-field">*</span></label>
												<input type="text" class="form-control" id="input1">
											</div>
											<div class="col-sm-6 col-md-4 col-lg-6">
												<label for="input1" class="form-label">User Name</label>
												<input type="text" class="form-control" id="input1">
											</div>
											<div class="col-sm-6 col-md-4 col-lg-6">
												<label for="input3" class="form-label">Password<span class="requir-field">*</span></label>
												<div class="position-relative input-icon">
													<input type="text" class="form-control" id="input13">
													<a href="" class="position-absolute top-50 translate-middle-y"><i class="lni lni-eye"></i></a>
												</div>
											</div>

											<div class="col-sm-6 col-md-4 col-lg-6">
												<label for="input2" class="form-label">Confirm Password<span
														class="requir-field">*</span></label>
												<input type="text" class="form-control" id="input3">
											</div>

											<div class="col-12">
												<label for="input2" class="form-label">Span<span class="requir-field">*</span></label>
												<select class="form-select multiLookup" id="multiple-select-field"
													data-placeholder="Choose anything" multiple>
													<option selected>Span1</option>
													<option selected>Span2</option>
													<option selected>Span3</option>
													<option>Span4</option>
													<option>Span5</option>
													<option>Span6</option>
													<option>Span7</option>
													<option>Span8</option>
													<option>Span9</option>
													<option>Span10</option>
												</select>
											</div>
											<div class="col-12">

												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="allowsensetiveInfo" checked>
													<label class="form-check-label same-as" for="allowsensetiveInfo">
														Allow Viewing/Editing Sensitive Information
													</label>
													<p class="ms-2">Lorem ipsum dolor sit, amet</p>
												</div>
											</div>
										</div>
										<!---end row-->
									</div>


									<!-- Card of Create User's Permissions -->
									<div id="test-vl-2" role="tabpane3" class="bs-stepper-pane content fade"
										aria-labelledby="stepper3trigger2">

										<!-- Employee Manage List -->
										<div class="table-responsive mb-4">
											<h5 class="card-title">Employees Report</h5>
											<hr class="my-2" />
											<table class="table  table-striped  align-middle mb-0 manage-user-table">
												<thead class="table-light">
													<tr>
														<th>Pages / Report</th>
														<th>View</th>
														<th>Edit</th>
														<th>Delete</th>
														<th>Create</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Active Employees</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Ex-Employees</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Hired Employees</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Attrition</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Employees on Notice</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">IJP</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Demographics</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">WFO / WFH</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">PIP</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
												</tbody>
											</table>
										</div>



										<!-- Client Manage List -->
										<div class="table-responsive mb-4">
											<h5 class="card-title">Clients Report</h5>
											<hr class="my-2" />
											<table class="table  table-striped  align-middle mb-0 manage-user-table">
												<thead class="table-light">
													<tr>

														<th>Pages / Report</th>
														<th>View</th>
														<th>Edit</th>
														<th>Delete</th>
														<th>Create</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Client Report</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Ex-Employees</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Processes</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Client in Transition</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Processes in Transition</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Assigned Resources</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Client Under Notice</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>
												</tbody>
											</table>
										</div>



										<!-- Hiring Manage List -->
										<div class="table-responsive">
											<h5 class="card-title">Hiring Report</h5>
											<hr class="my-2" />
											<table class="table  table-striped  align-middle mb-0 manage-user-table">
												<thead class="table-light">
													<tr>
														<th>Pages / Report</th>
														<th>View</th>
														<th>Edit</th>
														<th>Delete</th>
														<th>Create</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<h6 class="mb-0 font-14">Hiring List</h6>
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>

														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
														<td>
															<input class="form-check-input" type="checkbox" value="" id="">
														</td>
													</tr>

												</tbody>
											</table>
										</div>

										<!---end row-->

									</div>



								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end stepper -->


				<!--Card of Page buttons -->
				<div class="card last-card">
					<div class="card-body">
						<div class="d-md-flex d-grid align-items-center gap-3 justify-content-end">
							<button class="btn btn-outline-secondary y px-md-4">Cancel</button>
							<button class="btn btn-secondary px-md-4" id="previous">Previous</button>
							<button class="btn btn-primary px-md-4" id="next">Next</button>
							<button class="btn btn-success px-md-4" id="submit">Submit</button>
						</div>
					</div>
				</div>

			</div>
		


		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->


		<!--Start Back To Top Button-->
		<a href="javaScript:;" class="back-to-top">
			<i class='bx bxs-up-arrow-alt'></i>
		</a>
		<!--End Back To Top Button-->


@endsection

@section('scripts')
	<script>
		//date-Picker
		$(".datepicker").flatpickr(
			{
				dateFormat: "m-d-Y",
			}
		);

		//Open Search-List
		function toggleSearchList() {
			var searchList = document.querySelector('.search-employee-list');
			searchList.classList.toggle('open');
		}
		let wrapper = document.querySelector(".page-wrapper")
		wrapper.addEventListener("click", () => {
			var searchList = document.querySelector('.search-employee-list');
			searchList.classList.remove('open');
		});

		//field validation
		$(document).ready(function () {
			$("#myform").validate({
				rules: {
					name: {
						required: true,
					},
				},
				messages: {
					name: "Please enter your name",
				},

				showErrors: function (errorMap, errorList) {
					this.defaultShowErrors();
					console.log(errorList, errorMap);
				},
				submitHandler: function (form) {
					// Form submission logic here
					stepper3.next();
				},
			});
			$("#previous").on("click", function () {
				stepper3.previous();
			});
			$("#next").on("click", function () {
				// Form submission logic here
				stepper3.next();
			});
			$("#submit").on("click", function () {
				$("#myform").submit();
			});
		});
	</script>
	<script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
	</script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>
@endsection