@extends('layouts.app')
@section('title', 'User Management')
@section('content')
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-flex align-items-center">
					<div class="d-sm-flex align-items-center">
						<div class="ps-sm-1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="./index"><i class="bx bx-home-alt"></i></a>
									</li>
									<li class="breadcrumb-item" aria-current="page"><a href="./settings">Settings
										</a></li>
									<li class="breadcrumb-item active" aria-current="page">Manage User
									</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class="ms-auto d-flex align-items-center">
						<div class="me-2 position-relative">
							<input type="text" class="form-control date-format" placeholder="On a Given Date" />
							<span class="calender-icon"><i class="bx bx-calendar fs-5"></i></span>
						</div>
						<a href="" class="btn btn-inverse-primary me-2 filter-button">Apply</a>
						<a href="./createUser" type="button" class="btn btn-primary px-md-4 ">Create User</a>


					</div>

				</div>
				<!--end breadcrumb-->

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<div class="d-flex justify-content-between">
										<h5 class="card-title">User List</h5>
										<div class="ms-auto d-flex align-items-center">
											<div class="position-relative">
												<input type="text" class="form-control ps-5 radius-30" placeholder="Search Span">
												<span class="position-absolute top-50 product-show translate-middle-y">
													<i class="bx bx-search"></i>
												</span>
											</div>
											<a href="javascript:;" class="icon-wrapper" title="Filter"><i
													class="fadeIn bx bx-filter fs-3"></i></a>

											<a href="javascript:;" class="icon-wrapper" title="Download"><i
													class="bx bx-cloud-download fs-4"></i></a>
										</div>
									</div>

									<hr class="mt-2 mb-4" />
									<table class="table  table-striped  align-middle mb-0">
										<thead class="table-light">
											<tr>
												<th>User Head</th>
												<th>Span Name</th>
												<th>Create Date</th>
												<th>Modify Date</th>
												<th>
													<div class="d-flex justify-content-center">
														Action
													</div>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46"
																height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Span Head Name</h6>
															<p class="mb-0 font-13 text-secondary"> SKID #8547846
															</p>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<h6 class="mb-1 font-14">Span Name</h6>
													</div>
												</td>
												<td>04-03-2023</td>
												<td>04-03-2023</td>
												<td>
													<div class="table-action">
														<a href="">
															<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
														</a>

													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46"
																height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Span Head Name</h6>
															<p class="mb-0 font-13 text-secondary"> SKID #9653248
															</p>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<h6 class="mb-1 font-14">Span Name</h6>
													</div>
												</td>

												<td>04-03-2023</td>
												<td>04-03-2023</td>
												<td>
													<div class="table-action">
														<a href="">
															<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
														</a>

													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46"
																height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Span Head Name</h6>
															<p class="mb-0 font-13 text-secondary"> SKID #7689524
															</p>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<h6 class="mb-1 font-14">Span Name</h6>
													</div>
												</td>
												<td>04-03-2023</td>
												<td>04-03-2023</td>
												<td>
													<div class="table-action">
														<a href="">
															<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
														</a>

													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46"
																height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Span Head Name</h6>
															<p class="mb-0 font-13 text-secondary"> SKID #8335884
															</p>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<h6 class="mb-1 font-14">Span Name</h6>
													</div>
												</td>
												<td>04-03-2023</td>
												<td>04-03-2023</td>
												<td>
													<div class="table-action">
														<a href="">
															<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
														</a>

													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="">
															<img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="46"
																height="46" alt="" />
														</div>
														<div class="ms-2">
															<h6 class="mb-1 font-14">Span Head Name</h6>
															<p class="mb-0 font-13 text-secondary"> SKID #7865986
															</p>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<h6 class="mb-1 font-14">Span Name</h6>
													</div>
												</td>
												<td>04-03-2023</td>
												<td>04-03-2023</td>
												<td>
													<div class="table-action">
														<a href="">
															<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
														</a>

													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="d-flex justify-content-between align-items-center mt-3">
									<div class="pagination-record">
										<p class="mb-0 me-2">Records Per Page :</p>
										<select name="" id="">
											<option value="5">10</option>
											<option value="10">25</option>
											<option value="20">50</option>
											<option value="20">100</option>
										</select>
									</div>
									<nav aria-label="...">
										<ul class="pagination pagination-sm">
											<li class="page-item disabled"><a class="page-link" href="javascript:;" tabindex="-1"
													aria-disabled="true">Previous</a>
											</li>
											<li class="page-item"><a class="page-link" href="javascript:;">1</a>
											</li>
											<li class="page-item active" aria-current="page"><a class="page-link" href="javascript:;">2 <span
														class="visually-hidden">(current)</span></a>
											</li>
											<li class="page-item"><a class="page-link" href="javascript:;">3</a>
											</li>
											<li class="page-item"><a class="page-link" href="javascript:;">Next</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page wrapper -->
			<!--start overlay-->
			<div class="overlay toggle-icon"></div>
			<!--end overlay-->
			<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
			<!--End Back To Top Button-->






		<div class="modal fade" id="spanManagement" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Span</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-12">
								<label for="input2" class="form-label">Span Name</label>
								<input type="text" class="form-control" id="spanName" name="spanName">
							</div>
							<div class="col-12">
								<label for="input2" class="form-label">Span Head</label>
								<select class="form-select lookup" data-placeholder="">
									<option></option>
									<option>Reactive</option>
									<option>Solution</option>
									<option>Conglomeration</option>
									<option>Algoritm</option>
									<option>Holistic</option>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary">Add</button>
					</div>
				</div>
			</div>
		</div>

		@endsection
		@section('scripts')

		<script>
			$(document).ready(function () {
				$('#example').DataTable();
				var table = $('#example2').DataTable({
					lengthChange: false,
					buttons: ['copy', 'excel', 'pdf', 'print']
				});

				table.buttons().container()
					.appendTo('#example2_wrapper .col-md-6:eq(0)');
			});

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

			// var EmByDesignation = document.getElementById("EmByDesignation").getContext("2d");
			// var myChart1 = new Chart(EmByDesignation, {
			// 	type: "pie",
			// 	data: {
			// 		labels: ["Designation1", "Designation2", "Designation3", "Designation4", "Designation5", "Designation6"],
			// 		datasets: [
			// 			{
			// 				data: [12, 19, 3, 5, 2, 3],
			// 				backgroundColor: [
			// 					"#0029ff4f",
			// 					"#ff840069",
			// 					"#33bf0861",
			// 					"#ff00ae63",
			// 					"#00d9ff54",
			// 					"#ff00214a",
			// 				],
			// 				borderWidth: 1,
			// 				borderColor: ["#0035ff", "#ff8400", "#33bf08", "#ff00ae", "#00d9ff", "#ff0021"],
			// 			},
			// 		],
			// 	},
			// 	options: {
			// 		maintainAspectRatio: false,
			// 		plugins: {
			// 			legend: {
			// 				position: "bottom",
			// 				display: true,
			// 			},
			// 		},
			// 	},
			// });
			// chart7
			var EmployeeByDesignation = document.getElementById("EmployeeByDesignation").getContext("2d");
			var myChart = new Chart(EmployeeByDesignation, {
				type: "bar",
				data: {
					labels: ["PM", "TL", "Designer", "Developer", "HR", "Intern"],
					datasets: [
						{
							label: "Employees by Designation",
							data: [18, 25, 14, 12, 17, 8, 10],
							backgroundColor: ["#ff5b007d"],
							lineTension: 0,
							borderColor: ["#ff5b00"],
							borderWidth: 1,
						},
					],
				},
				options: {
					maintainAspectRatio: false,
					barPercentage: 0.5,
					categoryPercentage: 0.7,
					indexAxis: "y",
					plugins: {
						legend: {
							position: "bottom",
							display: true,
						},
					},
					scales: {
						y: {
							beginAtZero: true,
						},
					},
				},
			});

			var EmployeeBySpan = document.getElementById("EmployeeBySpan").getContext("2d");
			var myChart = new Chart(EmployeeBySpan, {
				type: "bar",
				data: {
					labels: ["Span1", "Span2", "Span3", "Span4", "Span5", "Span6"],
					datasets: [
						{
							label: "Number of Employees by Span",
							data: [18, 25, 14, 12, 17, 8, 10],
							backgroundColor: ["#a600ff4f"],
							lineTension: 0,
							borderColor: ["#a600ff"],
							borderWidth: 1,
						},
					],
				},
				options: {
					maintainAspectRatio: false,
					barPercentage: 0.5,
					categoryPercentage: 0.7,
					indexAxis: "y",
					plugins: {
						legend: {
							position: "bottom",
							display: true,
						},
					},
					scales: {
						y: {
							beginAtZero: true,
						},
					},
				},
			});
		</script>


		<!-- date-Picker -->
		<script>

			$(".datepicker").flatpickr(
				{
					dateFormat: "m-d-Y",
				}
			);


			$(".time-picker").flatpickr({
				enableTime: true,
				noCalendar: true,
				dateFormat: "Y-m-d H:i",
			});

			$(".date-time").flatpickr({
				enableTime: true,
				dateFormat: "Y-m-d H:i",
			});

			$(".date-format").flatpickr({
				altInput: true,
				altFormat: "F j, Y",
				dateFormat: "Y-m-d",
			});

			$(".date-range").flatpickr({
				mode: "range",
				altInput: true,
				altFormat: "F j, Y",
				dateFormat: "Y-m-d",
			});

			$(".date-inline").flatpickr({
				inline: true,
				altInput: true,
				altFormat: "F j, Y",
				dateFormat: "Y-m-d",
			});

		</script>


@endsection