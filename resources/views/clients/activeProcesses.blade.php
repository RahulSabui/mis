@extends('layouts.app')
@section('title', 'Processes Report')
@section('content')
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-flex align-items-center">
					<div class="d-sm-flex align-items-center">

						<div class="ps-sm-1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="{{url('/')}}"><i class="bx bx-home-alt"></i></a>
									</li>
									<li class="breadcrumb-item" aria-current="page">Clients
									</li>
									<li class="breadcrumb-item active" aria-current="page">Processes Report
									</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class="ms-auto d-flex align-items-center">
						<div class="me-2 position-relative">
							<input type="text" class="form-control date-range" placeholder="From - To" />
							<span class="calender-icon"><i class="bx bx-calendar fs-5"></i></span>
						</div>
						<a href="" class="btn btn-inverse-primary me-2 filter-button">Apply</a>
						<a href="{{url('/clientAdd')}}" type="button" class="btn btn-primary px-md-4 ">Add
							Client</a>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-12 d-flex">
						<div class="card w-100">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6 col-lg-4 col-xl-3 d-flex">
										<div class="card radius-10 btn-inverse-yellow">
											<div class="d-flex align-items-center card-body">
												<div>
													<p class="mb-0 text-secondary">Active Processes</p>
													<h4 class="my-1">62</h4>
												</div>
												<div class="text-warning ms-auto font-35">⠁⠏
												</div>
											</div>
											<div class="" id="w-chart7"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex">
						<div class="card w-100">
							<div class="card-body">
								<p class="mb-3 text-secondary">Active Processes by Type of Business</p>
								<div class="chart-container1">
									<canvas id="activeProcessByBusiness"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex">
						<div class="card w-100">
							<div class="card-body">
								<p class="mb-3 text-secondary">Active Processes by Type of Client</p>
								<div class="chart-container1">
									<canvas id="activeProcessByClient"></canvas>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="card">
					<div class="card-body">
						<div class="d-flex justify-content-between">
							<h5 class="card-title">Active Processes List</h5>
							<div class="ms-auto d-flex align-items-center">
								<div class="position-relative">
									<input type="text" class="form-control ps-5 radius-30" placeholder="Search Client">
									<span class="position-absolute top-50 product-show translate-middle-y">
										<i class="bx bx-search"></i>
									</span>
								</div>
								<a href="javascript:;" class="icon-wrapper" title="Filter"><i class="fadeIn bx bx-filter fs-3"></i></a>

								<!-- <a href="javascript:;" class="icon-wrapper" title="Delete"><i
									class='bx bxs-trash fs-5'></i></a> -->
								<a href="javascript:;" class="icon-wrapper" title="Download"><i
										class="bx bx-cloud-download fs-4"></i></a>
							</div>
						</div>
						<hr class="mt-2 mb-4" />
						<div class="table-responsive">
							<table class="table align-middle mb-0 table-striped">
								<thead class="table-light">
									<tr>
										<th>Client’s Name </th>
										<th>Process’ Name </th>
										<th>Type of Process </th>
										<th>Assigned Employees</th>
										<th>Billable Employees </th>
										<th>Span</th>
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
													<img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="46" height="46"
														alt="" />
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Payment from Michle Jhon</h6>
													<p class="mb-0 font-13 text-secondary">SKID #8547846</p>
												</div>
											</div>
										</td>
										<td>process</td>
										<td>Type of Process</td>
										<td>Assigned</td>
										<td>Billable</td>
										<td>Span</td>
										<td>
											<div class="table-action">
												<a href="">
													<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
												</a>
												<a href="./employeeAdd.html#test-vl-6" target="_blank">
													<i class="fadeIn animated bx bx-history fs-4 ms-2" title="History"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>

										<td>
											<div class="d-flex align-items-center">
												<div class="">
													<img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="46" height="46"
														alt="" />
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Payment from Pauline Bird</h6>
													<p class="mb-0 font-13 text-secondary">SKID #9653248</p>
												</div>
											</div>
										</td>
										<td>process</td>
										<td>Type of Process</td>
										<td>Assigned</td>
										<td>Billable</td>
										<td>Span</td>
										<td>
											<div class="table-action">
												<a href="">
													<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
												</a>
												<a href="./employeeAdd.html#test-vl-6" target="_blank">
													<i class="fadeIn animated bx bx-history fs-4 ms-2" title="History"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>

										<td>
											<div class="d-flex align-items-center">
												<div class="">
													<img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="46" height="46"
														alt="" />
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Payment from Ralph Alva</h6>
													<p class="mb-0 font-13 text-secondary">SKID #7689524</p>
												</div>
											</div>
										</td>
										<td>process</td>
										<td>Type of Process</td>
										<td>Assigned</td>
										<td>Billable</td>
										<td>Span</td>
										<td>
											<div class="table-action">
												<a href="">
													<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
												</a>
												<a href="./employeeAdd.html#test-vl-6" target="_blank">
													<i class="fadeIn animated bx bx-history fs-4 ms-2" title="History"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>

										<td>
											<div class="d-flex align-items-center">
												<div class="">
													<img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="46" height="46"
														alt="" />
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14">Payment from John Roman</h6>
													<p class="mb-0 font-13 text-secondary">SKID #8335884</p>
												</div>
											</div>
										</td>
										<td>process</td>
										<td>Type of Process</td>
										<td>Assigned</td>
										<td>Billable</td>
										<td>Span</td>
										<td>
											<div class="table-action">
												<a href="">
													<i class="fadeIn animated bx bx-pencil fs-5" title="Edit"></i>
												</a>
												<a href="./employeeAdd.html#test-vl-6" target="_blank">
													<i class="fadeIn animated bx bx-history fs-4 ms-2" title="History"></i>
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
			<!--end page wrapper -->
			<!--start overlay-->
			<div class="overlay toggle-icon"></div>
			<!--end overlay-->
			<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
			<!--End Back To Top Button-->

	
		<!-- search modal -->
		<div class="modal" id="SearchModal" tabindex="-1">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
				<div class="modal-content">
					<div class="modal-header gap-2">
						<div class="position-relative popup-search w-100">
							<input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
								placeholder="Search">
							<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i
									class='bx bx-search'></i></span>
						</div>
						<button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

				</div>
			</div>
		</div>
		<!-- end search modal -->

		<!--start switcher-->
		<div class="switcher-wrapper">
			<div class="switcher-btn">
				<!-- <i class='bx bx-cog bx-spin'></i> -->
				<i class="fadeIn animated bx bx-filter fs-2"></i>
			</div>
			<div class="switcher-body">
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-center">
						<h5 class="card-title text-primary">Filter</h5>
						<a href="#">Clear Filter</a>
					</div>
					<hr class="mt-2 mb-4" />
					<div class="row g-3">
						<div class="col-12">
							<label for="input2" class="form-label">Span</label>
							<select class="form-select lookup" data-placeholder="">
								<option></option>
								<option>Reactive</option>
								<option>Solution</option>
								<option>Conglomeration</option>
								<option>Algoritm</option>
								<option>Holistic</option>
							</select>
						</div>
						<div class="col-12">
							<label for="input2" class="form-label">Client</label>
							<select class="form-select lookup" data-placeholder="">
								<option></option>
								<option>Reactive</option>
								<option>Solution</option>
								<option>Conglomeration</option>
								<option>Algoritm</option>
								<option>Holistic</option>
							</select>
						</div>
						<div class="col-12">
							<label for="input2" class="form-label">Type of Business</label>
							<select class="form-select lookup" data-placeholder="">
								<option></option>
								<option>Reactive</option>
								<option>Solution</option>
								<option>Conglomeration</option>
								<option>Algoritm</option>
								<option>Holistic</option>
							</select>
						</div>
						<div class="col-12">
							<label for="input2" class="form-label">Age</label>
							<input type="text" class="form-control" />
						</div>

						<div class="col-12">
							<a href="#" type="button" class="btn btn-primary px-md-4 w-100">Submit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end switcher-->

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



			//Number of Active Processes by Type of Business
			var activeProcessByBusiness = document
				.getElementById("activeProcessByBusiness")
				.getContext("2d");
			var myChart = new Chart(activeProcessByBusiness, {
				type: "bar",
				data: {
					labels: ["Business", "Business", "Business", "Business", "Business", "Business", "Business", "Business"],
					datasets: [
						{
							label: "Number of Active Processes by Type of Business",
							data: [30, 20, 12, 9, 10, 15, 10, 5],
							backgroundColor: ["#000bff54"],
							lineTension: 0,
							borderColor: ["#000bff"],
							borderWidth: 1,
						},
						// {
						//   label: "Facebook",
						//   data: [12, 30, 16, 23, 8, 14, 11],
						//   backgroundColor: ["#15ca20"],
						//   tension: 0,
						//   borderColor: ["#15ca20"],
						//   borderWidth: 3,
						// },
					],
				},
				options: {
					maintainAspectRatio: false,
					barPercentage: 0.6,
					categoryPercentage: 0.5,
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


			//Number of Active Processes by Type of Client
			var activeProcessByClient = document
				.getElementById("activeProcessByClient")
				.getContext("2d");
			var myChart = new Chart(activeProcessByClient, {
				type: "bar",
				data: {
					labels: ["Client", "Client", "Client", "Client", "Client", "Client", "Client", "Client"],
					datasets: [
						{
							label: "Number of Active Processes by Type of Client",
							data: [30, 20, 12, 9, 10, 15, 10, 5],
							backgroundColor: ["#ff000052"],
							lineTension: 0,
							borderColor: ["#ff0000"],
							borderWidth: 1,
						},
						// {
						//   label: "Facebook",
						//   data: [12, 30, 16, 23, 8, 14, 11],
						//   backgroundColor: ["#15ca20"],
						//   tension: 0,
						//   borderColor: ["#15ca20"],
						//   borderWidth: 3,
						// },
					],
				},
				options: {
					maintainAspectRatio: false,
					barPercentage: 0.6,
					categoryPercentage: 0.5,
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