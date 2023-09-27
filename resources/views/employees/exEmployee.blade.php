@extends('layouts.app')
@section('title', 'Demographics')
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
									<li class="breadcrumb-item" aria-current="page">Employees
									</li>
									<li class="breadcrumb-item active" aria-current="page">Ex-Employees Report
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
						<a href="./employeeAdd" type="button" class="btn btn-primary px-md-4 ">Add
							Employee</a>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">

					<div class="col-lg-6">
						<div class="card w-100">
							<div class="card-body">
								<p class="mb-3 text-secondary">Ex-Employees By Span</p>
								<div class="chart-container1">
									<canvas id="exEmloyeeBySpan"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card w-100">
							<div class="card-body">
								<p class="mb-3 text-secondary">Ex-Employees</p>
								<div id="exEmployees"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<div class="d-flex justify-content-between">
								<h5 class="card-title">Ex-Employee List</h5>
								<div class="ms-auto d-flex align-items-center">
									<div class="position-relative">
										<input type="text" class="form-control ps-5 radius-30" placeholder="Search Employee">
										<span class="position-absolute top-50 product-show translate-middle-y">
											<i class="bx bx-search"></i>
										</span>
									</div>
									<a href="javascript:;" class="icon-wrapper" title="Filter"><i
											class="fadeIn bx bx-filter fs-3"></i></a>
									<!-- <a href="javascript:;" class="icon-wrapper" title="Delete"><i
										class='bx bxs-trash fs-5'></i></a> -->
									<a href="javascript:;" class="icon-wrapper" title="Download"><i
											class="bx bx-cloud-download fs-4"></i></a>

								</div>
							</div>

							<hr class="mt-2 mb-4" />
							<table class="table  table-striped  align-middle mb-0">
								<thead class="table-light">
									<tr>
										<th>Employee Name (SKID)</th>
										<th>Designation </th>
										<th>Span </th>
										<th>Manager </th>
										<th>Notice date</th>
										<th>Exit Date</th>
										<th>
											<div class="d-flex justify-content-center">
												Action
											</div>
										</th>
									</tr>
								</thead>
								<tbody>
									
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
						<label for="input2" class="form-label">Process</label>
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
						<label for="input2" class="form-label">Designation</label>
						<select class="form-select lookup" data-placeholder="">
							<option></option>
							<option>Reactive</option>
							<option>Solution</option>
							<option>Conglomeration</option>
							<option>Algoritm</option>
							<option>Holistic</option>
						</select>
					</div>

					<!-- <div class="col-12">
						<label for="input6" class="form-label">Exit Reason</label>
						<textarea class="form-control" id="input11" rows="4"></textarea>
					</div> -->
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
		var dataForGraph;
		$(document).ready(function () {
			

			$("#logout").on("click", function (e) {
				e.preventDefault();
				sessionStorage.removeItem("authToken");
				window.location.href = "http://localhost/sunKnowledge/signin";
			})


			let token = sessionStorage.getItem('authToken');
			let dataObject = {
				limit: "6",
				page: "1"
			}

			
			$.ajax({
				type: "GET",
				url: "http://localhost:8080/ex/employee",
				headers: {
					Authorization: token,
				},
				data: dataObject,
				success: function (response) {
					//$('#exEmployees').html(response?.data.length);
					 graphForSpan(response);
					 exEmployees();
					response?.data.forEach(element => {
						const formattedDateOfExit = element?.dateOfExit ? element.dateOfExit.split('-').reverse().join('-') : '';
						const formattedDateOfNotice = element?.dateOfNotice ? element.dateOfNotice.split('-').reverse().join('-') : '';
						$('tbody').append(`<tr>
										
										<td>
											<div class="d-flex align-items-center">
												<div class="">
													<img src=${JSON.parse(element?.employeeImage) == "" ? "assets/images/avatars/avatar-1.png" : element?.employeeImage} class="rounded-circle"
														width="46" height="46" alt="" />
												</div>
												<div class="ms-2">
													<h6 class="mb-1 font-14" style = "text-transform: capitalize">${element?.name  == null ? "":element?.name}</h6>
													<p class="mb-0 font-13 text-secondary" style = "text-transform: capitalize"> ${element?.skid  == null ? "":element?.skid}</p>
												</div>
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<h6 class="mb-1 font-14" style = "text-transform: capitalize">${element?.designation_name  == null ? "":element?.designation_name}</h6>
											</div>
										</td>
										<td >${element?.spamName == null ? "":element?.spamName}</td>
										<td style = "text-transform: capitalize">${element?.reporting_name == null ? "":element?.reporting_name}</td>
										<td>${formattedDateOfNotice}</td>
										<td>
											${formattedDateOfExit}
										</td>
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

									</tr>`);
					});

				}
			});

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

		//ex-Emloyee By Span
	function graphForSpan(response) { 
		var exEmloyeeBySpan = document
    .getElementById("exEmloyeeBySpan")
    .getContext("2d");
  var myChart = new Chart(exEmloyeeBySpan, {
    type: "bar",
    data: {
      labels: response?.spanName,
      datasets: [
        {
          label: "Number of Employees Broken by Academic Stream",
          data: response?.spanEmployeeCount,
          backgroundColor: ["#ff00005e"],
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
			max: 10,
          beginAtZero: true,
        },
      },
    },
  });
	}

	function exEmployees(){

	var exEmployees = {
    series: [
      {
        name: "Likes",
        data: [14, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5],
      },
    ],
    chart: {
      foreColor: "#9ba7b2",
      height: 180,
      type: "line",
      zoom: {
        enabled: false,
      },
      toolbar: {
        show: true,
      },
      dropShadow: {
        enabled: true,
        top: 3,
        left: 14,
        blur: 4,
        opacity: 0.1,
      },
    },
    stroke: {
      width: 5,
      curve: "smooth",
    },
    xaxis: {
      type: "month",
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "may",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
    },
    title: {
      align: "left",
      style: {
        fontSize: "16px",
        color: "#666",
      },
    },
    fill: {
      type: "gradient",
      gradient: {
        shade: "light",
        gradientToColors: ["#21af0e"],
        shadeIntensity: 1,
        type: "horizontal",
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 100, 100, 100],
      },
    },
    markers: {
      size: 4,
      colors: ["#21af0e"],
      strokeColors: "#fff",
      strokeWidth: 2,
      hover: {
        size: 7,
      },
    },
    colors: ["#000"],
    yaxis: {
      // title: {
      //   text: "Engagement",
      // },
    },
  }
}

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